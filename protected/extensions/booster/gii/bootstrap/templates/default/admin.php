<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Manage',
);\n";
?>

$this->menu=array(
array('label'=>'<i class="glyphicon glyphicon-list"></i> List <?php echo $this->modelClass; ?>','url'=>array('index'),'itemOptions'=>array('class' => 'list-group-item')),
array('label'=>'<i class="glyphicon glyphicon-file"></i> Create <?php echo $this->modelClass; ?>','url'=>array('create'),'itemOptions'=>array('class' => 'list-group-item')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<div class="panel panel-default">
    <div class="panel-heading">Data</div>
    <div class="panel-body">
	<?php echo "<?php"; ?> $this->widget('booster.widgets.TbGridView',array(
		'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
		'dataProvider'=>$model->search(),
		'ajaxUrl' => $this->createUrl('<?php echo $this->class2id($this->modelClass); ?>/admin'),
		'filter'=>$model,
		'enableSorting' => false,
		'columns'=>array(
		<?php
		$count = 0;
		foreach ($this->tableSchema->columns as $column) {
			if (++$count == 7) {
				echo "\t\t/*\n";
			}
			echo "\t\t'" . $column->name . "',\n";
		}
		if ($count >= 7) {
			echo "\t\t*/\n";
		}
		?>
		array(
		'class'=>'booster.widgets.TbButtonColumn',
		),
		),
	)); ?>
    </div>
</div>

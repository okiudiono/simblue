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
	'$label',
);\n";
?>

$this->menu=array(
array('label'=>'<i class="glyphicon glyphicon-file"></i> Create <?php echo $this->modelClass; ?>','url'=>array('create'),'itemOptions'=>array('class' => 'list-group-item')),
array('label'=>'<i class="glyphicon glyphicon-list-alt"></i> Manage <?php echo $this->modelClass; ?>','url'=>array('admin'),'itemOptions'=>array('class' => 'list-group-item')),
);
?>

<?php echo "<?php"; ?> $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

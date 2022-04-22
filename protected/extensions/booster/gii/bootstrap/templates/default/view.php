<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>

$this->menu=array(
array('label'=>'<i class="glyphicon glyphicon-list"></i> List <?php echo $this->modelClass; ?>','url'=>array('index'),'itemOptions'=>array('class' => 'list-group-item')),
array('label'=>'<i class="glyphicon glyphicon-file"></i> Create <?php echo $this->modelClass; ?>','url'=>array('create'),'itemOptions'=>array('class' => 'list-group-item')),
array('label'=>'<i class="glyphicon glyphicon-pencil"></i> Update <?php echo $this->modelClass; ?>','itemOptions'=>array('class' => 'list-group-item'),'url'=>array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
array('label'=>'<i class="glyphicon glyphicon-trash"></i> Delete <?php echo $this->modelClass; ?>','itemOptions'=>array('class' => 'list-group-item'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'<i class="glyphicon glyphicon-list-alt"></i> Manage <?php echo $this->modelClass; ?>','itemOptions'=>array('class' => 'list-group-item'),'url'=>array('admin')),
);
?>
<div class="panel panel-default">
    <div class="panel-heading">View</div>
    <div class="panel-body">
	<?php echo "<?php"; ?> $this->widget('booster.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
		<?php
		foreach ($this->tableSchema->columns as $column) {
			echo "\t\t'" . $column->name . "',\n";
		}
		?>
		),
	)); ?>
    </div>
</div>

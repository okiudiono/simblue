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
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'Update',
);\n";
?>

$this->menu=array(
	array('label'=>'<i class="glyphicon glyphicon-list"></i> List <?php echo $this->modelClass; ?>','url'=>array('index'),'itemOptions'=>array('class' => 'list-group-item')),
	array('label'=>'<i class="glyphicon glyphicon-file"></i> Create <?php echo $this->modelClass; ?>','url'=>array('create'),'itemOptions'=>array('class' => 'list-group-item')),
	array('label'=>'<i class="glyphicon glyphicon-eye-open"></i> View <?php echo $this->modelClass; ?>','itemOptions'=>array('class' => 'list-group-item'),'url'=>array('view','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'<i class="glyphicon glyphicon-list-alt"></i> Manage <?php echo $this->modelClass; ?>','url'=>array('admin'),'itemOptions'=>array('class' => 'list-group-item')),
);
?>
<div class="panel panel-default">
    <div class="panel-heading">Update</div>
    <div class="panel-body">
		<?php echo "<?php echo \$this->renderPartial('_form',array('model'=>\$model)); ?>"; ?>
    </div>
</div>


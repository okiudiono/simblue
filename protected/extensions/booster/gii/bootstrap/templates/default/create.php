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
	'Create',
);\n";
?>

$this->menu=array(
array('label'=>'<i class="glyphicon glyphicon-list"></i> List <?php echo $this->modelClass; ?>','url'=>array('index'),'itemOptions'=>array('class' => 'list-group-item')),
array('label'=>'<i class="glyphicon glyphicon-list-alt"></i> Manage <?php echo $this->modelClass; ?>','url'=>array('admin'),'itemOptions'=>array('class' => 'list-group-item')),
);
?>
<div class="panel panel-default">
    <div class="panel-heading">Create</div>
    <div class="panel-body">
		<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
    </div>
</div>




<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
  	<div class="form-group">
	<?php echo $form->textFieldGroup($model,'username',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255)))); ?> 
	</div> 
 	<p style="font-weight: bold;">Role</p>
			<?php $this->widget(
				'booster.widgets.TbSelect2',
				array(
					'model'=>$model,
					'attribute'=>'role',
					'data' => CHtml::listData(User::model()->getmrole(),'role','role'),
					'options' => array(
						'placeholder' => '- Role -',
						'width' => '100%',
						'class' => 'col-sm-9',
					)
				)
			); ?>  
	<br><br>
	<div class=" buttons">
		<?php $this->widget('booster.widgets.TbButton', array(
					'buttonType'=>'submit',
					'context'=>'primary',
					'id'=>'simpan',
					'label'=>$model->isNewRecord ? 'Create' : 'Save',
				)); ?>
	</div>

<?php $this->endWidget(); ?>

      </div>
    </div>
</div>  
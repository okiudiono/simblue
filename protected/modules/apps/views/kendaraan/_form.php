
<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row"> 
		<div class="col-md-12">
			<div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Identitas Pemilik Kendaraan</div>
		</div>
	    <div class="col-md-12">   	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'namapemilik',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	 
	    		<?php echo $form->textFieldGroup($model,'alamatpemilik',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?>
	    	</div>  
	    </div> 
		<div class="col-md-12">
			<div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative;">Identitas Kendaraan Bermotor </div>
		</div>
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'nouji',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div>  
	    </div>
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'nopol',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'nosrut',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div>  
	    </div>
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<label class="control-label">Tanggal Srut</label>
	    		<?php 
	    		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	    			'model'=>$model,
	    			'attribute'=>'tanggalsrut',
	    			'value'=>$model->tanggalsrut,
  
	    			'options'=>array(
	    				'dateFormat'=>'dd/mm/yy',
	    				'showAnim'=>'fold',
	    				'debug'=>true,

	    				'datepickerOptions'=>array('changeMonth'=>true, 'changeYear'=>true),
	    			),
	    			'htmlOptions'=>array('style'=>'height:35px;','class'=>'form-control','size'=>60,'placeholder'=> 'Tanggalsrut','required'=>'required'),
	    		));
 
	    		?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'norangka',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div>  
	    </div>
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'nomotor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
		<div class="col-md-12">
			<div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Spesifikasi Teknis Kendaraan Bermotor </div>
		</div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'jenis',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'merktipe',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'tahunpembuatan',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'bahanbakar',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'silinder',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'dayamotor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'ukuranban',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'sumbu',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'beratkosong',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'dimensi_panjang',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'dimensi_lebar',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'dimensi_tinggi',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'dimensi_julurdepan',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-4"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'dimensi_julurbelakang',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'sumbu_1',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'sumbu_2',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255)))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'sumbu_3',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255)))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'bak_panjang',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'bak_lebar',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'bak_tinggi',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'jbb',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'jbi_jbki',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'daya_angkut',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div>
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'kelas_jalan',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div> 
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'foh',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div> 
	    <div class="col-md-3"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'roh',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div> 
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'asal_pkb',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div> 
  	</div>
	<br><br>
	<div class=" buttons">
		<?php $this->widget('booster.widgets.TbButton', array(
					'buttonType'=>'submit',
					'context'=>'primary',
					'id'=>'simpan',
					'label'=>$model->isNewRecord ? 'Simpan Data' : 'Save',
				)); ?>
	</div>

<?php $this->endWidget(); ?>
  
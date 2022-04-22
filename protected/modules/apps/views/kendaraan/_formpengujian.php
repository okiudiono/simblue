
<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row"> 
		<div class="col-md-12">
			<div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Foto Tampak Kendaraan</div>
		</div>
	    <div class="col-md-12">   	
	    	<table width="100%" border="0">
	    		<tr>
	    			<td>
	    				<div class="form-group">
	    					<p>Foto Samping Kanan</p>
	    					<input class="input-file" name="new_image_kanan" id="new_image_kanan" type="file" required="required"> 
	    					<img id="blah_kanan" src="<?php echo Yii::app()->request->baseUrl; ?>/file/no-image.png"   width="150" height="120">  
	    				</div>  
	    			</td>
	    			<td>
	    				<div class="form-group">
	    					<p>Foto Samping Kiri</p>
	    					<input class="input-file" name="new_image_kiri" id="new_image_kiri" type="file" required="required"> 
	    					<img id="blah_kiri" src="<?php echo Yii::app()->request->baseUrl; ?>/file/no-image.png"   width="150" height="120">  
	    				</div>  
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<div class="form-group">
	    					<p>Foto   Depan</p>
	    					<input class="input-file" name="new_image_depan" id="new_image_depan" type="file" required="required"> 
	    					<img id="blah_depan" src="<?php echo Yii::app()->request->baseUrl; ?>/file/no-image.png"   width="150" height="120">  
	    				</div>  
	    			</td>
	    			<td>
	    				<div class="form-group">
	    					<p>Foto   Belakang</p>
	    					<input class="input-file" name="new_image_belakang" id="new_image_belakang" type="file" required="required"> 
	    					<img id="blah_belakang" src="<?php echo Yii::app()->request->baseUrl; ?>/file/no-image.png"   width="150" height="120">  
	    				</div>  
	    			</td>
	    		</tr>
	    	</table>  
	    </div> 
		<div class="col-md-12">
			<div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative;">Hasil Uji Kendaraan</div>
		</div>
	    <div class="col-md-6"> 	
	    	<div class="form-group"> 
	    		<p style="font-weight: bold;">Pengujian REM</p>
	    		<?php $this->widget(
	    			'booster.widgets.TbSelect2',
	    			array(
	    				'model'=>$model,
	    				'attribute'=>'uji_rem',
	    				'data' => CHtml::listData(User::model()->gethasiluji(),'id','kategori'),
	    				'options' => array(
	    					'placeholder' => '- Pilih Hasil Pengujian -',
	    					'width' => '100%',
	    					'class' => 'col-sm-9',
	    				),
	    				'htmlOptions'=>array('required'=>'required'),
	    			)
	    		); ?>    
	    	</div>  
	    </div>
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<p style="font-weight: bold;">Pengujian Lampu Utama</p>
	    		<?php $this->widget(
	    			'booster.widgets.TbSelect2',
	    			array(
	    				'model'=>$model,
	    				'attribute'=>'uji_lampu_utama',
	    				'data' => CHtml::listData(User::model()->gethasiluji(),'id','kategori'),
	    				'options' => array(
	    					'placeholder' => '- Pilih Hasil Pengujian -',
	    					'width' => '100%',
	    					'class' => 'col-sm-9',
	    				),
	    				'htmlOptions'=>array('required'=>'required'),
	    			)
	    		); ?>    
	    	</div> 		 
	    </div> 
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<p style="font-weight: bold;">Pengujian Emisi</p>
	    		<?php $this->widget(
	    			'booster.widgets.TbSelect2',
	    			array(
	    				'model'=>$model,
	    				'attribute'=>'uji_emisi',
	    				'data' => CHtml::listData(User::model()->gethasiluji(),'id','kategori'),
	    				'options' => array(
	    					'placeholder' => '- Pilih Hasil Pengujian -',
	    					'width' => '100%',
	    					'class' => 'col-sm-9',
	    				),
	    				'htmlOptions'=>array('required'=>'required'),
	    			)
	    		); ?>     
	    	</div> 		 
	    </div> 
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<label class="control-label">Masa Berlaku Uji</label>
	    		<?php 
	    		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	    			'model'=>$model,
	    			'attribute'=>'masa_berlaku',
	    			'value'=>$model->masa_berlaku,
  
	    			'options'=>array(
	    				'dateFormat'=>'dd/mm/yy',
	    				'showAnim'=>'fold',
	    				'debug'=>true,

	    				'datepickerOptions'=>array('changeMonth'=>true, 'changeYear'=>true),
	    			),
	    			'htmlOptions'=>array('style'=>'height:35px;','class'=>'form-control','size'=>60,'placeholder'=> 'Masa Berlaku Uji','required'=>'required'),
	    		));
 
	    		?> 
	    	</div> 		 
	    </div> 
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<?php echo $form->textFieldGroup($model,'petugas',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','size'=>60,'maxlength'=>255,'required'=>'required')))); ?> 
	    	</div> 		 
	    </div> 
	    <div class="col-md-6"> 	
	    	<div class="form-group">
	    		<label class="control-label">Tanggal Uji</label>
	    		<?php 
	    		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	    			'model'=>$model,
	    			'attribute'=>'tanggal_uji',
	    			'value'=>$model->tanggal_uji,
  
	    			'options'=>array(
	    				'dateFormat'=>'dd/mm/yy',
	    				'showAnim'=>'fold',
	    				'debug'=>true,

	    				'datepickerOptions'=>array('changeMonth'=>true, 'changeYear'=>true),
	    			),
	    			'htmlOptions'=>array('style'=>'height:35px;','class'=>'form-control','size'=>60,'placeholder'=> 'Tanggal Uji','required'=>'required'),
	    		));
 
	    		?> 
	    	</div> 		 
	    </div>   
  	</div>
	<br><br>
	<div class=" buttons">
		<?php $this->widget('booster.widgets.TbButton', array(
					'buttonType'=>'submit',
					'context'=>'primary',
					'id'=>'simpan',
					'label'=>$model->isNewRecord ? 'Simpan Data' : 'Simpan Hasil Pengujian',
				)); ?>
	</div>

<?php $this->endWidget(); ?>
  <script type="text/javascript">
  	
  function readURL_kanan(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#blah_kanan').attr('src', e.target.result); 
      }  
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }

  $("#new_image_kanan").change(function() {
    readURL_kanan(this);
  });

  function readURL_kiri(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#blah_kiri').attr('src', e.target.result); 
      }  
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }
  $("#new_image_kiri").change(function() {
    readURL_kiri(this);
  });


  function readURL_depan(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#blah_depan').attr('src', e.target.result); 
      }  
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }
  $("#new_image_depan").change(function() {
    readURL_depan(this);
  });

  function readURL_belakang(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#blah_belakang').attr('src', e.target.result); 
      }  
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }
  $("#new_image_belakang").change(function() {
    readURL_belakang(this);
  });
  </script>
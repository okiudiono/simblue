<?php
/* @var $this KendaraanController */
/* @var $model Kendaraan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nouji'); ?>
		<?php echo $form->textField($model,'nouji',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nopol'); ?>
		<?php echo $form->textField($model,'nopol',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namapemilik'); ?>
		<?php echo $form->textField($model,'namapemilik',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamatpemilik'); ?>
		<?php echo $form->textField($model,'alamatpemilik',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nosrut'); ?>
		<?php echo $form->textField($model,'nosrut',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggalsrut'); ?>
		<?php echo $form->textField($model,'tanggalsrut',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'norangka'); ?>
		<?php echo $form->textField($model,'norangka',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomotor'); ?>
		<?php echo $form->textField($model,'nomotor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis'); ?>
		<?php echo $form->textField($model,'jenis',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'merktipe'); ?>
		<?php echo $form->textField($model,'merktipe',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahunpembuatan'); ?>
		<?php echo $form->textField($model,'tahunpembuatan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bahanbakar'); ?>
		<?php echo $form->textField($model,'bahanbakar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'silinder'); ?>
		<?php echo $form->textField($model,'silinder',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dayamotor'); ?>
		<?php echo $form->textField($model,'dayamotor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ukuranban'); ?>
		<?php echo $form->textField($model,'ukuranban',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumbu'); ?>
		<?php echo $form->textField($model,'sumbu',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beratkosong'); ?>
		<?php echo $form->textField($model,'beratkosong',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimensi_panjang'); ?>
		<?php echo $form->textField($model,'dimensi_panjang',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimensi_lebar'); ?>
		<?php echo $form->textField($model,'dimensi_lebar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimensi_tinggi'); ?>
		<?php echo $form->textField($model,'dimensi_tinggi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimensi_julurdepan'); ?>
		<?php echo $form->textField($model,'dimensi_julurdepan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimensi_julurbelakang'); ?>
		<?php echo $form->textField($model,'dimensi_julurbelakang',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumbu_1'); ?>
		<?php echo $form->textField($model,'sumbu_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumbu_2'); ?>
		<?php echo $form->textField($model,'sumbu_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumbu_3'); ?>
		<?php echo $form->textField($model,'sumbu_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bak_panjang'); ?>
		<?php echo $form->textField($model,'bak_panjang',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bak_lebar'); ?>
		<?php echo $form->textField($model,'bak_lebar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bak_tinggi'); ?>
		<?php echo $form->textField($model,'bak_tinggi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jbb'); ?>
		<?php echo $form->textField($model,'jbb',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jbi_jbki'); ?>
		<?php echo $form->textField($model,'jbi_jbki',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'daya_angkut'); ?>
		<?php echo $form->textField($model,'daya_angkut',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kelas_jalan'); ?>
		<?php echo $form->textField($model,'kelas_jalan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uji_rem'); ?>
		<?php echo $form->textField($model,'uji_rem',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uji_lampu_utama'); ?>
		<?php echo $form->textField($model,'uji_lampu_utama',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uji_emisi'); ?>
		<?php echo $form->textField($model,'uji_emisi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'masa_berlaku'); ?>
		<?php echo $form->textField($model,'masa_berlaku',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'petugas'); ?>
		<?php echo $form->textField($model,'petugas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
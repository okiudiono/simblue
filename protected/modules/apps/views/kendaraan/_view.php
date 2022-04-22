<?php
/* @var $this KendaraanController */
/* @var $data Kendaraan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nouji')); ?>:</b>
	<?php echo CHtml::encode($data->nouji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nopol')); ?>:</b>
	<?php echo CHtml::encode($data->nopol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namapemilik')); ?>:</b>
	<?php echo CHtml::encode($data->namapemilik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamatpemilik')); ?>:</b>
	<?php echo CHtml::encode($data->alamatpemilik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nosrut')); ?>:</b>
	<?php echo CHtml::encode($data->nosrut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggalsrut')); ?>:</b>
	<?php echo CHtml::encode($data->tanggalsrut); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('norangka')); ?>:</b>
	<?php echo CHtml::encode($data->norangka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomotor')); ?>:</b>
	<?php echo CHtml::encode($data->nomotor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merktipe')); ?>:</b>
	<?php echo CHtml::encode($data->merktipe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahunpembuatan')); ?>:</b>
	<?php echo CHtml::encode($data->tahunpembuatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bahanbakar')); ?>:</b>
	<?php echo CHtml::encode($data->bahanbakar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('silinder')); ?>:</b>
	<?php echo CHtml::encode($data->silinder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dayamotor')); ?>:</b>
	<?php echo CHtml::encode($data->dayamotor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ukuranban')); ?>:</b>
	<?php echo CHtml::encode($data->ukuranban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumbu')); ?>:</b>
	<?php echo CHtml::encode($data->sumbu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beratkosong')); ?>:</b>
	<?php echo CHtml::encode($data->beratkosong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensi_panjang')); ?>:</b>
	<?php echo CHtml::encode($data->dimensi_panjang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensi_lebar')); ?>:</b>
	<?php echo CHtml::encode($data->dimensi_lebar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensi_tinggi')); ?>:</b>
	<?php echo CHtml::encode($data->dimensi_tinggi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensi_julurdepan')); ?>:</b>
	<?php echo CHtml::encode($data->dimensi_julurdepan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensi_julurbelakang')); ?>:</b>
	<?php echo CHtml::encode($data->dimensi_julurbelakang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumbu_1')); ?>:</b>
	<?php echo CHtml::encode($data->sumbu_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumbu_2')); ?>:</b>
	<?php echo CHtml::encode($data->sumbu_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumbu_3')); ?>:</b>
	<?php echo CHtml::encode($data->sumbu_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bak_panjang')); ?>:</b>
	<?php echo CHtml::encode($data->bak_panjang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bak_lebar')); ?>:</b>
	<?php echo CHtml::encode($data->bak_lebar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bak_tinggi')); ?>:</b>
	<?php echo CHtml::encode($data->bak_tinggi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jbb')); ?>:</b>
	<?php echo CHtml::encode($data->jbb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jbi_jbki')); ?>:</b>
	<?php echo CHtml::encode($data->jbi_jbki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('daya_angkut')); ?>:</b>
	<?php echo CHtml::encode($data->daya_angkut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelas_jalan')); ?>:</b>
	<?php echo CHtml::encode($data->kelas_jalan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uji_rem')); ?>:</b>
	<?php echo CHtml::encode($data->uji_rem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uji_lampu_utama')); ?>:</b>
	<?php echo CHtml::encode($data->uji_lampu_utama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uji_emisi')); ?>:</b>
	<?php echo CHtml::encode($data->uji_emisi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masa_berlaku')); ?>:</b>
	<?php echo CHtml::encode($data->masa_berlaku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('petugas')); ?>:</b>
	<?php echo CHtml::encode($data->petugas); ?>
	<br />

	*/ ?>

</div>
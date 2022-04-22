<section class="content"> 
  <div class="row">  
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <div class="box box-success">
        <div class="box-header "> 
          <h3 class="box-title">Data Kendaraan dan Pengujian </h3>
          <div class="box-tools pull-right">
            <a href="/simblue/apps" type="button" class="btn bg-yellow btn-flat margin"> <li class="fa fa-home"></li> Home</a> 
            <a href="/simblue/apps/kendaraan/create" type="button" class="btn bg-blue btn-flat margin"> <li class="fa fa-plus-square"></li> Tambah</a> 
          </div> 
        </div> 
        <div class="box-body">  
          <div class="row">    
             <div class="col-md-12">
            <?php $this->widget('booster.widgets.TbGridView', array(
              'id'=>'kendaraan-grid',
              'dataProvider'=>$model->search(),
              'filter'=>$model,
              'columns'=>array(
                array(
                  'header'=> 'nouji',
                  'name'  => 'nouji',
                  'value' => '$data["nouji"]',
                  'filter'=> CHtml::activeTextField($model, 'nouji',array('class'=>'form-control')),
                ), 
                array(
                  'header'=> 'nopol',
                  'name'  => 'nopol',
                  'value' => '$data["nopol"]',
                  'filter'=> CHtml::activeTextField($model, 'nopol',array('class'=>'form-control')),
                ),  
                array(
                  'header'=> 'namapemilik',
                  'name'  => 'namapemilik',
                  'value' => '$data["namapemilik"]',
                  'filter'=> CHtml::activeTextField($model, 'namapemilik',array('class'=>'form-control')),
                ),     
                array(
                  'header'=> 'alamatpemilik',
                  'name'  => 'alamatpemilik',
                  'value' => '$data["alamatpemilik"]',
                  'filter'=> CHtml::activeTextField($model, 'alamatpemilik',array('class'=>'form-control')),
                ),  
                array(
                  'header'=> 'nosrut',
                  'name'  => 'nosrut',
                  'value' => '$data["nosrut"]',
                  'filter'=> CHtml::activeTextField($model, 'nosrut',array('class'=>'form-control')),
                ),  
                array(
                  'header'=> 'petugas',
                  'name'  => 'petugas',
                  'value' => '$data["petugas"]',
                  'filter'=> CHtml::activeTextField($model, 'petugas',array('class'=>'form-control')),
                ),  
                array(
                  'header'=> 'uji_rem',
                  'name'  => 'uji_rem',
                  'type'  => 'raw',
                  'value' => '$data["uji_rem"]',
                  'value' => 'Kendaraan::getstatus($data["uji_rem"])',
                  'filter'=> CHtml::activeTextField($model, 'uji_rem',array('class'=>'form-control')),
                ),  
                array(
                  'header'=> 'uji_lampu_utama',
                  'name'  => 'uji_lampu_utama',
                  'type'  => 'raw', 
                  'value' => 'Kendaraan::getstatus($data["uji_lampu_utama"])',
                  'filter'=> CHtml::activeTextField($model, 'uji_lampu_utama',array('class'=>'form-control')),
                ),  
                array(
                  'header'=> 'uji_emisi',
                  'name'  => 'uji_emisi',
                  'type'  => 'raw', 
                  'value' => 'Kendaraan::getstatus($data["uji_emisi"])',
                  'filter'=> CHtml::activeTextField($model, 'uji_emisi',array('class'=>'form-control')),
                ),  
                array(
                  'header' => '',
                  'type'=>'raw',
                  'value'=>'"<a class=\"view\" title=\"\" data-toggle=\"tooltip\" href='.$this->createUrl("kendaraan/view/id").'/$data[id] data-original-title=\"View\"><i class=\"glyphicon glyphicon-search\"></i></a>&nbsp;
                  <a class=\"update\" title=\"\" data-toggle=\"tooltip\" href='.$this->createUrl("kendaraan/update/id").'/$data[id] data-original-title=\"Update\"><i class=\"glyphicon glyphicon-pencil\"></i></a>&nbsp;
                  <a class=\"delete\" title=\"\" data-toggle=\"tooltip\" href='.$this->createUrl("kendaraan/delete/id").'/$data[id] data-original-title=\"Delete\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                  "',                 
                  'htmlOptions'=>array('class'=>'button-column','style'=>'width:100px;')
                ),
              ),
            )); ?>
          </div>
          </div>
        </div> 
      </div> 
    </div> 
    <div class="col-md-1">
    </div>
  </div>  
</section>   
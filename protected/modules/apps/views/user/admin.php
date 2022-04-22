<section class="content"> 
  <div class="row">  
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <div class="box box-success">
        <div class="box-header "> 
          <h3 class="box-title">Data User </h3>
          <div class="box-tools pull-right">
            <a href="/simblue/apps" type="button" class="btn bg-yellow btn-flat margin"> <li class="fa fa-home"></li> Home</a> 
            <a href="/simblue/apps/user/create" type="button" class="btn bg-blue btn-flat margin"> <li class="fa fa-plus-square"></li> Tambah</a> 
          </div> 
        </div> 
        <div class="box-body">  
          <div class="row">    
             <div class="col-md-12">
            <?php $this->widget('booster.widgets.TbGridView', array(
              'id'=>'user-grid',
              'dataProvider'=>$model->search(),
              'filter'=>$model,
              'columns'=>array(
                array(
                  'header'=> 'ID',
                  'name'  => 'id',
                  'value' => '$data["id"]',
                  'filter'=> CHtml::activeTextField($model, 'id',array('class'=>'form-control')),
                ), 
                array(
                  'header'=> 'username',
                  'name'  => 'username',
                  'value' => '$data["username"]',
                  'filter'=> CHtml::activeTextField($model, 'username',array('class'=>'form-control')),
                ),  
                array(
                  'header'=> 'role',
                  'name'  => 'role',
                  'value' => '$data["role"]',
                  'filter'=> CHtml::activeTextField($model, 'role',array('class'=>'form-control')),
                ),   
                array(
                  'header' => '',
                  'type'=>'raw',
                  'value'=>'"<a class=\"view\" title=\"\" data-toggle=\"tooltip\" href='.$this->createUrl("user/view/id").'/$data[id] data-original-title=\"View\"><i class=\"glyphicon glyphicon-search\"></i></a>&nbsp;
                  <a class=\"update\" title=\"\" data-toggle=\"tooltip\" href='.$this->createUrl("user/update/id").'/$data[id] data-original-title=\"Update\"><i class=\"glyphicon glyphicon-pencil\"></i></a>&nbsp;
                  <a class=\"delete\" title=\"\" data-toggle=\"tooltip\" href='.$this->createUrl("user/delete/id").'/$data[id] data-original-title=\"Delete\"><i class=\"glyphicon glyphicon-trash\"></i></a>
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
    <div class="col-md-2">
    </div>
  </div>  
</section>   
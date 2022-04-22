 <?php Yii::app()->getClientScript()->registerCoreScript('jquery'); ?>
  <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
      'validateOnSubmit'=>true,
    ),
    'htmlOptions'=>array(
      'class'=>'pt-3',
    ),
  )); ?> 
 <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
              <div class="text w-100"> 
                <h2> SIM BLU-e</h2>
                <p>Copyright © Sim BLue 2022 All rights reserved.</p> 
              </div>
            </div>
            <div class="login-wrap p-4 p-lg-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Login Sistem</h3>
                </div>
                <!-- <div class="w-100">
                  <p class="social-media d-flex justify-content-end">
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                  </p>
                </div> -->
              </div>
              <form action="#" class="signin-form">
                <div class="form-group mb-3">
                  <label class="label" for="name">Username</label>
                  <!-- <input type="text" class="form-control" placeholder="Username" required> -->
                  <?php echo $form->textField($model,'username',
                  array(
                    'class'=>'form-control form-control-lg border-left-0',
                    'maxlength'=>'50',
                    'placeholder'=>'Username'
                  )
                ); ?>  
                <?php echo "<font color='red'>".$form->error($model,'username')."</font>"; ?>&nbsp; 
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="password">Password</label>
                  <!-- <input type="password" class="form-control" placeholder="Password" required> -->
                   <?php echo $form->passwordField($model,'password',
                    array(
                      'class'=>'form-control form-control-lg border-left-0',
                      'placeholder'=>'Password'
                    )
                  ); ?>  
                  <?php echo "<font color='red'>".$form->error($model,'password')."</font>"; ?>&nbsp;  
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary submit px-3">LOGIN</button>
                </div>
                <!-- <div class="form-group d-md-flex">
                  <div class="w-50 text-left">
                    <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#">Forgot Password</a>
                  </div>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>  
<?php $this->endWidget(); ?> 
 
 
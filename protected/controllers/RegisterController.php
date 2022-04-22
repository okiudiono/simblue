<?php

class RegisterController extends Controller
{
	public $layout='//layouts/register'; 
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{ 
		if(isset($_POST['email'])){
			 $model  = new User; 
			 $posts  = Yii::app()->db->createCommand("SELECT * FROM siapkersada.user WHERE email  =  '".$_POST['email']."'")->queryRow();
			 if(!empty($posts)){

			 	Yii::app()->user->setFlash('gagal','<b>DATA GAGAL TERSIMPAN. EMAIL SUDAH DIGUNAKAN.</b>');  
				$this->redirect('./index');
			 	die();
			 }

			$nexid  = Yii::app()->db->createCommand("SELECT max(id) FROM siapkersada.user")->queryScalar();
			$nwod = $nexid +1; 
			$email  		= $_POST['email'];
			$notelp  		= $_POST['no_telp'];
			$password  		= $_POST['password'];
			$encrip         = $model->hashPassword($password); 
			$un_password  	= $_POST['kon_password'];

			$insert =  Yii::app()->db->createCommand()->insert('siapkersada.user', array(
					'id' 		=> ''.$nwod.'',
				    'notelp' 	=> ''.$notelp.'',
				    'email' 	=> ''.$email.'',
				    'password' 	=> ''.$encrip.'',
				    'un_password' => ''.$un_password.'',
			));

			if($insert){
				$this->redirect('./end');
			} 
		}
		 $this->render('index'); 
	}
	public function actionEnd()
	{
		 $this->render('end'); 
	} 
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
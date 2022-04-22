<?php

class LoginController extends Controller
{
	public $layout='//layouts/login'; 
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
		
		$model=new LoginForm;
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		if(isset($_POST['LoginForm']))
		{ 
			// print_r($_POST);
			// die();
			$model->attributes=$_POST['LoginForm'];  
			if($model->validate() && $model->login()){
				// echo "string"; 
				// die();
				$this->redirect(array('/apps'));  
			}  
		}

		if(Yii::app()->user->isGuest)
		{	
			$this->render('index',array('model'=>$model));
		}
		else
		{
			// var_dump('eweew');
			// die();
			// $nik	= Yii::app()->user->getState('nik'); 
			$this->render('index',array('model'=>$model));
		}
		 
	}
  
	public function actionError()
	{
		//$this->layout='//layouts/errorPage';
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				switch($error['code'])
				{
					case 404:
						$this->render('/errorPage/404', $error);
						break;
					case 403:
						$this->render('/errorPage/403', $error);
						break;
					case 500:
						$this->render('/errorPage/500', $error);
						break;
					default:
						//$this->render('/errorPage/default', $error);	
						$this->render('error', $error);
						break;
				}
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
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
<?php
class DefaultController extends   Controller
{
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	public function accessRules()
	{
		if (Yii::app()->user->getState('role') == "operator" || Yii::app()->user->getState('role') == "super-admin-blue") {
			$arr = array('index');   // give all access to admin
		} else {
			$arr = array('/login');          //  no access to other user
		}

		return array(
			array(
				'allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions' => $arr,
				'users' => array('@'),
			),
			array(
				'deny',  // deny all users
				'users' => array('*'),
			),
		);
	}


	public function actionIndex()
	{ 
		$this->render('index' );
	}  
}

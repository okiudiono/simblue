<?php

class LogoutController extends Controller
{
	public function actionIndex()
	{
		/*$logs=new Logs;
		$logs->setAttributes(array(
			'username' => Yii::app()->user->name,
			'nama' => Yii::app()->user->getState('nama_pengguna'),
			'waktu' => date("d-m-Y, H:i:s"),
			'module' => 'logout',
			'action' => Yii::app()->controller->id,
			'ipaddress' => $_SERVER['REMOTE_ADDR'],
		),false);	
		$logs->save();*/
		Yii::app()->session->clear();
		Yii::app()->session->destroy() ;
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
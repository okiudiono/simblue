<?php

class ChangepasswordController extends Controller
{

	public function actionIndex()
	{
		$this->layout='//layouts/change';

		$username    = Yii::app()->user->username;
		$model       = Auth::model()->find("username='".$username."'");
		$model->password="";
		if(isset($_POST['Auth']))
		{
			if($_POST['Auth']['password']==$_POST['Auth']['repassword']):
				$password=$model->hashPassword($_POST['Auth']['password']);
				$model->setAttributes(array(
					'username'=>$username,
					'password'=>$password
				),false);				
				$model->save();
				echo"<script>alert('Password anda berhasil di ubah, Anda akan logout secara otomatis. Terimakasih.');window.location='".Yii::app()->baseUrl.'/logout'."'</script>";
			else:
				echo"<script>alert('Password yang anda ulangi tidak sesuai, silahkan ulangi.');</script>";
			endif;
		}
		$this->render('index',array('model'=>$model));
	}

}
<?php

class KendaraanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
		);
	} 
	public function accessRules()
	{
		if (Yii::app()->user->getState('role') == "operator" || Yii::app()->user->getState('role') == "super-admin-blue") {
			$arr = array('index','pengujian','create','delete');   // give all access to admin
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionPengujian($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Kendaraan']))
		{ 

			$target_dir 	= './static/';   

			$path_kanan		= pathinfo(basename($_FILES["new_image_kanan"]["name"]));
			// print_r($path_kanan);
			// die();
			$path_kiri		= pathinfo(basename($_FILES["new_image_kiri"]["name"]));
			$path_depan		= pathinfo(basename($_FILES["new_image_depan"]["name"]));
			$path_belakang	= pathinfo(basename($_FILES["new_image_belakang"]["name"]));

			//kanan---
			$file_kanan			= 'kanan_'.date("dmyhis").uniqid().rand(1000, 2000).'.' . $path_kanan['extension'];
			$target_file_kanan 	= $target_dir . $file_kanan;
			$move_kanan			= move_uploaded_file($_FILES["new_image_kanan"]["tmp_name"], $target_file_kanan);

			//kiri---
			$file_kiri			= 'kiri_'.date("dmyhis").uniqid().rand(1000, 2000).'.' . $path_kiri['extension'];
			$target_file_kiri 	= $target_dir . $file_kiri;
			$move_kiri			= move_uploaded_file($_FILES["new_image_kiri"]["tmp_name"], $target_file_kiri);

			//depan---
			$file_depan			= 'kiri_'.date("dmyhis").uniqid().rand(1000, 2000).'.' . $path_depan['extension'];
			$target_file_depan 	= $target_dir . $file_depan;
			$move_depan			= move_uploaded_file($_FILES["new_image_depan"]["tmp_name"], $target_file_depan);
			
			//belakang---
			$file_belakang		    = 'kiri_'.date("dmyhis").uniqid().rand(1000, 2000).'.' . $path_belakang['extension'];
			$target_file_belakang 	= $target_dir . $file_belakang;
			$move_belakang		    = move_uploaded_file($_FILES["new_image_belakang"]["tmp_name"], $target_file_belakang);


			$model->attributes=$_POST['Kendaraan'];
			$model->uji_rem=$_POST['Kendaraan']['uji_rem'];
			$model->uji_lampu_utama=$_POST['Kendaraan']['uji_lampu_utama'];
			$model->uji_emisi=$_POST['Kendaraan']['uji_emisi'];
			$model->masa_berlaku=$_POST['Kendaraan']['masa_berlaku'];
			$model->petugas=$_POST['Kendaraan']['petugas'];
			$model->tanggal_uji=$_POST['Kendaraan']['tanggal_uji'];
			$model->foto_kanan=$file_kanan;
			$model->foto_kiri=$file_kiri;
			$model->foto_depan=$file_depan;
			$model->foto_belakang=$file_belakang;
			
			if($model->save())
				$this->redirect(array('index'));
		}
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Kendaraan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kendaraan']))
		{
			$model->attributes=$_POST['Kendaraan'];

			$model->foh=$_POST['Kendaraan']['foh'];
			$model->roh=$_POST['Kendaraan']['roh'];
			$model->asal_pkb=$_POST['Kendaraan']['asal_pkb'];
			if($model->save())
				$this->redirect(array('pengujian','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kendaraan']))
		{
			$model->attributes=$_POST['Kendaraan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	} 
	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new Kendaraan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kendaraan']))
			$model->attributes=$_GET['Kendaraan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Kendaraan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Kendaraan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Kendaraan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kendaraan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

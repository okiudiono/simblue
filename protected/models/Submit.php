<?php

class Submit extends CActiveRecord
{

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getDbConnection()
	{
		return Yii::app()->db;
	}

	public function tableName()
	{
		return 'mudik.m_utama';
	}

	public function dbupdate($table, $val=array(), $where, $id){
			$isi = false;
			foreach ($val as $key => $value){
				$isi .= $key ."='". $value ."', ";
			}
			$isi .= "where ". $where."='". $id ."'";
			$newIsi = str_replace (", where", " where", $isi);
			$newQuery = "UPDATE ". $table ." SET ". $newIsi;
			Yii::app()->db->createCommand($newQuery)->execute(); 
			return true;
	}

	public function dbinsert($table, $val=array()){
			$vkl = array_values($val);
			$amn = "'". implode("', '", $vkl) ."'";
			$newQuery = "INSERT INTO ". $table ." (".implode(", ", array_keys($val)).") VALUES (".$amn.") ";
			Yii::app()->db->createCommand($newQuery)->execute(); 
			return true;
	}

	public function validasi_file($kj=false){
		 $ijijn = array('jpg' => 'jpg', 'JPG' => 'JPG', 'png' => 'png', 'PNG' => 'PNG', 'jpeg'=>'jpeg', 'JPEG'=>'JPEG', 'pdf'=>'pdf', 'PDF'=>'PDF');
		if($kj == true){
			return $ijijn[$kj];
		}else{
			return $ijijn;
		}
	}

	public function ambilAllNegara()
	{
		$sql 	= "SELECT * FROM mudik.tm_negara WHERE id IS NOT NULL ORDER BY negara";
		$data 	= Yii::app()->db->createCommand($sql)->queryAll();
		return $data;		
	}

	public function ambilAllProvinsi()
	{
		$sql 	= "SELECT * FROM mudik.tm_provinsi WHERE id IS NOT NULL ORDER BY provinsi";
		$data 	= Yii::app()->db->createCommand($sql)->queryAll();
		return $data;		
	}

	public function ambilAllKabupaten()
	{
		$sql 	= "SELECT * FROM mudik.tm_kabupaten WHERE id::text ILIKE '3302' ORDER BY kabupaten";
		$data 	= Yii::app()->db->createCommand($sql)->queryAll();
		return $data;		
	}

	public function ambilAllKecamatan()
	{
		$sql 	= "SELECT * FROM mudik.tm_kecamatan WHERE id::text ILIKE '3302%' ORDER BY kecamatan";
		$data 	= Yii::app()->db->createCommand($sql)->queryAll();
		return $data;		
	}

	public function ambilAllDesa()
	{
		$sql 	= "SELECT * FROM mudik.tm_desa WHERE id::text ILIKE '3302%' ORDER BY desa";
		$data 	= Yii::app()->db->createCommand($sql)->queryAll();
		return $data;		
	}

	public function findKabupaten($prov)
	{
		$sql 	= "SELECT * FROM mudik.tm_kabupaten WHERE id::text ILIKE '$prov%' ORDER BY kabupaten";
		$data 	= Yii::app()->db->createCommand($sql)->queryAll();
		return $data;		
	}

	public function findKecamatan($kab)
	{
		$sql 	= "SELECT * FROM mudik.tm_kecamatan WHERE id::text ILIKE '$kab%' ORDER BY kecamatan";
		$data 	= Yii::app()->db->createCommand($sql)->queryAll();
		return $data;		
	}

	public function findDesa($kec)
	{
		$sql 	= "SELECT * FROM mudik.tm_desa WHERE id::text ILIKE '$kec%' ORDER BY desa";
		$data 	= Yii::app()->db->createCommand($sql)->queryAll();
		return $data;		
	}

	public function idlocByName($table, $kolom, $nama)
	{
		$sql 	= "SELECT id FROM mudik.$table WHERE $kolom::text ILIKE '".$nama."%' ORDER BY $kolom";
		$data 	= Yii::app()->db->createCommand($sql)->queryScalar();
		return $data;		
	}

	public function cekdatanik($nik)
	{
		$sql 	= "SELECT COUNT(nik) FROM mudik.m_utama WHERE nik = '".$nik."'";
		$data 	= Yii::app()->db->createCommand($sql)->queryScalar();
		if ($data > 0) {
			return 'ada';
		}else{
			return 'kosong';
		}	
	}

}
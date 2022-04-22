<?php

/**
 * This is the model class for table "sumpiuh.tm_bidang".
 *
 * The followings are the available columns in table 'sumpiuh.tm_bidang':
 * @property string $kode_bidang
 * @property string $kode_urusan
 * @property string $nama_bidang
 *
 * The followings are the available model relations:
 * @property TmProgram[] $tmPrograms
 */
class Data extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'siapkersada.kategori';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_bidang, nama_bidang', 'required'),
			array('kode_urusan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode_bidang, kode_urusan, nama_bidang', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tmPrograms' => array(self::HAS_MANY, 'TmProgram', 'kode_bidang'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_bidang' => 'Kode Bidang',
			'kode_urusan' => 'Kode Urusan',
			'nama_bidang' => 'Nama Bidang',
		);
	}
 

	 public function dataall()
    {

        $a = '';
        $b = ''; 
        $c = ''; 

        if (!empty($_GET['s_nama'])) {
            $a = " AND lower(nm_orang::text) ILIKE '%" . strtolower($_GET['s_nama']) . "%'";
        }
        if (!empty($_GET['s_nik'])) {
            $b = " AND lower(nik::text) ILIKE '%" . strtolower($_GET['s_nik']) . "%'";
        } 
        if (!empty($_GET['s_area'])) {
            $c = " AND lower(area::text) ILIKE '%" . strtolower($_GET['s_area']) . "%'";
        } 

        $sp = '';

        $lim = 10;
        $pag = 1;

        //Keperluan untuk pagging
        if (!empty($_GET['page'])) {
            $pag = $_GET['page'];
        }
        if (!empty($_GET['limit'])) {
            $lim = $_GET['limit'];
        }

        $on = ($pag - 1) * $lim;

        if(Yii::app()->user->getState('username') == 'admin'){
        	$wger = "";
        }else{
        	$wger = " AND id_user = '" .Yii::app()->user->getState('iduser'). "'";
        }

        $sql    = "SELECT    
                    *
                    FROM siapkersada.view_data  
                WHERE   id IS NOT NULL  $wger $a $b $c ORDER BY nama ASC LIMIT $lim OFFSET $on";
        $posts  = Yii::app()->db->createCommand($sql)->queryAll();

        return $posts;
    }

    public function countdata()
    {
        $a = '';
        $b = ''; 
        $c = ''; 
        

        if (!empty($_GET['s_nama'])) {
            $a = " AND lower(nm_orang::text) ILIKE '%" . strtolower($_GET['s_nama']) . "%'";
        }
        if (!empty($_GET['s_nik'])) {
            $b = " AND lower(nik::text) ILIKE '%" . strtolower($_GET['s_nik']) . "%'";
        } 
        if (!empty($_GET['s_area'])) {
            $c = " AND lower(area::text) ILIKE '%" . strtolower($_GET['s_area']) . "%'";
        } 


        $sp = '';

        if(Yii::app()->user->getState('username') == 'admin'){
        	$wger = "";
        }else{
        	$wger = " AND id_user = '" .Yii::app()->user->getState('iduser'). "'";
        }

        $sql    = "SELECT    
                    *
                    FROM siapkersada.view_data    
                WHERE  id IS NOT NULL $wger $a $b $c ORDER BY nama ASC ";
        $posts  = Yii::app()->db->createCommand($sql)->queryAll();

        return $posts;
    }

	
 	function status($id)
 	{ 
 		if($id == 't'){
 			$stts = '<span class="badge badge-danger">Tidak Lengkap</span>';
 		} 
 		elseif($id == 'y'){
 			$stts = '<span class="badge badge-success">Lengkap</span>';
 		} else{ 
 			$stts = '<h5><span class="badge badge-secondary">Proses Verifikasi</span></h5>'; 
 		}
		return $stts;
	} 


	public function getonedata($id)
    { 

        $sql    = "SELECT    
                    *
                    FROM siapkersada.view_data  
                WHERE   id  =".$id."";
        $posts  = Yii::app()->db->createCommand($sql)->queryRow();

        return $posts;
    }

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->db;
	}
	public function getkategori()
	{
		$data  = Yii::app()->db->createCommand("SELECT * FROM siapkersada.kategori")->queryAll();
		return $data;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bidang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

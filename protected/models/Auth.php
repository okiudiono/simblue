<?php

/**
 * This is the model class for table "TD_USER".
 *
 * The followings are the available columns in table 'TD_USER':
 * @property double $ID
 * @property double $ID_GRUP_USER
 * @property string $USERNAME
 * @property string $PASSWORD
 *
 * The followings are the available model relations:
 * @property REFGRUPUSER $iDGRUPUSER
 */
class Auth extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Auth the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sumpiuh.tm_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, nama_lengkap, kode_opd', 'required'),
			array('kode_opd', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>5),
			array('role, jabatan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('username, password, nama_lengkap, kode_opd, role, jabatan, status', 'safe', 'on'=>'search'),
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
			'kodeOpd' => array(self::BELONGS_TO, 'TmOpd', 'kode_opd'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'username' => 'Username',
			'password' => 'Password',
			'nama_lengkap' => 'Nama Lengkap',
			'kode_opd' => 'Kode Opd',
			'role' => 'Role',
			'jabatan' => 'Jabatan',
			'status' => 'Status',
		);
	}


	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('kode_opd',$this->kode_opd);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('jabatan',$this->jabatan,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function validatePassword($password)
	{
		return crypt($password,$this->password)===$this->password;
	}

	public function getMaxUser()
	{
		$command=Yii::app()->sumpiuh_db;
		$max=$command->createCommand('SELECT max(id) AS maksimal FROM masterdata.user')->queryScalar();
		$max++;
		return $max;
	}	

	public static function getDataUser($username)
	{
		$command=Yii::app()->sumpiuh_db;
		$result=$command->createCommand("SELECT nama_lengkap, jabatan FROM masterdata.v_users WHERE username='".$username."'")->queryRow();
		return $result;
	}	

	public function getDataID($username)
	{
		$command=Yii::app()->sumpiuh_db;
		$result=$command->createCommand("SELECT id FROM masterdata.user WHERE username='".$username."'")->queryScalar();
		return $result;
	}			

	public function hashPassword($password)
	{
		return crypt($password, $this->generateSalt());
	}

	protected function generateSalt($cost=10)
	{
		if(!is_numeric($cost)||$cost<4||$cost>31){
			throw new CException(Yii::t('Cost parameter must be between 4 and 31.'));
		}
		$rand='';
		for($i=0;$i<8;++$i)
			$rand.=pack('S',mt_rand(0,0xffff));
		$rand.=microtime();
		$rand=sha1($rand,true);
		$salt='$2a$'.str_pad((int)$cost,2,'0',STR_PAD_RIGHT).'$';
		$salt.=strtr(substr(base64_encode($rand),0,22),array('+'=>'.'));
		return $salt;
	}	
	
}
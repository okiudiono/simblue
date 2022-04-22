<?php

/**
 * This is the model class for table "m_user".
 *
 * The followings are the available columns in table 'm_user':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $notelp
 * @property string $role
 * @property string $is_active
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password', 'length', 'max'=>100),
			array('nama, notelp, role', 'length', 'max'=>255),
			array('is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, nama, notelp, role, is_active', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'nama' => 'Nama',
			'notelp' => 'Notelp',
			'role' => 'Role',
			'is_active' => 'Is Active',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('notelp',$this->notelp,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('is_active',$this->is_active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */

	public function validatePassword($password)
	{
		return crypt($password,$this->password)===$this->password;
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
	public function getmrole()
    { 

        $sql    = "SELECT    
                    *
                    FROM m_role";
        $posts  = Yii::app()->db->createCommand($sql)->queryAll();

        return $posts;
    }
	public function gethasiluji()
    { 

        $sql    = "SELECT    
                    *
                    FROM m_hasiluji";
        $posts  = Yii::app()->db->createCommand($sql)->queryAll();

        return $posts;
    }
	public function getmkendaraan()
    { 
    	$data ="";
    	if(!empty($_GET['nouji'])){
    		$data = "and nouji = '".$_GET['nouji']."'";
    	}
    	if(!empty($_GET['nopol'])){
    		$data .= "and nopol = '".$_GET['nopol']."'";
    	}
        $sql    = "SELECT    
                    *
                    FROM m_kendaraan 
                    WHERE id is not null $data";
        $posts  = Yii::app()->db->createCommand($sql)->queryRow();

        return $posts;
    }
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

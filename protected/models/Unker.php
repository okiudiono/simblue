<?php

/**
 * This is the model class for table "master.unker".
 *
 * The followings are the available columns in table 'master.unker':
 * @property string $kode
 * @property string $unker
 * @property string $singkatan
 * @property string $alamat
 * @property string $telepon
 * @property string $fax
 * @property string $kode_pos
 * @property string $email
 * @property string $website
 * @property string $telex
 * @property string $parent
 * @property string $sort
 * @property string $folder
 * @property string $bidang
 * @property string $stempel
 * @property string $kode_bkd
 * @property string $kode_lppd
 * @property string $flag
 * @property string $kode_unker_90
 */
class Unker extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'master.unker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode', 'required'),
			array('kode, unker, singkatan, alamat, telepon, fax, kode_pos, email, website, telex, parent, sort, folder, bidang, stempel, kode_bkd, kode_lppd, flag, kode_unker_90', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode, unker, singkatan, alamat, telepon, fax, kode_pos, email, website, telex, parent, sort, folder, bidang, stempel, kode_bkd, kode_lppd, flag, kode_unker_90', 'safe', 'on'=>'search'),
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
			'kode' => 'Kode',
			'unker' => 'Unker',
			'singkatan' => 'Singkatan',
			'alamat' => 'Alamat',
			'telepon' => 'Telepon',
			'fax' => 'Fax',
			'kode_pos' => 'Kode Pos',
			'email' => 'Email',
			'website' => 'Website',
			'telex' => 'Telex',
			'parent' => 'Parent',
			'sort' => 'Sort',
			'folder' => 'Folder',
			'bidang' => 'Bidang',
			'stempel' => 'Stempel',
			'kode_bkd' => 'Kode Bkd',
			'kode_lppd' => 'Kode Lppd',
			'flag' => 'Flag',
			'kode_unker_90' => 'Kode Unker 90',
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

		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('unker',$this->unker,true);
		$criteria->compare('singkatan',$this->singkatan,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('kode_pos',$this->kode_pos,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('telex',$this->telex,true);
		$criteria->compare('parent',$this->parent,true);
		$criteria->compare('sort',$this->sort,true);
		$criteria->compare('folder',$this->folder,true);
		$criteria->compare('bidang',$this->bidang,true);
		$criteria->compare('stempel',$this->stempel,true);
		$criteria->compare('kode_bkd',$this->kode_bkd,true);
		$criteria->compare('kode_lppd',$this->kode_lppd,true);
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('kode_unker_90',$this->kode_unker_90,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Unker the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

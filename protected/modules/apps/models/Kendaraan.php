<?php

/**
 * This is the model class for table "m_kendaraan".
 *
 * The followings are the available columns in table 'm_kendaraan':
 * @property string $id
 * @property string $nouji
 * @property string $nopol
 * @property string $namapemilik
 * @property string $alamatpemilik
 * @property string $nosrut
 * @property string $tanggalsrut
 * @property string $norangka
 * @property string $nomotor
 * @property string $jenis
 * @property string $merktipe
 * @property string $tahunpembuatan
 * @property string $bahanbakar
 * @property string $silinder
 * @property string $dayamotor
 * @property string $ukuranban
 * @property string $sumbu
 * @property string $beratkosong
 * @property string $dimensi_panjang
 * @property string $dimensi_lebar
 * @property string $dimensi_tinggi
 * @property string $dimensi_julurdepan
 * @property string $dimensi_julurbelakang
 * @property string $sumbu_1
 * @property string $sumbu_2
 * @property string $sumbu_3
 * @property string $bak_panjang
 * @property string $bak_lebar
 * @property string $bak_tinggi
 * @property string $jbb
 * @property string $jbi_jbki
 * @property string $daya_angkut
 * @property string $kelas_jalan
 * @property string $uji_rem
 * @property string $uji_lampu_utama
 * @property string $uji_emisi
 * @property string $masa_berlaku
 * @property string $petugas
 */
class Kendaraan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_kendaraan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nouji, nopol, namapemilik, alamatpemilik, nosrut, tanggalsrut, norangka, nomotor, jenis, merktipe, tahunpembuatan, bahanbakar, silinder, dayamotor, ukuranban, sumbu, beratkosong, dimensi_panjang, dimensi_lebar, dimensi_tinggi, dimensi_julurdepan, dimensi_julurbelakang, sumbu_1, sumbu_2, sumbu_3, bak_panjang, bak_lebar, bak_tinggi, jbb, jbi_jbki, daya_angkut, kelas_jalan, uji_rem, uji_lampu_utama, uji_emisi, masa_berlaku, petugas', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nouji, nopol, namapemilik, alamatpemilik, nosrut, tanggalsrut, norangka, nomotor, jenis, merktipe, tahunpembuatan, bahanbakar, silinder, dayamotor, ukuranban, sumbu, beratkosong, dimensi_panjang, dimensi_lebar, dimensi_tinggi, dimensi_julurdepan, dimensi_julurbelakang, sumbu_1, sumbu_2, sumbu_3, bak_panjang, bak_lebar, bak_tinggi, jbb, jbi_jbki, daya_angkut, kelas_jalan, uji_rem, uji_lampu_utama, uji_emisi, masa_berlaku, petugas', 'safe', 'on'=>'search'),
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
			'nouji' => 'Nouji',
			'nopol' => 'Nopol',
			'namapemilik' => 'Namapemilik',
			'alamatpemilik' => 'Alamatpemilik',
			'nosrut' => 'Nosrut',
			'tanggalsrut' => 'Tanggalsrut',
			'norangka' => 'Norangka',
			'nomotor' => 'Nomotor',
			'jenis' => 'Jenis',
			'merktipe' => 'Merktipe',
			'tahunpembuatan' => 'Tahunpembuatan',
			'bahanbakar' => 'Bahanbakar',
			'silinder' => 'Silinder',
			'dayamotor' => 'Dayamotor',
			'ukuranban' => 'Ukuranban',
			'sumbu' => 'Sumbu',
			'beratkosong' => 'Beratkosong',
			'dimensi_panjang' => 'Dimensi Panjang',
			'dimensi_lebar' => 'Dimensi Lebar',
			'dimensi_tinggi' => 'Dimensi Tinggi',
			'dimensi_julurdepan' => 'Dimensi Julurdepan',
			'dimensi_julurbelakang' => 'Dimensi Julurbelakang',
			'sumbu_1' => 'Sumbu 1',
			'sumbu_2' => 'Sumbu 2',
			'sumbu_3' => 'Sumbu 3',
			'bak_panjang' => 'Bak Panjang',
			'bak_lebar' => 'Bak Lebar',
			'bak_tinggi' => 'Bak Tinggi',
			'jbb' => 'Jbb',
			'jbi_jbki' => 'Jbi Jbki',
			'daya_angkut' => 'Daya Angkut',
			'kelas_jalan' => 'Kelas Jalan',
			'uji_rem' => 'Uji Rem',
			'uji_lampu_utama' => 'Uji Lampu Utama',
			'uji_emisi' => 'Uji Emisi',
			'masa_berlaku' => 'Masa Berlaku',
			'petugas' => 'Petugas',
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
		$criteria->compare('nouji',$this->nouji,true);
		$criteria->compare('nopol',$this->nopol,true);
		$criteria->compare('namapemilik',$this->namapemilik,true);
		$criteria->compare('alamatpemilik',$this->alamatpemilik,true);
		$criteria->compare('nosrut',$this->nosrut,true);
		$criteria->compare('tanggalsrut',$this->tanggalsrut,true);
		$criteria->compare('norangka',$this->norangka,true);
		$criteria->compare('nomotor',$this->nomotor,true);
		$criteria->compare('jenis',$this->jenis,true);
		$criteria->compare('merktipe',$this->merktipe,true);
		$criteria->compare('tahunpembuatan',$this->tahunpembuatan,true);
		$criteria->compare('bahanbakar',$this->bahanbakar,true);
		$criteria->compare('silinder',$this->silinder,true);
		$criteria->compare('dayamotor',$this->dayamotor,true);
		$criteria->compare('ukuranban',$this->ukuranban,true);
		$criteria->compare('sumbu',$this->sumbu,true);
		$criteria->compare('beratkosong',$this->beratkosong,true);
		$criteria->compare('dimensi_panjang',$this->dimensi_panjang,true);
		$criteria->compare('dimensi_lebar',$this->dimensi_lebar,true);
		$criteria->compare('dimensi_tinggi',$this->dimensi_tinggi,true);
		$criteria->compare('dimensi_julurdepan',$this->dimensi_julurdepan,true);
		$criteria->compare('dimensi_julurbelakang',$this->dimensi_julurbelakang,true);
		$criteria->compare('sumbu_1',$this->sumbu_1,true);
		$criteria->compare('sumbu_2',$this->sumbu_2,true);
		$criteria->compare('sumbu_3',$this->sumbu_3,true);
		$criteria->compare('bak_panjang',$this->bak_panjang,true);
		$criteria->compare('bak_lebar',$this->bak_lebar,true);
		$criteria->compare('bak_tinggi',$this->bak_tinggi,true);
		$criteria->compare('jbb',$this->jbb,true);
		$criteria->compare('jbi_jbki',$this->jbi_jbki,true);
		$criteria->compare('daya_angkut',$this->daya_angkut,true);
		$criteria->compare('kelas_jalan',$this->kelas_jalan,true);
		$criteria->compare('uji_rem',$this->uji_rem,true);
		$criteria->compare('uji_lampu_utama',$this->uji_lampu_utama,true);
		$criteria->compare('uji_emisi',$this->uji_emisi,true);
		$criteria->compare('masa_berlaku',$this->masa_berlaku,true);
		$criteria->compare('petugas',$this->petugas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getstatus($id){

		if($id == '1'){
			$data = '<span class="pull-right-container">
						<small class="label pull-right bg-green">LULUS</small>
						</span>';
		}else if($id=='0'){ 
			$data = '<span class="pull-right-container">
						<small class="label pull-right bg-red">TIDAK LULUS</small>
						</span>';
		}else{

			$data = '<span class="pull-right-container">
						<small class="label pull-right bg-gray">------</small>
						</span>';
		}
		return $data;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kendaraan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

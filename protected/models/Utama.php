<?php

class Utama extends CActiveRecord
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

	public function dataUtama()
    { 
        $a = '';
        $b = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $g = '';
 
        if (!empty($_GET['w_nama'])) {
            $a = " AND lower(nama) ILIKE '%".strtolower($_GET['w_nama'])."%'";
        }
        if (!empty($_GET['w_alamat'])) {
            $b = " AND lower(alamat) ILIKE '%".strtolower($_GET['w_alamat'])."%'";
        }
        if (!empty($_GET['w_kabupaten'])) {
            $c = " AND lower(ut_kabupaten) ILIKE '%".strtolower($_GET['w_kabupaten'])."%'";
        }
        if (!empty($_GET['w_kecamatan'])) {
            $d = " AND lower(kecamatan) ILIKE '%".strtolower($_GET['w_kecamatan'])."%'";
        } 
        if (!empty($_GET['w_kelurahan'])) {
            $e = " AND lower(desa) ILIKE '%".strtolower($_GET['w_kelurahan'])."%'";
        } 
        if (!empty($_GET['w_rt'])) {
            $f = " AND lower(rt) ILIKE '%".strtolower($_GET['w_rt'])."%'";
        } 
        if (!empty($_GET['w_rw'])) {
            $g = " AND lower(rw) ILIKE '%".strtolower($_GET['w_rw'])."%'";
        }  

        $lim = 10;
        $pag = 1;

        //Keperluan untuk pagging
        if (!empty($_GET['page'])) {
            $pag = $_GET['page'];
        }
        if (!empty($_GET['limit'])) {
            $lim = $_GET['limit'];
        }

        $on = ($pag-1) * $lim;
        // var_dump($lim);

        $sql    = "SELECT * FROM mudik.m_pantau_utama WHERE id IS NOT NULL $a $b $c $d $e $f $g  ORDER BY nama ASC LIMIT 10 OFFSET $on ";
        $posts  = Yii::app()->db->createCommand($sql)->queryAll();

        // $sql    = "SELECT * FROM pantau.pantau_warga WHERE id IS NOT NULL $a $b $c $d $e $f $g ORDER BY nama ASC LIMIT 10 OFFSET $on ";
        // $posts  = Yii::app()->db->createCommand($sql)->queryAll();

        return $posts;
    }

    public function countdataUtama()
    {  


        $a = '';
        $b = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $g = '';
 
        if (!empty($_GET['w_nama'])) {
            $a = " AND lower(nama) ILIKE '%".strtolower($_GET['w_nama'])."%'";
        }
        if (!empty($_GET['w_alamat'])) {
            $b = " AND lower(alamat) ILIKE '%".strtolower($_GET['w_alamat'])."%'";
        }
        if (!empty($_GET['w_kabupaten'])) {
            $c = " AND lower(ut_kabupaten) ILIKE '%".strtolower($_GET['w_kabupaten'])."%'";
        }
        if (!empty($_GET['w_kecamatan'])) {
            $d = " AND lower(kecamatan) ILIKE '%".strtolower($_GET['w_kecamatan'])."%'";
        } 
        if (!empty($_GET['w_kelurahan'])) {
            $e = " AND lower(desa) ILIKE '%".strtolower($_GET['w_kelurahan'])."%'";
        } 
        if (!empty($_GET['w_rt'])) {
            $f = " AND lower(rt) ILIKE '%".strtolower($_GET['w_rt'])."%'";
        } 
        if (!empty($_GET['w_rw'])) {
            $g = " AND lower(rw) ILIKE '%".strtolower($_GET['w_rw'])."%'";
        }  


        $sql    = "SELECT count(id) FROM mudik.m_pantau_utama WHERE id IS NOT NULL $a $b $c $d $e $f $g   ";
        $posts  = Yii::app()->db->createCommand($sql)->queryScalar();
        // $sql    = "SELECT count(id) FROM pantau.pantau_warga WHERE id IS NOT NULL $a $b $c $d $e $f $g ";
        // $posts  = Yii::app()->db->createCommand($sql)->queryScalar();

        return $posts;
    }
 	
 	public function dataUtamaforexcel()
    { 
        $a = '';
        $b = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $g = '';
 
        if (!empty($_GET['w_nama'])) {
            $a = " AND lower(nama) ILIKE '%".strtolower($_GET['w_nama'])."%'";
        }
        if (!empty($_GET['w_alamat'])) {
            $b = " AND lower(alamat) ILIKE '%".strtolower($_GET['w_alamat'])."%'";
        }
        if (!empty($_GET['w_kabupaten'])) {
            $c = " AND lower(ut_kabupaten) ILIKE '%".strtolower($_GET['w_kabupaten'])."%'";
        }
        if (!empty($_GET['w_kecamatan'])) {
            $d = " AND lower(kecamatan) ILIKE '%".strtolower($_GET['w_kecamatan'])."%'";
        } 
        if (!empty($_GET['w_kelurahan'])) {
            $e = " AND lower(desa) ILIKE '%".strtolower($_GET['w_kelurahan'])."%'";
        } 
        if (!empty($_GET['w_rt'])) {
            $f = " AND lower(rt) ILIKE '%".strtolower($_GET['w_rt'])."%'";
        } 
        if (!empty($_GET['w_rw'])) {
            $g = " AND lower(rw) ILIKE '%".strtolower($_GET['w_rw'])."%'";
        }  
 
        $sql    = "SELECT * FROM mudik.m_pantau_utama WHERE id IS NOT NULL $a $b $c $d $e $f $g  ORDER BY nama ASC";
        $posts  = Yii::app()->db->createCommand($sql)->queryAll();

        // $sql    = "SELECT * FROM pantau.pantau_warga WHERE id IS NOT NULL $a $b $c $d $e $f $g ORDER BY nama ASC LIMIT 10 OFFSET $on ";
        // $posts  = Yii::app()->db->createCommand($sql)->queryAll();

        return $posts;
    }
    public function cetakDataAll()
    {
        $sql="SELECT * FROM mudik.v_pemudik WHERE id IS NOT NULL ORDER BY nama ASC";
        $data=Yii::app()->db->createCommand($sql)->queryAll();
        return $data;
    } 


    public function getlabel($tgl)
    {
        $sql="SELECT  count(*)
                FROM mudik.m_utama   
                WHERE LEFT(created_at::VARCHAR,10) = '".$tgl."'";
        $data=Yii::app()->db->createCommand($sql)->queryScalar();
        return $data;
    } 
    public function getcntkdata($jns)
    {
        if($jns == 'L'){
            $wh = "WHERE jenis_kelamin = 'LAKI-LAKI'";
        }elseif ($jns == 'P') { 
            $wh = "WHERE jenis_kelamin = 'PEREMPUAN'";
        }else{ 
            $wh = "";
        }
        $sql="SELECT count(*) 
              FROM mudik.m_utama $wh";
        $data=Yii::app()->db->createCommand($sql)->queryScalar();
        return $data;
    } 
    public function getdatalastinput()
    {
        $sql="SELECT created_at FROM mudik.m_utama   ORDER BY id DESC LIMIT 1";
        $data=Yii::app()->db->createCommand($sql)->queryRow();
        return $data['created_at'];
    } 
    public function getJsonGrafik()
    {
        $sql="SELECT '2020-04'::varchar as bulan, count(*) as total
                from mudik.m_utama  
                WHERE left(created_at::varchar,7) <= '2020-04' ";
        $data=Yii::app()->db->createCommand($sql)->queryAll();
        return $data;
    } 


    public function getallkoordinat()
    {
        $sql="SELECT count(A.id) as total, B.kecamatan,B.lat,B.lang,D.polygon,string_agg(C.desa, ', ') desa 
                FROM mudik.m_utama A
                  inner JOIN mudik.tm_kecamatan B ON A.id_kecamatan = B.id
                  INNER JOIN mudik.tm_desa C ON A.id_desa = C.id  
                  join mudik.tm_polygon D on D.id::VARCHAR=B.id::VARCHAR 

                GROUP BY   B.kecamatan,B.lat,B.lang,D.polygon ";
        $data=Yii::app()->db->createCommand($sql)->queryAll();
        return $data;
    } 


    public function getallkoordinatpantau()
    {
        // $sql="SELECT count(A.id) as total, B.kecamatan,B.lat,B.lang,C.polygon
        //         FROM mudik.m_pantau_utama A
        //           inner JOIN mudik.tm_kecamatan B ON A.id_kecamatan = B.id
        //           join mudik.tm_polygon C on C.id::VARCHAR=B.id::VARCHAR 

        //         GROUP BY   B.kecamatan,B.lat,B.lang,C.polygon";
        $sql="SELECT count(A.id) as total, B.kecamatan,B.lat,B.lang,C.polygon
                FROM mudik.m_pantau_utama A
                  inner JOIN mudik.tm_kecamatan B ON A.id_kecamatan = B.id
                  join mudik.tm_polygon C on C.id::VARCHAR=B.id::VARCHAR 

                GROUP BY   B.kecamatan,B.lat,B.lang,C.polygon";
        $data=Yii::app()->db->createCommand($sql)->queryAll();
        return $data;
    }

    public function getalltotalpemudik()
    {
        $sql="SELECT   
                    B.kecamatan,
                    CASE  
                    WHEN C.jml_p IS NULL THEN
                        0
                    ELSE
                        C.jml_p
                END AS jml_p,
                    CASE  
                    WHEN D.jml_l IS NULL THEN
                        0
                    ELSE
                        D.jml_l
                END AS jml_l

                FROM
                    mudik.m_utama A 
                    INNER JOIN mudik.tm_kecamatan B ON A.id_kecamatan = B.ID 
                    LEFT JOIN (SELECT count(*) AS jml_p,id_kecamatan FROM mudik.m_utama WHERE  jenis_kelamin = 'PEREMPUAN' GROUP BY id_kecamatan) C  ON B.ID = C.id_kecamatan 
                    LEFT JOIN (SELECT count(*) AS jml_l,id_kecamatan FROM mudik.m_utama WHERE  jenis_kelamin = 'LAKI-LAKI' GROUP BY id_kecamatan) D  ON B.ID = D.id_kecamatan 
                GROUP BY
                    B.kecamatan,
                    C.jml_p,
                    D.jml_l";
        $data=Yii::app()->db->createCommand($sql)->queryAll();
        return $data;
    }
}
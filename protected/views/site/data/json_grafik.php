<?php
error_reporting(0); 

        $w['ODP']    = "rgba(0, 192, 239,";
        $w['PDP']    = "rgba(255, 193, 7,";
        $w['POSITIF']    = "rgba(198, 25, 25,";
        $w[3]    = "rgba(198, 25, 25,";
        $w[4]    = "rgba(153, 17, 176,";
        $w[5]    = "rgba(162,157,157,";
        $w[6]    = "rgba(30, 159, 9,";
        $w[7]    = "rgba(129, 28, 28,";
        $w[8]    = "rgba(4, 19, 85,";

$json	= Utama::getJsonGrafik();
foreach ($json as $key => $value) {
	$data[$value['status']]	= 	array(
		'nama' => $value['total'],
		'warna'=> $w[3],
	);
	$bulan[$value['status']][] = $value['total'];
	// $bulan[$value['status']][$value['bulan']] =$value['total'];
}
foreach ($data as $key => $value) {
	$xx[]	= array(
		'nama'	=> $value['nama'],
		'warna'	=> $value['warna'],
		'jml'	=> $bulan[$value['nama']],
	);
}
$info2 = array(
	'status' => 'success',
	'poli' => $xx,
);
// print_r($info2);
echo json_encode($info2);
?>
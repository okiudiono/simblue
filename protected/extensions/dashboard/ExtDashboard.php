<?php
class ExtDashboard extends CApplicationComponent
{
	public static function getDate()
	{
		$newDateMonth=date("m");
		switch ($newDateMonth) {
			case '1':
				$bulan="Januari";
				break;
			case '2':
				$bulan="Pebruari";
				break;
			case '3':
				$bulan="Maret";
				break;
			case '4':
				$bulan="April";
				break;
			case '5':
				$bulan="Mei";
				break;
			case '6':
				$bulan="Juni";
				break;
			case '7':
				$bulan="Juli";
				break;
			case '8':
				$bulan="Agustus";
				break;
			case '9':
				$bulan="September";
				break;
			case '10':
				$bulan="Oktober";
				break;
			case '11':
				$bulan="November";
				break;
			case '12':
				$bulan="Desember";
				break;				
		}
		$newDateDay=date("N");
		switch ($newDateDay) {
			case '1':
				$hari="Senin";
				break;
			case '2':
				$hari="Selasa";
				break;
			case '3':
				$hari="Rabu";
				break;
			case '4':
				$hari="Kamis";
				break;
			case '5':
				$hari="Jumat";
				break;
			case '6':
				$hari="Sabtu";
				break;
			case '7':
				$hari="Minggu";
				break;
		}
		$newDate=$hari.", ".date("d")." ".$bulan." ".date("Y");
		return $newDate;
	}
	public static function getDateI($data)
	{
		$data = explode('/',$data);
		$newDateMonth=$data[1];
		switch ($newDateMonth) {
			case '1':
				$bulan="Januari";
				break;
			case '2':
				$bulan="Pebruari";
				break;
			case '3':
				$bulan="Maret";
				break;
			case '4':
				$bulan="April";
				break;
			case '5':
				$bulan="Mei";
				break;
			case '6':
				$bulan="Juni";
				break;
			case '7':
				$bulan="Juli";
				break;
			case '8':
				$bulan="Agustus";
				break;
			case '9':
				$bulan="September";
				break;
			case '10':
				$bulan="Oktober";
				break;
			case '11':
				$bulan="November";
				break;
			case '12':
				$bulan="Desember";
				break;				
		}
		$newDateDay=date("N");
		switch ($newDateDay) {
			case '1':
				$hari="Senin";
				break;
			case '2':
				$hari="Selasa";
				break;
			case '3':
				$hari="Rabu";
				break;
			case '4':
				$hari="Kamis";
				break;
			case '5':
				$hari="Jumat";
				break;
			case '6':
				$hari="Sabtu";
				break;
			case '7':
				$hari="Minggu";
				break;
		}
		$newDate=$hari.", ".$data[0]." ".$bulan." ".date("Y");
		return $newDate;
	}

	public static function getDateSys()
	{
		$newDateMonth=date("m");
		switch ($newDateMonth) {
			case '1':
				$bulan="Januari";
				break;
			case '2':
				$bulan="Februari";
				break;
			case '3':
				$bulan="Maret";
				break;
			case '4':
				$bulan="April";
				break;
			case '5':
				$bulan="Mei";
				break;
			case '6':
				$bulan="Juni";
				break;
			case '7':
				$bulan="Juli";
				break;
			case '8':
				$bulan="Agustus";
				break;
			case '9':
				$bulan="September";
				break;
			case '10':
				$bulan="Oktober";
				break;
			case '11':
				$bulan="November";
				break;
			case '12':
				$bulan="Desember";
				break;				
		}
		$newDate=date("d")." ".$bulan." ".date("Y").", ".date("H:i:s");
		return $newDate;
	}

	
}

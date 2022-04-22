<?php
class ExtUrlSegment extends CApplicationComponent
{
	public static function Segment($part)
	{
		$segementsArr = explode('/', Yii::app()->request->pathInfo);

	    if (!empty($segementsArr[$part-1])) return $segementsArr[$part-1];
	    
	    return false;
	}

	public static function createSlug($slug)
	{
		$letterNumbersSpacesHypens='/[^\-\s\pN\pL]+/u';
		$spaceDuplicateHypens='/[\-\s]+/';

		$slug = preg_replace($letterNumbersSpacesHypens,'',mb_strtolower($slug,'UTF-8'));
		$slug = preg_replace($spaceDuplicateHypens,'-', $slug);
		$slug = trim($slug,'-');

		return $slug;
	}
	
	public static function createSlugEcuti($slug)
	{
		$letterNumbersSpacesHypens='/[^\-\s\pN\pL]+/u';
		$spaceDuplicateHypens='/[\-\s]+/';

		$slug = preg_replace($letterNumbersSpacesHypens,'',mb_strtolower($slug,'UTF-8'));
		$slug = preg_replace($spaceDuplicateHypens,'', $slug);
		$slug = trim($slug,'');

		return $slug;
	}
	
	public static function ConversiNip($nip, $batas = " ") {
		$nip = trim($nip," ");
		$panjang = strlen($nip);
		 
		if($panjang == 18) {
			$sub[] = substr($nip, 0, 8); 
			$sub[] = substr($nip, 8, 6); 
			$sub[] = substr($nip, 14, 1); 
			$sub[] = substr($nip, 15, 18);
			 
			return $sub[0].$batas.$sub[1].$batas.$sub[2].$batas.$sub[3];
		} elseif($panjang == 15) {
			$sub[] = substr($nip, 0, 8); 
			$sub[] = substr($nip, 8, 6); 
			$sub[] = substr($nip, 14, 1);
			 
			return $sub[0].$batas.$sub[1].$batas.$sub[2];
		} elseif($panjang == 9) {
			$sub = str_split($nip,3);
			 
			return $sub[0].$batas.$sub[1].$batas.$sub[2];
		} else {
			return $nip;
		}
	}
	
	public static function ConversiNoTelp($no) {
			$sub[] = substr($no, 0, 4); 
			$sub[] = substr($no, 4, 8); 
			return "(".$sub[0].") ".$sub[1];
	}
	
	public static function  ConTanggal($tgl){
		$tanggal  =  substr($tgl,0,2);
		$bulan  =  Yii::app()->url->ConBulan(substr($tgl,3,2));
		$tahun  =  substr($tgl,6,4);
		return  $tanggal.' '.$bulan.' '.$tahun;
	}
	
	public static function  ConBln($tgl){
		$bulan  =  Yii::app()->url->ConBulan(substr($tgl,0,2));
		$tahun  =  substr($tgl,3,4);
		return  $bulan.' '.$tahun;
	}
	
	public static function  ConHariTanggal($tgl){
		
		$tanggal 	=  substr($tgl,0,2);
		$bulan  =  Yii::app()->url->ConBulan(substr($tgl,3,2));
		$tahun  =  substr($tgl,6,4);
		$con =  date('Y-m-d', strtotime(str_replace('/','-', $tgl)));
		$day = date('D', strtotime($con));
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);
		return  $dayList[$day].', '.$tanggal.' '.$bulan.' '.$tahun;
	}
		 
	public static function  ConBulan($bln){
		switch  ($bln){
				case  01:
					return  "Januari";
				break;
				case  2:
					return  "Februari";
				break;
				case  3:
					return  "Maret";
				break;
				case  4:
					return  "April";
				break;
				case  5:
					return  "Mei";
				break;
				case  6:
					return  "Juni";
				break;
				case  7:
					return  "Juli";
				break;
				case  8:
					return  "Agustus";
				break;
				case  9:
					return  "September";
				break;
				case  10:
					return  "Oktober";
				break;
				case  11:
					return  "November";
				break;
				case  12:
					return  "Desember";
				break;
		}
	}
	
	public static function  Terbilang($x){
		  $abil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
		  if ($x < 12)
			return " " . $abil[$x];
		  elseif ($x < 20)
			return Yii::app()->url->Terbilang($x - 10) . " Belas";
		  elseif ($x < 100)
			return Yii::app()->url->Terbilang($x / 10) . " Puluh" . Yii::app()->url->Terbilang($x % 10);
		  elseif ($x < 200)
			return " Seratus" . Yii::app()->url->Terbilang($x - 100);
		  elseif ($x < 1000)
			return Yii::app()->url->Terbilang($x / 100) . " Ratus" . Yii::app()->url->Terbilang($x % 100);
		  elseif ($x < 2000)
			return " Seribu" . Terbilang($x - 1000);
		  elseif ($x < 1000000)
			return Yii::app()->url->Terbilang($x / 1000) . " Ribu" . Yii::app()->url->Terbilang($x % 1000);
		  elseif ($x < 1000000000)
			return Yii::app()->url->Terbilang($x / 1000000) . " Juta" . Yii::app()->url->Terbilang($x % 1000000);
	}
	
	function JumlahBulan($start, $end, $period = "month")
	{
		$day = 0;
		$month = 0;
		$month_array = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		$datestart = strtotime($start);
		$dateend = strtotime($end);
		$month_start = strftime("%m", $datestart);
		$current_year = strftime("%y", $datestart);
		$diff = $dateend - $datestart;
		$date = $diff / (60 * 60 * 24);
		$day = $date;
	
		$awal = 1;
	
		while($date > 0)
		{
			if($awal)
			{
				$loop = $month_start - 1;
				$awal = 0;
			}
			else
			{
				$loop = 0;
			}
			for ($i = $loop; $i < 12; $i++)
			{
				if($current_year % 4 == 0 && $i == 1)
					$day_of_month = 29;
				else
					$day_of_month = $month_array[$i];
	
				$date -= $day_of_month;
	
				if($date <= 0)
				{
					if($date == 0)
						$month++;
					break;
				}
				$month++;
			}
	
			$current_year++;
		}
		switch($period)
		{
			case "day"   : return $day; break;
			case "month" : return $month; break;
			case "year"  : return intval($month / 12); break;
		}
	 }
	public static function ConversiKoordinat($koordinat) {
		//$koordinat=$data['koordinat'];
		$space=explode(",",$koordinat);
		$kiri=$space[0];
		$kanan=$space[1];		
		$vars = explode(".",$kiri);
			$deg = str_replace("-","",$vars[0]);
			if($vars[0]<0):
				$pos="S";
			else:
				$pos2="N";
			endif;
			$tempma = "0.".$vars[1];
			$tempma = $tempma * 3600;
			$min = floor($tempma / 60);
			$sec = round($tempma - ($min*60));
		
		$vars2 = explode(".",$kanan);
			$deg2 = $vars2[0];
			if($vars2[0]<0):
				$pos2="W";
			else:
				$pos2="E";
			endif;
			$tempma2 = "0.".$vars2[1];

			$tempma2 = $tempma2 * 3600;
			$min2 = floor($tempma2 / 60);
			$sec2 = round($tempma2 - ($min2*60));
		return $deg."&deg; ".$min."' ".$sec."'' ".$pos." ".$deg2."&deg; ".$min2."' ".$sec2."'' ".$pos2."";
	}
	public static function getRealIp()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
	
}

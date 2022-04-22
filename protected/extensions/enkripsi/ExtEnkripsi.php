<?php
class ExtEnkripsi extends CApplicationComponent
{
	public function generate($param)
	{
		$tanggal_input = date("d-m-Y, H:i:s");
		$dekripsi  	   = $param." ".$tanggal_input." ".uniqid();
        $enkripsi      = sha1($dekripsi);
        return $enkripsi;
	}

}

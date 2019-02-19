<?php
include "config.php";   //memasukan koneksi
 // $id_karyailmiah = $_GET['id_karyailmiah'];
 // $status = $_GET['status'];


 $file = $_GET['nama_file'];

 $file_open = "../dashboard/download/";
$gabung = $file_open.$file;


// include "config.php";    //memasukan koneksi

 // $id_karyailmiah = $_GET['id_karyailmiah'];
 
// $file = $_GET['nama_file'];




	// $file = $_GET['nama_file'];
	//echo $file;
	if (file_exists($gabung))
	{
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($gabung));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: private');
		header('Pragma: private');
		header('Content-Length: ' . filesize($gabung));
		ob_clean();
		flush();
		readfile($gabung);
		exit;

	} 
	else 
	{
		echo "file {$_GET['nama_file']} sudah tidak ada.";
	}







?>
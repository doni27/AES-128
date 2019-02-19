<?php


session_start();
include "../config/config.php";   //memasukan koneksi

 $id_karyailmiah = $_GET['id_karyailmiah'];
 
 $file = $_GET['nama_file'];




	// $file = $_GET['nama_file'];
	echo $file;
	if (file_exists($file))
	{
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: private');
		header('Pragma: private');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		exit;

	} 
	else 
	{
		echo "file {$_GET['nama_file']} sudah tidak ada.";
	}

?>
<?php 
// session_start();
// include "../config/config.php";   //memasukan koneksi
//  $id_karyailmiah = $_GET['id_karyailmiah'];
 
 $file = $_GET['nama_file'];
$dokumen = $_GET['dokumen'];


$filename = '$dokumen';
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename. '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
 
 ?>
<?php
session_start();
include "../config/config.php"; 
include "AES.php";	
$id_permintaan = $_GET["id_permintaan"];
$tombol 	= $_GET["tbl"];

  $query = mysqli_query($connect, "SELECT * FROM permintaan_data  WHERE id_permintaan='$id_permintaan'");
      $data2 = mysqli_fetch_array($query);
        $namabaru = $data2['nama_anggota'];
      switch($tombol){
   	 case 'terima': 
   	  $file_name  = $data2['file'];
   	 $file_path  = $data2['url_file'];
    $key        = $data2['sandi_dokumen'];
   $gabungnama = $namabaru.$file_name;
    $file_size  = filesize($file_path);

   
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "download/$gabungnama";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
   $query1 =  "UPDATE permintaan_data SET status ='Disetujui' WHERE id_permintaan = '$id_permintaan'";
   	 $sql1= mysqli_query($connect, $query1);
   		
  
	break;
	 case 'tolak':

   $query1 =  "UPDATE permintaan_data SET status ='Ditolak' WHERE id_permintaan = '$id_permintaan'";
   	 $sql1= mysqli_query($connect, $query1);
   		
  
	break;
	default:
}
header("Location: permintaan_data.php");?>

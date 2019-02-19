<?php
session_start();
include 'config.php';   //memasukan koneksi
$id_karyailmiah = $_GET["id_karyailmiah"];
$dokumen 	= $_GET["dokumen"];

echo $id_karyailmiah;
echo "<br>";
echo $dokumen;

  $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  WHERE id_karyailmiah='$id_karyailmiah'");
      $data2 = mysqli_fetch_array($query);
        
       
   switch($dokumen){
   	 case 'dokumen1':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $url_dokumen  = $data2['url_dokumen1'];
    $name_dokumen = $data2['dokumen1'];
    $sandi_dokumen = $data2['sandi_dokumen1'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];
    $status		= 'Menunggu Konfirmasi';
   
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file,sandi_dokumen, status, tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$url_dokumen','$sandi_dokumen','$status','$tipeid','$tanggal') ")){
   		header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
   
    exit();
   }
	break;
   	 case 'dokumen2':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $status  		='Menunggu Konfirmasi';	
    $url_dokumen  = $data2['url_dokumen2'];
    $name_dokumen = $data2['dokumen2'];
     $sandi_dokumen = $data2['sandi_dokumen2'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];	
     
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file, sandi_dokumen, status , tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$url_dokumen','$sandi_dokumen','$status','$tipeid','$tanggal') ")){
   	header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
    exit();
   }
	break;
    case 'dokumen3':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $url_dokumen  = $data2['url_dokumen3'];
    $name_dokumen = $data2['dokumen3'];
     $sandi_dokumen = $data2['sandi_dokumen3'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];	
     $status		= 'Menunggu Konfirmasi';
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file, sandi_dokumen, status, tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$url_dokumen','$sandi_dokumen','$status','$tipeid','$tanggal') ")){
   		header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
   
    exit();
   }
	break;
	 case 'dokumen4':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $url_dokumen  = $data2['url_dokumen4'];
    $name_dokumen = $data2['dokumen4'];
     $sandi_dokumen = $data2['sandi_dokumen4'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];	
   	  $status		= 'Menunggu Konfirmasi';
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file, sandi_dokumen, status, tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$url_dokumen','$sandi_dokumen', '$status','$tipeid','$tanggal') ")){
   	header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
    exit();
   }
	break;
	 case 'dokumen5':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $url_dokumen  = $data2['url_dokumen5'];
    $name_dokumen = $data2['dokumen5'];
     $sandi_dokumen = $data2['sandi_dokumen5'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];	
     $status		= 'Menunggu Konfirmasi';
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file, sandi_dokumen, status, tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$url_dokumen','$sandi_dokumen','$status','$tipeid','$tanggal') ")){
   	header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
    exit();
   }
	break;
	 case 'dokumen6':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $url_dokumen  = $data2['url_dokumen6'];
    $name_dokumen = $data2['dokumen6'];
     $sandi_dokumen = $data2['sandi_dokumen6'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];	
     $status		= 'Menunggu Konfirmasi';
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file, sandi_dokumen, status, tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$url_dokumen','$status','$sandi_dokumen','$tipeid','$tanggal') ")){
   	header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
    exit();
   }
	break;
	 case 'dokumen7':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $url_dokumen  = $data2['url_dokumen7'];
    $name_dokumen = $data2['dokumen7'];
     $sandi_dokumen = $data2['sandi_dokumen7'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];	
      $status		= 'Menunggu Konfirmasi';
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file, sandi_dokumen, status, tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$url_dokumen', '$sandi_dokumen', '$status', '$tipeid','$tanggal') ")){
   	header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
    exit();
   }
	break;
	 case 'dokumen8':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $url_dokumen  = $data2['url_dokumen8'];
    $name_dokumen = $data2['dokumen8'];
     $sandi_dokumen = $data2['sandi_dokumen8'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];
      $status		= 'Menunggu Konfirmasi';
   
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file, sandi_dokumen, status, tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$url_dokumen','$sandi_dokumen','$status','$tipeid','$tanggal') ")){
   	header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
    exit();
   }
	break;
	 case 'dokumen9':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $url_dokumen  = $data2['url_dokumen9'];
    $name_dokumen = $data2['dokumen9'];
     $sandi_dokumen = $data2['sandi_dokumen9'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];	
     $status		= 'Menunggu Konfirmasi';
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file, sandi_dokumen, tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$url_dokumen','$sandi_dokumen','$status','$tipeid','$tanggal') ")){
   	header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
    exit();
   }
	break;
	 case 'dokumen10':
      $tanggal = date("Y-m-d");
    $judul		  = $data2['judul'];
    $status  		='Menunggu Konfirmasi';				
    $url_dokumen  = $data2['url_dokumen10'];
    $name_dokumen = $data2['dokumen10'];
     $sandi_dokumen = $data2['sandi_dokumen10'];
    $judul1		  = $judul;
    $nama_anggota = 'doni';
    $tipeid		 = $data2['idtipe'];	
    
   if ( $query1 = mysqli_query($connect, "INSERT INTO permintaan_data (nama_anggota, judul, file, url_file, sandi_dokumen, status , tipeid, tanggal ) VALUES ('$nama_anggota','$judul','$name_dokumen','$sandi_dokumen','$url_dokumen','$status', '$tipeid','$tanggal') ")){
   	header("Location: detail.php?id_karyailmiah=$id_karyailmiah");
    exit();
   }
	break;
	default;
		
}


?>
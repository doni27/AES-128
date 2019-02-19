<?php
session_start();
include "../config/config.php";  


$nama_tipe 	= $_POST["th_tahun"];
$id 	= $_POST["id"];


if ($addjurusan = mysqli_query($connect, "UPDATE tahun SET  th_tahun ='$nama_tipe' WHERE  id_tahun = '$id' 
	")){
		header("Location: tahun.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
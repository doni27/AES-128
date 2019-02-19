<?php
session_start();
include "../config/config.php";  


$nama_tipe 	= $_POST["nama_tipe"];
$id 	= $_POST["id"];


if ($addjurusan = mysqli_query($connect, "UPDATE tipe SET  nama_tipe ='$nama_tipe' WHERE  id_tipe = '$id' 
	")){
		header("Location: tipe.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
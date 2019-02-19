<?php
session_start();
include "../config/config.php";  


$nama_fakultas 	= $_POST["nama_fakultas"];
$id 	= $_POST["id"];


if ($addjurusan = mysqli_query($connect, "UPDATE id_fakultas SET  nama_fakultas ='$nama_fakultas' WHERE  id_fakultas = '$id' 
	")){
		header("Location: fakultas.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
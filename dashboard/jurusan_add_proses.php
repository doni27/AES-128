<?php
session_start();
include "../config/config.php";  

$idfakultas = $_POST["idfakultas"];
$nama_sub_jurusan 	= $_POST["nama_sub_jurusan"];



if ($addjurusan = mysqli_query($connect, "INSERT INTO sub_jurusan (idfakultas, nama_sub_jurusan) VALUES 
	( '$idfakultas','$nama_sub_jurusan')")){
		header("Location: jurusan.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
<?php
session_start();
include "../config/config.php";  


$nama_fakultas 	= $_POST["nama_fakultas"];



if ($addjurusan = mysqli_query($connect, "INSERT INTO id_fakultas ( nama_fakultas) VALUES 
	( '$nama_fakultas')")){
		header("Location: fakultas.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
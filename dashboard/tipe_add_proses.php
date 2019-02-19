<?php
session_start();
include "../config/config.php";  


$nama_tipe 	= $_POST["nama_tipe"];



if ($addjurusan = mysqli_query($connect, "INSERT INTO tipe (nama_tipe) VALUES 
	('$nama_tipe')")){
		header("Location: tipe.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
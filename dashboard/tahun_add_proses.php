<?php
session_start();
include "../config/config.php";  


$th_tahun 	= $_POST["th_tahun"];



if ($addjurusan = mysqli_query($connect, "INSERT INTO tahun (th_tahun) VALUES 
	('$th_tahun')")){
		header("Location: tahun.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
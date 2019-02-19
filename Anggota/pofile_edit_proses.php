<?php

session_start();
include "../config/config.php"; 
if (isset($_POST["submit"])) {

   //memasukan koneksi
$username = $_POST["username"];

$nim  = $_POST["nim"];
$jurusan  = $_POST["jurusan"];
$email  = $_POST["email"];
$password  = $_POST["password"];



$salt ='sabar'; 
$user_password = crypt($password,$salt);
if ($addjurusan = mysqli_query($connect, "UPDATE users SET username ='{$username}',jurusan ='{$jurusan}',email ='{$email}' WHERE nim = $nim ")){
       
        header("Location: profil.php");
        exit();
    }

die ("Terdapat kesalahan : ". mysqli_error($connect));
}
?>
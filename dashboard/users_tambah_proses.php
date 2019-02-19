<?php 
session_start();
include "../config/config.php"; 
if (isset($_POST["submit"])) {

 //memasukan koneksi
$username = $_POST["username"];
$fullname  = $_POST["name"];
$nim  = $_POST["nim"];
$jurusan  = $_POST["jurusan"];
$email  = $_POST["email"];
$password  = $_POST["password"];
$status = '3';
$user_role = 'menunggu konfirmasi';
$job_title = 'anggota';
$join_date = date("Y-m-d h-i-s");
$salt ='sabar'; 
$user_password = crypt($password,$salt);

  $sql = "SELECT * FROM users WHERE nim='$nim', email = '$email'";
  $query = mysqli_query($connect, $sql);
 
  if(mysqli_num_rows($query) > 0){
    
    header("Location: users.php?hasil=gagal");
    // echo "string";
 
  } else {


   if ( $query1 = mysqli_query($connect, "INSERT INTO users (username,nim ,jurusan , password,  job_title, join_date , status, user_role, email ) VALUES ('$username','$nim','$jurusan','$user_password','$job_title','$join_date','$status','$user_role','$email') ")){
      header("Location: users.php?hasil=sukses");
   }}
   }


 ?>

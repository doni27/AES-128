<?php
session_start();
include 'config.php';

$error='';
if (isset($_POST['login'])){
if	(empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password Tidak Valid!";

}else{

$user = mysqli_real_escape_string($connect, $_POST['username']);
$pass = mysqli_real_escape_string($connect, $_POST['password']);


// $login = mysqli_query("SELECT username,password FROM users WHERE username='$user' AND password=md5('$pass')");
// // menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($connect, $login);


$query = "SELECT * FROM users WHERE username='{$user}' ";
$sql = mysqli_query($connect,$query);
$rows = mysqli_fetch_array($sql);
 
 $username = $rows['username'];
 $password = $rows['password'];
 $fullname = $rows['fullname'];
 $status = $rows['status'];
// cek apakah username dan password di temukan pada database
if($user && $pass){
 
	// $data = mysqli_fetch_assoc($sql);
 
	// cek jika user login sebagai admin
	 if($user === $username  && password_verify($pass,$password)){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['fullname'] = $fullname;
	$_SESSION['status']   = $status;
	
	if ($status == 1){
header("location:dashboard/index.php");
	} else if ($status == 3){
		header("location:anggota/index.php");
	} else{
		header("location:index.php?pesan=gagal");
	}
	

		// $_SESSION['status'] = 3;
	

// } else if($user === $username && password_verify($pass,$password)){
// 	$_SESSION['username'] === $user;
// 	$_SESSION['status'] = 3;
// 	header("location:anggota/index.php");
	
 
	} else{

		//alihkan ke halaman login kembali
		 header("location:index.php?pesan=gagal");

	}	


	// if($rows['status']==1){
 		
	// 	// buat session login dan username
	// 	$_SESSION['username'] = $user;
	// 	$_SESSION['status'] = 1;
	// 	// alihkan ke halaman dashboard admin
	// 	header("location:dashboard/index.php");
 
	// // cek jika user login sebagai pegawai
	// }else if($rows['status']==3){
	// 	// buat session login dan username
	// 	$_SESSION['username'] = $user;
	// 	$_SESSION['status'] = 3;
	// 	// alihkan ke halaman dashboard pegawai
	// 	header("location:anggota/index.php");
 
	// // cek jika user login sebagai pengurus
	// // }else if($data['level']=="pengurus"){
	// // 	// buat session login dan username
	// // 	$_SESSION['username'] = $username;
	// // 	$_SESSION['level'] = "pengurus";
	// // 	// alihkan ke halaman dashboard pengurus
	// // 	header("location:halaman_pengurus.php");
 
	// }else{
 
	// 	// // alihkan ke halaman login kembali
	// 	// header("location:index.php?pesan=gagal");
	// }	
// }else{
// 	echo "<script language=\"JavaScript\">\n";
// 		echo "alert('Username atau Password Salah!');\n";
// 		echo "window.location='index.php'";
// 		echo "</script>";
// }
 




// $query = "SELECT username,password FROM users WHERE username='$user' AND password=md5('$pass')";
// $sql = mysqli_query($connect,$query);
// $rows = mysqli_fetch_array($sql);

// 	if ($rows['status']=1) {
// 		$_SESSION['username']=$user;
		

	
// 		header("location: dashboard/index.php");
// } elseif ($rows['status']=3) {
// 		$_SESSION['username']=$user;
	

		
// 		header("location: anggota/index.php");
}else{

	echo "<script language=\"JavaScript\">\n";
		echo "alert('Username atau Password Salah!');\n";
		echo "window.location='index.php'";
		echo "</script>";
	}
}
}

?>

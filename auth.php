<?php
session_start();
include 'config.php';

$error='';
if (isset($_POST['login'])){
if	(empty($_POST['nim']) || empty($_POST['password'])) {
	$error = "Username or Password Tidak Valid!";

}else{

$user = mysqli_real_escape_string($connect, $_POST['nim']);
$pass = mysqli_real_escape_string($connect, $_POST['password']);


// $login = mysqli_query("SELECT username,password FROM users WHERE username='$user' AND password=md5('$pass')");
// // menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($connect, $login);


$query = "SELECT * FROM users WHERE nim='{$user}' ";
$sql = mysqli_query($connect,$query);
$rows = mysqli_fetch_array($sql);
 $nim = $rows['nim'];
 $username = $rows['username'];
 $password = $rows['password'];
 $fullname = $rows['fullname'];
 $status = $rows['status'];
  $nim = $rows['nim'];
   $jurusan = $rows['jurusan'];
// cek apakah username dan password di temukan pada database
if($user && $pass){
 
	// $data = mysqli_fetch_assoc($sql);
 
	// cek jika user login sebagai admin
	 if($user === $nim && password_verify($pass,$password)){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['fullname'] = $fullname;
	$_SESSION['status']   = $status;
		$_SESSION['nim']   = $nim;
			$_SESSION['jurusan']   = $jurusan;
	
	if ($status == 1){
header("location:dashboard/index.php");
	} else if ($status == 2){
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
		header("Location:login.php?message= Username and Password Salah");

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
header("Location:index.php?message=Invalid! Username and Password");
	// echo "<script language=\"JavaScript\">\n";
	// 	echo "alert('Username atau Password Salah!');\n";
	// 	echo "window.location='index.php'";
	// 	echo "</script>";
	}
}
}

?>
<?php 

if (isset($_POST["login"])) {

include 'config.php';   //memasukan koneksi
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

  $sql = "SELECT * FROM users WHERE username='$username', email = '$email'";
  $query = mysqli_query($connect, $sql);
 
  if(mysqli_num_rows($query) > 0){
    
    header("Location: new-account.php?hasil=gagal");
    // echo "string";
 
  } else {


   if ( $query1 = mysqli_query($connect, "INSERT INTO users (username,nim ,jurusan , password,  job_title, join_date , status, user_role, email ) VALUES ('$username','$nim','$jurusan','$user_password','$job_title','$join_date','$status','$user_role','$email') ")){
      header("Location: new-account.php?hasil=sukses");
   }}
   }


 ?>

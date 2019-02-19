<?php
session_start();
include('../config.php');
 include'hitung.php'; 
if(empty($_SESSION['nim'])){
header("location:../index.php");
// }else
//   ($_SESSION['status']='3');{

//     header("location:../index.php");
}
if($_SESSION['status']== '3'){
header("location:../index.php");
// }else
//   ($_SESSION['status']='3');{

//     header("location:../index.php");
}
$last = $_SESSION['nim'];
$sqlupdate = "UPDATE users SET last_activity=now() WHERE nim='$last'";
$queryupdate = mysqli_query($connect, $sqlupdate);
?>
<!DOCTYPE html>
<html>
<?php
$user = $_SESSION['nim'];
$query = mysqli_query($connect,"SELECT username,job_title,last_activity FROM users WHERE nim='$user'");
$data = mysqli_fetch_array(  $query);
?>
  <head>
    <title>Halo, <?php echo $data['username']; ?> - </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    

   <script src="js/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>



      <script type="text/javascript" src="datatabel/jquery-3.1.0.js"></script>
  <script type="text/javascript" src="datatabel/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="datatabel/css/jquery.dataTables.min.css">

   <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css" />

<script type="text/javascript" src="js/loader.js"></script>
	 <script src="js/jquery.tinymce.min.js"></script>
  	<script src="js/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    
  
   <!--  <script src="js/jquery.js"></script> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
     <style>
/* Center the loader */
#loader {
  background-color: white;
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  background-color: white;
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  background-color: white;
  display: none;
  text-align: center;
}
</style>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <header class="main-header hidden-print"><a class="logo" href="index.php" style="font-size:13pt">Repositori UIN SUSKA RIAU</a>
        <nav class="navbar navbar-static-top">
          <a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
            <div class="pull-left info">
              <p style="margin-top:-5px;"><?php echo $data['username']; ?></p>
              <p class="designation"><?php echo $data['job_title']; ?></p>
              <p class="designation" style="font-size:6pt;">Aktivitas Terakhir: <?php echo $data['last_activity']; ?></p>
            </div>
          </div>
        
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <!--   <li><a href="karyailmiah.php"><i class="fa fa-file-o"></i><span>Karya Ilmiah</span></a></li> -->
               <li class="treeview"><a href="#"><i class="fa fa-file-pdf-o"></i><span>Karya Ilmiah (<?php 
             $query = mysqli_query($connect, "SELECT *  FROM statistik WHERE id_statistik ='1'");
                      $dataencrypt = mysqli_fetch_array($query); ?>
            <?php echo $dataencrypt['jumlah_karya_ilmiah']; 
                      ?> )
             


               </span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="file_data.php"><i class="fa fa-circle-o"></i> data</a></li>
                <li><a href="file_formtambah.php"><i class="fa fa-circle-o"></i> tambah</a></li>
              </ul>
            </li>
            <li><a href="permintaan_data.php"><i class="fa fa-envelope-o"></i><span> Permintaan Data

              (<?php 
             $query = mysqli_query($connect, "SELECT *  FROM statistik WHERE id_statistik ='1'");
                      $dataencrypt = mysqli_fetch_array($query); ?>
            <?php echo $dataencrypt['jumlah_request']; 
                      ?> )


            </span></a></li>
              <!-- <li class="treeview"><a href="#"><i class="fa fa-file-o"></i><span>File</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="encrypt.php"><i class="fa fa-circle-o"></i> Enkripsi</a></li>
                <li><a href="decrypt.php"><i class="fa fa-circle-o"></i> Dekripsi</a></li>
              </ul> -->
            </li>
              <li class="treeview"><a href="#"><i class="fa fa-folder-o"></i><span>Data Master</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Fakultas.php"><i class="fa fa-circle-o"></i> Data Fakultas</a></li>
                <li><a href="jurusan.php"><i class="fa fa-circle-o"></i> Data Jurusan </a></li>
                <li><a href="tahun.php"><i class="fa fa-circle-o"></i> Data Tahun </a></li>
                 <li><a href="tipe.php"><i class="fa fa-circle-o"></i> Data Tipe </a></li>
              </ul>
            </li>

            
          
             <li><a href="Statistik.php"><i class="fa fa-list-alt"></i><span>Statistik</span></a></li>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-folder-o"></i><span>Pencarian</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="nav_tahun.php"><i class="fa fa-circle-o"></i> Berdasarkan Tahun</a></li>
                <li><a href="nav_subjek.php"><i class="fa fa-circle-o"></i> Berdasarkan Subjek </a></li>
                <li><a href="nav_jurusan.php"><i class="fa fa-circle-o"></i> Berdasarkan Jurusan </a></li>
                 <li><a href="nav_pengarang.php"><i class="fa fa-circle-o"></i> Berdasarkan Pengarang </a></li>
              </ul>
            </li>
               <li><a href="users.php"><i class="fa fa-group"></i><span>Users
                (<?php 
             $query = mysqli_query($connect, "SELECT *  FROM statistik WHERE id_statistik ='1'");
                      $dataencrypt = mysqli_fetch_array($query); ?>
            <?php echo $dataencrypt['jumlah_user']; 
                      ?> )</span></a></li>
             <li><a href="profil.php"><i class="fa fa-user fa-lg"></i><span>Profil</span></a></li>
         
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
               
           
          </ul>
        </section>
      </aside>
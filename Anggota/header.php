
<?php include 'config.php'; ?>
<?php
session_start();
include('../config.php');
if(empty($_SESSION['username'])){
header("location:../index.php");
}
if($_SESSION['status']== '1'){
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
$last = $_SESSION['username'];
$sqlupdate = "UPDATE users SET last_activity=now() WHERE username='$last'";
$queryupdate = mysqli_query($connect, $sqlupdate);
?>
<!DOCTYPE html>
<html>
<?php
$user = $_SESSION['username'];
$query = mysqli_query($connect,"SELECT job_title,last_activity FROM users WHERE username='$user'");
$data = mysqli_fetch_array(  $query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Repository UIN SUSKA RIAU</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   <!--  <link rel="stylesheet" type="text/css" href="css/style.css"> -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
  



      <script type="text/javascript" src="datatabel/jquery-3.1.0.js"></script>
  <script type="text/javascript" src="datatabel/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="datatabel/css/jquery.dataTables.min.css">
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>e
      styl
    <![endif]-->



    
 
    <style type="text/css">
      .navbar {
        color: green;  
      }
.notification {
  background-color: #009090;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: 1px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}
    </style>
   
  </head>
  <body>

 

  <nav class="navbar navbar-teal navbar-fixed-top">
    <!-- <img src="images/sitelogo.png"> -->
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="index.php"> <img alt="Brand" class="Brand" src="images/uin-suska.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Tentang <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pencarian <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tahun.php">Pencarian Berdasarkan Tahun</a></li>
            <li><a href="subjek.php">Pencarian Berdasarkan Subjek</a></li>
             <li><a href="jurusan.php">Pencarian Berdasarkan Jurusan</a></li>
            <li><a href="pengarang.php">Pencarian Berdasarkan Pengarang</a></li>
            
          </ul>
        </li>
        <li ><a class="notification" href="tabel_permintaan.php"> <i class=" glyphicon glyphicon-envelope"></i> Pesan Masuk <span class="badge"> <?php
                      $query = mysqli_query($connect, "SELECT count(*) totalpesan FROM permintaan_data WHERE nama_anggota='$user'");
                      $dataencrypt = mysqli_fetch_array($query);
                       echo $dataencrypt['totalpesan']; 
                      ?> </span> </a></li>

                      <li><!-- 
                         <a href="#" class="notification">
  <span>Inbox</span>
  <span class="badge">3</span>
</a>  -->



                      </li>
      </ul>

 <ul class="nav navbar-nav navbar-right">  
 
  
            <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>     <?php  $query = mysqli_query($connect, "SELECT * FROM users WHERE username='$user'");
                      $data = mysqli_fetch_array($query); 
                      echo $data['username'];
                       ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>  
                      </li>
            <li><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> LOGOUT</a></li>
           <li><a href="profil.php"> <i class="glyphicon glyphicon-user"></i> PROFIL</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-right">

           <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>

      </form>


      
     

      
     
    </div><!-- /.navbar-collapse -->
     
  </div><!-- /.container-fluid -->
</nav>
<div class="container col-sm-12  ">
    <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-2 col-lg-offset-1 " >
              <img src="../images/logo.png"  style="width: 400px;">
            </div>
       <!--   
        <h3 class="page-header text-center">
                    Selamat Datang Di Repository UIN Sultan Syarif Kasim Riau                  
        </h3>    --> 
    </div> 
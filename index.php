

<?php include 'config.php'; ?>
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
      </ul>
      <form class="navbar-form navbar-right" action="pencarian.php" method="get">
           
           <div class="input-group">

                        <input name="cari" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
      
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login.php">Login</a></li>
        <li><a href="new-account.php">Create Account</a></li>
        
      </ul>
      
     
    </div><!-- /.navbar-collapse -->
     
  </div><!-- /.container-fluid -->
</nav>
<!-- col-sm-offset-2 -->
<!-- batas body paling ataas -->

  <?php    
                    if(isset($_GET['message'])){ 
                        $message = $_GET['message'];
                        echo "<hr><h5 class='alert alert-danger text-center'>$message</h5>";
                    } 
                    ?>
<div class="container col-sm-12  ">
    <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-2 col-lg-offset-1 " >
              <img src="images/logo.png"  style="width: 400px;">
            </div>
       <!--   
        <h3 class="page-header text-center">
                    Selamat Datang Di Repository UIN Sultan Syarif Kasim Riau                  
        </h3>    --> 
    </div> 
<!--     <div class="container-fluid">
       <div class="  col-sm-8 col-sm-offset-2">
                  
                        <div class="input-group search">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>

                        </span>
                    </div>
       </div>
 --><br><br><br>
    
    <div class="container-fluid">
       <div class="  col-sm-8 col-sm-offset-2">
                  <form action="pencarian.php" method="get">
                        <div class="input-group search">
                        <input name="cari" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>

                        </span>
                    </div></form>
       </div>
<br><br><br><br>
</div></div>
   
</div>
<div class="row col-sm-12 ">
  
<div class="col-sm-4  " >
  <ul class="list-group">
    <a href="#" class="list-group-item active"style="background-color: #009090;">
    Fakultas
  </a>
  
<?php   $query = mysqli_query($connect, "SELECT * FROM id_fakultas WHERE nama_fakultas LIKE '%Fakultas%' ");
while ($data = mysqli_fetch_array($query)) { ?>

  <li class="list-group-item">
   <a href="pencarian_fakultas.php?id_fakultas=<?php echo $data['id_fakultas']; ?>"><?php echo $data['nama_fakultas']; ?></a>
 <span class="badge"> <?php echo $data['jumlah_fakultas']; ?></span>
</li>
  <?php } ?>
   <li class="list-group-item">
 <a href="jurusan.php?">
 selengkapnya</a></li>
</ul>
                    
</div> 

<div class="col-sm-2  ">
 
  <ul class="list-group">
 <a href="#" class="list-group-item active"style="background-color: #009090;">
    Tahun
  </a>
  
<?php   $query = mysqli_query($connect, "SELECT * FROM tahun ORDER BY th_tahun DESC LIMIT 8  ");
while ($data = mysqli_fetch_array($query)) { ?>


  <li class="list-group-item">
    <span class="badge"><?php echo $data['jumlah']; ?>

    </span>
 <a href="tahun_pencarian.php?id_tahun=<?php echo $data['id_tahun']; ?>"> <?php echo $data['th_tahun']; ?></a></li>
  <?php } ?>
   <li class="list-group-item"><a href="tahun.php?">
 sekengkapnya</a></li>
</ul>
</div>

<div class="col-sm-3 ">
   <ul class="list-group">
 <a href="#" class="list-group-item active"style="background-color: #009090;">
   Pengarang
  </a>
<?php $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  LIMIT 8 ");
while ($data = mysqli_fetch_array($query)) { ?>
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">1</span>
    <a href="pencarian_penulis.php?nama=<?php echo $data['nama_penulis']; ?>">
      <?php echo $data['nama_penulis']; ?></a></li>
      <?php  } ?>
      <li class="list-group-item"><a href="pengarang.php?">
 Selengkapnya</a></li>
</ul>
</div>

<div class="col-sm-3 ">
   <ul class="list-group">
 <a href="#" class="list-group-item active"style="background-color: #009090;">
   Subjek
  </a>
<?php $query = mysqli_query($connect, "SELECT * FROM sub_subjek1  LIMIT 8 ");
while ($data = mysqli_fetch_array($query)) { ?>
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge"> <?php echo $data['jumlah']; ?></span>
    <a href="pencarian_subjek.php?id_subjek1=<?php echo $data['id_subjek1']; ?>">
      <?php echo $data['nama_subjek1']; ?></a></li>
      <?php  } ?>
      <li class="list-group-item"><a href="pengarang.php?">
 Sengkapnya</a></li>
</ul>
</div>


</div> 
</div></div>
<div class="row col-sm-12">
 

<div class="container-fluid col-sm-12 ">
   <h3 class="ds-div-head">Recently Added</h3>
<ul class="list-group">
  <li class="list-group-item">
 

      <table id="tabel1"   >
        <thead>
            <tr>
            <th></th>                                                          
           </tr>
            </tr>
        </thead>
        <tfoot>
            <tr>             
            <th></th>                                                    
            </tr>
            </tr>
        </tfoot>
        <tbody>
  <?php
                             $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe= idtipe
                              INNER JOIN tahun ON id_tahun= tahun ORDER BY id_karyailmiah DESC LIMIT 10 ");
              while ($data = mysqli_fetch_array($query)) { ?>
                          <tr>
                       <td>
    <a href="detail.php?id_karyailmiah= <?php echo $data["id_karyailmiah"]; ?>">
    <p>  <?php echo $data['nama_penulis']; ?>, (<?php echo $data['th_tahun']; ?>) <i><?php echo $data['judul']; ?></i>. <?php echo $data['nama_tipe']; ?>, <?php echo $data['lembaga_penulis']; ?>. <br>
                     <a class="mboh btn-xs btn-danger"><small>Dilihat <span class="badge"><?php echo $data['dilihat'] ?></span> </small></a>
                 <a class="mboh btn-xs btn-success"><small>Dipreview <span class="badge"><?php echo $data['preview'] ?></span>  </small></a>
                  <a class=" mboh btn-xs btn-primary"><small>Didownload <span class="badge"><?php echo $data['download'] ?></span> </small></a>    
                            </td>
                          </tr>            
                               
                          <?php
                        } ?>
        </tbody>
    </table>
          </li>

</ul>

</div>
</div> 
</div><!-- batas wilayah sidebar paling bawah  --> 
 <footer>
        
                <div class="col-sm-12 text-center well">
                    <p>Copyright &copy; Repository 2019</p>
                </div>
                <!-- /.col-lg-12 -->
           
            <!-- /.row -->
        </footer>

        <script >
         
          window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
        </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
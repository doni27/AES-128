
<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Data Tables</title>
      <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 

  <script type="text/javascript" src="datatabel/jquery-3.1.0.js"></script>
  <script type="text/javascript" src="datatabel/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="datatabel/css/jquery.dataTables.min.css">
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- <link rel="stylesheet" type="text/css" href="datatabel/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="datatabel/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="datatabel/css/dataTables.bootstrap.css"> -->
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
            <li><a href="subjeck.php">Pencarian Berdasarkan Subjek</a></li>
             <li><a href="jurusan.php">Pencarian Berdasarkan Jurusan</a></li>
            <li><a href="pengarang.php">Pencarian Berdasarkan Pengarang</a></li>
            
          </ul>
        </li>
        <li ><a class="notification" href="tabel_permintaan.php"> <i class=" glyphicon glyphicon-envelope"></i> Pesan Masuk <span class="badge"> <?php
                      $query = mysqli_query($connect, "SELECT count(*) totalpesan FROM permintaan_data WHERE nama_anggota='doni'");
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> LOGOUT</a></li>
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
         
        <h3 class="page-header text-center">
                    Selamat Datang Di Repository UIN Sultan Syarif Kasim Riau                  
        </h3>    
    </div> 




      
     
    </div><!-- /.navbar-collapse -->
     
  </div><!-- /.container-fluid -->
</nav>

 <div class="container-fluid">
       <div class="  col-sm-10 col-sm-offset-1">
         <ul class="list-group-item"> 
  <!--  <div class="col-sm-3"> 
         <select class="form-control">
  <option value="volvo">Exspor</option>
  <option value="saab">Update Terbaru</option>
  <option value="opel">Update Terlama</option>
 >
</select> 
  </div>
    <div class="col-sm-3"> 
         <select class="form-control">
  <option value="volvo">Urutkan</option>
  <option value="saab">Update Terbaru</option>
  <option value="opel">Update Terlama</option>
 >
</select> 
  </div> 
  <form action="" method="get">
    <div class="input-group col-sm-3 right">
        <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="cari">
                  <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
    </div>
    </form> -->















  <table id="tabel1"  class="display"    >
        <thead>
            <tr>
                  <th>No</th>
                                    <th>Nama</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Tipe</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <th>Aksi</th>                                  
                                </tr>
            </tr>
        </thead>
        <tfoot>
            <tr>
                  <th>No</th>
                                    <th>Nama</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Tipe</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <th>Aksi</th>                                  
                                </tr>
            </tr>
        </tfoot>
        <tbody>
                
                           <?php $i=1; ?>
                        <?php
                          $query = mysqli_query($connect, "SELECT * FROM permintaan_data INNER JOIN tipe ON id_tipe= tipeid");
                          while ($data = mysqli_fetch_array($query)) { ?>
                           
                          <tr>
                         
                                                                       
                                    
                            <td><?= $i; ?></td>
                           
                            <td><?php echo $data['nama_anggota']; ?></td>
                            <td><?php echo strtolower( substr($data['judul'],0,300)); ?></td>
                            <td><?php echo $data['file']; ?></td>
                            <td><?php echo $data['nama_tipe']; ?> </td>
                            <td><?php echo $data['tanggal']; ?></td>
                             <td><?php echo $data['status']; ?></td>
                            <td> <?php 

                               echo'<a class="  btn btn-primary btn-group  glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Preview File"  href="karyailmiah-input.php"></a>&nbsp;' ;
                    



                             ?></td>
                            <td><a href="permintaan_data_proses.php?id_permintaan= <?php echo $data["id_permintaan"]; ?>&tbl=tolak" class=" btn btn-primary">Hapus</a>
                              <!-- <a href=" file_engkrip.php?id_karyailmiah= <?php echo $data["id_karyailmiah"]; ?>">detail engkrip</a> -->
                            </td>
                          </tr>            
                          <?php $i++; ?>        
                          <?php
                        } ?>
        </tbody>
    </table>
  </div>
  <script>
  $(document).ready(function(){
    $('#tabel1').DataTable();
});
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

</html>


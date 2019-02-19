<?php
session_start();
include('../config.php');
if(empty($_SESSION['username'])){
header("location:../index.php");
}
$last = $_SESSION['username'];
$sqlupdate = "UPDATE users SET last_activity=now() WHERE username='$last'";
$queryupdate = mysqli_query($connect, $sqlupdate);
?>
<!DOCTYPE html>
<html>
<?php
$user = $_SESSION['username'];
$query = mysqli_query($connect,"SELECT fullname,job_title,last_activity FROM users WHERE username='$user'");
$data = mysqli_fetch_array(  $query);
?>
  <head>
    <title>Halo, <?php echo $data['fullname']; ?> - Aplikasi Enkripsi dan Dekripsi Repositori UIN SUSKA RIAU</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">


    <!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<!--     <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <script src="js/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>



      <script type="text/javascript" src="datatabel/jquery-3.1.0.js"></script>
  <script type="text/javascript" src="datatabel/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="datatabel/css/jquery.dataTables.min.css">
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">



  <!--   <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    
<!--  <script type="text/javascript" src="datatabel/jquery-3.1.0.js"></script>
  <script type="text/javascript" src="datatabel/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="datatabel/css/jquery.dataTables.min.css">
   <link href="css/bootstrap.min.css" rel="stylesheet"> -->
   <!--  <link rel="stylesheet" type="text/css" href="css/style.css"> -->


<!--    <script src="js/jquery.tinymce.min.js"></script>
    <script src="js/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
   -->
   <!--  <script src="js/jquery.js"></script> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
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
              <p style="margin-top:-5px;"><?php echo $data['fullname']; ?></p>
              <p class="designation"><?php echo $data['job_title']; ?></p>
              <p class="designation" style="font-size:6pt;">Aktivitas Terakhir: <?php echo $data['last_activity'] ?></p>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
              <li><a href="karyailmiah.php"><i class="fa fa-file-o"></i><span>Karya Ilmiah</span></a></li>
               <li class="treeview"><a href="#"><i class="fa fa-file-o"></i><span>File data skripsi</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="file_data.php"><i class="fa fa-circle-o"></i> data</a></li>
                <li><a href="file.php"><i class="fa fa-circle-o"></i> tambah</a></li>
              </ul>
            </li>
            <li><a href="permintaan_data.php"><i class="fa fa-list-alt"></i><span> Permintaan Data</span></a></li>
              <li class="treeview"><a href="#"><i class="fa fa-file-o"></i><span>File</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="encrypt.php"><i class="fa fa-circle-o"></i> Enkripsi</a></li>
                <li><a href="decrypt.php"><i class="fa fa-circle-o"></i> Dekripsi</a></li>
              </ul>
            </li>
              <li class="treeview"><a href="#"><i class="fa fa-file-o"></i><span>Data Master</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Fakultas.php"><i class="fa fa-circle-o"></i> Data Fakultas</a></li>
                <li><a href="jurusan.php"><i class="fa fa-circle-o"></i> Data Jurusan </a></li>
                <li><a href="tahun.php"><i class="fa fa-circle-o"></i> Data Tahun </a></li>
                 <li><a href="tipe.php"><i class="fa fa-circle-o"></i> Data Tipe </a></li>
              </ul>
            </li>
            
            
            <li><a href="history.php"><i class="fa fa-list-alt"></i><span>Daftar List</span></a></li>
            <li><a href="about.php"><i class="fa fa-info"></i><span>Tentang</span></a></li>
            <li><a href="help.php"><i class="fa fa-question-circle"></i><span>Bantuan</span></a></li>
          
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Reposiotry UIN SUSKA</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Daftar List Enkripsi dan Dekripsi</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
             <div class="card">
              <div class="card-body">
                <div class="table-responsive">

        <?php
        if(isset($_POST['checkBoxArray'])){

             foreach($_POST['checkBoxArray'] as $checkBoxValue){
        $bulk_options = $_POST['bulk_options'];
        switch($bulk_options)
        {
            case 'Draft':
                $query = "UPDATE karya_ilmiah SET status_publikasi ='draft' WHERE id_karyailmiah ={$checkBoxValue}";
                $bulk_draft = mysqli_query($connect, $query);
               
 
                break;
                
            case 'Publish':
                $query = "UPDATE karya_ilmiah SET status_publikasi ='publish' WHERE id_karyailmiah ={$checkBoxValue}";
                $bulk_publish = mysqli_query($connect, $query);
                
    
                break;
                
            case 'Delete':
                $query = "DELETE FROM posts WHERE post_id ={$checkBoxValue}";
                $bulk_delete = mysqli_query($connection, $query);
                confirm_query($bulk_delete);
                break;
                
            case 'Clone':
                
                $query = "SELECT * FROM posts WHERE post_id = $checkBoxValue";
                $get_posts_data = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($get_posts_data)){

                $post_id = $row['post_id'];
                $post_author = $row['post_author'];
                $post_title = $row['post_title'];
                $post_category_id = $row['post_category_id'];
                $post_status = $row['post_status'];
                $post_image = $row['post_image'];
                $post_tags = $row['post_tags'];
                $post_date = $row['post_date'];
                $post_content =$row['post_content'];

                }
                $query = "INSERT INTO posts(post_category_id,post_title,post_author,post_status,post_tags,post_content,post_date,post_image) ";
    
                $query .= "VALUES ($post_category_id,'$post_title','$post_author','$post_status','$post_tags','$post_content',now(),'$post_image')";
                $clone_post = mysqli_query($connection, $query);
                confirm_query($clone_post);
                break;
                
            case "Reset Views":
                $query = "UPDATE posts SET post_views = 0 WHERE post_id = $checkBoxValue";
                $reset_view = mysqli_query($connection, $query);
                confirm_query($reset_view);
                
            default:
                break;
        }
    }
        }
        if(isset($_GET['delete'])){
            
            delete_posts(); 
        }
        ?>
          <style>
              #BulkOptionContainer{
                  padding:0;
              }
            
            </style>
           
           <form action="" method="post">
            <div id="BulkOptionContainer" class="col-md-4">
                    <select class="form-control" name="bulk_options" id="">
                        <option value="">Select Option</option>
                        <option value="Draft">Draft</option>
                        <option value="Publish">Publish</option>
                        <option value="Delete">Delete</option>
                        <option value="Clone">Clone</option>
                        <option value="Reset Views">Reset Views</option>
                    </select>
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-primary" value="Apply">
              
            </div>
            <br><br><br>

      <table id="tabel1" class="table striped"  >
        <thead>
            <tr>
                   <th><input id="selectAllBoxes" type="checkbox"></th>
                         <th>No</th>
                          <th>Tipe</th>
                          <th>Status</th>
                          <th>Diperbarui</th>
                          <th>Penulis</th>
                          <th>Judul</th>
                          <th>Editor</th>
                          <th>Aksi</th>                                                    
        
            </tr>
        </thead>
        <tfoot>
               <tr>
                   <th></th>
                         <th>No</th>
                          <th>Tipe</th>
                          <th>Status</th>
                          <th>Diperbarui</th>
                          <th>Penulis</th>
                          <th>Judul</th>
                          <th>Editor</th>
                          <th>Aksi</th>                                                    
        
            </tr>
        </tfoot>
        <tbody> <?php $i=1; ?>
                               <?php
                               $query = "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe ORDER BY id_karyailmiah DESC ";
                                $get_posts = mysqli_query($connect,$query);
                                
                                while($row = mysqli_fetch_assoc($get_posts)){
                                    
                           $id = $row['id_karyailmiah'];
                            $tipe = $row['nama_tipe']; 
                            $status = $row['status_publikasi'];
                            $tanggal = $row['tgl_upload'];
                            $penulis = $row['nama_penulis'];
                            $judul = strtolower($row['judul']);
                            $editor = $row['username'];
                                                             
                                    
                                    echo "<tr>";
                                    ?>
                                    <td><input class='checkBoxes' type='checkbox' name="checkBoxArray[]" value="<?php echo $id; ?>"></td>
                                                                       
                                    <?php
                                     echo" <td> $i </td>";
                                    echo " <td> $tipe </td>";
                            echo "<td> $status </td>";
                            echo "<td>  $tanggal </td>";
                            echo "<td> $penulis </td>";
                            echo "<td> $judul </td>";
                            echo " <td> $editor </td>";
                                   echo "<td><a href=' file_detail.php?id_karyailmiah= $id'><i class='glyphicon glyphicon-search btn btn-primary'></i> </a>";
                              echo "
                              <a href='file_hapus.php?id_karyailmiah=$id' onclick='return confirm('yakin');' ><i class='glyphicon glyphicon-trash btn btn-success'></i></a> </td>";
                         echo " </tr>"; 
                                  $i++;  
                                }
                                ?>
                                  </tbody>
                        </table>
            </form>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/scripts.js"></script>
    <!-- <script src="../assets/js/jquery-2.1.4.min.js"></script> -->
    <script type="text/javascript">
   
                  $(document).ready(function(){
    $('#tabel1').DataTable();
});


        </script>
  <!--   <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/datatables/js/jquery.dataTables.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script> -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>

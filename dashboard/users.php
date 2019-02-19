<?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h3><i class="fa fa-dashboard"></i> Users</h3>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Daftar Users</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
             <div class="card">
              <div class="card-body">
                <div class="table-responsive">

                                                    <style>
                  .navbar {
        color: green;  
      }
.notification {
 /*  background-color: #009090; */
  color:  white;
  text-decoration: none;
  padding: 2px 5px;
  position: relative;
  display: inline-block;
  border-radius: 7px;
}

.notification:hover {
  background: green;
  color: white;
}

.notification .badge {
  position: absolute;
  top: -12px;
  right: -10px;
  padding: 2px 5px;
  border-radius: 50%;
  background: #383838;
  color: white;
}
.breadcrumb a{

   top: 7px; 
 
  font-weight: bold;
}

 .badge {

  color: green;
 
}


              </style>

           <ul class="breadcrumb"><?php 
             $query = mysqli_query($connect, "SELECT *  FROM statistik WHERE id_statistik ='1'");
                      $dataencrypt = mysqli_fetch_array($query); ?>
              <li>
                 <a class="notification btn-xs btn-success">  User <span class="badge"> <?php
                       echo $dataencrypt['jumlah_user']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Anggota  <span class="badge"> <?php
                       echo $dataencrypt['jumlah_user_anggota']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Admin <span class="badge"> <?php
                       echo $dataencrypt['jumlah_user_admin']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Menunggu Konfirmasi <span class="badge"> <?php
                       echo $dataencrypt['jumlah_user_daftar']; 
                      ?> </span> </a>
              </li>



            </ul>




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
              

               
                <a href="users_tambah.php" class="btn btn-success">Tambah</a>
                      
                        
            </div>
<br><br>
             <table  id="file" class="table striped">
                            
                                  
                                   <thead>
                       <tr>
                           <td><input id="selectAllBoxes" type="checkbox"></td>
                         
                          <td><strong>NIM/NIP</strong></td>
                          <td><strong>Nama</strong></td>
                          <td><strong>Jurusan</strong></td>
                          <td><strong>Jumlah Permintaan</strong></td>
                          <td><strong>Tanggal</strong></td>
                          <td><strong>Status</strong></td>
                            <td><strong>Email</strong></td>
                          <td><strong>Aksi</strong></td>
                     
                        
                        </tr>
                      </thead>
                      <tfoot>
                       <tr>
                        <td></td>
                            <td><strong>NIM/NIP</strong></td>
                          <td><strong>Nama</strong></td>
                          <td><strong>Jurusan</strong></td>
                          <td><strong>Jumlah Permintaan</strong></td>
                          <td><strong>Tanggal</strong></td>
                          <td><strong>Status</strong></td>
                            <td><strong>Email</strong></td>
                          <td><strong>Aksi</strong></td>
                          
                        </tr>
                      </tfoot>
                            </thead>
                            <tbody>
                            
                               <?php
                               $query = "SELECT * FROM users ";
                                $get_posts = mysqli_query($connect,$query);
                                
                                while($row = mysqli_fetch_assoc($get_posts)){
                           $id = $row['nim'];          
                           $nama = $row['username'];
                           $jurusan = $row['jurusan'];
                             $jumlah = $row['permintaan_data'];
                         
                          
                            $tanggal = $row['join_date'];
                            $penulis = $row['user_role'];
                            $judul = $row['email'];
                           
                                                             
                                    
                                    echo "<tr>";
                                    ?>
                                    <td><input class='checkBoxes' type='checkbox' name="checkBoxArray[]" value="<?php echo $id; ?>"></td>
                                                                       
                                    <?php
                                    
                                    echo " <td> $id </td>";
                                    echo " <td> $nama </td>";
                                      echo " <td> $jurusan </td>";
                                         echo " <td> $jumlah </td>";
                                  
                          
                            echo "<td>  $tanggal </td>";
                            echo "<td> $penulis </td>";
                            echo "<td> $judul </td>";
                            // echo " <td> $editor </td>";
                                   echo "<td>
                              
                              <a href='users.php?change_to_admin=$id'  class='btn-xs btn-warning btn-xs'>Admin</a>                           
                                 <a href='users.php?change_to_anggota=$id'class='btn-xs btn-primary '>Anggota</a>
                                  <a href=' file_detail.php?id_karyailmiah= $id' class=' btn-xs btn-success '>Delete</a>
                                 </td>";
                             
                                  
                                }
                                ?>
                                   <?php
                                 if(isset($_GET['change_to_admin'])){
                                    
                                       $id = $_GET['change_to_admin'];
    $query = "UPDATE users SET user_role ='Admin', status = '1' WHERE username = '$id'";
    $change_to_admin = mysqli_query($connect,$query);
    
   
                                }
                                
                                 if(isset($_GET['change_to_anggota'])){
                                      $id = $_GET['change_to_anggota'];
    $query = "UPDATE users SET user_role ='Anggota', status = '2' WHERE username = '$id'";
    $change_to_anggota = mysqli_query($connect,$query);
                                }
                                
                                if(isset($_GET['delete'])){
                                    
                                    delete_users();
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
    <!-- <script src="js/jquery-3.3.1.js"></script> -->
    <script src="js/scripts.js"></script>
   <!--  <script src="../assets/js/jquery-2.1.4.min.js"></script> -->
    <script type="text/javascript">


                  $(document).ready(function(){
    $('#file').DataTable();
});

   
        </script>
  <!--   <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/datatables/js/jquery.dataTables.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script> -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
   <!--   $(document).ready(function() {
        $('#file').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": true,
          "order": [0, "asc"]
        });
        }); -->
<?php include'header.php'; ?>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h4><i class="fa fa-dashboard"></i> Data Karya Ilmiah</h4>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Daftar List Karya Ilmiah</li>
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
                 <a class="notification btn-xs btn-success">  Karya Ilmiah <span class="badge"> <?php
                       echo $dataencrypt['jumlah_karya_ilmiah']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Dokumen  <span class="badge"> <?php
                       echo $dataencrypt['jumlah_dokumen']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Enkripsi <span class="badge"> <?php
                       echo $dataencrypt['jumlah_engkripsi']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Dekripsi <span class="badge"> <?php
                       echo $dataencrypt['jumlah_dekripsi']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Publish <span class="badge"> <?php
                       echo $dataencrypt['jumlah_karya_ilmiah_publish']; 
                      ?> </span> </a>
              </li>
              <li>
                 <a class="notification btn-xs btn-success"> Draft <span class="badge"> <?php
                       echo $dataencrypt['jumlah_karya_ilmiah_draft']; 
                      ?> </span> </a>
              </li>
                 <li>
                 <a class="notification btn-xs btn-success"> Download <span class="badge"> <?php
                       echo $dataencrypt['jumlah_karya_ilmiah_draft']; 
                      ?> </span> </a>
              </li>
                 <li>
                 <a class="notification btn-xs btn-success"> Preview <span class="badge"> <?php
                       echo $dataencrypt['jumlah_karya_ilmiah_draft']; 
                      ?> </span> </a>
              </li>




            </ul>
           <form action="" method="post">
            <div id="BulkOptionContainer" class="col-md-4">
                    <select class="form-control" name="bulk_options" id="">
                        <option value="">Select Option</option>
                        <option value="Draft">Draft</option>
                        <option value="Publish">Publish</option>
                        <option value="Delete">Delete</option>
                   
                    </select>
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-primary" value="Apply">
               
                <a href="file_formtambah.php" class="btn btn-success">Tambah</a>
                      
                        
            </div>
<br><br>
             <table  id="file" class="table striped">
                            
                                  
                                   <thead>
                       <tr>
                           <td><input id="selectAllBoxes" type="checkbox"></td>
                         <td><strong>No</strong></td>
                          <td><strong>Tipe</strong></td>
                          <td><strong>Status</strong></td>
                          <td><strong>Diperbarui</strong></td>
                          <td><strong>Penulis</strong></td>
                          <td><strong>Judul</strong></td>
                          <td><strong>Editor</strong></td>
                          <td ><strong>Aksi</strong></td>
                         
                          
                        </tr>
                      </thead>
                      <tfoot>
                       <tr>
                         <td></td>
                       <td><strong>No</strong></td>
                          <td><strong>Tipe</strong></td>
                          <td><strong>Status</strong></td>
                          <td><strong>Diperbarui</strong></td>
                          <td><strong>Penulis</strong></td>
                          <td><strong>Judul</strong></td>
                          <td><strong>Editor</strong></td>
                          <td ><strong>Aksi</strong></td>
                           
                          
                        </tr>
                      </tfoot>
                            </thead>
                            <tbody>
                            


                              <?php $i=1; ?>
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
                                                                       
                                    
                                     <td> <?php echo $i ?> </td>
                                      <td> <a class="" href='file_detail.php?id_karyailmiah=<?php echo  $id ?>'><?php   echo $judul  ?></a>
                            <br><?php include'file_hitung_karya_ilmiah.php'; ?>
                  
                     <a class="mboh btn-xs btn-danger">Dokumen <span class="badge ">  <?php  echo $totalnya;  ?> </span></a><a class="mboh btn-xs btn-success">Engkripsi <span class="badge">  <?php  echo $total_statusnya;  ?></span> 
                            </a>&nbsp;<a class="mboh btn-xs btn-primary">Dekripsi <span class="badge"   ><?php  echo $totalstatus33;  ?> </span> 
                            </a>
                           </td>
                                     
                                    
                            <td><?php   echo $status ?></td>
                          <td><?php   echo  $tanggal ?></td>
                            <td><?php   echo $penulis ?></td>
                           <td><?php   echo $tipe ?> </td>
                            <td><?php   echo $editor ?></td>
                                  <td><a href="file_detail.php?id_karyailmiah=<?php   echo $id ?>"><i class="glyphicon glyphicon-search btn-xs btn-primary">Detail</i> 

                                    <a href="file_form_edit.php?id_karyailmiah=<?php   echo $id ?>" ><i class="fa fa-edit btn-xs btn-danger">Edit</i></a>

                                   </a> <a href="file_hapus.php?id_karyailmiah=<?php   echo $id ?>" onclick="return confirm('yakin');" ><i class="glyphicon glyphicon-trash btn-xs btn-success">Hapus</i></a> 

                                  </td>
                   
                         </tr>
                               <?php    $i++;  
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
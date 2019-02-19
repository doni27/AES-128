

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
            case 'Ditolak':
                $query = "UPDATE permintaan_data SET status ='Ditolak' WHERE id_permintaan ={$checkBoxValue}";
                $bulk_draft = mysqli_query($connect, $query);
               
 
                break;
                
            case 'Dsetujui':
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
                        <option value="Ditolak">Ditolak</option>
                        <option value="Publish">Disetujui</option>
                        <option value="Delete">Delete</option>
                        <option value="Clone">Clone</option>
                        <option value="Reset Views">Reset Views</option>
                    </select>
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-primary" value="Apply">
              
            </div>

             <table  id="file" class="table striped">
                            
                                  
                                   <thead>
                       <tr>
                           <td><input id="selectAllBoxes" type="checkbox"></td>
                          <td><strong>No</strong></td>
                          <td><strong>Nama</strong></td>
                          <td><strong>Judul</strong></td>
                          <td><strong>File</strong></td>
                          <td><strong>Tipe</strong></td>
                          <td><strong>Tanggal</strong></td>
                          <td><strong>Status</strong></td>
                          <td><strong>Aksi</strong></td>
                          <td><strong>Aksi</strong></td>
                        </tr>
                      </thead>
                      <tfoot>
                       <tr>
                        
                       <td><strong>No</strong></td>
                          <td><strong>Nama</strong></td>
                          <td><strong>Judul</strong></td>
                          <td><strong>File</strong></td>
                          <td><strong>Tipe</strong></td>
                          <td><strong>Tanggal</strong></td>
                          <td><strong>Status</strong></td>
                          <td><strong>Aksi</strong></td>
                          <td><strong>Aksi</strong></td>
                        </tr>
                      </tfoot>
                            </thead>
                            <tbody>
                              <?php $i=1; ?>
                               <?php
                                $query = "SELECT * FROM permintaan_data INNER JOIN tipe ON id_tipe= tipeid ORDER BY id_permintaan DESC ";
                                $get_posts = mysqli_query($connect,$query);
                                
                                while($row = mysqli_fetch_assoc($get_posts)){
                                    
                            $id = $row['id_permintaan'];
                            $nama = $row['nama_anggota']; 
                            $judul = strtolower($row['judul']);
                            $file = $row['file'];
                            $tipe = $row['nama_tipe'];
                            $tanggal = $row['tanggal'];
                            $status =  $row['status'];                                    
                                    
                                    echo "<tr>";
                                    ?>
                                    <td><input class='checkBoxes' type='checkbox' name="checkBoxArray[]" value="<?php echo $id; ?>"></td>
                                                                       
                                    <?php
                                    echo" <td> $i </td>";
                                    echo "<td>$nama</td>";
                                    echo "<td>$judul</td>";
                                    echo "<td>$file</td>";
                                    echo "<td>$tipe</td>";
                                    echo "<td>$tanggal</td>";
                                    echo "<td>$status</td>";
                                     
                                     echo "<td> <a href='permintaan_data_proses.php?id_permintaan=$id&tbl=terima' class='btn btn-success '>Terima </a> </td>";
   //echo "<td><a rel='$post_id' href='javascript:void(0)' class='btn btn-danger delete_link'>Delete</a></td>";
       //                             echo "<td><a onClick=\"javascript: return confirm('Are you sure?') \" class='btn btn-danger' href='>Delete</a></td>";
                                 echo "<td> <a href='permintaan_data_proses.php?id_permintaan=$id&tbl=terima' class='btn btn-primary '>Tolak </a> </td>";
                                    echo "</tr>";
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
    <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#file').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": true,
          "order": [0, "asc"]
        });
        });
        </script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/datatables/js/jquery.dataTables.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
<?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Permintan Data</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Daftar List Permintaan Data Karya Ilmiah</li>
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
                 <a class="notification btn-xs btn-success">  Permintaan <span class="badge"> <?php
                       echo $dataencrypt['jumlah_request']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Diterima  <span class="badge"> <?php
                       echo $dataencrypt['jumlah_request_diterima']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Ditolak <span class="badge"> <?php
                       echo $dataencrypt['jumlah_request_ditolak']; 
                      ?> </span> </a>
              </li>
                <li>
                 <a class="notification btn-xs btn-success"> Menunggu Konfirmasi <span class="badge"> <?php
                       echo $dataencrypt['jumlah_request_menunggu']; 
                      ?> </span> </a>
              </li>



            </ul>


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
                
            case 'Clone':
                $query = "UPDATE karya_ilmiah SET status_publikasi ='publish' WHERE id_karyailmiah ={$checkBoxValue}";
                $bulk_publish = mysqli_query($connect, $query);
                
    
                break;
                
            case 'Delete':
                $query = "DELETE FROM permintaan_data WHERE id_permintaan ={$checkBoxValue}";
                $bulk_delete = mysqli_query($connect, $query);
            
                break;
                
            case 'Disetujui':
            include "AES.php";  
  $query = mysqli_query($connect, "SELECT * FROM permintaan_data  WHERE id_permintaan={$checkBoxValue}");
      $data2 = mysqli_fetch_array($query);


      $file_name  = $data2['file'];
     $file_path  = $data2['url_file'];
    $key        = $data2['sandi_dokumen'];
   
   
    $file_size  = filesize($file_path);
   
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "download/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);       $plain       =
$aes->decrypt($filedata);       fwrite($fopen2, $plain);    }    $query1 =



"UPDATE permintaan_data SET status ='Disetujui', url_file ='$cache' WHERE id_permintaan =
{$checkBoxValue}";      $sql1= mysqli_query($connect, $query1);
      
  



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
                        <option value="Disetujui">Disetujui</option>
                        <option value="Delete">Delete</option>
                      
                    </select>
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-primary" value="Apply">
              
            </div>
            <br><br>
             <table  id="file" class="table striped">
                            
                                  
                                   <thead>
                       <tr>
                           <td><input id="selectAllBoxes" type="checkbox"></td>
                          <td><strong>No</strong></td>
                          <td><strong>Nama</strong></td>
                          <td><strong>Jurusan</strong></td>
                          <td><strong>Judul</strong></td>
                          <td><strong>File</strong></td>
                          <td><strong>Tipe</strong></td>
                          <td><strong>Tanggal</strong></td>
                          <td><strong>Status</strong></td>
                          <td width="15%"><strong>Aksi</strong></td>
                       
                          
                        </tr>
                      </thead>
                      <tfoot>
                       <tr>
                        <td></td>
                       <td><strong>No</strong></td>
                          <td><strong>Nama</strong></td>
                          <td><strong>Jurusan</strong></td>
                          <td><strong>Judul</strong></td>
                          <td><strong>File</strong></td>
                          <td><strong>Tipe</strong></td>
                          <td><strong>Tanggal</strong></td>
                          <td><strong>Status</strong></td>
                          <td width="15%"><strong>Aksi</strong></td>
                     
                            
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
                                $jurusan = $row['jurusan']; 
                            $judul = strtolower( substr($row['judul'],0,50));
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
                                     echo "<td>$jurusan</td>";?>
                                  <td>   <a href="file_detail.php?id_karyailmiah=<?php echo $row['id_karya_ilmiah']; ?>" title=""><?php echo $judul ;?></a></td>
                                  <?php 
                                    echo "<td>$file</td>";
                                    echo "<td>$tipe</td>";
                                    echo "<td>$tanggal</td>";
                                    echo "<td>$status</td>";
                                     
                                     echo "<td> <a href='permintaan_data_proses.php?id_permintaan=$id&tbl=terima' class='btn-xs btn-success '>Terima</a> <a href='permintaan_data_proses.php?id_permintaan=$id&tbl=terima' class='btn-xs btn-primary '>Tolak</a> </td>";
                      
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
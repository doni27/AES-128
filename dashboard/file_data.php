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
           <form action="" method="get">
          
  
            
              
           <div class="row">
<div class="col-md-12">
  <div class="col-md-3">
 
          <select class="form-control" name="filter" id="filter">
            <option value="">Filter Berdasarkan</option>
            <option value="1">Per Tanggal</option>
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
                   
                    </select>



       <br>

        <div id="form-tanggal">
            <label >Tanggal</label>
            <input  type="text" name="tanggal" class="input-tanggal" />
          <br><br>
        </div>

        <div id="form-bulan">
            
            <select class="form-control" name="bulan" >
           
                <option value="">Pilih Bulan</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br>
        </div>

        <div id="form-tahun" >
            
               <select class="form-control" name="tahun" >
                <option value="">Pilih Tahun</option>
                <?php
                $query = "SELECT YEAR(tgl_upload) AS tahun FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe GROUP BY YEAR(tgl_upload)"; // Tampilkan tahun sesuai di tabel transaksi
                $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo '<option value="'.$data['tahun'].'">'.$data['tahun'].'</option>';
                }
                ?>
            </select>
            <br>
        </div> 
        <button  type="submit" class="btn-xs btn-primary">Tampilkan</button>
        <a href="laporan.php" class="btn-xs btn-success">Reset Filter</a>

</div>



<div id="BulkOptionContainer" class="col-md-2">
                    <select class="form-control" name="bulk_options" id="">
                        <option value="">Select Option</option>
                        <option value="Draft">Draft</option>
                        <option value="Publish">Publish</option>
                        <option value="Delete">Delete</option>
                   
                    </select>
            </div>
            <div class="col-md-6">
                <input type="submit" class="btn btn-primary" value="Apply">
               
                <a href="file_formtambah.php" class="btn btn-success">Tambah</a>
                      
                        
            </div>



  



</div></div>

<div class="row" >
  


            <div class="col-md-4">
 <?php
    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
        $filter = $_GET['filter']; // Ambil data filder yang dipilih user

        if($filter == '1'){ // Jika filter nya 1 (per tanggal)
            $tgl = date('d-m-y', strtotime($_GET['tanggal']));

            echo '<b>Data Karya Ilmiah Tanggal '.$tgl.'</b><br /><br />';
            echo '<a href="print_karyailmiah.php?filter=1&tanggal='.$_GET['tanggal'].'" class="btn-xs btn-primary">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan  WHERE DATE(tgl_upload)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
        }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

            echo '<b>Data Karya Ilmiah Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br />';
            echo '<a href="print_karyailmiah.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'" class="btn-xs btn-primary">Cetak PDF</a><br />';

            $query = "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan  WHERE MONTH(tgl_upload)='".$_GET['bulan']."' AND YEAR(tgl_upload)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        }else{ // Jika filter nya 3 (per tahun)
            echo '<b>Data Karya Ilmiah Tahun '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="print_karyailmiah.php?filter=3&tahun='.$_GET['tahun'].'" class="btn-xs btn-primary">Cetak PDF</a><br />';

            $query = "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan WHERE YEAR(tgl_upload)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
        }
    }else{ // Jika user tidak mengklik tombol tampilkan
        echo ' <b>Semua Data Karya Ilmiah</b>     ';
        echo '    <a href="print_karyailmiah.php" class="btn-xs btn-primary">Cetak PDF</a><br />';

          $query = "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan ORDER BY id_karyailmiah DESC "; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
    }
    ?></div> </div>
              <div class="row">
                
             <div class="col-md-12">
               
             
             <table  id="file" class="table striped">
                            
                                  
                                   <thead>
                       <tr>
                           <td><input id="selectAllBoxes" type="checkbox"></td>
                        
                          <td><strong>Judul</strong></td>
                          <td><strong>Status</strong></td>
                          <td><strong>Diperbarui</strong></td>
                          <td><strong>Penulis</strong></td>
                          
                          <td><strong>Jurusan</strong></td>
                          <td ><strong>Aksi</strong></td>
                         
                          
                        </tr>
                      </thead>
                      <tfoot>
                       <tr>
                         <td></td>
                       
                          <td><strong>Judul</strong></td>
                          <td><strong>Status</strong></td>
                          <td><strong>Diperbarui</strong></td>
                          <td><strong>Penulis</strong></td>
                          
                          <td><strong>Jurusan</strong></td>
                          <td ><strong>Aksi</strong></td>
                           
                          
                        </tr>
                      </tfoot>
                            </thead>
                            <tbody>
                            


                              <?php $i=1; ?>
                               <?php
                             
                            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari  
                            $data = mysqli_num_rows($sql); 

    if($data > 0){
        while($row = mysqli_fetch_array($sql)){ 
                                   
                           $id = $row['id_karyailmiah'];
                            $tipe = $row['nama_tipe']; 
                            $status = $row['status_publikasi'];
                            $tanggal = $row['tgl_upload'];
                            $penulis = $row['nama_penulis'];
                            $judul = strtolower($row['judul']);
                            $editor = $row['nama_sub_jurusan'];
                             $fakultas = $row['fakultas'];
                                                             
                                    
                                    echo "<tr>";
                                    ?>
                                    <td><input class='checkBoxes' type='checkbox' name="checkBoxArray[]" value="<?php echo $id; ?>">  <?php echo $i ?></td>
                                                                       
                                    
                                     
                                      <td style=" text-align: justify;"> <a class="" href='file_detail.php?id_karyailmiah=<?php echo  $id ?>'><?php   echo $judul  ?></a>
                            <br><?php include'file_hitung_karya_ilmiah.php'; ?>
                  
                     <a class="mboh btn-xs btn-danger">Dokumen <span class="badge ">  <?php  echo $totalnya;  ?> </span></a><a class="mboh btn-xs btn-success">Engkripsi <span class="badge">  <?php  echo $total_statusnya;  ?></span> 
                            </a>&nbsp;<a class="mboh btn-xs btn-primary">Dekripsi <span class="badge"   ><?php  echo $totalstatus33;  ?> </span> 
                            </a>
                           </td>
                                     
                                    
                            <td><?php   echo $status ?></td>
                          <td><?php   echo  $tanggal ?></td>
                            <td><?php   echo $penulis ?></td>
                        
                            <td><?php   echo $editor ?>
                             
                            </td>
                                  <td><a href="file_detail.php?id_karyailmiah=<?php   echo $id ?>"><i class="glyphicon glyphicon-search btn-xs btn-primary">Detail</i> 

                                    <a href="file_form_edit.php?id_karyailmiah=<?php   echo $id ?>" ><i class="fa fa-edit btn-xs btn-danger">Edit</i></a>

                                   </a> <a href="file_hapus.php?id_karyailmiah=<?php   echo $id ?>" onclick="return confirm('yakin');" ><i class="glyphicon glyphicon-trash btn-xs btn-success">Hapus</i></a> 

                                  </td>
                   
                         </tr>
                               <?php    $i++;  
                                     } }else{ // Jika data tidak ada
        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
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

    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
     <script src="plugin/jquery-ui/jquery-ui.min.js"></script>  <!-- Load file plugin js jquery-ui -->
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
<?php include'header.php'; ?>

<?php
 $id_karyailmiah = $_GET['id_karyailmiah'];
  $id = $_GET['id_karyailmiah'];
    $update_id = $_GET['edit'];
    $query = "SELECT * FROM karya_ilmiah WHERE id_karyailmiah = $id_karyailmiah ";
    $get_update_data = mysqli_query($connect, $query);
    
        while($row = mysqli_fetch_assoc($get_update_data))
        {

        $idtipe = $row['idtipe'];
        $idjurusan = $row['idjurusan'];
        $idsubjek = $row['idsubjek'];
        $fakultas = $row['fakultas'];
        $judul = $row['judul'];
        $status_publikasi = $row['status_publikasi'];
        $nama_penulis = $row['nama_penulis'];
        $abstrak = $row['abstrak'];
        $lembaga_penulis = $row['lembaga_penulis'];
          $penerbit = $row['penerbit'];
        $issn = $row['issn'];
        $tgl_upload = $row['tgl_upload'];
        $username = $row['username'];
        $tahun = $row['tahun'];
        //
        $dokumen1 = $row['dokumen1'];
         $url_dokumen1 = $row['url_dokumen1'];
        $status_dokumen1 = $row['status_dokumen1'];
        //
        $dokumen2 = $row['dokumen2'];
        $status_dokumen2 = $row['status_dokumen2'];
         $url_dokumen2 = $row['url_dokumen2'];
         //
        $dokumen3 = $row['dokumen3'];
        $status_dokumen3 = $row['status_dokumen3'];
         $url_dokumen3 = $row['url_dokumen3'];
         //

        $dokumen4 = $row['dokumen4'];
        $status_dokumen4 = $row['status_dokumen4'];
         $url_dokumen4 = $row['url_dokumen4'];
         //

        $dokumen5 = $row['dokumen5'];
        $status_dokumen5 = $row['status_dokumen5'];
         $url_dokumen5 = $row['url_dokumen5'];
         //
        $dokumen6 = $row['dokumen6'];
        $status_dokumen6 = $row['status_dokumen6'];
         $url_dokumen6 = $row['url_dokumen6'];
         //
        $dokumen7 = $row['dokumen7'];
        $status_dokumen7 = $row['status_dokumen7'];
         $url_dokumen7 = $row['url_dokumen7'];
         //
        $dokumen8 = $row['dokumen8'];
         $url_dokumen8 = $row['url_dokumen8'];
        $status_dokumen8 = $row['status_dokumen8'];
        //
        $dokumen9 = $row['dokumen9'];
        $status_dokumen9 = $row['status_dokumen9'];
        $url_dokumen9 = $row['url_dokumen9'];
        //
         $dokumen10 = $row['dokumen10'];
        $status_dokumen9 = $row['status_dokumen10'];
        $url_dokumen10 = $row['url_dokumen10'];
        
        



        }
  ?>


      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h4><i class="fa fa-edit"></i> Edit Karya Ilmiah</h4>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Form Edit Karya Ilmiah</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              
                          <br>
                 



                <form class="form-horizontal" method="post" action="file_data_edit.php" enctype="multipart/form-data">

                         
                      <fieldset>
           
                        <input type="hidden" name="id" value="<?php echo $id; ?>"     >
                         
<div class="form-group">
<label class="col-lg-2 control-label" for="inputPassword">Tipe</label>
<div class="col-lg-8">

  <select name="idtipe" class="form-control" required>

<?php 
 $queryjek = mysqli_query($connect, "SELECT * FROM tipe where id_tipe = '$idtipe' ");
          if($queryjek == false){
              die ("Terdapat Kesalahan : ". mysqli_error($connect));  
          }
     
          while($jek = mysqli_fetch_array($queryjek)){
              echo "
                  <option value='$jek[id_tipe]'>$jek[nama_tipe]</option>";
          }?>




      <?php
          
          $queryjek = mysqli_query($connect, "SELECT * FROM tipe");
          if($queryjek == false){
              die ("Terdapat Kesalahan : ". mysqli_error($connect));  
          }
        
          while($jek = mysqli_fetch_array($queryjek)){
              echo "
                  <option value='$jek[id_tipe]'>$jek[nama_tipe]</option>";
          }
      ?>
  </select>
</div>

</div>


<div class="form-group">
<label class="col-lg-2 control-label">Jurusan</label>
<div class=" col-lg-8 ">
  
  <select name="idjurusan" class="form-control" required>
          <?php
     $query = mysqli_query($connect, "SELECT * FROM sub_jurusan INNER JOIN id_fakultas ON id_fakultas= idfakultas where id_sub_jurusan = '$idjurusan' ");                          
          $queryjek = mysqli_query($connect, "SELECT * FROM sub_jurusan");
          if($query == false){
              die ("Terdapat Kesalahan : ". mysqli_error($connect));  
          }
      
          while($jek = mysqli_fetch_array($query)){
              echo "
                  <option value='$jek[id_sub_jurusan]'>
                  $jek[nama_fakultas]--->$jek[nama_sub_jurusan] 
                  </option>";
          }
      ?>




        <?php
     $query = mysqli_query($connect, "SELECT * FROM sub_jurusan INNER JOIN id_fakultas ON id_fakultas= idfakultas ");                          
          $queryjek = mysqli_query($connect, "SELECT * FROM sub_jurusan");
          if($query == false){
              die ("Terdapat Kesalahan : ". mysqli_error($connect));  
          }
       
          while($jek = mysqli_fetch_array($query)){
              echo "
                  <option value='$jek[id_sub_jurusan]'>
                  $jek[nama_fakultas]--->$jek[nama_sub_jurusan] 
                  </option>";
          }
      ?>




   
  </select>
</div>
</div>

<div class="form-group">
<label class="col-lg-2 control-label">Subjek</label>
<div class=" col-lg-8 ">

<select name="idsubjek" class="form-control" required>

<?php

$queryjek = mysqli_query($connect, "SELECT * FROM subjek 



  where id_subjek = '$id_subjek' ");
if($queryjek == false){
    die ("Terdapat Kesalahan : ". mysqli_error($connect));  
}

while($jek = mysqli_fetch_array($queryjek)){
    echo "
        <option value='$jek[id_subjek]'> $jek[nama_subjek]




        </option>";
}?>




<?php

$queryjek = mysqli_query($connect, "SELECT * FROM subjek 

INNER JOIN sub_subjek1 ON id_subjek1= subsubjek1

  ");
if($queryjek == false){
    die ("Terdapat Kesalahan : ". mysqli_error($connect));  
}

while($jek = mysqli_fetch_array($queryjek)){
    echo "
        <option value='$jek[id_subjek]'>$jek[nama_subjek1]---> $jek[nama_subjek]




        </option>";
}

?>
</select>
</div>
</div>

    <div class="form-group">
  <label class="col-lg-2 control-label" for="nama_penulis"> Penulis</label>
  <div class="col-lg-8">
  <input class="form-control" id="nama_penulis" type="text" value="<?php echo $nama_penulis; ?>" placeholder="nama penulis 1" name="nama_penulis" >
  <input class="form-control" id="nama_penulis2" type="text" placeholder="nama penulis 2" name="nama_penulis2" >
  <input class="form-control" id="nama_penulis3" type="text" placeholder="nama penulis 3" name="nama_penulis3" >
  <input class="form-control" id="nama_penulis4" type="text" placeholder="nama penulis 4" name="nama_penulis4" >
  </div>
  </div>
                       
 <div class="form-group">
<label class="col-lg-2 control-label"   for="judul">Judul</label>
<div class="col-lg-8">
  <input class="form-control" id="judul" value="<?php echo $judul; ?>" type="type" placeholder="Judul" name="judul" >
</div>
</div>
<div class="form-group">
<label class="col-lg-2 control-label" for="abstrak">Abstrak</label>
<div class="col-lg-8">
  <textarea class="form-control" id="inputPassword"   type="type" placeholder="abstrak karya ilmiah" name="abstrak" ><?php echo $abstrak; ?></textarea>
</div>
</div>
<div class="form-group">
<label class="col-lg-2 control-label" for="lembaga_penulis">Lembaga Pebulis</label>
<div class="col-lg-8">
  <input class="form-control" id="lembaga_penulis" value="<?php echo $lembaga_penulis; ?>"    type="type" placeholder="uin suska riau" name="lembaga_penulis" >
</div>
</div>
<div class="form-group">
<label class="col-lg-2 control-label" for="issn">Issn</label>
<div class="col-lg-8">
  <input class="form-control" id="issn" type="type" value="<?php echo $issn; ?>"  placeholder="1231-41231-42131 " name="issn" >
</div>
</div> <div class="form-group">
<label class="col-lg-2 control-label" for="penerbit">Penerbit</label>
<div class="col-lg-8">
  <input class="form-control" id="penerbit" type="type" value="<?php echo $penerbit; ?>"  placeholder="abstrak karya ilmiah" name="penerbit" required>
</div>
</div>
<div class="form-group">
<label class="col-lg-2 control-label" for="tahun">Tahun</label>
 <div class=" col-lg-8 ">
              
              <select name="tahun" class="form-control" required>
                 <?php
                      
                      $queryjek = mysqli_query($connect, "SELECT * FROM tahun where id_tahun = '$tahun'");
                      if($queryjek == false){
                          die ("Terdapat Kesalahan : ". mysqli_error($connect));  
                      }
                    
                      while($jek = mysqli_fetch_array($queryjek)){
                          echo "
                              <option value='$jek[id_tahun]'>$jek[th_tahun]</option>";
                      }

                      ?>
                  <?php
                      
                      $queryjek = mysqli_query($connect, "SELECT * FROM tahun");
                      if($queryjek == false){
                          die ("Terdapat Kesalahan : ". mysqli_error($connect));  
                      }
              
                      while($jek = mysqli_fetch_array($queryjek)){
                          echo "
                              <option value='$jek[id_tahun]'>$jek[th_tahun]</option>";
                      }

                      ?>
              </select>
          </div>
</div>

<div class="form-group">
      <label class="col-lg-2 control-label" for="tahun">Status</label>
          <div class=" col-lg-8 ">
              
              <select name="status_publikasi" class="form-control">
                  
                  <option value="publish">Publish</option>
                  <option value="draft">Draft</option>
              </select>
          </div>

  </div>
  <div class="form-group">
      <label class="col-lg-2  control-label"> Input File</label>
                        <div class="input_fields_wrap col-lg-8">
                       <!--    <label>Upload Cover
      (<span class="text-warning" > <small>atau biarkan kosong </small> </span></label>)
      <input type="file" name="cover_buku" class="form-control" placeholder="cover buku" value="<?php echo $dokumen1 ; ?>" > -->
      <br>
      <?php if($dokumen1 ==""){  ?>
        <span class="text-danger"><small>1. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small>
    <a href="review.php?nama_file=<?php echo $url_dokumen1 ?>&dokumen=<?php echo $dokumen1 ?>">


 1. File Lama: <?php   echo $dokumen1;?> </a></small></span>
          <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen1&url_dokumen=url_dokumen1&url=<?php echo $url_dokumen1 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>

                <?php if($status_dokumen1 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[0]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[0]" >
                          <?php } ?>
          
                                    <?php if($dokumen2 ==""){  ?>
        <span class="text-danger"><small>2. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small>    <a href="review.php?nama_file=<?php echo $url_dokumen2 ?>&dokumen=<?php echo $dokumen2 ?>">2. File Lama <?php   echo $dokumen2; ?> </a></small></span>
         <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen2&url_dokumen=url_dokumen2&url=<?php echo $url_dokumen2 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>

                         <?php if($status_dokumen2 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[1]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[1]" >
                         <?php } ?> 
                          <?php if($dokumen3 ==""){  ?>
        <span class="text-danger"><small>3. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small> <a href="review.php?nama_file=<?php echo $url_dokumen3 ?>&dokumen=<?php echo $dokumen3 ?>">3. File Lama <?php   echo $dokumen3; ?> </a></small></span>
         <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen3&url_dokumen=url_dokumen3&url=<?php echo $url_dokumen3 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>
                        <?php if($status_dokumen3 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[2]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[2]" >
                          <?php } ?>

                                     <?php if($dokumen4 ==""){  ?>
        <span class="text-danger"><small>4. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small> <a href="review.php?nama_file=<?php echo $url_dokumen4 ?>&dokumen=<?php echo $dokumen4 ?>">4. File Lama <?php   echo $dokumen4; ?> </a></small></span>
         <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen4&url_dokumen=url_dokumen4&url=<?php echo $url_dokumen4 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>
                        <?php if($status_dokumen4 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[3]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[3]" >
                          <?php } ?>

                                     <?php if($dokumen5 ==""){  ?>
        <span class="text-danger"><small>5. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small> <a href="review.php?nama_file=<?php echo $url_dokumen5 ?>&dokumen=<?php echo $dokumen5 ?>">5. File Lama <?php   echo $dokumen5; ?> </a></small></span>
         <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen5&url_dokumen=url_dokumen5&url=<?php echo $url_dokumen5 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>
                        <?php if($status_dokumen5 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[4]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[4]" >
                          <?php } ?>

                                     <?php if($dokumen6 ==""){  ?>
        <span class="text-danger"><small>6. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small> <a href="review.php?nama_file=<?php echo $url_dokumen6 ?>&dokumen=<?php echo $dokumen6 ?>">6. File Lama <?php   echo $dokumen6; ?> </a></small></span>
         <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen6&url_dokumen=url_dokumen6&url=<?php echo $url_dokumen6 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>
                        <?php if($status_dokumen6 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[5]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[5]" >
                          <?php } ?>
                                                   <?php if($dokumen7 ==""){  ?>
        <span class="text-danger"><small>7. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small> <a href="review.php?nama_file=<?php echo $url_dokumen7 ?>&dokumen=<?php echo $dokumen7 ?>">8. File Lama <?php   echo $dokumen7; ?> </a></small></span>
         <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen7&url_dokumen=url_dokumen7&url=<?php echo $url_dokumen7 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>
                        <?php if($status_dokumen7 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[6]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[6]" >
                          <?php } ?>
                                                   <?php if($dokumen8 ==""){  ?>
        <span class="text-danger"><small>8. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small> <a href="review.php?nama_file=<?php echo $url_dokumen8 ?>&dokumen=<?php echo $dokumen8 ?>">8. FILE LAMA <?php   echo $dokumen8; ?> </small></span>
         <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen8&url_dokumen=url_dokumen8&url=<?php echo $url_dokumen8 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>
                       <?php if($status_dokumen8 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[7]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[7]" >
                          <?php } ?>
                                                   <?php if($dokumen9 ==""){  ?>
        <span class="text-danger"><small>9. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small> <a href="review.php?nama_file=<?php echo $url_dokumen9 ?>&dokumen=<?php echo $dokumen9 ?>">9. File Lama <?php   echo $dokumen9; ?> </a> </small></span>
         <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen9&url_dokumen=url_dokumen9&url=<?php echo $url_dokumen9 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>
                        <?php if($status_dokumen9 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[8]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[8]" >
                          <?php } ?>
                                                   <?php if($dokumen10 ==""){  ?>
        <span class="text-danger"><small>10. Belum ada dokumen yang di upload </small></span>
      <?php }else{ ?>
        <span class="text-danger"><small> <a href="review.php?nama_file=<?php echo $url_dokumen10 ?>&dokumen=<?php echo $dokumen10 ?>">10. File Lama <?php   echo $dokumen10; ?> </a></small></span>
         <a href="file_hapus_dokumen.php?id_karyailmiah=<?php echo $id_karyailmiah ?>&dokumen=dokumen10&url_dokumen=url_dokumen10&url=<?php echo $url_dokumen10 ?>"  class="btn-xs btn-danger">hapus</a>
      <?php } ?>
                        <?php if($status_dokumen2 =="2"){  ?>
                          <br><a  class="btn-xs btn-primary">terenkripsi</a>
                        <input type="file" name="dokumen[9]" disabled  >
                         <?php }else{ ?>
                        <input type="file" name="dokumen[9]" >
                          <?php } ?>

                         </div>
                        </div> 
                          <div class="form-group">
                            <div class=" col-lg-2 col-sm-offset-4">
                              <a href="file_detail.php?id_karyailmiah=<?php echo $id_karyailmiah ?>"  class="btn btn-danger">Batal</a>
                           <button  type="submit" name="edit" value="edit" class=" btn btn-primary">Edit</button>
                          </div>
                          </div>
                        <br>
                      </fieldset>
                     
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-latest.js"></script>

    <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>

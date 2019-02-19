<?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h4><i class="fa fa-file"></i> Tambah Karya Ilmiah</h4>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Form Tambah Karya Ilmiah</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              
                          <br>
                <form class="form-horizontal" method="post" action="form_tambahproses.php" enctype="multipart/form-data">

                         
                      <fieldset>
                       
                 <!--        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputPassword">Tanggal</label>
                          <div class="col-lg-8">
                            <input class="form-control" id="inputTgl" type="text" placeholder="Tanggal" name="datenow" value="<?php echo date("Y-m-d");?>" readonly>
                          </div>
                        </div> -->
                      
                         
<div class="form-group">
<label class="col-lg-2 control-label" for="inputPassword">Tipe</label>
<div class="col-lg-8">

  <select name="idtipe" class="form-control" required>
      <?php
          
          $queryjek = mysqli_query($connect, "SELECT * FROM tipe");
          if($queryjek == false){
              die ("Terdapat Kesalahan : ". mysqli_error($connect));  
          }
          echo "<option> pilih tipe</option>";
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
     $query = mysqli_query($connect, "SELECT * FROM sub_jurusan INNER JOIN id_fakultas ON id_fakultas= idfakultas ");                          
          $queryjek = mysqli_query($connect, "SELECT * FROM sub_jurusan");
          if($query == false){
              die ("Terdapat Kesalahan : ". mysqli_error($connect));  
          }
          echo "<option> pilih jurusan</option>";
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

INNER JOIN sub_subjek1 ON id_subjek1= subsubjek1

  ");
if($queryjek == false){
    die ("Terdapat Kesalahan : ". mysqli_error($connect));  
}
echo "<option> pilih subjek </option>";
while($jek = mysqli_fetch_array($queryjek)){
    echo "
        <option value='$jek[id_subjek]'>$jek[nama_subjek1]---> $jek[nama_subjek]




        </option>";
}

?>
</select>
</div>
</div>


                       <!--     <div class="form-group">
                                <label class="col-lg-2 control-label">Status</label>
                                    <div class=" col-lg-8 ">
                                        
                                        <select name="status_publikasi" class="form-control">
                                            <option selected>Pilih Status</option>
                                            <option value="publish">Publish</option>
                                            <option value="draft">Draft</option>
                                        </select>
                                    </div>
                            </div> -->

    <div class="form-group">
  <label class="col-lg-2 control-label" for="nama_penulis"> Penulis</label>
  <div class="col-lg-8">
  <input class="form-control" id="nama_penulis" type="text" placeholder="nama penulis 1" name="nama_penulis" >
  <input class="form-control" id="nama_penulis2" type="text" placeholder="nama penulis 2" name="nama_penulis2" >
  <input class="form-control" id="nama_penulis3" type="text" placeholder="nama penulis 3" name="nama_penulis3" >
  <input class="form-control" id="nama_penulis4" type="text" placeholder="nama penulis 4" name="nama_penulis4" >
  </div>
  </div>
                       
 <div class="form-group">
<label class="col-lg-2 control-label" for="judul">Judul</label>
<div class="col-lg-8">
  <input class="form-control" id="judul" type="type" placeholder="Judul" name="judul" >
</div>
</div>
<div class="form-group">
<label class="col-lg-2 control-label" for="abstrak">Abstrak</label>
<div class="col-lg-8">
  <textarea class="form-control" id="inputPassword" type="type" placeholder="abstrak karya ilmiah" name="abstrak" ></textarea>
</div>
</div>
<div class="form-group">
<label class="col-lg-2 control-label" for="lembaga_penulis">Lembaga Pebulis</label>
<div class="col-lg-8">
  <input class="form-control" id="lembaga_penulis" type="type" placeholder="uin suska riau" name="lembaga_penulis" >
</div>
</div>
<div class="form-group">
<label class="col-lg-2 control-label" for="issn">Issn</label>
<div class="col-lg-8">
  <input class="form-control" id="issn" type="type" placeholder="1231-41231-42131 " name="issn" >
</div>
</div> <div class="form-group">
<label class="col-lg-2 control-label" for="penerbit">Penerbit</label>
<div class="col-lg-8">
  <input class="form-control" id="penerbit" type="type" placeholder="abstrak karya ilmiah" name="penerbit" required>
</div>
</div>
<div class="form-group">
<label class="col-lg-2 control-label" for="tahun">Tahun</label>
 <div class=" col-lg-8 ">
              
              <select name="tahun" class="form-control" required>
                  <?php
                      
                      $queryjek = mysqli_query($connect, "SELECT * FROM tahun");
                      if($queryjek == false){
                          die ("Terdapat Kesalahan : ". mysqli_error($connect));  
                      }
                      echo "<option> pilih Tahun</option>";
                      while($jek = mysqli_fetch_array($queryjek)){
                          echo "
                              <option value='$jek[id_tahun]'>$jek[th_tahun]</option>";
                      }

                      ?>
              </select>
          </div>
</div>
<!--     <div class="form-group">
<label class="col-lg-2 control-label" for="jurusan">Jurusan</label>
<div class="col-lg-4">
  <input class="form-control" id="jurusan" type="type" placeholder="sistem informasi" name="jurusan" >
</div>
</div>  -->


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



<input type="file" name="dokumen[]" >
<input type="file" name="dokumen[]" >
<input type="file" name="dokumen[]" >
<input type="file" name="dokumen[]" >
<input type="file" name="dokumen[]" >
<input type="file" name="dokumen[]" >
<input type="file" name="dokumen[]" >
<input type="file" name="dokumen[]" >
<input type="file" name="dokumen[]" >
<input type="file" name="dokumen[]" >


               <!--      <input type="file" name="dokumen2" multiple>
                      <input type="file" name="dokumen3" multiple>
                        <input type="file" name="dokumen4" multiple>
                          <input type="file" name="dokumen5" multiple>
   -->
                        
               <!--  <div class="form-group"> -->
                         </div>
                        </div> 
                          <div class="form-group">
                            <div class=" col-lg-2 col-sm-offset-6">
                            <input type="submit" name="submit" value="simpan" class="form-control btn btn-primary">
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

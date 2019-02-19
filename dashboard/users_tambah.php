<?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h4><i class="fa fa-file"></i> Tambah Users</h4>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Form Tambah Users</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              
                          <br>
                <form class="form-horizontal" method="post" action="users_tambah_proses.php" enctype="multipart/form-data">

                         
                      <fieldset>
                       
                 <!--        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputPassword">Tanggal</label>
                          <div class="col-lg-8">
                            <input class="form-control" id="inputTgl" type="text" placeholder="Tanggal" name="datenow" value="<?php echo date("Y-m-d");?>" readonly>
                          </div>
                        </div> -->
                      
                         
<div class="form-group">
<label class="col-lg-2 control-label" for="judul">NIK atau NIM</label>
<div class="col-lg-8">
  <input class="form-control" id="judul" type="type" placeholder="Judul" name="nim" >
</div>
</div>

<div class="form-group">
<label class="col-lg-2 control-label" for="judul">Nama</label>
<div class="col-lg-8">
  <input class="form-control" id="judul" type="type" placeholder="Nama Lengkap" name="username" >
</div>
</div>
<div class="form-group">
<label class="col-lg-2 control-label">Jurusan</label>
<div class=" col-lg-8 ">
  
  <select name="jurusan" class="form-control" required>
        <?php
     $query = mysqli_query($connect, "SELECT * FROM sub_jurusan INNER JOIN id_fakultas ON id_fakultas= idfakultas ");                          
          $queryjek = mysqli_query($connect, "SELECT * FROM sub_jurusan");
          if($query == false){
              die ("Terdapat Kesalahan : ". mysqli_error($connect));  
          }
          echo "<option> pilih jurusan</option>";
          while($jek = mysqli_fetch_array($query)){
              echo "
                  <option value='$jek[nama_sub_jurusan]'>
                  $jek[nama_fakultas]--->$jek[nama_sub_jurusan] 
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
<label class="col-lg-2 control-label" for="judul">Email</label>
<div class="col-lg-8">
  <input class="form-control" id="judul" type="email" placeholder="Emali" name="email" >
</div>
</div>


<div class="form-group">
<label class="col-lg-2 control-label" for="judul">Password</label>
<div class="col-lg-8">
  <input class="form-control"  type="password" placeholder="Judul" name="password" >
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

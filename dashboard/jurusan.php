 <?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i>Jurusan</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Daftar List Jurusan</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">

                <div class="col-lg-4">
                    
                        
                          <br>
                       
                        <!-- /.panel-heading -->
                         <form action="jurusan_add_proses.php" method="post">
                           
                     <!--    <div class="form-group">
                        <label for ="cat-title">Id Fakultas</label>
                            <input type ="text" class="form-control" name="id_fakultas" placeholder="id fakultas" value ="
                            
                           " readonly>
                           </div>  -->

                         

                            <div class="form-group">
                        <label for ="cat-title">Nama Fakultas</label>
                            <select name="idfakultas" class="form-control" required>
                                            <?php
                                                
                                                $queryjek = mysqli_query($connect, "SELECT * FROM id_fakultas");
                                                if($queryjek == false){
                                                    die ("Terdapat Kesalahan : ". mysqli_error($connect));  
                                                }
                                                echo "<option> Pilih Fakultas</option>";
                                                while($jek = mysqli_fetch_array($queryjek)){
                                                    echo "
                                                        <option value='$jek[id_fakultas]'>$jek[nama_fakultas]</option>";
                                                }
                                            ?>
                                        </select>
                           </div>
                            <div class="form-group">
                        <label for ="cat-title">Nama Jurusan</label>
                            <input type ="text" class="form-control" name="nama_sub_jurusan" placeholder="nama jurusan">
                           </div> 
                         <div class="from-group">
                         <input class="btn btn-primary" type="submit" name="submit" value="Tambah Jurusan">
                         </div>  



                           
                         </form><br><br>
                              <?php
                                 if(isset($_GET['edit'])) {?>
                                    <?php
                                    $id = $_GET['edit'];
                                    
                          $query = mysqli_query($connect, "SELECT * FROM sub_jurusan WHERE id_sub_jurusan = '$id' ");
                          while ($data = mysqli_fetch_array($query)) { ?>
                          
                        <form action="fakultas_edit.php" method="post">
                          <div class="form-group">
                        <label for ="cat-title">Nama Jurusan</label>
                            <select name="idfakultas" class="form-control" required>
                                       
                                           <?php
                                        
                                            $querysubjek=mysqli_query($connect, "SELECT * FROM sub_jurusan   INNER JOIN id_fakultas ON id_fakultas = idfakultas WHERE id_sub_jurusan = '$id'");
                                            if($querysubjek==false){
                                                die("Terdapat Kesalahan : ".mysqli_error($connect));
                                            }
                                            while($mhsjrs=mysqli_fetch_array($querysubjek)){
                                                echo "<option value=$mhsjrs[idfakultas] selected>$mhsjrs[nama_fakultas]</option>";
                                            }
                                        
                                            $queryjrs = mysqli_query($connect, "SELECT * FROM id_fakultas");
                                            if($queryjrs==false){
                                                die("Terdapat Kesalahan : ". mysqli_error($connect));
                                            }
                                            while($jrs=mysqli_fetch_array($queryjrs)){
                                                if($jrs["id_fakultas"]!=$mhs["id_sub_jurusan"]){
                                                    echo "<option value=$jrs[id_fakultas]>$jrs[nama_fakultas]</option>";
                                                }
                                            }

                                            ?>
                                        </select>
                           </div>
                    <div class="form-group"     >
                      <input type="hidden" name="id" value=" <?php echo $id; ?>"     >
                        <label for ="cat-title">Nama Tipe</label>
                            <input type ="text" class="form-control" name="nama_jurusan" value="<?php echo $data['nama_sub_jurusan']; ?>" placeholder="nama fakultas">
                           </div>   
                         <div class="from-group">
                         <input class="btn btn-primary" type="submit" name="submit" value="Edit Fakultas">
                         </div>  
                         </form>
   
                             <?php     }}?>
                       
                        <!-- /.panel-body -->
                  
                    <!-- /.panel -->
                </div>
                <div class="table-responsive">
                  <table id="file" class="table striped">
                   
                
                   
                    <thead>
                       <tr>
                         
                          <td><strong>No</strong></td>
                          <td><strong>Fakultas</strong></td>
                          <td><strong>Jurusan</strong></td>
                           <td><strong>Jumlah</strong></td>
                          <td><strong>Aksi</strong></td>
                    
                        </tr>
                      </thead>
                      <tfoot>
                       <tr>
                           <td><strong>No</strong></td>
                          <td><strong>Fakultas</strong></td>
                             <td><strong>Jurusan</strong></td>
                              <td><strong>Jumlah</strong></td>
                          <td><strong>Aksi</strong></td>
                       
                    
                        </tr>
                      </tfoot>
                        <tbody>
                           <?php $i=1; ?>
                        <?php
                          $query = mysqli_query($connect, "SELECT * FROM sub_jurusan INNER JOIN id_fakultas ON id_fakultas = idfakultas ");
                          while ($data = mysqli_fetch_array($query)) { ?>
                           
                          <tr>
                            <td><?= $i; ?></td>
                           
                           <!--  <td><?php echo $data['id_fakultas']; ?></td> -->
                            <td><?php echo $data['nama_fakultas']; ?></td>
                            <td><?php echo $data['nama_sub_jurusan']; ?></td>
                             <td><?php echo $data['jumlah']; ?></td>
                            <!-- <td><?php echo $data['nama_penulis']; ?> </td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['username']; ?></td> -->
                            <td><a href="jurusan.php?edit=<?php echo $data["id_sub_jurusan"]; ?>" ><i class="glyphicon glyphicon-search btn btn-primary"></i> </a>
                              <!-- <a href=" file_engkrip.php?id_karyailmiah= <?php echo $data["id_karyailmiah"]; ?>">detail engkrip</a> -->
                              <a href="file_hapus.php?id_karyailmiah= <?php echo $data["id_karyailmiah"]; ?>" onclick="return confirm('yakin');" ><i class="glyphicon glyphicon-trash btn btn-success"></i></a> </td>
                          </tr>            
                          <?php $i++; ?>        
                          <?php
                        } ?>
                        </tbody>
                      </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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



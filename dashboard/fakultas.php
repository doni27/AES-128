 <?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Fakultas</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Daftar List Fakultas</li>
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
                         <form action="fakultas_add_proses.php" method="post" enctype="multipart/form-data">
                           
                     <!--    <div class="form-group">
                        <label for ="cat-title">Id Fakultas</label>
                            <input type ="text" class="form-control" name="id_fakultas" placeholder="id fakultas" value ="
                            
                           " readonly>
                           </div>  -->

                        <div class="form-group">
                        <label for ="cat-title">Nama Fakultas</label>
                            <input type ="text" class="form-control" name="nama_fakultas" placeholder="nama fakultas">
                           </div>   
                         <div class="from-group">
                         <input class="btn btn-primary" type="submit" name="submit" value="Tambah Fakultas">
                         </div>  
                         </form>
                              <?php
                                 if(isset($_GET['edit'])) {?>
                                    <?php
                                    $id = $_GET['edit'];
                                    
                          $query = mysqli_query($connect, "SELECT * FROM id_fakultas WHERE id_fakultas = '$id' ");
                          while ($data = mysqli_fetch_array($query)) { ?>
                          
                        <form action="fakultas_edit.php" method="post">
                    <div class="form-group"     >
                      <input type="hidden" name="id" value=" <?php echo $id; ?>"     >
                        <label for ="cat-title">Nama Tipe</label>
                            <input type ="text" class="form-control" name="nama_fakultas" value=" <?php echo $data["nama_fakultas"]; ?>" placeholder="nama fakultas">
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
                          <td><strong>jumlah</strong></td>
                          <td><strong>Aksi</strong></td>
                    
                        </tr>
                      </thead>
                      <tfoot>
                       <tr>
                           <td><strong>No</strong></td>
                          <td><strong>Fakultas</strong></td>
                             <td><strong>jumlah</strong></td>
                          <td><strong>Aksi</strong></td>
                       
                    
                        </tr>
                      </tfoot>
                        <tbody>
                           <?php $i=1; ?>
                        <?php
                          $query = mysqli_query($connect, "SELECT * FROM id_fakultas ");
                          while ($data = mysqli_fetch_array($query)) { ?>
                           
                          <tr>
                            <td><?= $i; ?></td>
                           
                           <!--  <td><?php echo $data['id_fakultas']; ?></td> -->
                            <td><?php echo $data['nama_fakultas']; ?></td>
                            <td><?php echo $data['jumlah_fakultas']; ?></td>
                            <!-- <td><?php echo $data['nama_penulis']; ?> </td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['username']; ?></td> -->
                            <td><a href="fakultas.php?edit=<?php echo $data["id_fakultas"]; ?>"  ><i class="glyphicon glyphicon-search btn btn-primary"></i> </a>
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



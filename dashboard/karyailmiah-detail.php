<?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-file"></i> Form Detail Repository Uin Suska</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Dekripsi File</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <?php
                $id_karyailmiah = $_GET['id_karyailmiah'];
                $query = mysqli_query($connect, "SELECT * FROM karyailmiah WHERE id_karyailmiah='$id_karyailmiah'");
                $data2 = mysqli_fetch_array($query);
                ?>
                <h3 align="center">Judul <i style="color:blue"><?php echo $data2['judul'] ?></i></h3><br>
                <form class="form-horizontal" method="post" action="decrypt-process.php">
                <div class="table-responsive">
                  <table class="table striped">
                       <tr>
                         <td>Abstrak</td>
                         <td>:</td>
                         <td><?php echo $data2['abstrak']; ?></td>
                       </tr>
                       <tr>
                         <td>Nama Penulis</td>
                         <td>:</td>
                         <td><?php echo $data2['nama_penulis']; ?></td>
                       </tr>
                       <tr>
                         <td>Lembaga Penulis</td>
                         <td>:</td>
                         <td><?php echo $data2['lembaga_penulis']; ?> KB</td>
                       </tr>
                       <tr>
                         <td>Status Publikasi</td>
                         <td>:</td>
                         <td><?php echo $data2['status_publikasi']; ?></td>
                       </tr>
                       <tr>
                         <td>Issn</td>
                         <td>:</td>
                         <td><?php echo $data2['issn']; ?></td>
                       </tr>
                       <tr>
                         <td>Penerbit</td>
                         <td>:</td>
                         <td><?php echo $data2['penerbit']; ?></td>
                       </tr>
                       <tr>
                         <td>Tanggal Update</td>
                         <td>:</td>
                         <td><?php echo $data2['tgl_upload']; ?></td>
                       </tr>
                       <tr>
                         <td>File Karya Ilmiah</td>
                         <td>:</td>
                         <td><?php echo $data2['file_name_source']; ?></td>
                       </tr>
                       <tr>
                         <td>File Terengkripsi</td>
                         <td>:</td>
                         <td><?php echo $data2['file_name_finish']; ?></td>
                       </tr>
                       <tr>
                         <td>Editor</td>
                         <td>:</td>
                         <td><?php echo $data2['username']; ?></td>
                       </tr>
                       <tr>
                         <td>Jurusan</td>
                         <td>:</td>
                         <td><?php echo $data2['jurusan']; ?></td>
                       </tr>
                       <tr>
                         <td>Tipe</td>
                         <td>:</td>
                         <td><?php echo $data2['tipe']; ?></td>
                       </tr>
                       <tr>
                         <td>Subjek</td>
                         <td>:</td>
                         <td><?php echo $data2['subjek']; ?></td>
                       </tr>
                       <tr>
                         <td>Masukkan Password Untuk Mendekrip</td>
                         <td></td>
                         <td>
                           <div class="col-md-6">
                            <input type="hidden" name="fileid" value="<?php echo $data2['id_file'];?>">
                           
                           <button type="submit" name="decrypt_now" value="Dekripsi File" class="form-control btn btn-primary" > edit</button>
                         </div>
                       </td>
                       </tr>
                  </table>
                </div>
              </form>
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


<?php include 'header.php'; ?>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h3><i class="fa fa-dashboard"></i> Dashboard</h3>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                    <div class="widget-small danger"><i class="icon glyphicon glyphicon-file fa-3x"></i>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM karya_ilmiah");
                      $datauser = mysqli_fetch_array($query);
                      $karyailmiah = $datauser['totaluser'];
                      ?>
                      <div class="info">
                        <h4>Karya Ilmiah</h4>
                        <p> <b><?php echo $datauser['totaluser']; ?></b></p>
                      </div>
                    </div>
                  </div>

                        <div class="col-md-4">
                    <div class="widget-small info"><i class="icon glyphicon glyphicon-envelope fa-3x"></i>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM permintaan_data");
                      $datauser = mysqli_fetch_array($query);
                      $permintaan =$datauser['totaluser'];
                      ?>
                      <div class="info">
                        <h4>permintaan data</h4>
                        <p> <b><?php echo $datauser['totaluser']; ?></b></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM subjek  ");
                      $datauser = mysqli_fetch_array($query);
                      $subjek = $datauser['totaluser'];
                      ?>
                      <div class="info">
                        <h4>subjek</h4>
                        <p> <b><?php echo $datauser['totaluser']; ?></b></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="widget-small btn-warning"><i class="icon glyphicon glyphicon-briefcase fa-3x"></i>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM tipe  ");
                      $datauser = mysqli_fetch_array($query);
                      $tipe = $datauser['totaluser'];
                      ?>
                      <div class="info">
                        <h4>tipe</h4>
                        <p> <b><?php echo $datauser['totaluser']; ?></b></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="widget-small btn-info"><i class="icon glyphicon glyphicon-tasks fa-3x"></i>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM sub_jurusan  ");
                      $datauser = mysqli_fetch_array($query);
                      $jurusan = $datauser['totaluser'];
                      ?>
                      <div class="info">
                        <h4>jurusan</h4>
                        <p> <b><?php echo $datauser['totaluser']; ?></b></p>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-4">
                    <div class="widget-small btn-success"><i class="icon glyphicon glyphicon-folder-close fa-3x"></i>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM id_fakultas  ");
                      $datauser = mysqli_fetch_array($query);
                      $fakultas = $datauser['totaluser'];
                      ?>
                      <div class="info">
                        <h4>fakultas</h4>
                        <p> <b><?php echo $datauser['totaluser']; ?></b></p>
                      </div>
                    </div>
                  </div>
                 <div class="row col-sm-12 ">
  
<div class="col-sm-4  " >
  <ul class="list-group">
    <a href="#" class="list-group-item active"style="background-color: #009090;">
    Fakultas
  </a>
  
<?php   $query = mysqli_query($connect, "SELECT * FROM id_fakultas WHERE nama_fakultas LIKE '%Fakultas%' ");
while ($data = mysqli_fetch_array($query)) { ?>

  <li class="list-group-item">
   <a href="pencarian_fakultas.php?id_fakultas=<?php echo $data['id_fakultas']; ?>"><?php echo $data['nama_fakultas']; ?></a>
 <span class="badge"> <?php echo $data['jumlah_fakultas']; ?></span>
</li>
  <?php } ?>
   <li class="list-group-item">
 <a href="jurusan.php?">
 selengkapnya</a></li>
</ul>
                    
</div> 

<div class="col-sm-2  ">
 
  <ul class="list-group">
 <a href="#" class="list-group-item active"style="background-color: #009090;">
    Tahun
  </a>
  
<?php   $query = mysqli_query($connect, "SELECT * FROM tahun ORDER BY th_tahun DESC LIMIT 8  ");
while ($data = mysqli_fetch_array($query)) { ?>


  <li class="list-group-item">
    <span class="badge"><?php echo $data['jumlah']; ?>

    </span>
 <a href="tahun_pencarian.php?id_tahun=<?php echo $data['id_tahun']; ?>"> <?php echo $data['th_tahun']; ?></a></li>
  <?php } ?>
   <li class="list-group-item"><a href="tahun.php?">
 sekengkapnya</a></li>
</ul>
</div>

<div class="col-sm-3 ">
   <ul class="list-group">
 <a href="#" class="list-group-item active"style="background-color: #009090;">
   Pengarang
  </a>
<?php $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  LIMIT 8 ");
while ($data = mysqli_fetch_array($query)) { ?>
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">1</span>
    <a href="pencarian_penulis.php?nama=<?php echo $data['nama_penulis']; ?>">
      <?php echo $data['nama_penulis']; ?></a></li>
      <?php  } ?>
      <li class="list-group-item"><a href="pengarang.php?">
 Selengkapnya</a></li>
</ul>
</div>

<div class="col-sm-3 ">
   <ul class="list-group">
 <a href="#" class="list-group-item active"style="background-color: #009090;">
   Subjek
  </a>
<?php $query = mysqli_query($connect, "SELECT * FROM sub_subjek1  LIMIT 8 ");
while ($data = mysqli_fetch_array($query)) { ?>
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge"> <?php echo $data['jumlah']; ?></span>
    <a href="pencarian_subjek.php?id_subjek1=<?php echo $data['id_subjek1']; ?>">
      <?php echo $data['nama_subjek1']; ?></a></li>
      <?php  } ?>
      <li class="list-group-item"><a href="pengarang.php?">
 Sengkapnya</a></li>
</ul>
</div>


</div> 

<div class="row col-sm-12">
 

<div class="container-fluid col-sm-12 ">
   <h3 class="ds-div-head">Recently Added</h3>
<ul class="list-group">
  <li class="list-group-item">
 

      <table id="tabel1"   >
        <thead>
            <tr>
            <th></th>                                                          
           </tr>
            </tr>
        </thead>
        <tfoot>
            <tr>             
            <th></th>                                                    
            </tr>
            </tr>
        </tfoot>
        <tbody>
  <?php
                             $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe= idtipe
                              INNER JOIN tahun ON id_tahun= tahun ORDER BY id_karyailmiah DESC LIMIT 10 ");
              while ($data = mysqli_fetch_array($query)) { ?>
                          <tr>
                       <td>
    <a href="file_detail.php?id_karyailmiah= <?php echo $data["id_karyailmiah"]; ?>">
    <p>  <?php echo $data['nama_penulis']; ?>, (<?php echo $data['th_tahun']; ?>) <i><?php echo $data['judul']; ?></i>. <?php echo $data['nama_tipe']; ?>, <?php echo $data['lembaga_penulis']; ?>. <br>
                     <a class="mboh btn-xs btn-danger"><small>Dilihat <span class="badge"><?php echo $data['dilihat'] ?></span> </small></a>
                 <a class="mboh btn-xs btn-success"><small>Dipreview <span class="badge"><?php echo $data['preview'] ?></span>  </small></a>
                  <a class=" mboh btn-xs btn-primary"><small>Didownload <span class="badge"><?php echo $data['download'] ?></span> </small></a>    
                            </td>
                          </tr>            
                               
                          <?php
                        } ?>
        </tbody>
    </table>
          </li>

</ul>




                     <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM permintaan_data WHERE status = 'Disetujui'  ");
                      $data = mysqli_fetch_array($query);
                     $Disetujui = $data['totaluser'];
                      ?>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM permintaan_data WHERE status = 'Ditolak'  ");
                      $data = mysqli_fetch_array($query);
                     $Ditolak =7;
                      ?>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM permintaan_data WHERE status = 'Menunggu Konfirmasi'  ");
                      $data = mysqli_fetch_array($query);
                      $menunggu = 5;
                      ?>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM users WHERE user_role = 'menunggu konfirmasi'  ");
                      $data = mysqli_fetch_array($query);
                      $usertunggu = $data['totaluser'];
                      ?>
                       <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM users WHERE user_role = 'admin'  ");
                      $data = mysqli_fetch_array($query);
                      $useradmin = $data['totaluser'];
                      ?>
                       <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM users WHERE user_role = 'anggota'  ");
                      $data = mysqli_fetch_array($query);
                     $useranggota = $data['totaluser'];
                      ?>
                       <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM users   ");
                      $data = mysqli_fetch_array($query);
                     $usertotal = $data['totaluser'];
                      ?>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen1 = '3'");
                      $data = mysqli_fetch_array($query);
                      $statustotal = $data['total'];
                      ?>












                        <?php

                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen1 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status1 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen2 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status2 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen3 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status3 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen4 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status4 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen5 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status5 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen6 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status6 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen7 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status7 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen8 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status8 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen9 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status9 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen10 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status10 = $data['total'];
                      
                     $total = $status1 + $status2 + $status3 + $status4 + $status5 + $status6 + $status7 + $status8 + $status9 + $status10 ;
                     ?>


                         <?php

                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen1 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status1 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen2 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status2 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen3 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status3 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen4 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status4 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen5 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status5 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen6 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status6 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen7 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status7 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen8 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status8 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen9 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status9 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen10 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status10 = $data['total'];
                   
                     $total = $status1 + $status2 + $status3 + $status4 + $status5 + $status6 + $status7 + $status8 + $status9 + $status10 ;
                     ?>

                         <?php

                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen1 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status1 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen2 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status2 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen3 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status3 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen4 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status4 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen5 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status5 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen6 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status6 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen7 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status7 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen8 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status8 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen9 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status9 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen10 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status10 = $data['total'];
                     
                   $total = $status1 + $status2 + $status3 + $status4 + $status5 + $status6 + $status7 + $status8 + $status9 + $status10 ;
                     ?>

                         <?php

                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen1 ");
                      $data = mysqli_fetch_array($query);
                      $status1 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen2 ");
                      $data = mysqli_fetch_array($query);
                      $status2 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen3 ");
                      $data = mysqli_fetch_array($query);
                      $status3 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen4 ");
                      $data = mysqli_fetch_array($query);
                      $status4 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen5");
                      $data = mysqli_fetch_array($query);
                      $status5 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen6");
                      $data = mysqli_fetch_array($query);
                      $status6 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen7");
                      $data = mysqli_fetch_array($query);
                      $status7 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen8");
                      $data = mysqli_fetch_array($query);
                      $status8 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen9");
                      $data = mysqli_fetch_array($query);
                      $status9 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen10 ");
                      $data = mysqli_fetch_array($query);
                      $status10 = $data['total'];
                     
                  $total = $status1 + $status2 + $status3 + $status4 + $status5 + $status6 + $status7 + $status8 + $status9 + $status10 ;
                     ?>
                  </div>
                  
                                 
                 </div>
             


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!--         <div class="row" >
          <div class="col-md-12" >
          <div class="card" style="background-color: #e67e22;">
            <div class="card-body">
          <center><img src="../assets/images/" alt="" class="img-responsive"></center> -->
      
        </div>
      </div>
    </div>
        </div>
        <footer>
  <div class="container-fluid">
    <p class="copyright">&copy; Repository UIN SUKSKA</p>
  </div>
</footer>
      </div>
    </div>
     <script>
               $(document).ready(function(){
    $('#tabel1').DataTable();
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

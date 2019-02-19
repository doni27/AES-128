<?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
         
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              <div class="row">
                          <div class="row col-sm-12 ">
                          <br>
  

<div class="col-sm-4 ">
<?php 
$idfakultas = $_GET['id_fakultas'];
$idjurusan = $_GET['id_jurusan'];
 $query = mysqli_query($connect, "SELECT * FROM id_fakultas WHERE id_fakultas= $idfakultas ");
while ($data = mysqli_fetch_array($query)) { 


$nama = $data['nama_fakultas'];

}

$query = mysqli_query($connect, "SELECT count(*) totaljurusan FROM karya_ilmiah WHERE idjurusan= $idjurusan");
                      $dataencrypt = mysqli_fetch_array($query);
                $totaljurusan =  $dataencrypt['totaljurusan'];

                      $query = mysqli_query($connect, "SELECT count(*) totalfakultas FROM sub_jurusan WHERE idfakultas= $idfakultas");
                      $dataencrypt = mysqli_fetch_array($query);
                $total =  $dataencrypt['totalfakultas'];

 ?>

<?php   $query = mysqli_query($connect, "SELECT * FROM sub_jurusan INNER JOIN id_fakultas ON idfakultas= $idfakultas LIMIT $total ");
while ($data = mysqli_fetch_array($query)) { ?>
<?php 
$jumlah[] = $data['jumlah'];
$id = $data['id_sub_jurusan'];


}
//Total
$jumlahnya = array_sum($jumlah);
// echo "$jumlahnya";


 ?>
<?php 
    $query4     = "UPDATE id_fakultas SET  jumlah_fakultas ='$jumlahnya'  WHERE id_fakultas='$idfakultas'";
                                $sql3= mysqli_query($connect, $query4); 
   $query4     = "UPDATE sub_jurusan SET  jumlah ='$totaljurusan'  WHERE id_sub_jurusan ='$idjurusan'";
  $sql4= mysqli_query($connect, $query4); 
?>












<?php   $query = mysqli_query($connect, "SELECT * FROM sub_jurusan INNER JOIN id_fakultas ON idfakultas= $idfakultas LIMIT $total ");
while ($data = mysqli_fetch_array($query)) { ?>

<ul class="list-group">
  <li class="list-group-item">
   <a href="pencarian_jurusan.php?id_jurusan=<?php echo $data['id_sub_jurusan']; ?>&id_fakultas=<?php echo $data['idfakultas']; ?>"><?php echo $data['nama_sub_jurusan']; ?></a>
 <span class="badge"><?php echo $data['jumlah']; ?></span>
</li>

  <?php } ?>
</ul>                  
</div> 
<div class="container-fluid col-sm-8 post">
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
                             $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  INNER JOIN tipe ON id_tipe= idtipe
                              INNER JOIN tahun ON id_tahun= tahun
                             WHERE idjurusan = '$idjurusan'
                             

                              ");
              while ($data = mysqli_fetch_array($query)) { ?>
                          <tr>
                       <td>
    <a href="detail.php?id_karyailmiah= <?php echo $data["id_karyailmiah"]; ?>">
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
</div>
</div>
</div> 



<!-- batas body paling bawah -->



<!-- batas wilayah sidebar paling atass -->

</div>
<!-- batas wilayah sidebar paling bawah  --> 



  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--     <script src="js/jquery-latest.js"></script> -->
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

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
$id_subjek1 = $_GET['id_subjek1'];
 $query = mysqli_query($connect, "SELECT * FROM sub_subjek1 WHERE id_subjek1= $id_subjek1 ");
while ($data = mysqli_fetch_array($query)) { 


$nama = $data['nama_subjek1'];

}
 $query = mysqli_query($connect, "SELECT count(*) total FROM subjek WHERE subsubjek1= $id_subjek1");
                      $dataencrypt = mysqli_fetch_array($query);
                $total =  $dataencrypt['total'];
                  $total;





?>

<?php 



  $query = mysqli_query($connect, "SELECT * FROM subjek INNER JOIN sub_subjek1 ON subsubjek1= $id_subjek1 LIMIT $total ");
while ($data = mysqli_fetch_array($query)) { ?>
<?php 
$jumlah[] = $data['jumlah_subjek'];
$id = $data['id_subjek'];
}
 if (empty( $jumlah )){}else{


 $jumlahnya = array_sum($jumlah);



    $query4     = "UPDATE sub_subjek1 SET  jumlah ='$jumlahnya'  WHERE id_subjek1='$id_subjek1'";
                                $sql3= mysqli_query($connect, $query4);
                                } 
 ?>


   

<?php   $query = mysqli_query($connect, "SELECT * FROM subjek INNER JOIN sub_subjek1 ON id_subjek1= $id_subjek1 where subsubjek1 = $id_subjek1 ");
while ($data = mysqli_fetch_array($query)) { ?>

<ul class="list-group">
  <li class="list-group-item">
    <a href="pencarian_subsubjek.php?subjek=<?php echo $data['id_subjek']; ?>&sub=<?php echo $data['subsubjek1']; ?>"><?php echo $data['nama_subjek']; ?></a>
 <span class="badge"><?php echo $data['jumlah_subjek']; ?></span>
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
                                  $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe= idtipe
                              INNER JOIN tahun ON id_tahun= tahun where subjek ='$nama' ");
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

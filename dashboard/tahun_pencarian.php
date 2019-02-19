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
  

<div class="col-sm-2 col-sm-offset-1">
  <?php   $query = mysqli_query($connect, "SELECT * FROM tahun ");
while ($data = mysqli_fetch_array($query)) { ?>
<ul class="list-group">
  <li class="list-group-item">
   <a href="tahun_pencarian.php?id_tahun=<?php echo $data['id_tahun']; ?>"> <?php echo $data['th_tahun']; ?></a>
 <span class="badge">  <?php echo $data['jumlah']; ?></span>
</li>
  <?php } ?>
</ul>
                    
</div> 
<?php 
$tahun = $_GET['id_tahun'];
 

$query = mysqli_query($connect, "SELECT count(*) totaltahun FROM karya_ilmiah WHERE tahun= $tahun");
                      $dataencrypt = mysqli_fetch_array($query);
              echo  $totaltahun =  $dataencrypt['totaltahun'];

   $query4     = "UPDATE tahun SET  jumlah ='$totaltahun'  WHERE id_tahun ='$tahun'";
  $sql4= mysqli_query($connect, $query4); 


?>
<div class="container-fluid col-sm-8">
  
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
                              INNER JOIN tahun ON id_tahun= tahun
                              WHERE tahun = '$tahun'

                              ");
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

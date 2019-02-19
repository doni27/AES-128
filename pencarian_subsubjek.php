<?php include 'header.php'; ?>
<!-- batas body paling ataas -->
<!-- batas body paling ataas -->

<div class="row col-sm-12">
  <h3 class="page-header text-center ">
                    Pencarian Berdasarkan Subjek    
<br><br></h3>
<div class="col-sm-4 ">
<?php 
$subjek = $_GET['subjek'];
$id_subjek1 = $_GET['sub'];
 $query = mysqli_query($connect, "SELECT * FROM sub_subjek1 WHERE id_subjek1= $id_subjek1 ");
while ($data = mysqli_fetch_array($query)) { 


$nama = $data['nama_subjek1'];

}
 $query = mysqli_query($connect, "SELECT count(*) total FROM subjek WHERE subsubjek1= $id_subjek1");
                      $dataencrypt = mysqli_fetch_array($query);
                $total =  $dataencrypt['total'];
                  $total;


$query = mysqli_query($connect, "SELECT count(*) totalsubjek FROM karya_ilmiah WHERE idsubjek= $subjek");
                      $dataencrypt = mysqli_fetch_array($query);
               $totalsubjek =  $dataencrypt['totalsubjek'];

   $query4     = "UPDATE subjek SET  jumlah_subjek ='$totalsubjek'  WHERE id_subjek ='$subjek'";
  $sql4= mysqli_query($connect, $query4); 

?>

<?php 



  $query = mysqli_query($connect, "SELECT * FROM subjek INNER JOIN sub_subjek1 ON subsubjek1= $id_subjek1 LIMIT $total ");
while ($data = mysqli_fetch_array($query)) { ?>
<?php 
$jumlah[] = $data['jumlah_subjek'];
$id = $data['id_subjek'];
}

 $jumlahnya = array_sum($jumlah);
 ?>
<?php 
    $query4     = "UPDATE sub_subjek1 SET  jumlah ='$jumlahnya'  WHERE id_subjek1='$id_subjek1'";
                                $sql3= mysqli_query($connect, $query4); 
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
                              INNER JOIN tahun ON id_tahun= tahun where idsubjek ='$subjek' ");
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



<!-- batas body paling bawah -->



<!-- batas wilayah sidebar paling atass -->

</div>
<!-- batas wilayah sidebar paling bawah  --> 
 <footer>
            <div class="row">
                <div class="col-lg-12 text-center well">
                    <p>Copyright &copy; Coded By Sanish Gurung &copy; 2018</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

        <script >

                  $(document).ready(function(){
    $('#tabel1').DataTable();
});
    
         
          window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
        </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
  </body>
</html>
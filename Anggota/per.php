<?php include 'header.php'; ?>


<!-- batas body paling ataas -->


  <h3 class="page-header text-center ">
                    Pencarian berdasarkan Subjek     
<br><br>
<!-- <?php
$query = mysqli_query($connect, "SELECT * FROM id_fakultas ");
while ($datafakultas = mysqli_fetch_array($query)){?>
      <?php  echo $datafakultas['nama_fakultas'];  ?>  
      <br>
      <?php }?>
<?php 
$umur = 13;

if ($umur < 18 ){
    echo "Kamu tidak boleh membuka situs ini!";
} else {
    echo "Selamat datang di website kami!";
}
?>     -->     
                </h3>
</div>
<div class="container-fluid col-sm-10 col-sm-offset-1">
  

<br>
</div>
<div class="row col-sm-12">
<div class="col-sm-8 col-sm-offset-2">


  <br>

<ul class="list-group">
  <li class="list-group-item">
 

      <table id="tabel1" class="display"  >
        <thead>
            <tr>
             
                                    <th>Nama</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Tipe</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Status</th>
                                                                                           
           </tr>
            </tr>
        </thead>
        <tfoot>
            <tr>             
             
                                    <th>Nama</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Tipe</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Status</th>
                                                                                     
            </tr>
            </tr>
        </tfoot>
        <tbody>
  <?php
                      $query = mysqli_query($connect, "SELECT * FROM permintaan_data INNER JOIN tipe ON id_tipe= tipeid
  ");
while ($data = mysqli_fetch_array($query)) { ?>
  
                          <tr>
                       
                            <td><?php echo $data['nama_anggota']; ?></td>
                            <td><?php echo strtolower( substr($data['judul'],0,300)); ?></td>
                            <td><?php echo $data['file']; ?></td>
                            <td><?php echo $data['nama_tipe']; ?> </td>
                            <td><?php echo $data['tanggal']; ?></td>
                             <td><?php echo $data['status']; ?></td>
                               <td><?php $url_dokumen = $data['file']; ?> <?php 

      if ($data['status'] == 'Menunggu Konfirmasi') {
                          
                                
                              }elseif ($data['status'] == 'Disetujui'){     echo'<a class="  btn btn-primary btn-group  glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Preview File"  href="karyailmiah-input.php"></a></td>' ;

                             // echo'<td><a href="review_dwnld.php?nama_file='.$url_dokumen.'" class=" btn btn-primary glyphicon glyphicon-eye-open"  type="hidden" data-toggle="tooltip" data-placement="top" title="Preview File" ';
                               
                              
                              }else{

                              }







                             //   echo'<a class="  btn btn-primary btn-group  glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Preview File"  href="karyailmiah-input.php"></a></td>' ;

                             // echo'<td><a href="review.php?nama_file=../dashboard/'.$url_dokumen.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ';


                             ?>
                            
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
                    <p>Copyright &copy;By UIN SUSKA RIAU &copy; 2018</p>
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
<?php include 'header.php'; ?>


<!-- batas body paling ataas -->

  <h3 class="page-header text-center ">
                        
<br><br>
  Tabel Permintaan Data Karya Ilmiah
                </h3>
</div>
<div class="container-fluid col-sm-10 col-sm-offset-1">

<br>
</div>
<div class="row col-sm-12">
<div class="col-sm-10 col-sm-offset-1"> <?php 


   $query = mysqli_query($connect, "SELECT count(*) totalpermintaan FROM permintaan_data WHERE nama_anggota= '{$user}'");
                      $dataencrypt = mysqli_fetch_array($query);
              $total =  $dataencrypt['totalpermintaan'];

 $query4     = "UPDATE users SET  permintaan_data ='$total'  WHERE username='$user'";
                                $sql3= mysqli_query($connect, $query4); 

      // $cek = mysqli_num_rows(mysqli_query($connect,"SELECT file='{$file}' FROM permintaan_data  WHERE nama_anggota='{$user}'"));
?>
  <br>


<ul class="list-group">
  <li class="list-group-item">
 

      <table id="tabel1"  >
        <thead>
                                <tr>
                                      <th>No</th>
                                    <th>Nama</th>
                                    <th>Nim/Nip</th>
                                    <th>Jurusan</th>
                                    <th style type="text/css" width="80%" media="screen">
                                      
                                    </style>Judul</th>
                                    <th>File</th>
                                    <th>Tipe</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                   
                                                                   
                                </tr>
                            </thead>
        <tfoot>
        
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nim/Nip</th>
                                    <th>Jurusan</th>
                                    <th  >
                                      
                                    Judul</th>
                                    <th>File</th>
                                    <th>Tipe</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                   
                                                                     
                                </tr>
        </tfoot>
        <tbody>
                           <?php $i=1; ?>
                        <?php
                          $query = mysqli_query($connect, "SELECT * FROM permintaan_data INNER JOIN tipe ON id_tipe= tipeid WHERE nama_anggota='{$user}' ORDER BY id_permintaan DESC");
                          while ($data = mysqli_fetch_array($query)) { ?>
                           <?php $url_dokumen = $data['file']; ?>
                          <tr>
                         
                                                                       
                                    
                            <td><?= $i; ?></td>
                           
                            <td><?php echo $nama = $data['nama_anggota']; ?></td>
                               <td><?php echo $data['nim'];

                                ?></td>
                                  <td><?php echo $data['jurusan']; ?></td>
                            <td><a href="detail.php?id_karyailmiah=<?php echo $data['id_karya_ilmiah']; ?>" title=""><?php echo strtolower( substr($data['judul'],0,50)); ?></a></td>
                            <td><?php echo $data['file']; ?></td>
                            <td><?php echo $data['nama_tipe']; ?> </td>
                            <td><?php echo $data['tanggal']; ?></td>
                             <td><?php echo $data['status']; ?></td>
                            <td> <?php 

      if ($data['status'] == 'Menunggu Konfirmasi') {
                          
                                
                              }elseif ($data['status'] == 'Disetujui'){     
                                echo'<a href="dwnload_file_permintaan.php?nama_file='.$nama.$url_dokumen.'" class=" btn-xs btn-danger glyphicon glyphicon-download">Download</a><a href="review_dwnld.php?nama_file='.$nama.$url_dokumen.'" class=" btn-xs btn-primary glyphicon glyphicon-eye-open">Preview</a>' ;
                             
                             
                               
                              
                              }else{

                              }







                             //   echo'<a class="  btn btn-primary btn-group  glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Preview File"  href="karyailmiah-input.php"></a></td>' ;

                             // echo'<td><a href="review.php?nama_file=../dashboard/'.$url_dokumen.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ';


                             ?>
                            
                            </td>
                          </tr>            
                          <?php $i++; ?>        
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
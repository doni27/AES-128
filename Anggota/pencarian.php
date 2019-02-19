<?php include 'header.php'; ?>


<!-- batas body paling ataas -->
<?php  
$cari = 'analisi';?>
  <h3 class="page-header text-center ">
                    Pencarian berdasarkan Subjek     
<br><br>
  
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

                              judul LIKE '%$cari%' 
                              -- th_tahun LIKE '%$cari%' OR
                              -- fakultas LIKE '%$cari%' OR
                              -- nama_tipe LIKE '%$cari%' OR
                              -- nama_penulis LIKE '%$cari%' 


                              ");
              while ($data = mysqli_fetch_array($query)) { ?>
                          <tr>
                       <td>
   
   
    <p>  <?php echo $data['nama_penulis']; ?>, (<?php echo $data['th_tahun']; ?>) <?php echo $data['judul']; ?>. <?php echo $data['nama_tipe']; ?>, <?php echo $data['lembaga_penulis']; ?>.  
                         
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
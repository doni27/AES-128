<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

<!-- batas body paling ataas -->


  <h3 class="page-header text-center ">
                    Pencarian Berdasarkan Nama Pengarang
   
                </h3>
</div>

<div class="row col-sm-12">

  <br>

</div>
</div> 


<div class="row col-sm-12">
<div class="col-sm-8 col-sm-offset-2">


  <br>

<ul class="list-group">
  <li class="list-group-item">
 

      <table id="tabel1" >
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
          <ul class="list-group">
  <?php
                $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah ");
while ($data = mysqli_fetch_array($query)) { ?>
    

                          <tr>
                       <td>
   
  <a href="pencarian_penulis.php?nama=<?php echo $data['nama_penulis']; ?>">
  <li class="list-group-item">
   
      <?php $nama = $data['nama_penulis'];
      echo $nama ?>
 <span class="badge">  1</span>
</li></a>
                            </td>
                          </tr>            
                               
                          <?php
                        } ?>
                        </ul>  
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
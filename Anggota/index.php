
<?php  include('../config.php'); ?>
<?php include 'header.php'; ?>

<!-- col-sm-offset-2 -->
<!-- batas body paling ataas -->

<!--     <div class="container-fluid">
       <div class="  col-sm-8 col-sm-offset-2">
                  
                        <div class="input-group search">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>

                        </span>
                    </div>
       </div>
 --><br><br><br>
    
    <div class="container-fluid">
       <div class="  col-sm-8 col-sm-offset-2">
                  <form action="pencarian.php" method="get">
                        <div class="input-group search">
                        <input name="cari" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>

                        </span>
                    </div></form>
       </div>
<br><br><br><br>
</div></div>
   
</div>
<div class="row col-sm-12 ">
  
<div class="col-sm-4  " >
  <ul class="liss list-group">
    <a class=" list-group-item active" style="background-color: #009090;">
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
 <a href="#" class="list-group-item active" style="background-color: #009090;">
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
</div></div>
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
</div><!-- batas wilayah sidebar paling bawah  --> 
 <footer>
            <div class="row">
                <div class="col-sm-12 text-center well">
                    <p>Copyright &copy; Repository &copy; 2018</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

        <script >
         
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
   <!--  <script src="js/jquery.min.js"></script>
    Include all compiled plugins (below), or include individual files as needed
    <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>
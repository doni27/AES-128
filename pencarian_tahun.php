<?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h4><i class="fa fa-file"></i> Tambah Karya Ilmiah</h4>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Form Tambah Karya Ilmiah</li>
            </ul>
          </div>
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
    <a href="detail.php?id_karyailmiah= <?php echo $data["id_karyailmiah"]; ?>">
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



  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-latest.js"></script>
<script>
$(document).ready(function() {
  var max_fields      = 11; //maximum input boxes allowed
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div><input type="file" name="dokumen[]" multiple/><a href="#" class="remove_field"><button class="add_field_button   btn btn-primary">Hapus</button></a></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>
    <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>

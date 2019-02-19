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
   
      <?php echo $data['nama_penulis']; ?>
 <span class="badge"> 1</span>
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



  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--   <script src="js/jquery-latest.js"></script> -->
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
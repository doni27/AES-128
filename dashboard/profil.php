<?php include'header.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h4><i class="fa fa-file"></i>  Profil </h4>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Profil User </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <?php
$user = $_SESSION['nim'];
$query = mysqli_query($connect,"SELECT * FROM users WHERE nim='$user'");
$data = mysqli_fetch_array(  $query);
?>
                <h4 align="center">Profil  <i style="color:blue"></i></h4><br>
                <form class="form-horizontal" method="post" action="file_engkrip_proses.php">
                <div class="table-responsive">
                  <table class="table striped">

 



                       <tr>
                         <td class="col-md-2">Username</td>
                         <td class="col-md-1">:</td>
                         <td class="col-md-9">
                <?php echo $data['username']; ?></td>
                       </tr>
                         <tr>
                         <td>Nim/Nip</td>
                         <td>:</td>
                         <td> <?php echo $data['nim']; ?></td>
                       </tr>
                       
                       <tr>
                         <td>Jurusan</td>
                         <td>:</td>
                         <td> <?php echo $data['jurusan']; ?></td>
                       </tr>
                       
                      
                       <tr>
                         <td>Job Title</td>
                         <td>:</td>
                         <td> <?php echo $data['job_title']; ?></td>
                       </tr>
                       
                      
                       <tr>
                         <td>Email</td>
                         <td>:</td>
                         <td><?php echo $data['email']; ?></td>
                       </tr>
                       <tr>
                         <td>Join Date</td>
                         <td>:</td>
                         <td><?php echo $data['join_date']; ?></td>
                       </tr>
                       <tr>
                         <td>Last Activity</td>
                         <td>:</td>
                         <td><?php echo $data['last_activity']; ?></td>
                       </tr>
                      
                         <tr>
                         <td></td>
                         <td></td>
                         <td><a href="profil_edit.php?nim=<?php echo $data['nim']; ?>" class=" col-md-2  btn btn-primary " > edit</a></td>
                       </tr>
                  </table>
                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

        $(document).ready(function() {
        $('#file').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": true,
          "order": [0, "asc"]
        });
        });
        </script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/datatables/js/jquery.dataTables.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>

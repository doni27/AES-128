
<?php include 'header.php'; ?>
<?php include 'hitung.php'; ?>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h3><i class="fa fa-dashboard"></i> Repositori UIN SUSKA</h3>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="row col-sm-12 ">
   <div class="col-sm-12 ">
                     <div id="columnchart_material_laporan" style="width: 'auto'; height: 400px;"></div>
                     <br><br><br><br>  </div> 

 <div class="col-sm-10 col-lg-offset-1 ">
  <ul class="list-group">
  <li class="list-group-item">
 

      <table id="tabel1"   >
        <thead>
             <tr>             
            <th>Judul</th>                                                    
           
                       
            <th>Dilihat</th>  
             <th>Preview</th> 
              <th>Download</th>                                                   
            </tr>
        </thead>
        <tfoot>
            <tr>    
              <th>Judul</th>             
             <th>Dilihat</th>  
             <th>Preview</th> 
              <th>Download</th>                                                    
            </tr>
           
        </tfoot>
        <tbody>
  <?php
                             $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe= idtipe
                              INNER JOIN tahun ON id_tahun= tahun ");
              while ($data = mysqli_fetch_array($query)) { 
                     ?>
                          <tr>
                       <td>
    <a href="detail.php?id_karyailmiah= <?php echo $data["id_karyailmiah"]; ?>">
    <p>  <?php echo strtolower( $data['judul']); ?>
                         
                            </td>
                            <td><?php echo $data['dilihat']; ?></td>
                             <td><?php echo $data['preview']; ?></td>
                              <td><?php echo $data['download']; ?></td>
                          </tr>            
                               
                          <?php
                        } ?>
        </tbody>
    </table>
          </li>
<br><br><br><br>
</ul>
                 </div>
                 
 <div class="col-sm-10 col-lg-offset-1 ">
                     <div id="columnchart_material" style="width: 'auto'; height: 400px;"></div>
                       </div> 
                   
                 </div>
  
            <div class="col-sm-3 col-lg-offset-1" >
            <br><br><br><br>
               <a  class="list-group-item active">
   Data Karya Ilmiah  <span class="badge"> <?php    echo  $ki ; ?></span>
  </a>
                                          <li class="list-group-item">
                                    Dokumen
       <span class="badge"> <?php    echo  $totalki ; ?></span>
                                          
                                      
                                     </li>
                                         <li class="list-group-item">
                                      Enkripsi <span class="badge"><?php echo  $total2; ?></span>
                                     </li>
                                      </li>
                                         <li class="list-group-item">
                                       Dekripsi<span class="badge"><?php echo  $total3; ?>
                                     </li>
                                      
                                         
                                   
                                     </ul>
                
                                 </div>       
         <div class="col-sm-6 "><br><br><br>
              <div id="piechart3" style="width: 500px; height: 300px;" > 
              </div></div>





                       <div class="col-sm-3 col-lg-offset-1 " >
                        
                         <a  class="list-group-item active">
   Permintaan Data   <span class="badge"> <?php    echo  $permintaan; ?></span>
  </a>
                                          <li class="list-group-item">
                                    Disetujui
       <span class="badge"> <?php    echo  $Disetujui ; ?></span>
                                          
                                      
                                     </li>
                                         <li class="list-group-item">
                                      Ditolak <span class="badge"><?php echo  $Ditolak; ?></span>
                                     </li>
                                      </li>
                                         <li class="list-group-item">
                                       Menunggu Konfirmasi <span class="badge"><?php echo  $menunggu; ?>
                                     </li>
                                      </li>
                                        
                                   
                                     </ul>
                
                                 </div>       
         <div class="col-sm-6 ">
              <div id="piechart" style="width: 500px; height: 300px;" > </div></div>  


                       <div class="col-sm-3 col-lg-offset-1" >
                
                        <a  class="list-group-item active">
   Data Users  <span class="badge"> <?php    echo  $usertotal ; ?></span>
  </a>
                                          <li class="list-group-item">
                                   Menunggu Konfirmasi
       <span class="badge"> <?php    echo  $usertunggu ; ?></span>
                                        
         
                                      
                                     </li>
                                         <li class="list-group-item">
                                      Admin <span class="badge"><?php echo  $useradmin; ?></span>
                                     </li>
                                      </li>
                                         <li class="list-group-item">
                                       Anggota <span class="badge"><?php echo  $useranggota; ?>
                                     </li>
                                      
                                         
                                   
                                     </ul>
                
                                 </div>       
         <div class="col-sm-6 ">
              <div id="piechart2" style="width: 500px; height: 300px;" > </div></div> 

              <br>  <br>    




                                 
                        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!--         <div class="row" >
          <div class="col-md-12" >
          <div class="card" style="background-color: #e67e22;">
            <div class="card-body">
          <center><img src="../assets/images/" alt="" class="img-responsive"></center> -->
      
        </div>
      </div>
    </div>
        </div>
        <footer>
  <div class="container-fluid">
    <p class="copyright">&copy; Repository UIN SUKSKA</p>
  </div>
</footer>
         <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],

          <?php   

            $element_text = ['Januari ','Februari ','Maret', 'April','Mei','Juni','Juli','Agustus', 'September','Oktober','November','Desember'];
            $element_count = [$karyailmiah, $permintaan, $subjek , $jurusan, $fakultas , $tipe,$karyailmiah, $permintaan, $subjek , $jurusan, $fakultas , $tipe];
             for($i =0;$i < 12; $i++){
                echo "['{$element_text[$i]}'".","."{$element_count[$i]}],";
           } 
           ?>
          // ['2014', 1000],
         
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material_laporan'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>







           <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],

          <?php   

            $element_text = ['Karya ilmiah ','Permintaan Data ','Subjek', 'Jurusan','Fakultas','Tipe'];
            $element_count = [$karyailmiah, $permintaan, $subjek , $jurusan, $fakultas , $tipe];
             for($i =0;$i < 6; $i++){
                echo "['{$element_text[$i]}'".","."{$element_count[$i]}],";
           } 
           ?>
          // ['2014', 1000],
         
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                    // ['Disetujui',     <?= $Disetujui;    ?>],
                    //  ['Ditolak',     <?= $Ditolak;    ?>],
                    //   ['Menunggu Konfirmasi',     <?= $menunggu; ?>],

         
           <?php   

            $element_text = ['Dokumen', 'Enkripsi','Dekripsi'];
            $element_count = [$totalki , $total2, $total3 ];
             for($i =0;$i < 3; $i++){
                echo "['{$element_text[$i]}'".","."{$element_count[$i]}],";
           } 
           ?>

         
        ]);

        var options = {
           title: 'Data Karya Ilmiah'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }
    </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                    // ['Disetujui',     <?= $Disetujui;    ?>],
                    //  ['Ditolak',     <?= $Ditolak;    ?>],
                    //   ['Menunggu Konfirmasi',     <?= $menunggu; ?>],

         
           <?php   

            $element_text = ['Disetujui', 'Ditolak','Menunggu Konfirmasi'];
            $element_count = [$Disetujui , $Ditolak, $menunggu ];
             for($i =0;$i < 3; $i++){
                echo "['{$element_text[$i]}'".","."{$element_count[$i]}],";
           } 
           ?>

         
        ]);

        var options = {
           title: 'Permintaan Data Karya Ilmiah Total: <?php echo $permintaan; ?>'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                    // ['Disetujui',     <?= $Disetujui;    ?>],
                    //  ['Ditolak',     <?= $Ditolak;    ?>],
                    //   ['Menunggu Konfirmasi',     <?= $menunggu; ?>],

         
           <?php   

            $element_text = ['Menunggu Konfirmasi', 'Admin','Anggota'];
            $element_count = [$usertunggu , $useradmin, $useranggota ];
             for($i =0;$i < 3; $i++){
                echo "['{$element_text[$i]}'".","."{$element_count[$i]}],";
           } 
           ?>

         
        ]);

        var options = {
           title: 'Data Users Total: <?php echo $usertotal; ?>'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }

    </script>
<script>
               $(document).ready(function(){
    $('#tabel1').DataTable();
});
    


   
        </script>

<!--     <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script> -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>

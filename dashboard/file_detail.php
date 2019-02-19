<?php include'header.php'; ?>
     



     




      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h4><i class="fa fa-eye"></i>  Detail Karya Ilmiah</h4>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Detail Karya Ilmiah </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <?php
 
 
  if(isset($_POST['enkrip'])){
 echo "     <div id='loader'></div>

<div style='display:none;' id='myDiv' class='animate-bottom'>
  
</div>';
 <hr><h5 class='alert alert-success text-center' role='alert' >eddasdasdil </h5>";
       }
  ?> <?php 
    if(isset($_POST['dekrip'])){
 echo "     <div id='loader'></div>

<div style='display:none;' id='myDiv' class='animate-bottom'>
  
</div>';
 <hr><h5 class='alert alert-success text-center' role='alert' >eddasdasdil </h5>";
       }
  ?>
                  <?php
 
 
    if(isset($_GET["hasil"])){
      if($_GET["hasil"] == "gagal"){
           echo "<hr><h5 class='alert alert-danger text-center'>GAGAL EDIT! </h5>";
      } else{
            echo "<hr><h5 class='alert alert-success text-center' role='alert' >edit berhasil </h5>";
      }
    }
  ?>
                <?php
                $id_karyailmiah = $_GET['id_karyailmiah'];
                $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  
                  INNER JOIN tipe ON id_tipe= idtipe 
                  INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan 
                  INNER JOIN subjek ON id_subjek= idsubjek
                  INNER JOIN tahun ON id_tahun = tahun
                   WHERE id_karyailmiah='$id_karyailmiah' ");
                $data2 = mysqli_fetch_array($query);
                ?>
                <h4 align="center">Judul <i "><?php echo $data2['judul'] ?></i></h4>
                  <a class="mboh btn-xs btn-success"><small>Dilihat <span class="badge"><?php echo $data2['dilihat'] ?></span> </small></a>
                 <a class="mboh btn-xs btn-warning"><small>Dipreview <span class="badge"><?php echo $data2['preview'] ?></span>  </small></a>
                  <a class=" mboh btn-xs btn-danger"><small>Didownload <span class="badge"><?php echo $data2['download'] ?></span> </small></a>
                <br><br>
                <form class="form-horizontal" method="post" action="file_engkrip_proses.php">
                <div class="table-responsive">
                  <table class="table striped">

                           
                             <?php  

                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen1 = $data2['dokumen1'];
                              $status1 = $data2['status_dokumen1'];
                              $dokumen = 'dokumen1';
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi1 = $filename.$tgl;
                                     $isi_sandi1= $data2['sandi_dokumen1'];
                                     $url_dokumen = $data2['url_dokumen1'];
                                     $preview1 = $data2['preview1'];
                                     $download1 = $data2['download1'];
                            
                        if(empty($dokumen1)) {
                                              
                                }else{ 
         
                        echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File"><span class="badge">'.$download1.'</span></a> &nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen1.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$preview1.'</span></a>&nbsp';

                       if ($data2['status_dokumen1'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen1" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="Amankan File dengan Engkripsi" type="submit" name="enkrip"> Engkripsi File</a>';
                              }elseif ($data2['status_dokumen1'] == 2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen1" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terengkripsi, Dekripsi Kebentuk Aslinya  "   type="submit" name="dekrip"> Dekripsi File&nbsp</a>';
                               
                              }elseif ($data2['status_dokumen1'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen1" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="enkrip"> Engkripsi File</a>';

                              }else{

                              }
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen1'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;  echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen1;   
                         
                      }
                  
                
                      ?></p> 
                    <p>  <?php 



                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen2 = $data2['dokumen2'];
                              $status2 = $data2['status_dokumen2'];
                              $url_dokumen = $data2['url_dokumen2'];

                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi2 = $filename.$tgl;
                                     $isi_sandi2= $data2['sandi_dokumen2'];
                                     $url_dokumen = $data2['url_dokumen2'];
                                     $download2 = $data2['download2'];
                                     $preview2 = $data2['preview2'];
                               
                              
                        if(empty($dokumen2)) {
                                              
                                }else{ 
                          

                     echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" ><span class="badge">'.$preview2.'</span></a>&nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen2.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$download2.'</span></a>&nbsp';

                       if ($data2['status_dokumen2'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen2" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="Amankan File dengan Engkripsi" type="submit" > Engkripsi File</a>';
                              }elseif($data2['status_dokumen2'] == 2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen2" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title=" File Telah Terengkripsi, Dekripsi Kebentuk Aslinya
"   type="submit" name="dokumen2"> Dekripsi File&nbsp</a>';

                              

                               }elseif ($data2['status_dokumen2'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen2" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="dokumen1"> Engkripsi File</a>';

                              }else{}
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen2'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;  echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen2;              
                     }
                  






                    ?></p>
                   <p> <?php 

                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen3 = $data2['dokumen3'];
                              $status3 = $data2['status_dokumen3'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi3 = $filename.$tgl;
                                     $isi_sandi3= $data2['sandi_dokumen3'];
                                      $url_dokumen = $data2['url_dokumen3'];
                                     $download3 = $data2['download3'];
                                     $preview3 = $data2['preview3'];
                               //  if(empty($isi_sandi3)) {
                               //       $hitung3 =  "dokument/$dokumen3";
                               //    $size3   =  filesize($hitung3);

                               // $query4     = "UPDATE karya_ilmiah SET  size_dokumen3 ='$size3', sandi_dokumen3= '$sandi3',url_dokumen3='dokument/$dokumen3'  WHERE id_karyailmiah='$id_karyailmiah'";
                               //  $sql3= mysqli_query($connect, $query4); 

                                              
                               //  }else{ }
                                 
                                
                              
                        if(empty($dokumen3)) {
                                              
                                }else{ 
                                
                              

                    echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" ><span class="badge">'.$preview3.'</span></a>&nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen3.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$download3.'</span></a>&nbsp';

                       if ($data2['status_dokumen3'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen3" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="Amankan File dengan Engkripsi" type="submit" name="dokumen1"> Engkripsi File</a>';
                              }elseif ($data2['status_dokumen3']==2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen3" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="File Telah Terengkripsi, Dekripsi Kebentuk Aslinya"   type="submit" name="dokumen1"> Dekripsi File&nbsp</a>';
                                  
                                 }elseif ($data2['status_dokumen3'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen3" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="dokumen1"> Engkripsi File</a>';

                              }else{}
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen3'];
                      $sizee = substr($size,0, -3);
                      echo $sizee; echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen3;              
                  }
                  


                      

                    ?></p>


                    <p>

                     <?php  

                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen4 = $data2['dokumen4'];
                              $status4 = $data2['status_dokumen4'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi4 = $filename.$tgl;
                                 $size_dokumen = $data2['size_dokumen4'];
                  $sandi_dokumen = $data2['sandi_dokumen4'];
                  $url_dokumen = $data2['url_dokumen4'];
                  $dokumen_name = $data2['dokumen4'];
                  $status_dokumen = 'status_dokumen4';
                         $isi_sandi4= $data2['sandi_dokumen4'];
                         $download4 = $data2['download4'];
                                     $preview4 = $data2['preview4'];
                               //  if(empty($isi_sandi4)) {
                               //      $hitung4 =  "dokument/$dokumen4";
                               //    $size4   =  filesize($hitung4);

                               // $query4     = "UPDATE karya_ilmiah SET  size_dokumen4 ='$size4', sandi_dokumen4= '$sandi4',url_dokumen4='dokument/$dokumen4'  WHERE id_karyailmiah='$id_karyailmiah'";
                               //  $sql3= mysqli_query($connect, $query4); 

                                              
                               //  }else{ }
                                 
                                
                        if(empty($dokumen4)) {
                                              
                                }else{ 
                          

                      echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" ><span class="badge">'.$preview4.'</span></a>&nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen4.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$download4.'</span></a>&nbsp';

                       if ($data2['status_dokumen4'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen4" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="
Amankan File dengan Engkripsi" type="submit" name="dokumen1"> Engkripsi File</a>';
                              }elseif ($data2['status_dokumen4']==2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen4" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title=" File Telah Terengkripsi, Dekripsi Kebentuk Aslinya"   type="submit" name="dokumen1"> Dekripsi File&nbsp</a>';
                               

                              }  elseif ($data2['status_dokumen4'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen4" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="dokumen1"> Engkripsi File</a>';

                              }else{}
                  
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen4'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;  echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen4;              
                    }
                
                      ?></p> 
                      <p>
                        <?php  

                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen5 = $data2['dokumen5'];
                              $status5 = $data2['status_dokumen5'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi5 = $filename.$tgl;
                                       $isi_sandi5= $data2['sandi_dokumen5'];
                                       $url_dokumen = $data2['url_dokumen5'];
                                       $download5 = $data2['download5'];
                                     $preview5 = $data2['preview5'];
                               //  if(empty($isi_sandi5)) {
                               //        $hitung5 =  "dokument/$dokumen5";
                               //    $size5   =  filesize($hitung5);

                               // $query4     = "UPDATE karya_ilmiah SET  size_dokumen5 ='$size5' , sandi_dokumen5= '$sandi5',url_dokumen5='dokument/$dokumen5' WHERE id_karyailmiah='$id_karyailmiah'";
                               //  $sql3= mysqli_query($connect, $query4); 

                                              
                               //  }else{ }
                                 
                                
                        if(empty($dokumen5)) {
                                              
                                }else{ 
                     
                      echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" ><span class="badge">'.$preview5.'</span></a>&nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen5.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$download5.'</span></a>&nbsp';

                       if ($data2['status_dokumen5'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen5" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="
Amankan File dengan Engkripsi" type="submit" name="dokumen1"> Engkripsi File</a>';
                              }elseif ($data2['status_dokumen5']==2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen5" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title=" File Telah Terengkripsi, Dekripsi Kebentuk Aslinya"   type="submit" name="dokumen5"> Dekripsi File&nbsp</a>';

                              }elseif ($data2['status_dokumen5'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen5" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="dokumen1"> Engkripsi File</a>';

                              }else{}
                  
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen5'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;  echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen5;              
                      
                }
                      ?></p> 

                      <p>
                        <?php  

                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen6 = $data2['dokumen6'];
                              $status6 = $data2['status_dokumen6'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi6 = $filename.$tgl;
                                       $isi_sandi6= $data2['sandi_dokumen6'];
                                       $url_dokumen = $data2['url_dokumen6'];
                                       $download6 = $data2['download6'];
                                     $preview6 = $data2['preview6'];
                               //  if(empty($isi_sandi6)) {
                               //       $hitung6 =  "dokument/$dokumen6";
                               //    $size6   =  filesize($hitung6);

                               // $query4     = "UPDATE karya_ilmiah SET  size_dokumen6 ='$size6' , sandi_dokumen6= '$sandi6'  WHERE id_karyailmiah='$id_karyailmiah'";
                               //  $sql3= mysqli_query($connect, $query4); 

                                              
                               //  }else{ }
                                 
                                
                        if(empty($dokumen6)) {
                                              
                                }else{ 
  
                       echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" ><span class="badge">'.$preview6.'</span></a>&nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen6.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$download6.'</span></a>&nbsp';

                       if ($data2['status_dokumen6'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen6" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="Amankan File dengan Engkripsi" type="submit" name="dokumen6"> Engkripsi File</a>';
                              }elseif($data2['status_dokumen6']==2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen6" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title=" Dekripsi File"   type="submit" name="dokumen6"> Dekripsi File&nbsp</a>';

                                  }elseif ($data2['status_dokumen6'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen6" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="dokumen1"> Engkripsi File</a>';

                              }else{}
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen6'];
                      $sizee = substr($size,0, -3);
                      echo $sizee; echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen6;              
                  
                  }
                
                      ?></p> 




                      <p>
                        <?php  

                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen7 = $data2['dokumen7'];
                              $status7 = $data2['status_dokumen7'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi7 = $filename.$tgl;
                                       $isi_sandi7= $data2['sandi_dokumen7'];
                                       $url_dokumen = $data2['url_dokumen7'];
                                       $download7 = $data2['download7'];
                                     $preview7 = $data2['preview7'];
                               //  if(empty($isi_sandi7)) {
                               //        $hitung7 =  "dokument/$dokumen7";
                               //    $size7   =  filesize($hitung7);

                               // $query4     = "UPDATE karya_ilmiah SET ize_dokumen7 ='$size7' , sandi_dokumen7= '$sandi7'  WHERE id_karyailmiah='$id_karyailmiah'";
                               //  $sql3= mysqli_query($connect, $query4); 

                                              
                               //  }else{ }
                                 
                                
                        if(empty($dokumen7)) {
                                              
                                }else{ 
                               

                     echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" ><span class="badge">'.$preview7.'</span></a>&nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen7.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$download7.'</span></a>&nbsp';

                       if ($data2['status_dokumen7'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen7" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="Amankan File dengan Engkripsi" type="submit" name="dokumen7"> Engkripsi File</a>';
                              }elseif($data2['status_dokumen7']==2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen7" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title=" File Telah Terengkripsi, Dekripsi Kebentuk Aslinya"   type="submit" name="dokumen7"> Dekripsi File&nbsp</a>';

                                  }elseif ($data2['status_dokumen7'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen7" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="dokumen1"> Engkripsi File</a>';

                              }else{}
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen7'];
                      $sizee = substr($size,0, -3);
                      echo $sizee; echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen7;              
                      }
                  
                
                      ?></p>



                      <p>
                        <?php  

                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen8 = $data2['dokumen8'];
                              $status8 = $data2['status_dokumen8'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi8 = $filename.$tgl;
                                       $isi_sandi8= $data2['sandi_dokumen8'];
                                       $url_dokumen = $data2['url_dokumen8'];
                                       $download8 = $data2['download8'];
                                     $preview8 = $data2['preview8'];
                               //  if(empty($isi_sandi8)) {
                               //          $hitung8 =  "dokument/$dokumen8";
                               //    $size8   =  filesize($hitung8);

                               // $query4     = "UPDATE karya_ilmiah SET  size_dokumen8 ='$size8' , sandi_dokumen8= '$sandi8'  WHERE id_karyailmiah='$id_karyailmiah'";
                               //  $sql3= mysqli_query($connect, $query4); 

                                              
                               //  }else{ }
                                 
                                
                        if(empty($dokumen8)) {
                                              
                                }else{ 
                         
               echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" ><span class="badge">'.$preview8.'</span></a>&nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen8.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$download8.'</span></a>&nbsp';

                       if ($data2['status_dokumen8'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen8" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="Amankan File dengan Engkripsi" type="submit" name="dokumen8"> Engkripsi File</a>';
                              }elseif($data2['status_dokumen8']==2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen8" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title=" File Telah Terengkripsi, Dekripsi Kebentuk Aslinya"   type="submit" name="dokumen8"> Dekripsi File&nbsp</a>';

                              
                                  }elseif ($data2['status_dokumen8'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen8" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="dokumen1"> Engkripsi File</a>';

                              }else{}
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen8'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;  echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen8;              
                      }
                  
                
                      ?></p>



                      <p>
                        <?php  

                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen9 = $data2['dokumen9'];
                              $status9 = $data2['status_dokumen9'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi9 = $filename.$tgl;
                                       $isi_sandi9= $data2['sandi_dokumen9'];
                                       $url_dokumen = $data2['url_dokumen9'];
                                       $download9 = $data2['download9'];
                                     $preview9 = $data2['preview9'];
                               //  if(empty($isi_sandi9)) {
                               //           $hitung9 =  "dokument/$dokumen9";
                               //    $size9   =  filesize($hitung9);

                               // $query4     = "UPDATE karya_ilmiah SET size_dokumen9 ='$size9' , sandi_dokumen9= '$sandi9'  WHERE id_karyailmiah='$id_karyailmiah'";
                               //  $sql3= mysqli_query($connect, $query4); 

                                              
                               //  }else{ }
                                 
                                
                        if(empty($dokumen9)) {
                                              
                                }else{ 
                            
                      echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" ><span class="badge">'.$preview9.'</span></a>&nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen9.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$download9.'</span></a>&nbsp';
                       if ($data2['status_dokumen9'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen9" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="
Amankan File dengan Engkripsi" type="submit" name="dokumen9"> Engkripsi File</a>';
                              }elseif ($data2['status_dokumen9']==2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen9" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title=" File Telah Terengkripsi, Dekripsi Kebentuk Aslinya"   type="submit" name="dokumen9"> Dekripsi File&nbsp</a>';

                             
                                  }elseif ($data2['status_dokumen9'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen9" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="dokumen1"> Engkripsi File</a>';

                              }else{}
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen9'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;  echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen9;              
                      }
                  
                
                      ?></p>




                      <p>
                        <?php  

                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen10 = $data2['dokumen10'];
                              $status10 = $data2['status_dokumen10'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi10 = $filename.$tgl;
                                       $isi_sandi10= $data2['sandi_dokumen10'];
                                       $url_dokumen = $data2['url_dokumen10'];
                                       $download10 = $data2['download10'];
                                     $preview10 = $data2['preview10'];
                               //  if(empty($isi_sandi10)) {
                               //       $hitung10 =  "dokument/$dokumen10";
                               //    $size10   =  filesize($hitung10);

                               // $query4     = "UPDATE karya_ilmiah SET  size_dokumen10 ='$size10' , sandi_dokumen10= '$sandi10'  WHERE id_karyailmiah='$id_karyailmiah'";
                               //  $sql3= mysqli_query($connect, $query4); 

                                              
                               //  }else{ }
                                 
                                
                        if(empty($dokumen10)) {
                                              
                                }else{ 
                       
                       echo'<a href="download_file.php?nama_file='.$url_dokumen.'" class="mboh btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" ><span class="badge">'.$preview10.'</span></a>&nbsp<a href="review.php?nama_file='.$url_dokumen.'&dokumen='.$dokumen10.'" class="mboh btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File"><span class="badge">'.$download10.'</span></a>&nbsp';

                       if ($data2['status_dokumen10'] == 1) {
                                echo '<a href="file_engkrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen10" class="btn btn-primary glyphicon glyphicon-lock " data-toggle="tooltip" data-placement="top" title="
Amankan File dengan Engkripsi" type="submit" name="dokumen10"> Engkripsi File</a>';
                              }elseif($data2['status_dokumen10']==2){
                                echo '<a href="file_dekrip_proses_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen10" class="btn btn-danger glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title=" File Telah Terengkripsi, Dekripsi Kebentuk Aslinya"   type="submit" name="dokumen10"> Dekripsi File&nbsp</a>';

                              
                                  }elseif ($data2['status_dokumen10'] == 3){
                                echo '<a href="file_engkrip_3_2_detail.php?id_karyailmiah='.$id_karyailmiah.'&dokumen=dokumen10" class="btn btn-success glyphicon glyphicon-lock "  data-toggle="tooltip" data-placement="top" title="  File Telah Terdekripsi, Amankan File dengan Engkripsi  "   type="submit" name="dokumen1"> Engkripsi File</a>';

                              }else{}
                         echo'
                    &nbsp' ;
                       $size = $data2['size_dokumen10'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;  echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen10;              
                      }
                  
                
                      ?></p>




                      <p>Abstrak :</p>
                         <p>
                         <?php echo $data2['abstrak']; ?>
                      </p>
                       <tr>
                         <td>Issn</td>
                         <td>:</td>
                         <td><?php echo $data2['issn']; ?></td>
                       </tr>
                       <tr>
                         <td>Penerbit</td>
                         <td>:</td>
                         <td><?php echo $data2['penerbit']; ?></td>
                       </tr>
                       <tr>
                         <td>Tanggal Update</td>
                         <td>:</td>
                         <td><?php echo $data2['tgl_upload']; ?></td>
                       </tr>
                       
                        <tr>
                         <td>Fakultas</td>
                         <td>:</td>
                         <td><?php echo $data2['fakultas']; ?></td>
                       </tr>
                       <tr>
                         <td>Jurusan</td>
                         <td>:</td>
                         <td><?php echo $data2['nama_sub_jurusan']; ?></td>
                       </tr>
                       <tr>
                         <td>Tipe</td>
                         <td>:</td>
                         <td><?php echo $data2['nama_tipe']; ?></td>
                       </tr>
                       <tr>
                         <td>Subjek</td>
                         <td>:</td>
                         <td><?php echo $data2['nama_sub_subjek']; ?>--><?php echo $data2['nama_subjek']; ?></td>
                       </tr>
                        <tr>
                         <td>Editor</td>
                         <td>:</td>
                         <td><?php echo $data2['username']; ?></td>
                       </tr>
                       <tr>
                           <tr>
                         <td>Tahun</td>
                         <td>:</td>
                         <td><?php echo $data2['th_tahun']; ?></td>
                       </tr>
                         
                         <tr>
                         <td></td>
                         <td></td>
                         <td><a href="file_form_edit.php?id_karyailmiah=<?php   echo $id_karyailmiah ?>" ><i class="fa fa-edit btn btn-danger">Edit</i></a>

                           </a> <a href="file_hapus.php?id_karyailmiah=<?php   echo $id_karyailmiah ?>" onclick="return confirm('yakin');" ><i class="glyphicon glyphicon-trash btn btn-success">Hapus</i></a> </td>
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
        <script>
var myVar;



function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/datatables/js/jquery.dataTables.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>

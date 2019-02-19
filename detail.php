

<?php include 'header.php'; ?>

<?php 
   $post_id = $_GET['id_karyailmiah'];
                    
                $query="UPDATE karya_ilmiah SET dilihat = dilihat + 1 WHERE id_karyailmiah = '$post_id'";
                $get_post_view = mysqli_query($connect,$query);

  $id_karyailmiah = $_GET['id_karyailmiah'];
                $q1 = mysqli_query($connect, "SELECT * FROM karya_ilmiah  

                  WHERE id_karyailmiah='$id_karyailmiah'");
                 $da2 = mysqli_fetch_array($q1);
                 $d1 = $da2['download1'];
                 $d2 = $da2['download2'];
                 $d3 = $da2['download3'];
                 $d4 = $da2['download4'];
                 $d5 = $da2['download5'];
                 $d6 = $da2['download6'];
                 $d7 = $da2['download7'];
                 $d8 = $da2['download8'];
                 $d9 = $da2['download9'];
                 $d10 = $da2['download10'];

                 $totalda2= $d1 + $d2  +$d3+ $d4+ $d5+ $d6+ $d7 + $d8 + $d9+ $d10;
                
               $query="UPDATE karya_ilmiah SET download = $totalda2  WHERE id_karyailmiah = '$post_id'";
                $get_post_d = mysqli_query($connect,$query);


                // preview
                   $p1 = mysqli_query($connect, "SELECT * FROM karya_ilmiah  

                  WHERE id_karyailmiah='$id_karyailmiah'");
                 $pa2 = mysqli_fetch_array($p1);
                 $p1 = $pa2['preview1'];
                 $p2 = $pa2['preview2'];
                 $p3 = $pa2['preview3'];
                 $p4 = $pa2['preview4'];
                 $p5 = $pa2['preview5'];
                 $p6 = $pa2['preview6'];
                 $p7 = $pa2['preview7'];
                 $p8 = $pa2['preview8'];
                 $p9 = $pa2['preview9'];
                 $p10 = $pa2['preview10'];

                 $totalpa2= $p1 + $p2  +$p3+ $p4+ $p5+ $p6+ $p7 + $p8 + $p9+ $p10;
                 
               $query="UPDATE karya_ilmiah SET preview = $totalpa2  WHERE id_karyailmiah = '$post_id'";
                $get_post_d = mysqli_query($connect,$query);
 ?>


<!-- batas body paling ataas -->
<div class="container-fluid col-sm-8 col-sm-offset-2 ">

    <div class="row text-left">
            <!-- Blog Entries Column -->
          
            <?php
                $id_karyailmiah = $_GET['id_karyailmiah'];
                $query1 = mysqli_query($connect, "SELECT * FROM karya_ilmiah  

                  INNER JOIN tipe ON id_tipe= idtipe 
                  INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan 
                  INNER JOIN subjek ON id_subjek= idsubjek
                  INNER JOIN tahun ON id_tahun= tahun


                  WHERE id_karyailmiah='$id_karyailmiah'");
                $data2 = mysqli_fetch_array($query1);
                ?>
       
                <h4 align="center"> <!-- <i style="color:blue"> --><?php echo $data2['judul'] ?><!-- </i> --></h4><br>
                <a class="mboh btn-xs btn-success"><small>Dilihat <span class="badge"><?php echo $data2['dilihat'] ?></span> </small></a>
                 <a class="mboh btn-xs btn-warning"><small>Dipreview <span class="badge"><?php echo $data2['preview'] ?></span>  </small></a>
                  <a class=" mboh btn-xs btn-danger"><small>Didownload <span class="badge"><?php echo $data2['download'] ?></span> </small></a>
                <form  method="post" action="decrypt-process.php">
                <div class="table-responsive">
                  <table class="table striped">
                      
                    <p> <?php echo $data2['nama_penulis']; ?>, (<?php echo $data2['th_tahun']; ?>) <i><?php echo $data2['judul']; ?></i>. <?php echo $data2['nama_tipe']; ?>, <?php echo $data2['lembaga_penulis']; ?>.</p>
                    
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
            $l = 'download1';

 $p1 = 'preview1';
                                
                        if(empty($dokumen1)) {
                                              
                                }else{ 
                                                  
                                  
                     echo'<a href="download_file.php?nama_file='.$dokumen1.'&status='.$status1.'&dkmn1='.$l.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" name="preview1" data-toggle="tooltip" data-placement="top" title="Download  File" >  



       </a>&nbsp<a href="review.php?nama_file='.$dokumen1.'&status='.$status1.'&p1='.$p1.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';

                       if ($data2['status_dokumen1'] == 1) {
                                
                              }elseif ($data2['status_dokumen1'] == 2){
                                echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';
                               
                              }elseif ($data2['status_dokumen1'] == 3){
                              }else{

                              }
                         echo'
                    &nbsp' ;
                       
                      $size = $data2['size_dokumen1'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;
                        echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen1;              
                      }
                  
                
                      ?></p> 
                    <p>  <?php 



                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen2 = $data2['dokumen2'];
                              $status2 = $data2['status_dokumen2'];

   $tgl= date("dmYhis");
  $filename       = rand(0,99);
  $sandi2 = $filename.$tgl;
         $isi_sandi2= $data2['sandi_dokumen2'];
          $url_dokumen = $data2['url_dokumen2'];
          $d2 = 'download2';
          $p2 = 'preview2';
                        if(empty($dokumen2)) {
                                              
                                }else{ 
                          

                  
echo'<a href="download_file.php?nama_file='.$dokumen2.'&status='.$status2.'&dkmn2='.$d2.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" >  


</a>&nbsp<a href="review.php?nama_file='.$dokumen2.'&status='.$status2.'&p2='.$p2.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';
                       if ($data2['status_dokumen2'] == 1) {
                               
                              }elseif($data2['status_dokumen2'] == 2){
                              echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';
                              

                               }elseif ($data2['status_dokumen2'] == 3){
                                

                              }else{}
                         echo'
                    &nbsp' ;
                      $size = $data2['size_dokumen2'];
                      $sizee = substr($size,0, -3);
                      echo $sizee; echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen2;              
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


$d3 = 'download3';
$p3 = 'preview3';
                        if(empty($dokumen3)) {
                                              
                                }else{ 
                         
echo'<a href="download_file.php?nama_file='.$dokumen3.'&status='.$status3.'&dkmn3='.$d3.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" >  </a>&nbsp<a href="review.php?nama_file='.$dokumen3.'&status='.$status3.'&p3='.$p3.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';

                       if ($data2['status_dokumen3'] == 1) {
                              }elseif ($data2['status_dokumen3']==2){
                                echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';
                                  
                                 }elseif ($data2['status_dokumen3'] == 3){
                              }else{}
                         echo'
                    &nbsp' ;
                      $size = $data2['size_dokumen3'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;  echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen3;              
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

                          $d4 = 'download4';
                          $p4 = 'preview4';
                        if(empty($dokumen4)) {
                                              
                                }else{ 
                          

                    echo'<a href="download_file.php?nama_file='.$dokumen4.'&status='.$status4.'&dkmn4='.$d4.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" >  </a>&nbsp<a href="review.php?nama_file='.$dokumen4.'&status='.$status4.'&p4='.$p4.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';


                       if ($data2['status_dokumen4'] == 1) {
                              }elseif ($data2['status_dokumen4']==2){
                               echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';
                               

                              }  elseif ($data2['status_dokumen4'] == 3){

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


                             $d5 = 'download5';
                             $p5 = 'preview5';
                                 
                        if(empty($dokumen5)) {
                                              
                                }else{ 
                     
                   echo'<a href="download_file.php?nama_file='.$dokumen5.'&status='.$status5.'&dkmn5='.$d5.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" >  </a>&nbsp<a href="review.php?nama_file='.$dokumen5.'&status='.$status5.'&p5='.$p5.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';

                       if ($data2['status_dokumen5'] == 1) {
                              }elseif ($data2['status_dokumen5']==2){
                              echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';
                              }elseif ($data2['status_dokumen5'] == 3){
                              }else{}
                  
                         echo'
                    &nbsp' ;
                      $size = $data2['size_dokumen5'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;   echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen5;              
                      
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

                               $d6 = 'download6';
                               $p6 = 'preview6';
                        if(empty($dokumen6)) {
                                              
                                }else{ 
  
                    echo'<a href="download_file.php?nama_file='.$dokumen6.'&status='.$status6.'&dkmn6='.$d6.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" >  </a>&nbsp<a href="review.php?nama_file='.$dokumen6.'&status='.$status6.'&p6='.$p6.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';


                       if ($data2['status_dokumen6'] == 1) {
                              }elseif($data2['status_dokumen6']==2){
                                echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';

                                  }elseif ($data2['status_dokumen6'] == 3){
                              }else{}
                         echo'
                    &nbsp' ;
                      $size = $data2['size_dokumen6'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;   echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen6;              
                  
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

                            $d7 = 'download7';
                                $p7 = 'preview7';
                        if(empty($dokumen7)) {
                                              
                                }else{ 
                               

              echo'<a href="download_file.php?nama_file='.$dokumen7.'&status='.$status7.'&dkmn7='.$d7.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" >  </a>&nbsp<a href="review.php?nama_file='.$dokumen7.'&status='.$status7.'&p7='.$p7.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';


                       if ($data2['status_dokumen7'] == 1) {
                              }elseif($data2['status_dokumen7']==2){
                                echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';

                                  }elseif ($data2['status_dokumen7'] == 3){

                              }else{}
                         echo'
                    &nbsp' ;
                      $size = $data2['size_dokumen8'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;   echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen7;              
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
                      $d8 ='download8';
              $p8 = 'preview8';
                        if(empty($dokumen8)) {
                                              
                                }else{ 
                         
                  echo'<a href="download_file.php?nama_file='.$dokumen8.'&status='.$status8.'&dkmn8='.$d8.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" >  </a>&nbsp<a href="review.php?nama_file='.$dokumen8.'&status='.$status8.'&p8='.$p8.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';

                       if ($data2['status_dokumen8'] == 1) {
                                
                              }elseif($data2['status_dokumen8']==2){
                               echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';

                              
                                  }elseif ($data2['status_dokumen8'] == 3){
                             
                              }else{}
                         echo'
                    &nbsp' ;
                      $size = $data2['size_dokumen8'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;   echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen8;              
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
$d9 = 'download9';
$p9 = 'preview9';

                        if(empty($dokumen9)) {
                                              
                                }else{ 
                            
                    echo'<a href="download_file.php?nama_file='.$dokumen9.'&status='.$status9.'&dkmn9='.$d9.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" >  </a>&nbsp<a href="review.php?nama_file='.$dokumen9.'&status='.$status9.'&p9='.$p9.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';


                       if ($data2['status_dokumen9'] == 1) {
                               
                              }elseif ($data2['status_dokumen9']==2){
                             echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';
                                  }elseif ($data2['status_dokumen9'] == 3){
                            

                              }else{}
                         echo'
                    &nbsp' ;
                      $size = $data2['size_dokumen9'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;   echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen9;              
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

$d10 = 'download10';
$p10 = 'preview10';
                        if(empty($dokumen10)) {
                                              
                                }else{ 
                       
                    echo'<a href="download_file.php?nama_file='.$dokumen10.'&status='.$status10.'&dkmn10='.$dl0.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="top" title="Download  File" >  </a>&nbsp<a href="review.php?nama_file='.$dokumen10.'&status='.$status10.'&p10='.$p10.'&id='.$id_karyailmiah.'" class=" btn btn-primary glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Preview File" ></a>&nbsp';


                       if ($data2['status_dokumen10'] == 1) {
                                
                              }elseif($data2['status_dokumen10']==2){
                               echo '<a href="login.php" class="btn btn-danger  glyphicon glyphicon-envelope "  data-toggle="tooltip" data-placement="top" title="File telah terkunci, lakukan permintaaan data"   type="submit" name="dokumen1"> </a>';
                                  }elseif ($data2['status_dokumen10'] == 3){
                              

                              }else{}
                         echo'
                    &nbsp' ;
                      $size = $data2['size_dokumen10'];
                      $sizee = substr($size,0, -3);
                      echo $sizee;   echo'&nbspKB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; echo $dokumen10;              
                      }
                  
                
                      ?></p>
                   
                          <!-- <tr>
                            <td class="col-md-2"><embed src="../dasboard/Brochure.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px" /></td> -->
                             <!--  <td class="col-md-1"></td>
                                <td class="col-md-9"><?php echo $data2['dokumen1']; ?></td></tr> -->
                    
                  
        

                       <p>
                         Abstrak</p>
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
                         <td><?php echo $data2['nama_subjek']; ?></td>
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
                         <td>
                          
                       </td>
                       </tr>
                       
                  </table>
                                                                          
              </form>
            </div>
 
          </div>
          
                      
          <div>

        </div>
            
  
    </div>


</div>
<!-- batas body paling bawah -->











<!-- batas wilayah sidebar paling atass -->

</div>
<!-- batas wilayah sidebar paling bawah  --> 
 <footer>
            <div class="row">
                <div class="col-lg-12 text-center well">
                    <p>Copyright &copy;  &copy; 2018</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

       <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
 
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
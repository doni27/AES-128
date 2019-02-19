<?php
session_start();
include "../config/config.php"; 
  
 $id_karyailmiah = $_GET['id_karyailmiah'];


               // $id_karyailmiah = $_GET['id_karyailmiah'];
                $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  
                  INNER JOIN tipe ON id_tipe= idtipe                
                  INNER JOIN subjek ON id_subjek= idsubjek
                    ORDER BY id_karyailmiah DESC LIMIT 1");
                $data2 = mysqli_fetch_array($query);





                	        $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen1 = $data2['dokumen1'];
                              $status1 = $data2['status_dokumen1'];
                              $dokumen = 'dokumen1';
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi1 = $filename.$tgl;
                           

                 if(empty($dokumen1)) {
                                              
                                }else{ 
                                	   $key      = mysqli_escape_string($connect, substr(md5(  $sandi1), 0,16));
                                	  $hitung1 =  "dokument/$dokumen1";
                                  $size1   =  filesize($hitung1);
                               $query4     = "UPDATE karya_ilmiah SET  size_dokumen1 ='$size1', sandi_dokumen1 = '$key', url_dokumen1 = 'dokument/$dokumen1'  WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 
                                          }



                               $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen2 = $data2['dokumen2'];
                              $status2 = $data2['status_dokumen2'];

                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi2 = $filename.$tgl;
                              
                                 

                                     $isi_sandi2= $data2['sandi_dokumen2'];

                                if(empty($dokumen2)) { }else{
                                	 $key      = mysqli_escape_string($connect, substr(md5(  $sandi2), 0,16));
                                     $hitung2 =  "dokument/$dokumen2";
                                  $size2   =  filesize($hitung2);

                               $query4     = "UPDATE karya_ilmiah SET  size_dokumen2 ='$size2',sandi_dokumen2= '$key',url_dokumen2='dokument/$dokumen2'  WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 

                                              
                                }

                                      $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen3 = $data2['dokumen3'];
                              $status3 = $data2['status_dokumen3'];
                              $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi3 = $filename.$tgl;
                            
                                if(empty($dokumen3)) { }else{
                                	  $key      = mysqli_escape_string($connect, substr(md5(  $sandi3), 0,16));
                                     $hitung3 =  "dokument/$dokumen3";
                                  $size3   =  filesize($hitung3);
                               $query4     = "UPDATE karya_ilmiah SET  size_dokumen3 ='$size3', sandi_dokumen3= '$key',url_dokumen3='dokument/$dokumen3'  WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 
                                              
                                }
                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen4 = $data2['dokumen4'];
                              $status4 = $data2['status_dokumen4'];
                              $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi4 = $filename.$tgl;
                               

                  $sandi_dokumen = $data2['sandi_dokumen4'];
                  $url_dokumen = $data2['url_dokumen4'];
                  $dokumen_name = $data2['dokumen4'];
                  $status_dokumen = 'status_dokumen4';
                  $isi_sandi4= $data2['sandi_dokumen4'];

                                if(empty($dokumen4)) {}else{ 
                                	 $key      = mysqli_escape_string($connect, substr(md5(  $sandi4), 0,16));
                                     
                                    $hitung4 =  "dokument/$dokumen4";
                                  $size4   =  filesize($hitung4);

                               $query4     = "UPDATE karya_ilmiah SET  size_dokumen4 ='$size4', sandi_dokumen4= '$key',url_dokumen4='dokument/$dokumen4'  WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 

                                              
                                }


                                    $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen5 = $data2['dokumen5'];
                              $status5 = $data2['status_dokumen5'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi5 = $filename.$tgl; 
                             
                                


                                if(empty($dokumen5)) {}else{
                                	 $key = mysqli_escape_string($connect, substr(md5(  $sandi5), 0,16));
                                      $hitung5 =  "dokument/$dokumen5";
                                  $size5   =  filesize($hitung5);

                               $query4     = "UPDATE karya_ilmiah SET  size_dokumen5 ='$size5' , sandi_dokumen5= '$key',url_dokumen5='dokument/$dokumen5' WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 

                                              
                                 }
                                     $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen6 = $data2['dokumen6'];
                              $status6 = $data2['status_dokumen6'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi6 = $filename.$tgl;
                                       
                                if(empty($dokumen6)) { }else{
                                	 $key = mysqli_escape_string($connect, substr(md5(  $sandi6), 0,16));

                                     $hitung6 =  "dokument/$dokumen6";
                                  $size6   =  filesize($hitung6);

                               $query4     = "UPDATE karya_ilmiah SET  size_dokumen6 ='$size6' , url_dokumen6 = 'dokument/$dokumen6', sandi_dokumen6= '$key'  WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 

                                              
                                }
                                     $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen7 = $data2['dokumen7'];
                              $status7 = $data2['status_dokumen7'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi7 = $filename.$tgl;
                                       $isi_sandi7= $data2['sandi_dokumen7'];

                                if(empty($dokumen7)) {}else{
                                	 $key = mysqli_escape_string($connect, substr(md5(  $sandi7), 0,16));

                                      $hitung7 =  "dokument/$dokumen7";
                                  $size7   =  filesize($hitung7);

                               $query4     = "UPDATE karya_ilmiah SET size_dokumen7 ='$size7' ,  url_dokumen7 = 'dokument/$dokumen7', sandi_dokumen7= '$key'  WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 

                                              
                                 }
                                     $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen8 = $data2['dokumen8'];
                              $status8 = $data2['status_dokumen8'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi8 = $filename.$tgl;
                                       $isi_sandi8= $data2['sandi_dokumen8'];

                                if(empty($dokumen8)) {  }else{
                                	 $key = mysqli_escape_string($connect, substr(md5(  $sandi8), 0,16));

                                        $hitung8 =  "dokument/$dokumen8";
                                  $size8   =  filesize($hitung8);

                               $query4     = "UPDATE karya_ilmiah SET  size_dokumen8 ='$size8' ,  url_dokumen8 = 'dokument/$dokumen8', sandi_dokumen8= '$key'  WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 

                                              
                                }
                                      $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen9 = $data2['dokumen9'];
                              $status9 = $data2['status_dokumen9'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi9 = $filename.$tgl;
                                       $isi_sandi9= $data2['sandi_dokumen9'];

                                if(empty($dokumen9)) {}else{
                                	 $key = mysqli_escape_string($connect, substr(md5(  $sandi9), 0,16));

                                         $hitung9 =  "dokument/$dokumen9";
                                  $size9   =  filesize($hitung9);

                               $query4     = "UPDATE karya_ilmiah SET size_dokumen9 ='$size9' , url_dokumen9 = 'dokument/$dokumen9', sandi_dokumen9= '$key'  WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 

                                              
                                 }
                                 
                              $id_karyailmiah = $data2['id_karyailmiah'];
                              $dokumen10 = $data2['dokumen10'];
                              $status10 = $data2['status_dokumen10'];
                               $tgl= date("dmYhis");
                              $filename       = rand(0,99);
                              $sandi10 = $filename.$tgl;
                                       $isi_sandi10= $data2['sandi_dokumen10'];

                                if(empty($dokumen10)) {}else{
                                	 $key = mysqli_escape_string($connect, substr(md5(  $sandi10), 0,16));

                                     $hitung10 =  "dokument/$dokumen10";
                                  $size10   =  filesize($hitung10);

                               $query4     = "UPDATE karya_ilmiah SET  size_dokumen10 ='$size10' ,  url_dokumen10 = 'dokument/$dokumen10', sandi_dokumen10= '$key'  WHERE id_karyailmiah='$id_karyailmiah'";
                                $sql3= mysqli_query($connect, $query4); 

                                              
                                 }
                                 
                                
                                
header("Location: file_engkrip.php?hasil=sukses");
    exit();
  ?>

     





     
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM karya_ilmiah");
                      $datauser = mysqli_fetch_array($query);
                      $karyailmiah = $datauser['totaluser'];
                      ?>
                   

                       
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM permintaan_data");
                      $datauser = mysqli_fetch_array($query);
                      $permintaan =$datauser['totaluser'];
                      ?>
                		<?php 	
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM subjek  ");
                      $datauser = mysqli_fetch_array($query);
                      $subjek = $datauser['totaluser'];
                      ?>
                  

                  
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM tipe  ");
                      $datauser = mysqli_fetch_array($query);
                      $tipe = $datauser['totaluser'];
                      ?>
                     
         
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM sub_jurusan  ");
                      $datauser = mysqli_fetch_array($query);
                      $jurusan = $datauser['totaluser'];
                      ?>
                     
                     <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM permintaan_data WHERE status = 'Disetujui'  ");
                      $data = mysqli_fetch_array($query);
                      $Disetujui = $data['totaluser'];

                      //karya ilmiah di public
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM karya_ilmiah WHERE status_publikasi = 'publish' ");
                      $data = mysqli_fetch_array($query);
                      $status_publik = $data['totaluser'];

                      //karya ilmiah di draft
                        $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM karya_ilmiah WHERE status_publikasi = 'draft' ");
                      $data = mysqli_fetch_array($query);
                      $status_draft = $data['totaluser'];

                      //
                      ?>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM permintaan_data WHERE status = 'Ditolak'  ");
                      $data = mysqli_fetch_array($query);
                      $Ditolak =$data['totaluser'];
                      ?>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM permintaan_data WHERE status = 'Menunggu Konfirmasi'  ");
                      $data = mysqli_fetch_array($query);
                      $menunggu = $data['totaluser'];
                      ?>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM users WHERE user_role = 'menunggu konfirmasi'  ");
                      $data = mysqli_fetch_array($query);
                      $usertunggu = $data['totaluser'];
                      ?>
                       <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM users WHERE user_role = 'admin'  ");
                      $data = mysqli_fetch_array($query);
                      $useradmin = $data['totaluser'];
                      ?>
                       <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM users WHERE user_role = 'anggota'  ");
                      $data = mysqli_fetch_array($query);
                      $useranggota = $data['totaluser'];
                      ?>
                       <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser  FROM users   ");
                      $data = mysqli_fetch_array($query);
                     $usertotal = $data['totaluser'];
                      ?>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen1 = '3'");
                      $data = mysqli_fetch_array($query);
                     $statustotal = $data['total'];
                      ?>












                        <?php

                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen1 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status1 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen2 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status2 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen3 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status3 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen4 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status4 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen5 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status5 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen6 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status6 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen7 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status7 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen8 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status8 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen9 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status9 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen10 = '3'");
                      $data = mysqli_fetch_array($query);
                      $status10 = $data['total'];
                      
                      $total3 = $status1 + $status2 + $status3 + $status4 + $status5 + $status6 + $status7 + $status8 + $status9 + $status10 ;
                     ?>


                         <?php

                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen1 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status1 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen2 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status2 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen3 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status3 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen4 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status4 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen5 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status5 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen6 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status6 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen7 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status7 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen8 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status8 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen9 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status9 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen10 = '1'");
                      $data = mysqli_fetch_array($query);
                      $status10 = $data['total'];
                     
                     $total1 = $status1 + $status2 + $status3 + $status4 + $status5 + $status6 + $status7 + $status8 + $status9 + $status10 ;
                     ?>

                         <?php

                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen1 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status1 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen2 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status2 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen3 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status3 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen4 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status4 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen5 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status5 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen6 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status6 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen7 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status7 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen8 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status8 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen9 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status9 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE status_dokumen10 = '2'");
                      $data = mysqli_fetch_array($query);
                      $status10 = $data['total'];
                      
                      $total2 = $status1 + $status2 + $status3 + $status4 + $status5 + $status6 + $status7 + $status8 + $status9 + $status10 ;
                     ?>

                         <?php

                      $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen1 ");
                      $data = mysqli_fetch_array($query);
                      $status1 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen2 ");
                      $data = mysqli_fetch_array($query);
                      $status2 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen3 ");
                      $data = mysqli_fetch_array($query);
                      $status3 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen4 ");
                      $data = mysqli_fetch_array($query);
                      $status4 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen5");
                      $data = mysqli_fetch_array($query);
                      $status5 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen6");
                      $data = mysqli_fetch_array($query);
                      $status6 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen7");
                      $data = mysqli_fetch_array($query);
                      $status7 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen8");
                      $data = mysqli_fetch_array($query);
                      $status8 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen9");
                      $data = mysqli_fetch_array($query);
                      $status9 = $data['total'];
                     $query = mysqli_query($connect,"SELECT count(*) total  FROM karya_ilmiah WHERE dokumen10 ");
                      $data = mysqli_fetch_array($query);
                      $status10 = $data['total'];
                     
                      $totalki = $status1 + $status2 + $status3 + $status4 + $status5 + $status6 + $status7 + $status8 + $status9 + $status10 ;
                     ?>
                     <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM karya_ilmiah  ");
                      $datauser = mysqli_fetch_array($query);
                      $ki = $datauser['totaluser'];

                      ?>
                      <?php
                      $query = mysqli_query($connect,"SELECT count(*) totaluser FROM id_fakultas  ");
                      $datauser = mysqli_fetch_array($query);
                      $fakultas = $datauser['totaluser'];
                      ?>
              

                      
             
<?php  

if ($addjurusan = mysqli_query($connect, "UPDATE statistik SET  jumlah_karya_ilmiah ='$karyailmiah', jumlah_engkripsi = '$total2' , jumlah_dekripsi = '$total3', jumlah_dokumen = '$totalki', jumlah_request = '$permintaan', jumlah_request_diterima = '$Disetujui  ', jumlah_request_ditolak =' $Ditolak', jumlah_request_menunggu = '$menunggu', jumlah_user = '$usertotal', jumlah_user_anggota = '$useranggota', jumlah_user_admin = '$useradmin', jumlah_user_daftar = '$usertunggu',jumlah_karya_ilmiah_publish = '$status_publik',jumlah_karya_ilmiah_draft = '$status_draft' where id_statistik = '1'
  ")){
 




  }





  ?>
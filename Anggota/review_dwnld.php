<?php 

include "config.php";   //memasukan koneksi
 // $id_karyailmiah = $_GET['id_karyailmiah'];
 // $status = $_GET['status'];


 $file = $_GET['nama_file'];
$dokumen = $_GET['nama_file'];
                // $query1 = mysqli_query($connect, "SELECT * FROM karya_ilmiah  

                //   INNER JOIN tipe ON id_tipe= idtipe 
                //   INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan 
                //   INNER JOIN subjek ON id_subjek= idsubjek
                //   INNER JOIN tahun ON id_tahun= tahun


                //   WHERE id_karyailmiah='$id_karyailmiah'");
                // $data2 = mysqli_fetch_array($query1);
                

                //  if ($status == 1) {
                //              $file_open = "../dashboard/dokument/";

                //               }elseif($status == 2){
                           
                //               $file_open = "../dashboard/file_encrypt/";

                //                }elseif ($status == 3){
                //                 $file_open = "../dashboard/file_decrypt/";

                //               }else{}
 




 $file_open = "../dashboard/download/";
$gabung = $file_open.$file;

$filename = '$dokumen';
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename. '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($gabung);
 
 ?>
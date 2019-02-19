<?php 

include "config.php";   //memasukan koneksi
 // $id_karyailmiah = $_GET['id_karyailmiah'];
 $status = $_GET['status'];


 $file = $_GET['nama_file'];
$dokumen = $_GET['nama_file1'];




 $id = $_GET['id'];

$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];
$p4 = $_GET['p4'];
$p5 = $_GET['p5'];
$p6 = $_GET['p6'];
$p7 = $_GET['p7'];
$p8 = $_GET['p8'];
$p9 = $_GET['p9'];
$p10 = $_GET['p10'];

   


       if(!empty($p1)){
                $query11="UPDATE karya_ilmiah SET preview1 = $p1 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query11);
          }

       if(!empty($p2)){
                $query12="UPDATE karya_ilmiah SET preview2 = $p2 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query12);
}

       if(!empty($p3)){
                $query13="UPDATE karya_ilmiah SET preview3 = $p3 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query13);
}

       if(!empty($p4)){
                $query14="UPDATE karya_ilmiah SET preview4 = $p4 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query14);
}

       if(!empty($p5)){
                $query15="UPDATE karya_ilmiah SET preview5 = $p5+ 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query15);
}

       if(!empty($p6)){
                $query16="UPDATE karya_ilmiah SET preview6 = $p6 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query16);
}

       if(!empty($p7)){
                $query17="UPDATE karya_ilmiah SET preview7 = $p7 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query17);
}

       if(!empty($p8)){
                $query18="UPDATE karya_ilmiah SET preview8 = $p8 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query18);
}
       if(!empty($p9)){

                $query19="UPDATE karya_ilmiah SET preview9 = $p9 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query19);
            }

       if(!empty($p10)){
                $query20="UPDATE karya_ilmiah SET preview10 = $p10 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query20);


            }







                $query1 = mysqli_query($connect, "SELECT * FROM karya_ilmiah  

                  INNER JOIN tipe ON id_tipe= idtipe 
                  INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan 
                  INNER JOIN subjek ON id_subjek= idsubjek
                  INNER JOIN tahun ON id_tahun= tahun


                  WHERE id_karyailmiah='$id_karyailmiah'");
                $data2 = mysqli_fetch_array($query1);
                

                 if ($status == 1) {
                             $file_open = "dashboard/dokument/";

                              }elseif($status == 2){
                           
                              $file_open = "dashboard/file_encrypt/";

                               }elseif ($status == 3){
                                $file_open = "dashboard/file_decrypt/";

                              }else{}
 





$gabung = $file_open.$file;

$filename = '$dokumen';
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename. '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($gabung);
 
 ?>

<?php 
$download1 = $_GET['dkmn1'];
   $post_id = $_GET['id_karyailmiah'];
                    
                $query="UPDATE karya_ilmiah SET $dokumen = $dokumen + 1 WHERE id_karyailmiah = '$post_id'";
                $get_post_view = mysqli_query($connect,$query);



 ?>


 ?>
 
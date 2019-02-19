<?php 

include "config.php";   //memasukan koneksi
 $id_karyailmiah = $_GET['id_karyailmiah'];
 $status = $_GET['status'];


 $file = $_GET['nama_file'];
$dokumen = $_GET['nama_file'];

 $id = $_GET['id'];

$download1 = $_GET['dkmn1'];
$download2 = $_GET['dkmn2'];
$download3 = $_GET['dkmn3'];
$download4 = $_GET['dkmn4'];
$download5 = $_GET['dkmn5'];
$download6 = $_GET['dkmn6'];
$download7 = $_GET['dkmn7'];
$download8 = $_GET['dkmn8'];
$download9 = $_GET['dkmn9'];
$download10 = $_GET['dkmn10'];

    echo $id;
    echo $download1;
                    
      


       if(!empty($download1)){
                $query11="UPDATE karya_ilmiah SET download1 = $download1 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query11);
					}

       if(!empty($download2)){
                $query12="UPDATE karya_ilmiah SET download2 = $download2 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query12);
}

       if(!empty($download3)){
                $query13="UPDATE karya_ilmiah SET download3 = $download3 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query13);
}

       if(!empty($download4)){
                $query14="UPDATE karya_ilmiah SET download4 = $download4 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query14);
}

       if(!empty($download5)){
                $query15="UPDATE karya_ilmiah SET download5 = $download5+ 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query15);
}

       if(!empty($download6)){
                $query16="UPDATE karya_ilmiah SET download6 = $download6 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query16);
}

       if(!empty($download7)){
                $query17="UPDATE karya_ilmiah SET download7 = $download7 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query17);
}

       if(!empty($download8)){
                $query18="UPDATE karya_ilmiah SET download8 = $download8 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query18);
}
       if(!empty($download9)){

                $query19="UPDATE karya_ilmiah SET download9 = $download9 + 1 WHERE id_karyailmiah = '$id'";
                $get_post_view = mysqli_query($connect,$query19);
            }

       if(!empty($download10)){
                $query20="UPDATE karya_ilmiah SET download10 = $download10 + 1 WHERE id_karyailmiah = '$id'";
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


// include "config.php";    //memasukan koneksi

 // $id_karyailmiah = $_GET['id_karyailmiah'];
 
// $file = $_GET['nama_file'];




	// $file = $_GET['nama_file'];
	//echo $file;
	if (file_exists($gabung))
	{
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($gabung));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: private');
		header('Pragma: private');
		header('Content-Length: ' . filesize($gabung));
		ob_clean();
		flush();
		readfile($gabung);
		exit;

	} 
	else 
	{
		echo "file {$_GET['nama_file']} sudah tidak ada.";
	}







?>




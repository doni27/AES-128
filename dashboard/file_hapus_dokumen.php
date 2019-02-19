<?php

include "../config/config.php";
$id_karyailmiah	= $_GET["id_karyailmiah"];
$dokumen = $_GET["dokumen"];
 $url_dokumen = $_GET["url_dokumen"];
$url = $_GET["url"];
$query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  
WHERE id_karyailmiah ='$id_karyailmiah'");
$data2 = mysqli_fetch_array($query);            
$file1 =    $url;

                  
$target1 = $file1;
unlink($target1); // delete now



if($delete = mysqli_query ($connect, "UPDATE  karya_ilmiah SET $dokumen ='', $url_dokumen ='' WHERE id_karyailmiah='$id_karyailmiah'")){
 header("Location: file_form_edit.php?id_karyailmiah=$id_karyailmiah");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>
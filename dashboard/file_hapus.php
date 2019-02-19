<?php

include "../config/config.php";
$id_karyailmiah	= $_GET["id_karyailmiah"];
$query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  
WHERE id_karyailmiah='$id_karyailmiah'");
$data2 = mysqli_fetch_array($query);            
$file1 =    $data2['url_dokumen1'];
$file2 =	$data2['url_dokumen2'];
$file3 =	$data2['url_dokumen3']; 
$file4 =    $data2['url_dokumen4'];
$file5 =    $data2['url_dokumen5']; 
$file6 =    $data2['url_dokumen6'];
$file7 =    $data2['url_dokumen7']; 
$file8 =    $data2['url_dokumen8']; 
$file9 =    $data2['url_dokumen9']; 
$file10=    $data2['url_dokumen10']; 
                  
$target1 = $file1;
unlink($target1); // delete now

$target2 = $file2;
unlink($target2); // delete now

$target3 =$file3;
unlink($target3); // delete now

$target4 =$file4;
unlink($target4); // delete now

$target5 =$file5;
unlink($target5); // delete now

$target6 =$file6;
unlink($target6); // delete now

$target7=$file7;
unlink($target7); // delete now

$target8 =$file8;
unlink($target8); // delete now

$target9 =$file9;
unlink($target9); // delete now

$target10 =$file10;
unlink($target10); // delete now


if($delete = mysqli_query ($connect, "DELETE  FROM karya_ilmiah WHERE id_karyailmiah='$id_karyailmiah'")){
	header("Location: file_data.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>
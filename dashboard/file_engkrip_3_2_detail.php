
<?php
session_start();
include "../config/config.php";   //memasukan koneksi
include "AES.php"; //memasukan file AES

 $id_karyailmiah = $_GET['id_karyailmiah'];
 $dokumen =$_GET['dokumen'];
   $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  WHERE id_karyailmiah='$id_karyailmiah'");
      $data2 = mysqli_fetch_array($query);
        switch($dokumen){
    case 'dokumen1':
                 $size  = $data2['size_dokumen1'];
                  $key  = $data2['sandi_dokumen1'];
                  $file_tmpname = $data2['url_dokumen1'];
                  $name  = $data2['dokumen1'];
                  $status_dokumen = 'status_dokumen1';
    
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
           $query2     = "UPDATE karya_ilmiah SET status_dokumen1 ='2',url_dokumen1 ='file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
    $sql1= mysqli_query($connect, $query2);
    $target1 ="file_decrypt/$name";
        unlink($target1);

        break;
         case 'dokumen2':
   
                 $size  = $data2['size_dokumen2'];
                  $key  = $data2['sandi_dokumen2'];
                  $file_tmpname = $data2['url_dokumen2'];
                  $name  = $data2['dokumen2'];
                  $status_dokumen = 'status_dokumen2';
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
          $query3     = "UPDATE karya_ilmiah SET status_dokumen2 ='2',url_dokumen2 = 'file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
        $sql2= mysqli_query($connect, $query3);
        $target1 ="file_decrypt/$name";
        unlink($target1);

        break;
         case 'dokumen3':
   
                 $size  = $data2['size_dokumen3'];
                  $key  = $data2['sandi_dokumen3'];
                  $file_tmpname = $data2['url_dokumen3'];
                  $name  = $data2['dokumen3'];
                  $status_dokumen = 'status_dokumen3';
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
          $query4     = "UPDATE karya_ilmiah SET status_dokumen3 ='2',url_dokumen3='file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
        $sql3= mysqli_query($connect, $query4);
        $target1 ="file_decrypt/$name";
        unlink($target1);

        break;
         case 'dokumen4':
   
                 $size  = $data2['size_dokumen4'];
                  $key  = $data2['sandi_dokumen4'];
                  $file_tmpname = $data2['url_dokumen4'];
                  $name  = $data2['dokumen4'];
                  $status_dokumen = 'status_dokumen4';
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
           $query5     = "UPDATE karya_ilmiah SET status_dokumen4 ='2', url_dokumen4='file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
        $sql2= mysqli_query($connect, $query5);
        $target1 ="file_decrypt/$name";
        unlink($target1);


        break;
          case 'dokumen5':
   
                 $size  = $data2['size_dokumen5'];
                  $key  = $data2['sandi_dokumen5'];
                  $file_tmpname = $data2['url_dokumen5'];
                  $name  = $data2['dokumen5'];
                  $status_dokumen = 'status_dokumen5';
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
         $query6     = "UPDATE karya_ilmiah SET status_dokumen5 ='2', url_dokumen5='file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
        $sql6= mysqli_query($connect, $query6);
        $target1 ="file_decrypt/$name";
        unlink($target1);

        break;
        break;
          case 'dokumen6':
   
                 $size  = $data2['size_dokumen6'];
                  $key  = $data2['sandi_dokumen6'];
                  $file_tmpname = $data2['url_dokumen6'];
                  $name  = $data2['dokumen6'];
                  $status_dokumen = 'status_dokumen6';
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
         $query7     = "UPDATE karya_ilmiah SET status_dokumen6 ='2', url_dokumen6='file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
        $sql2= mysqli_query($connect, $query7);
        $target1 ="file_decrypt/$name";
        unlink($target1);

        break;
          case 'dokumen7':
   
                 $size  = $data2['size_dokumen7'];
                  $key  = $data2['sandi_dokumen7'];
                  $file_tmpname = $data2['url_dokumen7'];
                  $name  = $data2['dokumen7'];
                  $status_dokumen = 'status_dokumen7';
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
          $query8     = "UPDATE karya_ilmiah SET status_dokumen7 ='2', url_dokumen7='file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
        $sql2= mysqli_query($connect, $query8);
        $target1 ="file_decrypt/$name";
        unlink($target1);

        break;
          case 'dokumen8':
   
                 $size  = $data2['size_dokumen8'];
                  $key  = $data2['sandi_dokumen8'];
                  $file_tmpname = $data2['url_dokumen8'];
                  $name  = $data2['dokumen8'];
                  $status_dokumen = 'status_dokumen8';
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
         $query5     = "UPDATE karya_ilmiah SET status_dokumen8 ='2',url_dokumen8='file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
        $sql2= mysqli_query($connect, $query5);
        $target1 ="file_decrypt/$name";
        unlink($target1);

        break;
          case dokumen9:
   
                 $size  = $data2['size_dokumen9'];
                  $key  = $data2['sandi_dokumen9'];
                  $file_tmpname = $data2['url_dokumen9'];
                  $name  = $data2['dokumen9'];
                  $status_dokumen = 'status_dokumen9';
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
         $query9     = "UPDATE karya_ilmiah SET status_dokumen9 ='2',url_dokumen9='file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
        $sql2= mysqli_query($connect, $query);
        $target1 ="file_decrypt/$name";
        unlink($target1);

        break;
          case 'dokumen10':
   
                 $size  = $data2['size_dokumen10'];
                  $key  = $data2['sandi_dokumen10'];
                  $file_tmpname = $data2['url_dokumen10'];
                  $name  = $data2['dokumen10'];
                  $status_dokumen = 'status_dokumen10';
      $file_source    = fopen($file_tmpname, "rb");
      $file_url = "file_encrypt/$name"; 
      $file_output    = fopen($file_url, "wb");
      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '256M');
        ini_set('post_max_size', '100M');
       ini_set('upload_max_filesize', '100M');
          $aes = new AES($key);
         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);
         $query10     = "UPDATE karya_ilmiah SET status_dokumen10 ='2', url_dokumen10='file_encrypt/$name' WHERE id_karyailmiah='$id_karyailmiah'";
        $sql2= mysqli_query($connect, $query10);
        $target1 ="file_decrypt/$name";
        unlink($target1);

        break;
    default:
       

      }


    $sql1= mysqli_query($connect, $query2);
 header("Location: file_detail.php?id_karyailmiah=$id_karyailmiah");
?>
    
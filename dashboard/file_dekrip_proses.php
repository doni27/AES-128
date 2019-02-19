
<?php 
session_start();
include "../config/config.php";   //memasukan koneksi
include "AES.php";	
$id_karyailmiah = $_GET['id_karyailmiah'];
 $dokumen =$_GET['dokumen'];

   $query = mysqli_query($connect, "SELECT * FROM karya_ilmiah  WHERE id_karyailmiah='$id_karyailmiah'");
      $data2 = mysqli_fetch_array($query);
       
     switch($dokumen){
    case 'dokumen1':

  // $size  = $data2['size_dokumen1'];
  //                 $key  = $data2['sandi_dokumen1'];
  //                 $file_tmpname = $data2['url_dokumen1'];
  //                 $name  = $data2['dokumen1'];
  //                 $status_dokumen = 'status_dokumen1';
    

     
    $file_path  = $data2['url_dokumen1'];
    $key        = $data2['sandi_dokumen1'];
    $file_name  = $data2['dokumen1'];
    $file_size  = filesize($file_path);

   
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
   $query2     = "UPDATE karya_ilmiah SET status_dokumen1 ='3',url_dokumen1 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
    $sql1= mysqli_query($connect, $query2);
    $target1 ="file_encrypt/$file_name";
        unlink($target1);

    break;
    case 'dokumen2':
      $file_path  = $data2['url_dokumen2'];
    $key        = $data2['sandi_dokumen2'];
    $file_name  = $data2['dokumen2'];
    $file_size  = filesize($file_path);

   
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
    $query2     = "UPDATE karya_ilmiah SET status_dokumen2 ='3',url_dokumen2 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
    $sql1= mysqli_query($connect, $query2);
    $target1 ="file_encrypt/$file_name";
        unlink($target1);
    break;
        case 'dokumen3':
    $file_path  = $data2['url_dokumen3'];
    $key        = $data2['sandi_dokumen3'];
    $file_name  = $data2['dokumen3'];
    $file_size  = filesize($file_path);

   
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
    $query2     = "UPDATE karya_ilmiah SET status_dokumen3 ='3',url_dokumen3 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
   
    $sql1= mysqli_query($connect, $query2);
     $target1 ="file_encrypt/$file_name";
        unlink($target1);
    break;
            case 'dokumen4':
    $file_path  = $data2['url_dokumen4'];
    $key        = $data2['sandi_dokumen4'];
    $file_name  = $data2['dokumen4'];
    $file_size  = filesize($file_path);

   
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
    $query2     = "UPDATE karya_ilmiah SET status_dokumen4 ='3',url_dokumen4 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
    $sql1= mysqli_query($connect, $query2);
    $target1 ="file_encrypt/$file_name";
        unlink($target1);
    break;
            case 'dokumen5':
    $file_path  = $data2['url_dokumen5'];
    $key        = $data2['sandi_dokumen5'];
    $file_name  = $data2['dokumen5'];
    $file_size  = filesize($file_path);
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }
   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
    $query2     = "UPDATE karya_ilmiah SET status_dokumen5 ='3',url_dokumen5 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
    $sql1= mysqli_query($connect, $query2);
    $target1 ="file_encrypt/$file_name";
        unlink($target1);
    break;
            case 'dokumen6':
    $file_path  = $data2['url_dokumen6'];
    $key        = $data2['sandi_dokumen6'];
    $file_name  = $data2['dokumen6'];
    $file_size  = filesize($file_path);

   
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
    $query2     = "UPDATE karya_ilmiah SET status_dokumen6 ='3',url_dokumen6 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
    $sql1= mysqli_query($connect, $query2);
     $target1 ="file_encrypt/$file_name";
        unlink($target1);
    break;
            case 'dokumen7':
    $file_path  = $data2['url_dokumen7'];
    $key        = $data2['sandi_dokumen7'];
    $file_name  = $data2['dokumen7'];
    $file_size  = filesize($file_path);

   
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
    $query2     = "UPDATE karya_ilmiah SET status_dokumen7 ='3',url_dokumen7 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
    $sql1= mysqli_query($connect, $query2);
     $target1 ="file_encrypt/$file_name";
        unlink($target1);
    break;
            case 'dokumen8':
    $file_path  = $data2['url_dokumen8'];
    $key        = $data2['sandi_dokumen8'];
    $file_name  = $data2['dokumen8'];
    $file_size  = filesize($file_path);

   
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
    $query2     = "UPDATE karya_ilmiah SET status_dokumen8 ='3',url_dokumen8 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
    $sql1= mysqli_query($connect, $query2);
    $target1 ="file_encrypt/$file_name";
        unlink($target1);
    break;
            case 'dokumen9':
    $file_path  = $data2['url_dokumen9'];
    $key        = $data2['sandi_dokumen9'];
    $file_name  = $data2['dokumen9'];
    $file_size  = filesize($file_path);
    $mod        = $file_size%16;
    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");
    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }
   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
    $query2     = "UPDATE karya_ilmiah SET status_dokumen9 ='3',url_dokumen9 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
    
    $sql1= mysqli_query($connect, $query2);
    $target1 ="file_encrypt/$file_name";
        unlink($target1);
    break;
                case 'dokumen10':
    $file_path  = $data2['url_dokumen10'];
    $key        = $data2['sandi_dokumen10'];
    $file_name  = $data2['dokumen10'];
    $file_size  = filesize($file_path);
    $mod        = $file_size%16;

    $aes        = new AES($key);
    $fopen1     = fopen($file_path, "rb");
    $plain      = "";
    $cache      = "file_decrypt/$file_name";
    $fopen2     = fopen($cache, "wb");

    if($mod==0){
    $banyak = $file_size / 16;
     }else{
    $banyak = ($file_size - $mod) / 16;
    $banyak = $banyak+1;
    }

   ini_set('max_execution_time', 6000);
  ini_set('memory_limit', '256M');
  ini_set('post_max_size', '100M');
  ini_set('upload_max_filesize', '100M');
    for($bawah=0;$bawah<$banyak;$bawah++){

      $filedata    = fread($fopen1, 16);
      $plain       = $aes->decrypt($filedata);
      fwrite($fopen2, $plain);
   }
    $query22    = "UPDATE karya_ilmiah SET status_dokumen10 ='3',url_dokumen10 ='file_decrypt/$file_name' WHERE id_karyailmiah='$id_karyailmiah'";
    $sql1= mysqli_query($connect, $query22);
    $target1 ="file_encrypt/$file_name";
        unlink($target1);
    break;
    default:
       

      }
      header("Location: file_engkrip.php");
    ?>
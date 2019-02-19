<?php
session_start();
include "../config/config.php";  

  $id_karyailmiah = $_POST['id'];

    $query = "SELECT * FROM karya_ilmiah WHERE id_karyailmiah = $id_karyailmiah ";
    $get_update_data = mysqli_query($connect, $query);
    
        while($row = mysqli_fetch_assoc($get_update_data))
        {
         
        $idtipe = $row['idtipe'];
        $idjurusan = $row['idjurusan'];
        $idsubjek = $row['idsubjek'];
        $fakultas = $row['fakultas'];
        $judul = $row['judul'];
        $status_publikasi = $row['status_publikasi'];
        $nama_penulis = $row['nama_penulis'];
        $abstrak = $row['abstrak'];
        $lembaga_penulis = $row['lembaga_penulis'];
          $penerbit = $row['penerbit'];
        $issn = $row['issn'];
        $tgl_upload = $row['tgl_upload'];
        $username = $row['username'];
        $tahun = $row['tahun'];
        //
        $dokumen1 = $row['dokumen1'];
         $url_dokumen1 = $row['url_dokumen1'];
        $status_dokumen1 = $row['status_dokumen1'];
        //
        $dokumen2 = $row['dokumen2'];
        $status_dokumen2 = $row['status_dokumen2'];
         $url_dokumen2 = $row['url_dokumen2'];
         //
        $dokumen3 = $row['dokumen3'];
        $status_dokumen3 = $row['status_dokumen3'];
         $url_dokumen3 = $row['url_dokumen3'];
         //

        $dokumen4 = $row['dokumen4'];
        $status_dokumen4 = $row['status_dokumen4'];
         $url_dokumen4 = $row['url_dokumen4'];
         //

        $dokumen5 = $row['dokumen5'];
        $status_dokumen5 = $row['status_dokumen5'];
         $url_dokumen5 = $row['url_dokumen5'];
         //
        $dokumen6 = $row['dokumen6'];
        $status_dokumen6 = $row['status_dokumen6'];
         $url_dokumen6 = $row['url_dokumen6'];
         //
        $dokumen7 = $row['dokumen7'];
        $status_dokumen7 = $row['status_dokumen7'];
         $url_dokumen7 = $row['url_dokumen7'];
         //
        $dokumen8 = $row['dokumen8'];
         $url_dokumen8 = $row['url_dokumen8'];
        $status_dokumen8 = $row['status_dokumen8'];
        //
        $dokumen9 = $row['dokumen9'];
        $status_dokumen9 = $row['status_dokumen9'];
        $dokumen9 = $row['dokumen9'];
        //
         $dokumen10 = $row['dokumen10'];
        $status_dokumen9 = $row['status_dokumen10'];
        $dokumen10 = $row['dokumen10'];
        
        



        }




















    
                   $idtipe           = $_POST['idtipe'];
     $nama_penulis     = $_POST['nama_penulis'];
      $judul            = $_POST['judul'];
      $abstrak          = $_POST['abstrak'];
      $lembaga_penulis  = $_POST['lembaga_penulis'];
      $issn             = $_POST['issn'];
      $penerbit         = $_POST ['penerbit'];
      $status_publikasi = $_POST['status_publikasi'];
      $user             = $_SESSION['username'];     
      $idjurusan        = $_POST['idjurusan'];
      $idsubjek         = $_POST['idsubjek'];
      $tahun            = $_POST['tahun'];
      // $ran = rand(1000,100000);



 $file_name1 = $_FILES['dokumen']['name'][0];
        $tmp_name1 = $_FILES['dokumen']['tmp_name'][0];        
        if(!empty($file_name1)){



         $move = rand(1000,100000)."-".$file_name1;    
     
        move_uploaded_file($tmp_name1, "dokument/".$move);
            $dokumen[0] = $move;
            } else{

               
                
                $dokumen[0] = $dokumen1;
              

            }


    $file_name2 = $_FILES['dokumen']['name'][1];
        $tmp_name2 = $_FILES['dokumen']['tmp_name'][1];        
        if(!empty($file_name2)){



         $move = rand(1000,100000)."-".$file_name2;    
     
        move_uploaded_file($tmp_name2, "dokument/".$move);
            $dokumen[1] = $move;
            } else{

           
                $dokumen[1] = $dokumen2;

              }
        




    $file_name3 = $_FILES['dokumen']['name'][2];
        $tmp_name3 = $_FILES['dokumen']['tmp_name'][2];        
        if(!empty($file_name3)){



         $move = rand(1000,100000)."-".$file_name3;    
     
        move_uploaded_file($tmp_name3, "dokument/".$move);
            $dokumen[2] = $move;
            } else{
                
                $dokumen[2] = $dokumen3;
             

            }




    $file_name4 = $_FILES['dokumen']['name'][3];
        $tmp_name4 = $_FILES['dokumen']['tmp_name'][3];        
        if(!empty($file_name4)){



         $move = rand(1000,100000)."-".$file_name4;    
     
        move_uploaded_file($tmp_name4, "dokument/".$move);
            $dokumen[3] = $move;
            } else{

             
                
                $dokumen[3] = $dokumen4;

            }



    $file_name5 = $_FILES['dokumen']['name'][4];
        $tmp_name5 = $_FILES['dokumen']['tmp_name'][4];        
        if(!empty($file_name5)){



         $move = rand(1000,100000)."-".$file_name5;    
     
        move_uploaded_file($tmp_name5, "dokument/".$move);
            $dokumen[4] = $move;
            } else{

          
                $dokumen[4] = $dokumen5;

            }



    $file_name6 = $_FILES['dokumen']['name'][5];
        $tmp_name6 = $_FILES['dokumen']['tmp_name'][5];        
        if(!empty($file_name6)){



         $move = rand(1000,100000)."-".$file_name6;    
     
        move_uploaded_file($tmp_name6, "dokument/".$move);
            $dokumen[5] = $move;
            } else{

           
                $dokumen[5] = $dokumen6;
            
            }


    $file_name7 = $_FILES['dokumen']['name'][6];
        $tmp_name7 = $_FILES['dokumen']['tmp_name'][6];        
        if(!empty($file_name7)){



         $move = rand(1000,100000)."-".$file_name7;    
     
        move_uploaded_file($tmp_name7, "dokument/".$move);
            $dokumen[6] = $move;
            } else{

           
                $dokumen[6] = $dokumen7;
            
            }

    $file_name8 = $_FILES['dokumen']['name'][7];
        $tmp_name8 = $_FILES['dokumen']['tmp_name'][7];        
        if(!empty($file_name8)){



         $move = rand(1000,100000)."-".$file_name8;    
     
        move_uploaded_file($tmp_name8, "dokument/".$move);
            $dokumen[7] = $move;
            } else{

           
                $dokumen[7] = $dokumen8;
            
            }

    $file_name9 = $_FILES['dokumen']['name'][8];
        $tmp_name9 = $_FILES['dokumen']['tmp_name'][8];        
        if(!empty($file_name9)){



         $move = rand(1000,100000)."-".$file_name9;    
     
        move_uploaded_file($tmp_name9, "dokument/".$move);
            $dokumen[8] = $move;
            } else{

           
                $dokumen[8] = $dokumen9;
            
            }

    $file_name10 = $_FILES['dokumen']['name'][9];
        $tmp_name10 = $_FILES['dokumen']['tmp_name'][9];        
        if(!empty($file_name10)){



         $move = rand(1000,100000)."-".$file_name10;    
     
        move_uploaded_file($tmp_name10, "dokument/".$move);
            $dokumen[9] = $move;
            } else{

           
                $dokumen[9] = $dokumen10;
               
            
            }


          
          // echo "Berhasil Upload";     
          // }else{
          // echo "Gambar tidak ada";
          // }
if ($addjurusan = mysqli_query($connect, "UPDATE karya_ilmiah SET idtipe ='{$idtipe}', nama_penulis ='{$nama_penulis}', judul = '{$judul}', abstrak = '{$abstrak}', lembaga_penulis = '{$lembaga_penulis}', issn= '{$issn}', penerbit = '{$penerbit}',status_publikasi = '{$status_publikasi}',username = '{$user}',idjurusan = '{$idjurusan}',idsubjek = '{$idsubjek}',tahun = '{$tahun}' , dokumen1 = '{$dokumen[0]}', dokumen2 = '{$dokumen[1]}', dokumen3 = '{$dokumen[2]}', dokumen4 = '{$dokumen[3]}', dokumen5 = '{$dokumen[4]}', dokumen6 = '{$dokumen[5]}', dokumen7 = '{$dokumen[6]}', dokumen8 = '{$dokumen[7]}' , dokumen9 = '{$dokumen[8]}' , dokumen10 = '{$dokumen[9]}' WHERE id_karyailmiah = $id_karyailmiah ")){
       
        header("Location: file_detail.php?id_karyailmiah=$id_karyailmiah&hasil=sukses");
        exit();
    }
 

?>
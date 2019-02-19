<?php
session_start();
include "../config/config.php";   //memasukan koneksi
//memasukan file AES 
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

     
                          
                $query="UPDATE tipe SET jumlah = jumlah + 1 WHERE id_tipe = $idtipe";
                $get_post_view = mysqli_query($connect,$query);

                   $query="UPDATE tahun SET jumlah = jumlah + 1 WHERE id_tahun = $tahun";
                $get_post_view = mysqli_query($connect,$query);

                         
                $query4="UPDATE sub_jurusan SET jumlah = jumlah + 1 WHERE id_sub_jurusan = $idjurusan";
                $get_post_view = mysqli_query($connect,$query4);
                  
               

                $query3="UPDATE subjek SET jumlah = jumlah + 1 WHERE id_subjek = $idsubjek";
                $get_post_view = mysqli_query($connect,$query3);




      $jumlah = count($_FILES['dokumen']['name']);

      if ($jumlah > 0) {
      $dokumen = array();
      for ($i=0; $i < $jumlah; $i++) { 
        $file_name = rand(1000,100000)."-".$_FILES['dokumen']['name'][$i];
        $tmp_name = $_FILES['dokumen']['tmp_name'][$i];        
        move_uploaded_file($tmp_name, "dokument/".$file_name);
        $dokumen[$i] = $file_name;
                        
          }
          echo "Berhasil Upload";     
          }else{
          echo "Gambar tidak ada";
          }


          

      if ($addsubjek = mysqli_query($connect, "INSERT INTO karya_ilmiah (nama_penulis, judul, abstrak, lembaga_penulis, issn, penerbit, status_publikasi,username, idtipe, idjurusan , idsubjek, tahun , dokumen1, dokumen2, dokumen3, dokumen4, dokumen5, dokumen6, dokumen7, dokumen8, dokumen9, dokumen10) VALUES 
  ('$nama_penulis','$judul','$abstrak','$lembaga_penulis','$issn','$penerbit','$status_publikasi','$user','$idtipe','$idjurusan', '$idsubjek','$tahun','$dokumen[0]','$dokumen[1]','$dokumen[2]','$dokumen[3]','$dokumen[4]','$dokumen[5]','$dokumen[6]','$dokumen[7]','$dokumen[8]','$dokumen[9]')")){

        

        
    header("Location: file_tambah.php");
    exit();
  }
die ("Terdapat kesalahan : ". mysqli_error($connect));

      
               


  

   // $sql1   = "INSERT INTO file VALUES ('', '$user', '$final_file', '$finalfile.rda', '', '$size2', '$key', now(), '1', '$deskripsi')";
   //    $query1  = mysqli_query($connect, $sql1) or die(mysqli_error());
   //  }
    
  ?>

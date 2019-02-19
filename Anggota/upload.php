<?php 
	include "config.php";

		$jumlah = count($_FILES['gambar']['name']);

		if ($jumlah > 0) {
			$gambar = array();

			for ($i=0; $i < $jumlah; $i++) { 
				$file_name = $_FILES['gambar']['name'][$i];
				$tmp_name = $_FILES['gambar']['tmp_name'][$i];				
				move_uploaded_file($tmp_name, "img/".$file_name);
				$gambar[$i] = $file_name;
												
			}
					echo "Berhasil Upload";			
		}

		else{

			echo "Gambar tidak ada";
		}

			mysqli_query($connect,"INSERT INTO gambar(id_gambar, gambar1, gambar2, gambar3) VALUES('','$gambar[0]','$gambar[1]','$gambar[2]')");
	

	
?>




<!-- 	include "config.php";
	if (isset($_POST["submit"])) {
		$jumlah = count($_FILES['gambar']['name']);
		if ($jumlah > 0) {
			$gambar = array();
			for ($i=0; $i < $jumlah; $i++) { 
				$file_name = $_FILES['gambar']['name'][$i];
				$tmp_name = $_FILES['gambar']['tmp_name'][$i];				
				move_uploaded_file($tmp_name, "img/".$file_name);
				$gambar[$i] = $file_name;
												
			}
			mysqli_query($connect,"INSERT INTO gambar(id_gambar, gambar1, gambar2, gambar3) VALUES('','$gambar[0]','$gambar[1]','$gambar[2]')");
			echo "Berhasil Upload";			
		}
		else{
			echo "Gambar tidak ada";
		}
	}
 -->
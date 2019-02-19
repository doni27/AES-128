<?php  session_start();
include "../config/config.php";  
 ?>
<?php ob_start(); ?>
<html>
<head>
	<title>Data Karya Ilmiah</title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;width: 630px;
		}
		table td {
			word-wrap:break-word;
			width: 20%;
		}
	</style>
</head>
<body>
	<?php
    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
        $filter = $_GET['filter']; // Ambil data filder yang dipilih user

        if($filter == '1'){ // Jika filter nya 1 (per tanggal)
            $tgl = date('d-m-y', strtotime($_GET['tanggal']));

            echo '<b>Data Karya Ilmiah Tanggal '.$tgl.'</b><br /><br />';
            echo '<a href="print_karyailmiah.php?filter=1&tanggal='.$_GET['tanggal'].'" class="btn-xs btn-primary">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan   WHERE DATE(tgl_upload)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
        }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

            echo '<b>Data Karya Ilmiah Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br />';
            echo '<a href="print_karyailmiah.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'" class="btn-xs btn-primary">Cetak PDF</a><br />';

            $query = "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan   WHERE MONTH(tgl_upload)='".$_GET['bulan']."' AND YEAR(tgl_upload)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        }else{ // Jika filter nya 3 (per tahun)
            echo '<b>Data Karya Ilmiah Tahun '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="print_karyailmiah.php?filter=3&tahun='.$_GET['tahun'].'" class="btn-xs btn-primary">Cetak PDF</a><br />';

            $query = "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan  WHERE YEAR(tgl_upload)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
        }
    }else{ // Jika user tidak mengklik tombol tampilkan
        echo ' <b>Semua Data Karya Ilmiah</b>     ';
        echo '    <a href="print_karyailmiah.php" class="btn-xs btn-primary">Cetak PDF</a><br />';

          $query = "SELECT * FROM karya_ilmiah INNER JOIN tipe ON id_tipe = idtipe INNER JOIN sub_jurusan ON id_sub_jurusan= idjurusan  ORDER BY id_karyailmiah DESC "; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
    }
    ?>
	<table border="1" cellpadding="18">
	<tr>
	<th > Judul</th>
		<th>Tipe</th>
		<th>Status</th>
		<th>Nama Penulis</th>
		<th >Tanggal</th>
                        
                         
	</tr>

	<?php
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

	if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
			$tgl = date('d-m-Y', strtotime($data['tgl_upload'])); // Ubah format tanggal jadi dd-mm-yyyy

			echo "<tr>";
			echo "<td width='35%;'  >".$data['judul']."</td>";
			
			echo "<td>".$data['nama_sub_jurusan']."</td>";
			echo "<td>".$data['status_publikasi']."</td>";
			echo "<td>".$data['nama_penulis']."</td>";
			
			echo "<td>".$tgl."</td>";
		
			echo "</tr>";
		}
	}else{ // Jika data tidak ada
		echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
	}
	?>
	</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require_once('plugin/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Transaksi.pdf', 'D');
?>

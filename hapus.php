<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysqli_query($koneksi,"SELECT id_mhs FROM db_mahasiswa WHERE 
 id_mhs='$id'") or die(mysqli_error());
if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		
		$del = mysqli_query($koneksi,"DELETE FROM db_mahasiswa WHERE 
 id_mhs='$id'");
		if($del){
			echo '<h3>Data praktikan berhasil di hapus! ';	
			echo '<a href="index.php">Kembali</a>';	
		}else{
	echo 'Gagal menghapus data! ';	
		echo '<a href="index.php">Kembali</a>';
	}
}
	
}else{
	echo '<script>window.history.back()</script>';	
}
?>

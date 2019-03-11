<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id	= $_POST['id'];	
	$nama		= $_POST['nama'];
	$nim		= $_POST['nim'];
	$kom		= $_POST['kom'];
	$alamat		= $_POST['alamat'];
	$jurusan	= $_POST['jurusan'];
	$update = mysqli_query($koneksi,"UPDATE db_mahasiswa SET 
nama='$nama', nim='$nim', kom='$kom', alamat='$alamat', jurusan='$jurusan'  WHERE id_mhs='$id'") or die(mysqli_error());

	if($update){
		echo '<h3>Data berhasil di update! ';	
		echo '<a href="index.php?id='.$id.'">Kembali</a>';
	}else{
		echo 'Gagal menyimpan data! ';
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';
	}
}else{	
	echo '<script>window.history.back()</script>';
}
?>

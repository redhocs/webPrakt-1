<?php
include 'koneksi.php';
if($_GET['action']=='edit' || $_GET['action']=='tambah'){
	$path="image/";//Folder menyimpan file gambar
	$file=$_FILES['nama']['name'];
	$temp=$_FILES['nama']['tmp_name'];
	
	if($_GET['action']=='edit'){
		$d=mysqli_fetch_array(mysqli_query($koneks,"SELECT * FROM galeri WHERE jenis='img' and id='{$_GET['id']}'"));
		unlink ("image/".$d['nama']);
		}
		move_uploaded_file($temp,$path.$file);
}
			if($_GET['action']=='tambah'){
				mysqli_query($koneks,"INSERT INTO galeri values(default, 'file','{$_POST['judul']}','{$_POST['keterangan']}',now(),'img')");
			}
			if($_GET['action']=='edit'){
				mysqli_query($koneks,"UPDATE galeri SET nama='$file',judul='{$_POST['judul']}',keterangan='{$_POST['keterangan']}' WHERE id='{$_GET['id']}'");
			mysqli_query($q);	
			}
			if($_GET['action']=='hapus'){
				$d=mysqli_fetch_array(mysqli_query($koneks,"SELECT * FROM galeri where jenis='img' and id='{$_GET['id']}'"));
				unlink("image/".$d['nama']);{
					mysqli_query($koneks, "DELETE FROM galeri WHERE jenis='img' and id='{$_GET['id']}'");
				}
			}
			header("location:tampil_img.php");

?>
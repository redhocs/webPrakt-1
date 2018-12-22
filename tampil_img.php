<?php
include "koneksi.php";
	if(empty($_GET['id'])){
		$max = mysqli_fetch_array(mysqli_query($koneks,"SELECT count(*) as count FROM galeri WHERE jenis='img'"));
		if ($max['count']>0){
			if (empty($_GET['h'])) $_GET['h']=1;
				$tlimit = 10;
				$blimit = $_GET['h']*$tlimit-$tlimit;
				$maxh=ceil($max['count'])/$tlimit;
				$q=mysqli_query($koneks,"SELECT * FROM galeri WHERE jenis='img' ORDER BY id desc limit $blimit,$tlimit");
				?>
<div align="right" style="padding-right: 20px;"><input style="background: #B39D9E; border: 0; border-radius: 5px;" type="button" value="Tambah" onClick="window.location='form_img.php';"/></div>
<?php
	while($img=mysqli_fetch_array($q)){
		?>
<table width="770" align="center">
	<tr>
		<td>
			<div style="padding-left: 50px; padding-right: 50px;">
			<a style="font-size: 25;" href="?id=<?=$img['id']?>">
				<b>
					<?=$img['judul']?>
				</b>
			</a>
			</div>
			<div style="padding-left: 50px; padding-right: 50px;" class="post_date">
				<b>Post :</b><?=$img['waktu']?></div>
<table width="700" align="center" style="border-radius: 10px;" bgcolor="#B39D9E" cellpadding="10">
	<tr>
		<td bgcolor="FFFFFF" width="100">
			<a href="?id=<?=$img['id']?>">
				<img src="image/<?=$img['nama']?>" height="70" width="100" /></a>
		</td>
		<td style="padding-left: 15px; padding-right: 15px;" bgcolor="#FFFFFF">
		<?=$img['keterangan']?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
		<div style="padding-right: 15px;" align="right">
			<input style="background: #EFDFDF; border: 0; border-radius: 10px;" type="button" value="Zoom Image" onClick="window.location='?id=<?=$img['id'] ?>';"/>
			<input style="background: #EFDFDF; border: 0; border-radius: 10px;" type="button" value="Edit" onClick="window.location='formedit_img.php?id=<?=$img['id']  ?>';"/>
			<input style="background: #EFDFDF; border: 0; border-radius: 10px;" type="button" value="Hapus" onClick="window.location='proses_img.php?action=hapus&id=<?=$img['id']?>';"/>
		</div></td></tr>
	</table>
	<hr/>
</td></tr></table>
<?php 
	} 

?>
	<?php 
} 
	} else{
		$img=mysqli_fetch_array(mysqli_query($koneks,"SELECT * FROM galeri WHERE jenis='img' and id='{$_GET['id']}'"));
	?>
<table align="center" width="700">
	<tr>
		<td align="center" width="700">
			<input style="background: #B39D9E; border:0; border-radius: 5px;" type="button" value="Kembali" 
			onClick="window.location='tampil_img.php';"/>
		<img width="600" height="500" src="image/<?=$img['nama']?>"/>
		</td>
	</tr>
</table>
<?php 
	}
?>
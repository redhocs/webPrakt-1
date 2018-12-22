<?php
include "koneksi.php";

$q = mysqli_query($koneks, "SELECT * FROM galeri WHERE jenis='img' and id='{$_GET['id']}' ");
$img = mysqli_fetch_array($q);
$action='edit';
?>

<form action="proses_img.php?&action=<?=$action?>&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data">
</br>
<table width="600" border="0" align="center" cellpadding="10" cellspacing="10" bgcolor="#B39D9E" style="border-radius: 20px;">
<tr>
	<td colspan="3">
		<table>
			<tr>
				<td width="75" class="p">JUDUL</td>
				<td width="10">:</td>
				<td width="356" class="p"><textarea name="judul" cols="53" rows="5"><?=$img['judul']?>
				</textarea></td>
			</tr>
			<tr>
				<td class="p">KETERANGAN</td>
				<td>:</td>
				<td class="p"><textarea name="keterangan" cols="53" rows="5"><?=$img['keterangan']?></textarea></td>
			</tr>
			<tr>
				<td class="p">File Lama</td>
				<td>:</td>
				<td><input name="nama" value"<?=$img['nama']?>" size="50" readonly></td>
			</tr>
			<tr>
				<td class="p">File</td>
				<td>:</td>
				<td><input name="nama" value="<?=$img['nama']?>" size="37" type="file"></td>
			</tr>
			<tr>
				<td colspan="6" align="center">
					<input type="button" value="Kembali" onClick="window.location='tampil_img.php';" style="background: #F4E1E1; border:0; border-radius: 10px;"/>
					<button type="submit" style="background: #F4E1E1; border:0; border-radius: 10px;">Simpan</button>
					<button type="rese" style="background: #F4E1E1; border:0; border-radius: 10px;">Ulangi</button>
					</td>
					</tr>
					</table>
					</td>
					</tr>
					</table>
					</form>
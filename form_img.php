<form action="proses_img.php?action=tambah" method="post" enctype="multipart/form-data">
</br>
	<table width="600" border="0" align="center" cellpadding="10" cellspacing="10" bgcolor="#B39D9E" style="border-radius: 20px;">
	<tr>
		<td colspan="3">
		<table align="center">
		<tr>
			<td width="75" class="p"> Judul </td>
			<td width="10">:</td>
			<td width="356" class="p">
				<textarea name="judul" cols="60" rows="5"></textarea>
				</td>
		</tr>
		<tr>
			<td class="p"> Keterangan </td>
			<td>:</td>
			<td class="p"><textarea name="keterangan" cols="60" rows="5"></textarea></td>
		</tr>
		<tr>
			<td class="p">File</td>
			<td>:</td>
			<td><input name="MAX_FILE_SIZE" value="50000000" type="hidden"/>
			<input name="nama" size="37" type="file" formenctype="multipart/form-data"></td>
		</tr>
		
			<td colspan="6" align="center">
				<input type="button" value="Kembali" onClick="window.location='tampil_img.php';" style="background: #F4E1E1; border:0; border-radius: 10px;"/>
				<button type="submit" style="background: #F4E1E1; border: 0; border-radius: 10px;">Simpan</button>
				<button type="reset" style="background: #F4E1E1; border:0; border-radius:10px;">Ulangi</button></td>
		</tr>
	</table>
		</td>
	</tr>
		</table>
</form>
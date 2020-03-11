<h2><?php echo $isi; ?></h2>
<?php echo form_open('pengurus/addpengurus'); ?>
<table border="0">
	<tr>
		<td>ID</td>
		<td><?php echo form_input('id'); ?> </td>
	</tr>

	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama'); ?> </td>
	</tr>

	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="gender" value="L"> Laki - Laki</td>
	</tr>
	
	<tr>
		<td><input type="radio" name="gender" value="P"> Perempuan</td>
	</tr>
	
	<tr>
		<td valign="top">Alamat</td>
		<td><textarea name="alamat" rows="3" cols="40"></textarea></td>
	</tr>
	
	<tr>
		<td>Gaji</td>
		<td><?php echo form_input('gaji'); ?> </td>
	</tr>
	
	<tr>
		<td> <?php echo form_submit('sumbit','Simpan'); ?> <input type="reset" name="Batal"></td>
	</tr>
</table>
<?php echo form_close(); ?>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Jenis KElamin</th>
		<th>Alamat</th>
		<th>Gaji</th>
		<th>Aksi</th>
	</tr>
	<?php  
	foreach ($data->result_array() as $row) {
	?>
	<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['nama']; ?></td>
	<td><?php echo $row['gender']; ?></td>
	<td><?php echo $row['alamat']; ?></td>
	<td><?php echo $row['gaji']; ?></td>
	<td><?php echo anchor('pengurus/edit/'.$row['id'],'Edit') ?></td>
	<td><?php echo anchor('pengurus/delete/'.$row['id'],'Delete') ?></td>
	</tr>
<?php } ?>
</table>
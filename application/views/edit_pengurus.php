<h2><?php echo $isi; ?></h2>
<?php echo form_open('pengurus/edit_submit') ?>
<table border="0">
	<?php foreach ($data->result_array() as $row) { ?>

	<tr>
		<td>ID</td>
		<td><input type="text" name="id" value="<?php echo $row['id'] ?>"readonly="yes"></td>
	</tr>

	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama',$row['nama']); ?> </td>
	</tr>

	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="gender" value="L" <?php if (!(strcmp($row['gender'],"L"))) {
			echo "CHECKED";
		} ?>> Laki - Laki</td>
	</tr>
	
	<tr>
		<td><input type="radio" name="gender" value="P" <?php if (!(strcmp($row['gender'],"P"))) {
			echo "CHECKED";
		} ?>> Perempuan</td>
	</tr>
	
	<tr>
		<td valign="top">Alamat</td>
		<td><textarea name="alamat" rows="3" cols="40"><?php echo $row['alamat']; ?></textarea></td>
	</tr>
	
	<tr>
		<td>Gaji </td>
		<td><?php echo form_input('gaji'); ?> </td>
	</tr>
	
	<tr>
		<td> <?php echo form_submit('submit','Ubah'); ?> <input type="button" value="Batal" onclick="self.history.back()"></td>
	</tr>
<?php } ?>
</table>
<?php echo form_close(); ?>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Jenis KElamin</th>
		<th>Alamat</th>
		<th>Gaji</th>
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
	</tr>
<?php } ?>
</table>
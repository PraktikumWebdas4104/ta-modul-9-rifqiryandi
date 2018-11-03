<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
	$arr = explode(", ",$d['genre']);
	$ary = explode(", ",$d['wisata']);
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre film</td>
		<td>
			<input type="checkbox" name="ck[]" value="Horror" <?php if(in_array('Horror',$arr)){echo "checked=checked";} ?> >Horror <br>
			<input type="checkbox" name="ck[]" value="Action" <?php if(in_array('Action',$arr)){echo "checked=checked";} ?> >Action <br>
			<input type="checkbox" name="ck[]" value="Anime" <?php if(in_array('Anime',$arr)){echo "checked=checked";} ?> >Anime  <br>
			<input type="checkbox" name="ck[]" value="Thriller" <?php if(in_array('Thriller',$arr)){echo "checked=checked";} ?> >Thriller <br>
			<input type="checkbox" name="ck[]" value="Animasi" <?php if(in_array('Animasi',$arr)){echo "checked=checked";} ?> >Animasi <br>
		</td>
	</tr>
	<tr>
		<td>Wisata tujuan</td>
		<td>
		<input type="checkbox" name="w[]" value="Bali" <?php if(in_array('Bali',$ary)){echo "checked=checked";} ?> >Bali <br>
		<input type="checkbox" name="w[]" value="Raja ampat" <?php if(in_array('Raja ampat',$ary)){echo "checked=checked";} ?> >Raja ampat <br>
		<input type="checkbox" name="w[]" value="Pulau Derawan" <?php if(in_array('Pulau Derawan',$ary)){echo "checked=checked";} ?> >Pulau Derawan <br>
		<input type="checkbox" name="w[]" value="Bangka belitung" <?php if(in_array('Bangka belitung',$ary)){echo "checked=checked";} ?> >Bangka belitung <br>
		<input type="checkbox" name="w[]" value="Labuan bajo" <?php if(in_array('Labuan bajo',$ary)){echo "checked=checked";} ?> >Labuan bajo <br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>

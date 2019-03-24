<?php 
include "oop.php";
$tes = new oop();
?>

<form action="proses.php" method="post">
	<table>
		<tr>
			<td>Nama Buku</td>
			<td>: <input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>User ID</td>
			<td>: <input type="number" name="id"></td>
		</tr>
		<tr>
			<td></td>
			<td align="right"><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
<br>
<table>
	<?php 
	$no=1;
	$row = $tes->tampil("buku");
	foreach ($row as $show) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $show['nama']; ?></td>
	</tr>
	<?php } ?>
</table>
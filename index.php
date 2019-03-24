<?php 
include"koneksi/koneksi.php";

if(isset($_POST['submit'])){
	$buku = $_POST['buku'];

	$sql   = "INSERT INTO `buku`(`id`, `nama`, `user_id`) VALUES (null,'$buku','3')";
	$query = mysqli_query($koneksi,$sql);
}

if (@$_GET['delete']=="on") {
	$id_buku = $_GET['id_buku'];
	$sql     = "DELETE FROM `buku` WHERE buku.id = '$id_buku'";
	mysqli_query($koneksi,$sql);
}
?>

<form action="" method="post">
	<input type="text" name="buku" placeholder="nama buku">
	<input type="submit" name="submit" value="Kirim">
</form>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Buku</th>
		<th>Kepunyaan</th>
		<th>aksi</th>
	</tr>

	<?php 
	$no    = 0; 
	$sql   = "SELECT buku.id as id_buku ,buku.nama as n_buku, user.username as n_user 
			  FROM user,buku 
			  WHERE user.id = buku.user_id";
	$query = mysqli_query($koneksi,$sql);
	while ($tampil = mysqli_fetch_array($query)) {
	?>
	<tr>
		<td><?php echo ++$no; ?></td>
		<td><?php echo $tampil['n_buku']; ?></td>
		<td><?php echo $tampil['n_user']; ?></td>
		<td>
			<a href="index.php?delete=on&amp;id_buku=<?php echo $tampil['id_buku'] ?>">delete</a>
			<a href="update.php?update=on&amp;id_buku=<?php echo $tampil['id_buku'] ?>">update</a>
		</td>
	</tr>
	<?php 
	}
	?>
</table>
<?php 
if (@$_GET['update']=="on") {
include"koneksi/koneksi.php";
$id_buku = $_GET['id_buku'];
$sql     = "SELECT buku.id as id_buku ,buku.nama as n_buku 
		    FROM user,buku 
		    WHERE user.id = buku.user_id AND buku.id = '$id_buku'";
$query   = mysqli_query($koneksi,$sql);
$tampil  = mysqli_fetch_array($query); 
?>
<form action="" method="post">
	<input type="text" name="buku" placeholder="nama buku" value="<?php echo $tampil['n_buku'] ?>">
	<input type="hidden" name="id" value="<?php echo $tampil['id_buku'] ?>">
	<input type="submit" name="submit" value="Ubah">
</form>
<?php 
}
if (isset($_POST['submit'])) {
	$id_buku = $_POST['id'];
	$nama    = $_POST['buku'];

	$sql     = "UPDATE `buku` SET `nama`='$nama' WHERE buku.id = '$id_buku'";
	if(mysqli_query($koneksi,$sql)){
		header("location:index.php");
	}
}
?>
<?php 
include "oop.php";
$tes = new oop();
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$id = $_POST['id'];

	$data = array('nama' => $nama, 'user_id' => $id);
	$tes->insert("buku",$data);
}

header("location:tes_oop.php");
?>
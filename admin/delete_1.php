<?php


include_once('../koneksi/koneksi.php');
$id = $_GET['id'];
$query = "DELETE FROM komentar WHERE id='$id'";
mysqli_query($conn, $query);
header('location:admin_Komentar.php');


?>

<?php


include_once('../koneksi/koneksi.php');
$id_pasien = $_GET['id_pasien'];
$query = "DELETE FROM pendaftaran_pasien WHERE id_pasien='$id_pasien'";
mysqli_query($conn, $query);
header('location:admin_pasien.php');


?>

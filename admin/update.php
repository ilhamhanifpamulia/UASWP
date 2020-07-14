<?php
include '../koneksi/koneksi.php';

    $id_pasien = $_POST['id_pasien'];
    $nama_pasien = $_POST['nama_pasien'];
    $gender = $_POST['gender'];
    $umur = $_POST['umur'];
    $nomer_hp = $_POST['nomer_hp'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];
    $ruangan = $_POST['ruangan'];
    $no_ruangan = $_POST['no_ruangan'];
    $nama_wali = $_POST['nama_wali'];

mysqli_query($conn, "update pendaftaran_pasien set nama_pasien='$nama_pasien', gender='$gender', umur='$umur', nomer_hp='$nomer_hp',
 alamat='$alamat', keluhan='$keluhan', ruangan='$ruangan', no_ruangan='$no_ruangan', nama_wali='$nama_wali' where id_pasien='$id_pasien'");

header("location:admin_pasien.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pasien</title>
  <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/pasien.css">
    <link rel="stylesheet" href="../css/pendaftaran.css">
</head>
<body>
    <div class="header">
    <h3 id="h3"><a href="../home.php">
        <input type="submit" value="Logout" id="submit_1"/>
    </a></h3>
      <ul>
        <li><a href="admin_home.php">Home</a></li>
        <li><a href="admin_pasien.php">Pasien</a></li>
        <li><a href="admin_komentar.php">Pesan/Saran</a></li>
      </ul>
    </div><br>

<div id="d_pasien">
<img id="logo2" src="../img/logo2.png" alt="logo">
<h1 id="data_pasien">Data Pasien</h1><br /><br />
<a href="../pendaftaran.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br/>
<table class="tpasien" border="3">
  <tr>
   <th>ID Pasien</th>
   <th>Nama Pasien</th>
   <th>Gender</th>
   <th>Umur</th>
   <th>Nomer HP</th>
   <th>Alamat</th>
   <th>Keluhan</th>
   <th>Ruangan</th>
   <th>No Ruangan</th>
   <th>Nama Wali</th>
   <th>C_Date</th>
   <th>Aksi</th>
  </tr>
  <?php
    include '../koneksi/koneksi.php';
    $data = mysqli_query($conn, "select * from pendaftaran_pasien");
    while($row = mysqli_fetch_array($data)){
  ?>

   <tr>
    <td><?php echo $row['id_pasien'] ?></td>
    <td><?php echo $row['nama_pasien'] ?></td>
    <td><?php echo $row['gender'] ?></td>
    <td><?php echo $row['umur'] ?></td>
    <td><?php echo $row['nomer_hp'] ?></td>
    <td><?php echo $row['alamat'] ?></td>
    <td><?php echo $row['keluhan'] ?></td>
    <td><?php echo $row['ruangan'] ?></td>
    <td><?php echo $row['no_ruangan'] ?></td>
    <td><?php echo $row['nama_wali'] ?></td>
    <td><?php echo $row['c_date'] ?></td>
    <td>
        <a href='delete.php?id_pasien=<?php echo $row['id_pasien']; ?>'><input type="submit" name="daftar" value="Hapus" id="submit"/></a>
        <a href='edit.php?id_pasien=<?php echo $row['id_pasien']; ?>'><input type="submit" name="daftar" value="Edit" id="submit"/></a>
    </td>
   </tr>
  <?php
  }
  ?>
 </table>
  
</body>
</html>
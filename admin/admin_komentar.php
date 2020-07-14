<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/pasien.css">
    <link rel="stylesheet" href="../css/pendaftaran.css">
</head>
<body>
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
    </div>

    <?php
    include('../koneksi/koneksi.php');
    ?>

<div id="d_pasien">
<img id="logo2" src="../img/logo2.png" alt="logo">
<h1 id="data_pasien">Komentar Layanan Rumah Sakit Harapan Bersama</h1><br /><br />

 <table class="tpasien" border="3">
  <tr>
   <th>ID</th>
   <th>Email</th>
   <th>Nama</th>
   <th>Kritik</th>
   <th>Saran</th>
   <th>Hapus</th>
  </tr>
  <?php
  if(!ISSET($_POST['submit'])){

  $sql = "SELECT * FROM komentar";
  $query = mysqli_query($conn, $sql);
  foreach($query as $row){
  ?>
   <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['nama'] ?></td>
    <td><?php echo $row['kritik'] ?></td>
    <td><?php echo $row['saran'] ?></td>
    <td><a href='delete_1.php?id=<?php echo $row['id']; ?>'><input type="submit" name="daftar" value="Hapus" id="submit"/></a></td>
    </tr>
  <?php } } ?>

  
  

 </table>
</div>
    
</body>
</html>
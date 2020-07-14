<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien</title>
    <link rel="stylesheet" href="css/pasien.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/pendaftaran.css">
</head>
<body>
<div class="header">
    <div class="gambar">
        <img src="img/profil.jpg" class="gambar">
    </div><br>
    <h3 id="h3"><a href="login/form_login.php">
        <input type="submit" value="Login" id="submit_1"/>
    </a></h3>
      <ul>
        <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">☰</a></li>
        <li><a href="home.php">Home</a></li>
		    <li><a href="profil.php">Tentang Kami</a></li>
		    <li><a href="pendaftaran.php">Pendaftaran</a></li>
        <li><a href="pasien.php">Pasien</a></li>
		    <li><a href="kontak.php">Kontak Kami</a></li>
        <li><a href="pesanDsaran.php">Kritik/Saran</a></li>
      </ul>

      <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    document.getElementsByClassName("header")[0].classList.toggle("responsive");
}
 </script>
    </div>

    <div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			Selamat Datang di Sistem Informasi Data Pasien Rumah Sakit Harapan Bersama
		</marquee>
    </div><br />

<div id="d_pasien">
<img id="logo2" src="img/logo2.png" alt="logo">
<h1 id="data_pasien">Data Pasien</h1><br /><br />

<form method="post">
<input class="cari" type="text" name="nt" placeholder="cari ...">
<input type="submit" name="submit" value="Cari" id="cari">
</form>
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
   <th>Tanggal/Waktu</th>
  </tr>
  <?php
    if(!ISSET($_POST['submit'])){

    include 'koneksi/koneksi.php';
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
   </tr>
  <?php } } ?>

  <?php if (ISSET($_POST['submit'])){
 $cari = $_POST['nt'];
 $query2 = "SELECT * FROM pendaftaran_pasien WHERE nama_pasien LIKE '%$cari%'";
 
 $data = mysqli_query($conn, $query2);
 while ($r = mysqli_fetch_array($data)){
  ?>

<tr>
  <td><?php echo $r['id_pasien'] ?></td>
  <td><?php echo $r['nama_pasien'] ?></td>
  <td><?php echo $r['gender'] ?></td>
  <td><?php echo $r['umur'] ?></td>
  <td><?php echo $r['nomer_hp'] ?></td>
  <td><?php echo $r['alamat'] ?></td>
  <td><?php echo $r['keluhan'] ?></td>
  <td><?php echo $r['ruangan'] ?></td>
  <td><?php echo $r['no_ruangan'] ?></td>
  <td><?php echo $r['nama_wali'] ?></td>
  <td><?php echo $r['c_date'] ?></td>
</tr>  
 <?php }} ?>

 </table>
</div><br /><br /><br />

<div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			Terima kasih Telah berkunjung di Website SIstem Informasi Rs. Harapan Bersama
		</marquee>
	</div>
		<div id="footer">Copyright &copy 2020, by Rs. Harapan Bersama </div>
  
</body>
</html>
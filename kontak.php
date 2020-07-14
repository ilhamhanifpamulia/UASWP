<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="css/pasien.css">
    <link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/pendaftaran.css">
	<link rel="stylesheet" href="css/kotak.css">
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
			Selamat Datang di Website Sistem Informasi Rumah Sakit Harapan Bersama
		</marquee>
	</div><br />
	
		<div id="kontak">
			<div class="kontak">
			<h2> Kontak Kami </h2><br>
				<form>
				<table class="tablekontak">
				<tr>
					<td> Nama Dokter 1 :</td>
					<td> Dr. Azam Putra Imanto </td>
				</tr>
					<td> No Handphone  :</td>
					<td><a id="whatsapp" href="https://api.whatsapp.com/send?phone=6285325656274" target="_blank">0853 - 2565 - 6274 </a></td>
				</tr>

				<tr>
					<td> Nama Dokter 2 :</td>
					<td> Dr. Fakhrul Anam </td>
				</tr>
					<td> No Handphone  :</td>
					<td> 0882 - 1675 - 9263 </td>
				</tr>
				
				<tr>
					<td> Nama Dokter 3 :</td>
					<td> Dr. Ilham Hanif Pamulia </td>
				</tr>
					<td> No Handphone  :</td>
					<td> 0823 - 2890 - 3842 </td>
				</tr>
			</table>
			</form>
			</div>
		</div>

		<div id="runningtext">
			<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
				Terima kasih Telah berkunjung di Website SIstem Informasi Rs. Harapan Bersama
			</marquee>
		</div>
	
		<div id="footer"> Copyright &copy 2020, by Rs. Harapan Bersama  </div>
	</div>
</body>
</html>

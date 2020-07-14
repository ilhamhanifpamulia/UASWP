<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Rumah Sakit Harapan Bersama</title>
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
			Selamat Datang di Pusat Informasi Rumah Sakit Harapan Bersama
		</marquee>
    </div><br />

	<div id="sidebar">
		<div class="widged">
		<img src="img/iklan.gif" class="gambariklan">
	

	<div class="widged">
		<h1 class="judulwidged">Posting Teratas</h1>
		<ul>
			<li> <a href="artikel/posting1.html">Cara Efektif agar Tidak Tertular Virus Corona</a> </li>
			<li> <a href="artikel/posting2.html">TIPS MENJAGA KESEHATAN PENCERNAAN ANAK</a> </li>
			<li> <a href="artikel/posting3.html">BENARKAH BUBBLE TEA BAHAYA BAGI KESEHATAN?</a> </li>	
		</ul>
	</div>
	</div>
	</div>

	<div id="isi">
			<div class="isipostingall">
			<h2 class="profil_h2"> Tentang Kami</h2>
			<h3 class="profil_h3"> Rumah Sakit Harapan Bersama</h3><br /><br />
			<table class="table">
			<img src="img/logo.png" class="profil">
				<p>RS Harapan Bersama yang akan berdiri pada tahun 2040 sebagai rumah sakit didaerah Tegal.
					Untuk menjangkau masyarakat yang lebih luas di Tegal dan sekitarnya. </p><br>
				<p>RS Harapan Bersama menerapkan pendekatan yang selalu berfokus pada pasien, 
					baik dalam layanan maupun fasilitas kesehatan. Hal ini tak lain bertujuan untuk 
					memberikan layanan yang lebih baik dengan senantiasa memegang prinsip Good Corporate 
					Governance dan Good Clinical Governance.</p><br />
			</table>
			</div>
	</div><br />

	<div id="runningtext">
			<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
				Terima kasih Telah Membaca Informasi Rumah Sakit Harapan Bersama
			</marquee>
	</div>

		<div id="footer"> Copyright &copy 2020, by Rs. Harapan Bersama  </div>
	</div>
</body>
</html>

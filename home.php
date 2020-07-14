<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
			Selamat Datang di Website Sistem Informasi Rumah Sakit Harapan Bersama
		</marquee>
    </div><br />
    
    <div id="sidebar">
		<div class="widged">
			<img src="img/corona.gif" class="gambariklan">
		
		<div class="widged">
		<h1 class="judulwidged">Posting Teratas</h1>
		<ul>
			<li> <a href="artikel/posting1.html">Cara Efektif agar Tidak Tertular Virus Corona</a> </li>
			<li> <a href="artikel/posting2.html">TIPS MENJAGA KESEHATAN PENCERNAAN ANAK</a> </li>
			<li> <a href="artikel/posting3.html">BENARKAH BUBBLE TEA BAHAYA BAGI KESEHATAN?</a> </li>
		</ul>
		
	<div class="widged">
			<h2 style="text-align: center;">Support By</h2>
	</div>

	<div class="widged">
			<img src="img/pmi.gif" class="gambariklan">
	</div>

	<div class="widged">
			<img src="img/bpjs.gif" class="gambariklan">
    </div>
    </div>
		</div>
	</div>

	<div id="isi">
		<div id="isi">
			<div class="isipostingal2">
			<table class="table">
						<h2>Rumah Sakit Harapan Bersama</h2><br /><br />
							<p>Rumah Sakit Harapan Bersama Menyediakan fasilitas yang dapat memenuhi
								pasien secara menyeluruh. Fasilitas berbasis Komputerisasi
								dan Sistem online sehingga mempercepat proses pelayanan
								pasien. Fasilitas yang disediakan oleh kami :</p><br>
							<p>1. Rawat Jalan</p>					
							<p>2. Unit Gawat Darurat</p>	
							<p>3. Rawat Inap</p>	
							<p>4. ICU</p>	
							<p>5. Kamar Operasi</p>	
							<p>6. Medical Check Up</p>
							<p>7. Farmasi</p>
							<p>8. Ambulance</p>
							<p>9. Fisioterapi</p>
							<p>10. Laboratorium</p>
							<p>11. Radiologi</p>
			</table>	
		</div>
	</div><hr>

	<div class="isiposting">
			<img src="img/sample.jpg" class="gambardepan">
				<h2>Cara Efektif agar Tidak Tertular Virus Corona</h2><br>
				<h3> COVID-19</h3>	
				<p>Infeksi virus Corona yang disebut COVID-19 ini pertama kali terjadi di kota Wuhan,
 					China dan sekarang telah ditemukan di berbagai negara, termasuk Indonesia.</p><br>
			<a href="artikel/posting1.html">
				Baca selengkapnya >>>>>
			</a>
	</div><br>

	<div class="isiposting">
			<img src="img/pencernaan.jpg" class="gambardepan">
				<h2>TIPS Menjaga Kesehatan Pencernaan Anak</h2><br>
				<h3>4 Tips Menjaga Kesehatan</h3>
			    <p>Mengajari anak untuk mengunyah makanan hingga halus membantu meningkatkan penyerapan nutrisi makanan di usus. 
				Sehingga dapat membantu menjaga kesehatan pencernaan anak.</p> <br>
			<a href="artikel/posting2.html">
				Baca selengkapnya >>>>>
			</a>
	</div><br>

	<div class="isiposting">
			<img src="img/buble.jpg" class="gambardepan">
                <h2>Benarkah Bubble Tea Bahaya Bagi Kesehatan?</h2><br>
                <h3>Bahaya Bagi Kesehatan</h3>
				<p>Bubble tea adalah minuman manis berasal dari asia yang sedang populer dan digemari oleh banyak kalangan muda. Bubble atau pearl
				atau boba terbuat dari tepung tapioka yang dikombinasikan dengan minuman manis dan disajikan dingin.</p><br>
			<a href="artikel/posting3.html">
				Baca selengkapnya >>>>>
            </a>
    </div>
	</div><br /><br />

	<div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			Terima kasih Telah berkunjung di Website SIstem Informasi Rs. Harapan Bersama
		</marquee>
	</div>
		<div id="footer">Copyright &copy 2020, by Rs. Harapan Bersama </div>
	
</body>
</html>
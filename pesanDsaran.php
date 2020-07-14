<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pasien</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/pendaftaran.css">

    <style>
        body {
          background-image: url("img/profil.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
    </style>

</head>
<body>
<div class="header">
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
			Selamat Datang di Website Pendaftaran Pasien Rumah Sakit Harapan Bersama
		</marquee>
    </div>

    <div id="header_1">
      <img src="img/logo1.png" id="logo" /><br /><br />
      <h1 id="sub_1">
        Silahkan Kritik dan Saran Layanan Kami
      </h1>
    </div>

  <?php

  include_once('koneksi/koneksi.php');

  if(isset($_POST["daftar"])){
    $email = $_POST['email'];
    $nama  = $_POST['nama'];
    $kritik = $_POST['kritik'];
    $saran = $_POST['saran'];

    if(!empty($email) || !empty($nama) || !empty($kritik) || !empty($saran)){
     $sql = "insert into komentar ( email, nama, kritik, saran )" . 
       "values ( '$email', '$nama', '$kritik', '$saran' )";
     mysqli_query($conn, $sql);
     
    }else{
     echo 'Semua data diperlukan. Harap isi semua.!';
    }
   }
  ?>

  <div id="konten">
    <form id="form" method="post" action="pesanDsaran.php">

      <label for="Email"><b class="txt">Email :</b></label><br />
      <input type="text" class="txtinput" name="email" placeholder="Masukan Email Anda" required>
      <br /><br />


      <label for="Nama"><b class="txt">Nama :</b></label><br />
      <input type="text" class="txtinput" name="nama" placeholder="Masukan Nama Anda" required>
      <br /><br />

      <div id="textarea">
        <label><b class="txt">Kritik :</b></label>
        <textarea name="kritik" cols="50" rows="7" id="txt-area" placeholder="Kritik" style="padding: 7px;"></textarea>
      </div>
      <br />

      <div id="textarea">
        <label><b class="txt">Saran :</b></label>
        <textarea name="saran" cols="50" rows="7" id="txt-area" placeholder="Saran" style="padding: 7px;"></textarea>
      </div>
      <br />

      <div id="container-btn">
        <a href=""><input type="submit" name="daftar" value="Daftar" id="submit"/></a>
      </div>

    </form>
</div>

<div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			Terima kasih Telah Mendaftar di Layanan Rumah sakit Harapan Bersama, Kami Akan Melayani Sebaik Mungkin
		</marquee>
	</div>
		<div id="footer">Copyright &copy 2020, by Rs. Harapan Bersama </div>

</body>
</html>
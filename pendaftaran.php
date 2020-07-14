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
      <h1 id="judul">
        Selamat datang di Website Rumah Sakit Harapan Bersama
      </h1><br />
      <h2 id="sub">
        Silahkan Daftar Pasien yang akan rawat inap!
      </h2>
    </div>

  <?php

  include_once('koneksi/koneksi.php');

  if(isset($_POST["daftar"])){
    $nama_pasien = $_POST['nama_pasien'];
    $gender = $_POST['gender'];
    $umur = $_POST['umur'];
    $nomer_hp = $_POST['nomer_hp'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];
    $ruangan = $_POST['ruangan'];
    $no_ruangan = $_POST['no_ruangan'];
    $nama_wali = $_POST['nama_wali'];

    if(!empty($nama_pasien) || !empty($gender) || !empty($umur) || !empty($nomer_hp) || !empty($alamat) || !empty($keluhan) || !empty($ruangan)  || !empty($no_ruangan) || !empty($nama_wali)){
     $data = "insert into pendaftaran_pasien ( nama_pasien, gender, umur, nomer_hp, alamat, keluhan, ruangan, no_ruangan, nama_wali )" . 
       "values ( '$nama_pasien','$gender', '$umur', '$nomer_hp', '$alamat', '$keluhan', '$ruangan', '$no_ruangan', '$nama_wali' )";
     mysqli_query($conn, $data);
     header('location:pasien.php');
    }else{
     echo 'Semua data diperlukan. Harap isi semua.!';
    }
   }
  ?>

  <div id="konten">
    <form id="form" method="post" action="pendaftaran.php">

      <label for="Nama Pasien"><b class="txt">Nama Pasien :</b></label><br />
      <input type="text" class="txtinput" name="nama_pasien" placeholder="Masukan Nama Pasien" required>
      <br /><br />

      <label><b class="txt">Gender :</b></label> <br />
      <div id="radio-gender">
        <label for="gender" class="gender" checked>
          <input type="radio" name="gender" value="Laki-laki"/>Laki-laki</label>
            
        <label for="gender" class="gender">
          <input type="radio" name="gender" value="Perempuan"/>Perempuan</label>

        <label for="gender" class="gender">
          <input type="radio" name="gender" value="Lain-Lain"/>Lain-lain</label>
      </div>
      <br />

      <label for="Umur"><b class="txt">Umur :</b></label><br />
      <input type="text" class="txtinput" name="umur" placeholder="Umur Pasien" required>
      <br /><br />

      <label for="Nomer Hp"><b class="txt">Nomer Hp :</b></label><br />
      <input type="text" class="txtinput" name="nomer_hp" placeholder="Nomer Telefon/Hp">
      <br /><br />

      <div id="textarea">
        <label><b class="txt">Alamat :</b></label>
        <textarea name="alamat" cols="50" rows="7" id="txt-area" placeholder="Alamat Rumah" style="padding: 7px;" required></textarea>
      </div>
      <br />

      <div id="textarea">
        <label><b class="txt">Keluhan :</b></label>
        <textarea name="keluhan" cols="50" rows="7" id="txt-area" placeholder="Keluhan" style="padding: 7px;" required></textarea>
      </div>
      <br />

          <div id="opinion">
            <label><b class="txt">Ruangan :</b></label>
            <select name="ruangan" class="option">
              <option>Pilih Ruangan</option>
              <option>Dahlia</option>
              <option>Merpati</option>
              <option>Mawar</option>
              <option>Melati</option>
            </select>
          </div>

          <div id="opinion">
            <label><b class="txt">Nomer Ruangan :</b></label>
            <select name="no_ruangan" class="option">
              <option>Pilih Nomer Ruangan</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
            </select>
          </div>
          <br />

      <label for="Nama Wali"><b class="txt">Nama Wali :</b></label><br />
      <input type="text" class="txtinput" name="nama_wali" placeholder="Masukan Nama Wali" required>
      <br /><br />

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
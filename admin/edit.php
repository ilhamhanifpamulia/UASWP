<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pasien</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/pendaftaran.css">

    <style>
        body {
          background-image: url("../img/profil.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
    </style>

</head>
<body>
    <div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			Selamat Datang di Website Pendaftaran Pasien Rumah Sakit Harapan Bersama
		</marquee>
    </div>

    <div id="header_1">
      <img src="../img/logo1.png" id="logo" /><br /><br />
      <h1 id="judul">
        Selamat datang di Website Rumah Sakit Harapan Bersama
      </h1><br />
      <h2 id="sub">
        Silahkan Edit Data Pasien yang di rawat inap!
      </h2>
    </div>

  <?php

  include '../koneksi/koneksi.php';

  $id_pasien = $_GET['id_pasien'];
    $data= mysqli_query($conn, "select * from pendaftaran_pasien where id_pasien='$id_pasien'");
    while($row = mysqli_fetch_array($data)){
  ?>

  <div id="konten">
    <form id="form" method="post" action="update.php">
      
      <label for="Nama Pasien"><b class="txt">Nama Pasien :</b></label><br />
      <input type="text" class="txtinput" name="nama_pasien" placeholder="Masukan Nama Pasien" value="<?php echo $row['nama_pasien']; ?>">
      <br /><br />

      <label><b class="txt">Gender :</b></label> <br />
      <div id="radio-gender" value="<?php echo $row['gender']; ?>">
        <label for="gender" class="gender">
          <input type="radio" name="gender" value="Laki-laki" />Laki-laki</label>
            
        <label for="gender" class="gender">
          <input type="radio" name="gender" value="Perempuan" />Perempuan</label>

        <label for="gender" class="gender">
          <input type="radio" name="gender" value="Lain-Lain" />Lain-lain</label>
      </div>
      <br />

      <label for="Umur"><b class="txt">Umur :</b></label><br />
      <input type="text" class="txtinput" name="umur" placeholder="Umur Pasien" value="<?php echo $row['umur']; ?>">
      <br /><br />

      <label for="Nomer Hp"><b class="txt">Nomer Hp :</b></label><br />
      <input type="text" class="txtinput" name="nomer_hp" placeholder="Nomer Telefon/Hp" value="<?php echo $row['nomer_hp']; ?>">
      <br /><br />

      <div id="textarea">
        <label><b class="txt">Alamat :</b></label>
        <textarea name="alamat" cols="50" rows="7" id="txt-area" placeholder="Alamat Rumah" style="padding: 7px;"  value="<?php echo $row['alamat']; ?>"></textarea>
      </div>
      <br />

      <div id="textarea">
        <label><b class="txt">Keluhan :</b></label>
        <textarea name="keluhan" cols="50" rows="7" id="txt-area" placeholder="Keluhan" style="padding: 7px;"  value="<?php echo $row['keluhan']; ?>"></textarea>
      </div>
      <br />

          <div id="opinion" value="<?php echo $row['ruangan']; ?>">
            <label><b class="txt">Ruangan :</b></label>
            <select name="ruangan" class="option" >
              <option>Pilih Ruangan</option>
              <option>Dahlia</option>
              <option>Merpati</option>
              <option>Mawar</option>
              <option>Melati</option>
            </select>
          </div>

          <div id="opinion">
            <label><b class="txt">Nomer Ruangan :</b></label>
            <select name="no_ruangan" class="option" value="<?php echo $row['no_ruangan']; ?>">
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
      <input type="text" class="txtinput" name="nama_wali" placeholder="Masukan Nama Wali" value="<?php echo $row['nama_wali']; ?>">
      <br /><br />

      <div id="container-btn">
        <a href=""><input type="submit" name="update" value="Update" id="submit"/></a>
      </div>

    </form>
    <?php
    }
    ?>
</div>

<div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			Terima kasih Telah Mendaftar di Layanan Rumah sakit Harapan Bersama, Kami Akan Melayani Sebaik Mungkin
		</marquee>
	</div>
		<div id="footer">Copyright &copy 2020, by Rs. Harapan Bersama </div>

</body>
</html>
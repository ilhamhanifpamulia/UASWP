<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Sebagai Admin</title>
</head>

<body>
<?php
include('../koneksi/koneksi.php');

if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
    echo "<div class='alert'>username dan password tidak sesuai !</div>";
  }
}
?>


    <div id="header_1">
      <img src="../img/logo2.png" id="logo" /><br /><br />
      <h3 id="judul">Masuk Sebagai Admin</h3>
    </div>

    <form action="cek_login.php" method="post">

    <label for="Username"><b class="txt">Username :</b></label><br />
      <input type="text" class="txtinput" name="username" placeholder="Username" required>
      <br /><br />

    <label for="Password"><b class="txt">Password :</b></label><br />
      <input type="password" class="txtinput" name="password" placeholder="Password" required>
      <br /><br />

      <div id="container-btn">
      <a href="form_login.php"><input type="submit" name="login" value="Log In" id="login"/></a>

      <br/>
			<br/>
			<center>
				<a class="link" href="../home.php">kembali</a>
			</center>
      </div>

      </form>
    
</body>
</html>
<html>
<head>
	<title>ngErsulo Online</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/javas.js"></script>
</head>
<body>
<!-- Design Header website -->
<?php
session_start();
if(isset($_SESSION['username']))
require_once("koneksi.php");
?>
<div id="header">
	<div id="logo">
		<img src="images/logo.png"/>
	</div>
	<form action="login.php" method="post">
		<div id="login">
			<table>
				<tr><td>Username</td><td colspan="2">Password</td></tr>
				<tr>
					<td><input name="username" type="text" class="text"/></td><td ><input name="password" type="password" class="text"/></td>
					<td><input type="submit" value="Login"/></td>
				</tr>
			</table>
		</div>
	</form>
</div>
<!-- Design Content website -->
<div id="content">
	<div id="wrapper">
		<div id="mobile">
			<img src="images/mobile.png"/> <br/>
			<h2>Selamat Datang di ngErsulo Online, <br/>Website Komplain Indonesia Terbaik</h2>
			<ul>
				<li>Buat Komplain Dengan Gratis di Website Kami</li>
				<li>Dapatkan Pemberitahuan Langsung Tentang Komplain</li>
				<li>Gunakan Fasilitas-Fasilitas Menarik Kami</li>
			</ul>
		</div>
	<form action="registrasi.php" method="post">
		<div id="register">
			<h1>Registrasi</h1>
			<p>Daftar Gratis</p>
			<input name="username" type="text" class="reg" size="23" placeholder="User Name"><br/><br/>
			<input name="email" type="text" class="reg" size="23" placeholder="Your Email"><br/><br/>
			<input name="password" type="password" class="reg" size="23" placeholder="New Password"><br/><br/>
			<input name="profil" type="radio" value="Instansi" class="pilih_profil"> Instansi &nbsp; &nbsp;
			<input name="profil" type="radio" value="Konsumen" class="pilih_profil"> Konsumen &nbsp; &nbsp; <br/><br/>
			<input name="nama_instansi" type="text" class="nama_instansi" size="23" placeholder="Nama Instansi"><br/><br/>
			<div id="pilih_kategori">Pilih Kategori&nbsp;&nbsp;
				<select name="kategori">
				  <option value="">Silahkan Pilih</option>
				  <option value="Pendidikan">Pendidikan</option>
				  <option value="Pemerintah">Pemerintah</option>
				  <option value="Masyarakat">Masyarakat</option>
				</select>
			</div>
			</br>
			<input value="" type="submit" class="login" />
		</div>
	</form>
</div>
<!-- Design Footer website -->
</body>
</html>
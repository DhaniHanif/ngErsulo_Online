<?php
if (empty($varNmdp)) $varNmdp = '';
if (empty($varNmbk)) $varNmbk = '';
if (empty($varEmail)) $varEmail = '';
if (empty($varPass)) $varPass = '';
if (empty($varSts)) $varSts = '';
if (empty($varIns)) $varIns = '';
if (empty($varKtg)) $varKtg = '';
if(isset($_POST['formSubmit']) == "Submit")
{
	$error = "";
	
	if(empty($_POST['formNmdp']))
	{
		$error .= "<li>Harap Isi Nama Depan Anda!</li>";
	}
	if(empty($_POST['formNmbk']))
	{
		$error .= "<li>Harap Isi Nama Belakang Anda!</li>";
	}
	if(empty($_POST['formEmail']))
	{
		$error .= "<li>Harap Isi Alamat Email Anda!</li>";
	}
	if(empty($_POST['formPass']))
	{
		$error .= "<li>Harap Isi Password Anda!</li>";
	}
	if(empty($_POST['formSts']))
	{
		$error .= "<li>Harap Isi Status Anda!</li>";
	}
	if(empty($_POST['formIns'])&&($_POST['formSts'])== "Instansi")
	{
		$error .= "<li>Harap Isi Nama Instansi Anda!</li>";
	}
	if(empty($_POST['formKtg'])&&($_POST['formSts'])== "Instansi")
	{
		$error .= "<li>Harap Isi Kategori Instansi Anda!</li>";
	}

	$varNmdp = $_POST['formNmdp'];
	$varNmbk = $_POST['formNmbk'];
	$varEmail = $_POST['formEmail'];
	$varPass = $_POST['formPass'];
	$varSts = $_POST['formSts'];
	$varIns = $_POST['formIns'];
	$varKtg = $_POST['formKtg'];

	if($_POST['formSts']== "Konsumen")
	{
		$varIns = '-';
		$varKtg = '-';
	}

	if(empty($error)) 
	{
		if (file_exists("fileCSV.csv") == FALSE) {
			$fs = fopen("fileCSV.csv","a");
			fwrite($fs,"Nama Depan, Nama Belakang, Alamat Email, Password Login, Status, Nama Instansi, Kategori Instansi\n");	
		}
		$fs = fopen("fileCSV.csv","a");
		fwrite($fs,$varNmdp . ", " . $varNmbk . ", " . $varEmail . ", " . $varPass . ", " . $varSts . ", " . $varIns . ", " . $varKtg . "\n");
		fclose($fs);
		
		header("Location: berhasil.html");
		exit;
	}
}
?>
<!DOCTYPE html> 
<html>
<head>
	<title>ngErsulo Online</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
	<link rel="stylesheet" href="../style.css" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="kategori.js"></script>
</head>
<body>
<!-- Design Header website -->
<div id="header">
	<div id="logo">
		<img src="../images/logo.png"/>
	</div>
</div>
<!-- Design Content website -->
<div id="content">
	<div id="wrapper">
		<div id="mobile">
			<img src="../images/mobile.png"/> <br/>
			<h2>Selamat Datang di ngErsulo Online, <br/>Website Komplain Indonesia Terbaik</h2>
			<ul>
				<li>Buat Komplain Dengan Gratis di Website Kami</li>
				<li>Dapatkan Pemberitahuan Langsung Tentang Komplain</li>
				<li>Gunakan Fasilitas-Fasilitas Menarik Kami</li>
			</ul>
		</div>
		<div id="register">
			<?php
				if(!empty($error)) 
				{
					echo("<p>Maaf, terjadi kesalahan pada form:</p>\n");
					echo("<ul>" . $error . "</ul>\n");
				} 
			?>
			<form action="index.php" method="post">
				<h1>Registrasi</h1>
				<p>
					Nama Depan<br>
					<input type="text" name="formNmdp" maxlength="20" value="<?=$varNmdp;?>" />
				</p>
				<p>
					Nama Belakang<br>
					<input type="text" name="formNmbk" maxlength="20" value="<?=$varNmbk;?>" />
				</p>	
				<p>
					Alamat Email<br>
					<input type="text" name="formEmail" maxlength="30" value="<?=$varEmail;?>" />
				</p>
				<p>
					Password Login<br>
					<input type="text" name="formPass" maxlength="10" value="<?=$varPass;?>" />
				</p>
				<p>
					Pilih Status<br>
				</p>
				<input type="radio" name="formSts" class="pilih_kategori" value="Instansi"> Instansi &nbsp; &nbsp;
				<input type="radio" name="formSts" class="pilih_kategori" value="Konsumen"> Konsumen &nbsp; &nbsp; <br/><br/>
				<div id="instansi">
					<p>
					Nama Instansi<br>
					<input type="text" name="formIns" maxlength="30" value="<?=$varIns;?>" />
					<br>Pilih Kategori<br>
					<select name="formKtg">
					  <option value="Pendidikan">Pendidikan</option>
					  <option value="Pemerintah">Pemerintah</option>
					  <option value="Masyarakat">Masyarakat</option>
					</select>
					</p>
				</div>
				<br>		
				<input type="submit" name="formSubmit" value="Submit" />
			</form>
		</div> 
	</div>
</div>
<!-- Design Footer website -->
<div id="footer">
	<div id="copy">
		ngErsulo Online © 2014 
	</div>
</div>
</body>
</html>
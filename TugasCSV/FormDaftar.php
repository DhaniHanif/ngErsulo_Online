<?php
if (empty($varNmdp)) $varNmdp = '';
if (empty($varNmbk)) $varNmbk = '';
if (empty($varEmail)) $varEmail = '';
if (empty($varPass)) $varPass = '';
if (empty($varSts)) $varSts = '';
if (empty($varIns)) $varIns = '';
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

	$varNmdp = $_POST['formNmdp'];
	$varNmbk = $_POST['formNmbk'];
	$varEmail = $_POST['formEmail'];
	$varPass = $_POST['formPass'];
	$varSts = $_POST['formSts'];
	$varIns = $_POST['formIns'];

	if($_POST['formSts']== "Konsumen")
	{
		$varIns = '-';
	}

	if(empty($error)) 
	{
		$fs = fopen("fileCSV.csv","a");
		fwrite($fs,"Nama Depan, Nama Belakang, Alamat Email, Password Login, Status, Nama Instansi\n");	
		fwrite($fs,$varNmdp . ", " . $varNmbk . ", " . $varEmail . ", " . $varPass . ", " . $varSts . ", " . $varIns . "\n");
		fclose($fs);
		
		header("Location: berhasil.html");
		exit;
	}
}
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Form Daftar</title>
</head>

<body>
	<?php
		if(!empty($error)) 
		{
			echo("<p>Maaf, terjadi kesalahan pada form:</p>\n");
			echo("<ul>" . $error . "</ul>\n");
		} 
	?>
	<form action="FormDaftar.php" method="post">
		<p>
			Nama Depan<br>
			<input type="text" name="formNmdp" maxlength="10" value="<?=$varNmdp;?>" />
		</p>
		<p>
			Nama Belakang<br>
			<input type="text" name="formNmbk" maxlength="10" value="<?=$varNmbk;?>" />
		</p>	
		<p>
			Alamat Email<br>
			<input type="text" name="formEmail" maxlength="20" value="<?=$varEmail;?>" />
		</p>
		<p>
			Password Login<br>
			<input type="text" name="formPass" maxlength="10" value="<?=$varPass;?>" />
		</p>
		<p>
			Instansi / Konsumen<br>
			<input type="text" name="formSts" maxlength="8" value="<?=$varSts;?>" />
		</p>
		<p>
			Nama Instansi (Biarkan kosong jika anda adalah seorang konsumen)<br>
			<input type="text" name="formIns" maxlength="20" value="<?=$varIns;?>" />
		</p>		
		<input type="submit" name="formSubmit" value="Submit" />
	</form>
</body>
</html>
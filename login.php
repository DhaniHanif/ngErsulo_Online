<?php
session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = $pdo->prepare("SELECT * FROM user WHERE username = '$username'");
$cekuser->execute();
$jumlah = $cekuser->rowCount();
$hasil = $cekuser->fetch();
if($jumlah == 0) {
echo "Username Belum Terdaftar!";
echo "<a href='index.php'>Back</a>";
} else {
if($pass <> $hasil['password']) {
echo "Password Salah!";
echo "<a href='index.php'>Back</a>";
} else if(Konsumen == $hasil['profil']) {
$_SESSION['username'] = $hasil['username'];
header('location:menu_konsumen.php');
} else if(Instansi == $hasil['profil']) {
$_SESSION['username'] = $hasil['username'];
header('location:menu_instansi.php');
}
}
?>

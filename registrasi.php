<?php
require_once("koneksi.php");
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$profil = $_POST['profil'];
$kategori = $_POST['kategori'];
$nama_instansi = $_POST['nama_instansi'];
$cekuser = $pdo->prepare("SELECT * FROM user WHERE username = '$username'");
$cekuser->execute();
if($cekuser->rowCount() > 0) {
echo "Username Sudah Terdaftar!
";
echo "<a href='index.php'>Back</a>";
} else {
if(!$username || !$pass) {
echo "Masih ada data yang kosong!
";
echo "<a href='index.php'>Back</a>";
} else {
$simpan = $pdo->prepare("INSERT INTO user(username, email, password, profil, kategori, nama_instansi) VALUES('$username','$email','$pass',
																												'$profil','$kategori','$nama_instansi')");
$simpan->execute();
if($simpan) {
echo "Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a>";
} else{
echo "Proses Gagal!";
}
}
}
?>

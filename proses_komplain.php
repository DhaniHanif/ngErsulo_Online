<?php
require_once("koneksi.php");
$username = $_SESSION['username'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$instansi_tujuan = $_POST['instansi_tujuan'];
$profil = $_POST['profil'];
$isi = $_POST['isi'];
$cekuser = $pdo->prepare("SELECT * FROM komplain WHERE judul = '$judul'");
$cekuser->execute();
if($cekuser->rowCount() > 0) {
echo "Judul Sudah Ada!
";
echo "<a href='buat_komplain.php'>Back</a>";
} else {
if(!$judul || !$instansi_tujuan || !$profil || !$isi) {
echo "Masih ada data yang kosong!
";
echo "<a href='buat_komplain.php'>Back</a>";
} else {
$simpan = $pdo->prepare("INSERT INTO komplain(username, judul, kategori, instansi_tujuan, profil, isi) VALUES('$username','$judul','$kategori',
																												'$instansi_tujuan','$profil','$isi')");
$simpan->execute();
if($simpan) {
echo "Kirim Komplain Sukses, Silahkan <a href='buat_komplain.php'>Kembali</a>";
} else{
echo "Proses Gagal!";
}
}
}
?>

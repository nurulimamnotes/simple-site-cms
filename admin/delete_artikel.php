<?php require ("../config.php");
$perintah="delete from produk_kami where id=$id";
$hasil=mysql_query($perintah);
if ($hasil) {
header("location:daftar_artikel.php");
} else {
echo ("Berita gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke MySQL. Silahkan diulangi kembali.");
} ?>
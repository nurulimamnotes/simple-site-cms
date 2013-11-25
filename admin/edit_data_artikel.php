<?php require("../config.php");
$isi = str_replace("\r\n","<br>", $isi);
$cek = "UPDATE produk_kami SET judul='$judul', isi='$isi' WHERE id='$id'";
$hasil = mysql_query($cek);
if ($hasil) {
header("location:daftar_artikel.php");
} else {
echo("Berita gagal diupdate.");	
} ?>
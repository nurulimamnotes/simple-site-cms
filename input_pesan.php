<?php
require("config.php");
$valid_nama= "^[a-z]+[.,a-z ]+$";
$valid_mail = "^([._a-z0-9-]+[._a-z0-9-]*)@(([a-z0-9-]+\.)*([a-z0-9-]+)(\.[a-z]{2,3}))$";
$tanggal=date("Ymd");
$nama = strip_tags($nama_x);
$mail = strip_tags($mail_x);
$pesan_tag = strip_tags($pesan_x);
$pesan = nl2br($pesan_tag);
if (!eregi($valid_mail, $mail_x) || !eregi($valid_nama, $nama_x) || empty($pesan_x)){
$kesalahan=TRUE;
}
if ($kesalahan) {
if (!eregi($valid_mail,$mail_x)){echo "<li>Penulisan alamat E-mail Anda salah!</li>";}
if (!eregi($valid_nama,$nama_x)){echo "<li>Penulisan nama Anda salah!</li>";}
if (empty($pesan_x)){ echo "<li>Anda belum menuliskan <b>Komentar Anda</b></li>"; }
} else {		
$query = "INSERT INTO buku_tamu (nama,mail,tanggal,pesan) 
VALUES ('$nama','$mail','$tanggal','$pesan')";
$result = mysql_query($query);
if ($result) {
header("location:bukutamu.php");	
}else{
echo"Pesan Anda tidak dapat disimpan.";
}
}
?>
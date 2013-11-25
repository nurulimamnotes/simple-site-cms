<? 
require("../config.php");
$perintah = "INSERT INTO produk_kami (judul,isi)
VALUES ('$_POST[judul]','$_POST[isi]')";
$result = mysql_query($perintah);
if ($result) {
header("location:daftar_artikel.php");
} else {
echo "Data belum dapat di simpan!!";	
} 
?>
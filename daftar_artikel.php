<?php
require("config.php");
$numresult = mysql_query("SELECT * FROM produk_kami ORDER BY id DESC");
$jumlah = mysql_num_rows($numresult);
$limit = 2;
if (empty($offset)) {
$offset = 0;
}
$query = "SELECT * FROM produk_kami ORDER BY id DESC LIMIT $offset, $limit";
$result = mysql_query($query);
echo "<div align=\"left\">";
$halaman = intval($jumlah/$limit);
if ($jumlah%$limit) { 
$halaman++; 
} 
for ($i=1;$i<=$halaman;$i++) {
$newoffset=$limit*($i-1); 
if ($offset!=$newoffset) 
{ 
echo "<b><font face=\"arial\" size=\"2\">[<a style=\"color: black\" href=\"index.php?offset=$newoffset\">$i</a>]</font></B>";
} else { 
echo "<b><font face=\"arial\" size=\"3\" color=\"red\">[$i]</font></b>"; 
} 
}
echo "</div>";
while ($data = mysql_fetch_array($result)) {
echo ("
<table width=\"100%\" height=\"58\" border=\"0\" cellpadding=\"0\" cellspacing=\"5\">
<tr>
<td width=\"100%\" height=\"24\" bgcolor=\"#E8E9F4\"><div align=\"left\"><strong class=\"style5\"> <img src=\"images/dot.gif\" width=\"10\" height=\"10\" /><a href=\"isi_detail.php?id=$data[id]\"><font size=\"2\" face=\"Arial\"> $data[judul]</a></strong></div></td>
</tr>
<tr></tr>
");
echo "<tr><td><font size=\"2\" face=\"Arial\"><div align=\"justify\">";
$kata=strtok($data[isi]," ");
for ($p=1;$p<=50;$p++){
echo nl2br($kata);
echo nl2br(" ");$kata=strtok(" ");
}
echo "<a href=\"isi_detail.php?id=$data[id]\"><b><p>Detail<b/></a></`div></td></tr>";
echo "</table>";
}
echo "<hr>";
$halaman = intval($jumlah/$limit);
if ($jumlah%$limit) { 
$halaman++; 
} 
echo "<div align=\"left\">";
for ($i=1;$i<=$halaman;$i++) {
$newoffset=$limit*($i-1); 
if ($offset!=$newoffset) 
{ 
echo "<b><font face=\"arial\" size=\"2\">[<a style=\"color: black\" href=\"index.php?offset=$newoffset\">$i</a>]</font></B>";
} else { 
echo "<b><font face=\"arial\" size=\"3\" color=\"red\">[$i]</font></b>"; 
} 
}
echo "</div>";
echo "<br>";
?>

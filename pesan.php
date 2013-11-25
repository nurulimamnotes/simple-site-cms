<?php
require("config.php");
echo "<table cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">";
$numresult = mysql_query("SELECT * FROM buku_tamu ORDER BY id DESC");
$jumlah = mysql_num_rows($numresult);
$limit = 5;
if (empty($offset)) {
$offset = 0;
}
$query = "SELECT * FROM buku_tamu ORDER BY id DESC LIMIT $offset, $limit";
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
echo "<b><font face=\"sans-serif\" size=\"2\">[<a style=\"color: black\" href=\"bukutamu.php?offset=$newoffset\">$i</a>]</font></b>";
} else { 
echo "<b><font face=\"sans-serif\" size=\"3\" color=\"red\">[$i]</font></b>"; 
} 
}
echo "</div>";
while ($row = mysql_fetch_array($result)) {
echo ("
<tr>
<td width=\"100%\" colspan=\"3\"><hr></td>
</tr>
<tr>
<td width=\"20%\"><font face=\"sans-serif\" size=\"3\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nama</b></font></td> 
<td width=\"3%\"><font face=\"sans-serif\" size=\"3\">:</font></td> 
<td width=\"75%\"><font face=\"sans-serif\" size=\"3\"><b>$row[nama]</b></font></td>
</tr>
<tr>
<td><font face=\"sans-serif\" size=\"2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</font></td>
<td><font face=\"sans-serif\" size=\"2\">:</font></td> 
<td><font face=\"sans-serif\" size=\"2\">$row[tanggal]</font></td>
</tr>
<tr>
<td><font face=\"sans-serif\" size=\"2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail</font></td> 
<td><font face=\"sans-serif\" size=\"2\">:</font></td> 
<td><font face=\"sans-serif\" size=\"2\">$row[mail]</font></td>
</tr>
<tr>
<td valign=\"top\"><font face=\"sans-serif\" size=\"2\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Komentar</font></td> 
<td valign=\"top\"><font face=\"sans-serif\" size=\"2\" >:</font></td> 
<td width=\"600\"><p align=\"justify\"><font face=\"sans-serif\" size=\"2\">$row[pesan]</font></p></td>
</tr>
");
}
echo "</table>";
?>

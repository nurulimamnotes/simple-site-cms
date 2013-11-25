<?php
require("config.php");
$cek="select * from produk_kami where id=$id";
$hasil=mysql_query($cek);
while ($data=mysql_fetch_array($hasil)){
echo ("
<table width=\"100%\" height=\"58\" border=\"0\" cellpadding=\"0\" cellspacing=\"5\">
<tr>
<td width=\"100%\" height=\"24\" bgcolor=\"#E8E9F4\"><font size=\"2\" face=\"Arial\"><div align=\"left\"><strong class=\"style5\"> <img src=\"images/dot.gif\" width=\"10\" height=\"10\" /> $data[judul]</strong></div></td>
</tr>
<tr></tr>
<tr><td><font size=\"2\" face=\"Arial\"><div align=\"justify\">$data[isi]</div></td></tr>
</table>
");
}
?>

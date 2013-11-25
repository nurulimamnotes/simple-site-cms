<?php 
require ("../config.php");
$cek="select * from produk_kami order by id desc";
$hasil=mysql_query($cek);
?>
<style type="text/css">
<!--
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; font-weight: bold; }
body {
	margin-top: 0px;
	margin-left: 0px;
}
.style15 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; }
.style35 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style36 {font-size: 10}
-->
</style>
<font face="Arial" size="2">
<table width="100%" border="0">
  <tr>
    <td width="50%" height="24" bgcolor="#545454"><div align="center"><span class="style15">Isi Artikel </span></div></td>
    <td width="50%" bgcolor="#545454"><div align="center"><span class="style15">Data Artikel </span></div></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="input_artikel.php">
      <table width="99%" border="0">
        <tr>
          <td width="38%" align="left" valign="top"><span class="style35">Judul</span></td>
          <td width="2%" align="left" valign="top"><span class="style35">:</span></td>
          <td width="60%" align="left" valign="top"><span class="style35">
            <label>
            <input name="judul" type="text" id="judul" />
            </label>
          </span></td>
        </tr>
        <tr>
          <td align="left" valign="top"><span class="style35">Informasi</span></td>
          <td align="left" valign="top"><span class="style35">:</span></td>
          <td align="left" valign="top"><span class="style35">
            <label>
            <textarea name="isi" cols="35" rows="10" id="isi"></textarea>
            </label>
          </span></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top"><span class="style35">
            <label>
            <input type="submit" name="Submit" value="Simpan" />
            </label>
            <label>
            <input type="reset" name="Submit2" value="Batal" />
            </label>
          </span></td>
        </tr>
      </table>
        </form>
    </td>
    <td align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0">
      <tr>
        <td width="6%" height="25" bgcolor="#999999"><div align="center" class="style5">ID</div></td>
        <td width="76%" bgcolor="#999999"><div align="center" class="style5">Judul</div></td>
        <td width="9%" bgcolor="#999999"><div align="center" class="style5">Edit</div></td>
        <td width="9%" bgcolor="#999999"><div align="center" class="style5">Delete</div></td>
      </tr>
<? while ($data=mysql_fetch_array($hasil)){
echo("  <tr>
<td><div align=\"center\">$data[id]</div></td>
<td>$data[judul]</td>
<td><div align=\"center\"><a href=\"edit_daftar_artikel.php?id=$data[id]\">Edit</a></div></td>
<td><div align=\"center\"><a href=\"delete_artikel.php?id=$data[id]\">Delete</a></div></td>
</tr>"); } ?>
    </table></td>
  </tr>
</table>
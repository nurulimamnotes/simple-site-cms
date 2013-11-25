<?php 
require ("../config.php");
$cek="select * from produk_kami where id=$id";
$hasil=mysql_query($cek);
$data=mysql_fetch_array($hasil);
$tampil_isi=str_replace("<br>","\r\n",$data[isi]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style15 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; }
.style35 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style36 {font-size: 10}
-->
</style>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td width="50%" height="24" bgcolor="#545454"><div align="center"><span class="style15">Isi Artikel </span></div></td>
  </tr>
  <tr>
    <td><form method="post" action="edit_data_artikel.php">
      <table width="99%" border="0">
        <tr>
          <input type="hidden" name="id" value="<?php echo "$data[id]"; ?>" />
        </tr>
        <tr>
          <td width="23%" align="left" valign="top"><span class="style35">Judul</span></td>
          <td width="2%" align="left" valign="top"><span class="style35">:</span></td>
          <td width="75%" align="left" valign="top"><span class="style35">
            <label>
              <input name="judul" type="text" id="judul" value="<? echo "$data[judul]"; ?>"/>
              </label>
          </span></td>
        </tr>
        <tr>
          <td width="23%" align="left" valign="top"><span class="style35">Informasi</span></td>
          <td align="left" valign="top"><span class="style35">:</span></td>
          <td align="left" valign="top"><span class="style35">
            <label>
              <textarea name="isi" cols="35" rows="10" id="isi""><? echo "$tampil_isi"; ?></textarea>
              </label>
          </span></td>
        </tr>
        <tr>
          <td width="23%" align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top"><span class="style35">
            <label></label>
            <label></label>
            <label></label>
            <input type="submit" name="Submit" value="Update" />
            <a href="daftar_artikel.php"><strong>Back</strong></a></span></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>

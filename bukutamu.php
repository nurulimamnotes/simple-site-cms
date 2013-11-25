<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simple Site</title>
<style type="text/css">
<!--
.style3 {
	font-size: 72px;
	font-weight: bold;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="750" height="512" align="center">
  <tr>
    <td height="89" colspan="3" align="left" valign="bottom"><span class="style3">Simple<span class="style5">Site</span> </span></td>
  </tr>
  <tr>
    <td width="162" height="30" align="center" valign="middle" bgcolor="#000066"><span class="style4">Menu</span></td>
    <td width="12" bgcolor="#000066">&nbsp;</td>
    <td width="560" align="right" valign="middle" bgcolor="#000066"><form id="form1" name="form1" method="post" action="cari.php">
      <label>
      <span class="style4">Pencarian : </span>
      <input name="cari" type="text" id="cari" />
      </label>
      <label>
      <input type="submit" name="Submit" value="Go" />
      </label>
            </form>    </td>
  </tr>
  <tr>
    <td height="322" align="left" valign="top"><ul>
      <li><a href="index.php">Artikel</a></li>
      <li><a href="bukutamu.php">Buku Tamu</a> </li>
    </ul></td>
    <td>&nbsp;</td>
    <td align="left" valign="top"><? include("form_bukutamu.php") ?></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle"><hr />
      <p>CopyRight &copy; 2010 <a href="http://www.maxikom.co.id">Maxikom</a> Created   By <a href="http://www.marping.web.id">Rulianto Kurniawan</a> <br />
    -Best View at 1024x768 px-</p>
    </td>
  </tr>
</table>
</body>
</html>
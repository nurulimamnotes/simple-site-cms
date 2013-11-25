<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="input_pesan.php">
  <p><strong>Buku Tamu</strong></p>
  <table width="50%" border="0">
    <tr>
      <td width="14%">Nama</td>
      <td width="4%">:</td>
      <td width="82%"><label>
        <input name="nama_x" type="text" id="nama_x" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><label>
        <input name="mail_x" type="text" id="mail_x" />
      </label></td>
    </tr>
    <tr>
      <td>Pesan</td>
      <td>:</td>
      <td><label>
        <textarea name="pesan_x" cols="35" rows="5" id="pesan_x"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Simpan" />
        <input type="reset" name="Submit2" value="Batal" />
      </label></td>
    </tr>
  </table>
  <p>
    <? require("pesan.php"); ?>
</p>
</form>
</body>
</html>

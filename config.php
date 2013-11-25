<?php
$host="localhost";
$user="root";
$pass="maxikom";
$dbnama="simple-site";
mysql_connect($host, $user, $pass)or die ("Database tidak dapat di akses....!!!");
mysql_select_db($dbnama); 
?>
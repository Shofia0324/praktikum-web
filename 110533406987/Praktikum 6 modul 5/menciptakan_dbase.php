<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
  <title>Menciptakan Database</title> 
</head> 
 
<body> 
 
<?php 
require_once './koneksi.php'; 
 
$dbase = 'myweb'; 
 
$x = mysql_query('CREATE DATABASE ' . $dbase); 
if ($x) { 
  echo 'Database ' .$dbase. ' Created'; 
  mysql_close($x); 
} else { 
  echo mysql_error(); 
} 
 
?> 
 
</body> 
</html>
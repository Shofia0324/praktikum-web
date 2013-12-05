<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
  <title>Cek Tipe</title> 
</head> 
<body> 
 
<?php 
 
$bil = 3; 
var_dump(is_int($bil)); 
// Output: bool(true) 
 
$var = ""; 
var_dump(is_string($var)); 
// Output: bool(true) 
 
?> 
 
</body> 
</html> 
<html>
<head> 
  <title>Halaman Administrator</title> 
 
  <style type="text/css"> 
  .inner { 
  margin: 200px auto; 
  padding: 20px; 
  width: 240px; 
  border: 1px solid #333; 
  } 
  </style> 
</head> 
 
<body> 
 
<?php 
ini_set('display_errors', 1); 
define('_VALID', 1); 
 
// include file eksternal 
require_once('./auth.php'); 
 
init_login(); 
validate(); 
 
?> 
 
<h3>Simulasi Halaman Admin</h3> 
 

<p> 
Menu-menu admin ada di sini :
<p> HOME || PROFILE || ABOUT ME || DOWNLOADS || <a href="?m=logout">LOGOUT</a> 

</body> </html>
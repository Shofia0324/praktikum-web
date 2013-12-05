<html>
<head> 
  <title>Hapus Cookie</title> 
</head> 
<body> 
<?php 
setcookie('cookieku', '99'); 
if (isset($_COOKIE['cookieku'])) { 
  echo 'cookie telah di-set <br />'; 
    // set cookie 3 jam yang lalu
  setcookie('cookieku', '', time() - 3 * 3600); 
  echo 'cookie dihapus'; 
} else { 
  echo 'unset'; 
} 
?> 
<p> 
Tekan Refresh (F5); 
</body> 
</html> 
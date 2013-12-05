<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
  <title>Latihan 1 - Metode GET</title> 
</head> 
 
<body> 
 
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
Nama : <input type="text" name="nama">
<input type="submit" name="submit" value="OK">
</form>

<?php
if(isset($_GET['nama'])){
  echo 'Hai, '.$_GET['nama'];
}
?>

</body> 
</html> 
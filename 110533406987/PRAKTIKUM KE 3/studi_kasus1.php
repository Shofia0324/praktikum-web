<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<title> Studi Kasus 1 Preselecting </title> 
</head> 
<body background = "1.JPG"> 
<center><H1>UNIVERSITAS NEGERI MALANG</H1></center>
<H4> #_# Berikut ini adalah daftar jurusan di Fakultas Teknik Universitas Negeri Malang.<br>
#_# Pilih salah satu sesuai dengan jurusan anda : </h4>
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    
	Jurusan 
    <select name="jurusan"> 
      <option value="Teknik Industri has been selected">Teknik Industri 
      <option value="Teknik Elektro has been selected " selected = "yes">Teknik Elektro 
      <option value="Teknik Sipil has been selected">Teknik Sipil 
      <option value="Teknik Mesin has been selected">Teknik Mesin 
    </select> <br /> 
 
    <input type="submit" value="ok" /> 
  </form> 
 
<?php 
if (isset($_POST['jurusan'])) { 
  echo $_POST['jurusan']; 
} 
?> 
 </body></html>
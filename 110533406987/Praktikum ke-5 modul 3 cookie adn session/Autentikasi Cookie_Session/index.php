<html>
<head>
<title>Tugas Autentikasi Halaman</title>
<style type="text/css">
.inner{
margin:200px auto; padding:20px; width:240px; border:1px solid #333;}
</style>
</head>
<body>
<p>
  <?php
ini_set('display_errors', 1);
define('_VALID', 1);
//include file eksternal
require_once('./auth.php');
init_login();
validate();
?>
</p>
<p align="right"><a href="?m=logout">Logout</a></p>
<br/>
<h3 align="center">~~ Halaman Login ~~ </h3>
<p align="center">
<a href="?m=logout"></a>
<p align="center">
|| MENU || <br>
|| HOME || PROFILE || GALERY || CONTACT US ||<br> <br> <br>
<img src = "shofi.jpg"> <br>?My Profile <br>
Name : Shofiana Fitri
Student on Informatic Engineering Departmenent of State University Of Malang :-D
</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Aplikasi Database</title>
<style type="text/css">
<!--
#form{
margin-top:10px;
margin:auto;
margin-bottom:50px;
font-family: arial;
font-size: 20px;
color:#00CC66;
width:350px;
height : 270px;
background:green;
border: 3px solid #009966;
}
#input{
margin-top: 30px ;
margin-left: 100px ;
margin-bottom: 10px;
font-family: calibri;
font-size: 15px;
color:#666666;
}
body {
background-color: #DAE49C;
margin-top:5%;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php @session_start();
defined('_VALID') or die('not allowed');
function init_login() {
// Simulasi data account nama dan password
$ID = 'shofi';
$Password = 'irvan';
if (isset($_POST['ID']) && isset($_POST['Password'])) {
$n = trim($_POST['ID']);
$p = trim($_POST['Password']);
if (($n == $ID) && ($p == $Password)) {
$_SESSION['nlogin'] = 'value';
$_SESSION['time'] = 'time()';
// redireksi
?>
<script type="text/javascript">
document.location.href="./Handler.php";
</script>
<?php
} else {
echo '<div align="center"><h2>Nama atau Password tidak sesuai !</h2></div>';
return false;
}
}
}
function validate() {
if (!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])) { ?>
<div id="form">
<h2 align="center">Login</h2>
<hr style="color:#00CC66; border:double;" align="center" width="300"/>
<form action="" method="post" name="login" >
<div id="input">
User ID :
<br/>
<input type="text" name="ID" style="margin-bottom:5px;"/>
<br />
Password :<br/>
<input type="password" name="Password"/>
<br />
<input type="submit" name="login" value="Login" style="margin-top:10px"/>
</div>
</form>
</div> <?php
// Memanggil database
require_once './koneksi.php';
// Konstanta nama tabel
define('mhs', 'mahasiswa');
// Menampilkan data pada tabel
$sql = "SELECT nim, nama, alamat FROM " . mh_siswa;
$res = mysql_query($sql); if ($res) {
$num = mysql_num_rows($res); if ($num) { ?>
<div style="margin:auto; width:520px">
<table border=1 width=520 cellpadding=4 cellspacing=0 align=center bordercolor=#0000FF style="margin-top:5px"> <tr bgcolor=#CCCCCC>
<th>No</th>
<th width=120>NIM</th>
<th width=200>Nama</th>
<th width=200>Alamat</th>
</tr>
<?php $i = 1;
while ($row = mysql_fetch_row($res)) {
$bg = (($i % 2) != 0) ? '' : 'even';
$id = $row[0]; ?>
<tr class="<?php echo $bg;?>">
<td bgcolor="#FFFFFF" width="6%"><?php echo $i;?>.</td>
<td bgcolor="#FFFFFF"><?php echo $row[0];?></td>
<td bgcolor="#FFFFFF"><?php echo $row[1];?></td>
<td bgcolor="#FFFFFF"><?php echo $row[2]?></td>
</tr> <?php
$i++;
} ?>
</table>
</div> <?php
} else {
echo 'Belum ada data, isi <a href="'.$root.'&amp;act=add">di sini</a>';
}
@mysql_close($res);
}
exit;
}
if (isset($_GET['m']) && $_GET['m'] == 'logout') {
// Hapus session
if (isset($_SESSION['nlogin'])) {
unset($_SESSION['nlogin']);
}
if (isset($_SESSION['time'])) {
unset($_SESSION['time']); }
// redireksi halaman
?>
<script type="text/javascript">
document.location.href="./Handler.php";
</script>
<?php
}
} ?>
</body>
</html>
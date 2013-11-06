<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <head>
<title>Modifikasi Database</title>
><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!-- body { background-color: blue; } -->
</style>
</head>
<body>
<?php
// Memanggil database
require_once './koneksi.php';
// Konstanta nama tabel
define('mh_siswa', 'mahasiswa');
ini_set('display_errors', 1);
define('_VALID', 1);
// include file eksternal
require_once('./Login.php');
init_login();
validate();
echo "<div align='center'><strong>Anda sedang on-line</strong></div>";

// Fungsi utama untuk menangani pengolahan data @param string root parameter menu
function data_handler($root) {
if (isset($_GET['act']) && $_GET['act'] == 'add') {
data_editor($root); return;
}
$sql = 'SELECT COUNT(*) AS total FROM ' . mh_siswa;
@$res = mysql_query($sql);
// Jika data di tabel ada
if (@mysql_num_rows($res)) {
if (isset($_GET['act']) && $_GET['act'] != '') {
switch($_GET['act']) {
case 'edit':
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
data_editor($root, $_GET['id']);
} else {
show_admin_data($root);
}
break;
case 'view':
if (isset($_GET['id']) && ctype_digit($_GET['id'])) { ?>
<h2 align="center">Lihat Data</h2><?php
data_detail($root, $_GET['id'], 1); ?>
<div style="margin:auto; margin-top:5px; width:700px">
<input type="button" value="Kembali" onClick="history.go(-1)" />
</div> <?php
} else {
show_admin_data($root);
}
break;
case 'del':
if (isset($_GET['id']) && ctype_digit($_GET['id'])) { ?>
<h2 align="center">Hapus Data</h2>
<div style="margin:auto; margin-bottom:5px; width:700px">
<?php echo 'Apakah data berikut ini akan dihapus ?'; ?>
</div>
<?php data_detail($root, $_GET['id'], 1);
// Key untuk penghapusan data
$id = $_GET['id']; ?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get" style="margin:auto; margin-top:5px; width:700px">
<input type="button" name="submit" value="Ya" onClick="data_delete($root, $id)" />
<input type="button" value="Tidak" onClick="history.go(-1)" />
</form><?php
} else {
show_admin_data($root);
}
break;
default:
show_admin_data($root);
}
} else {
 show_admin_data($root);
}
@mysql_close($res);
} else {
echo 'Data Tidak Ditemukan';
}
}
// Fungsi untuk menampilkan menu administrasi * @param string root parameter menu
function show_admin_data($root) { ?>
<h2 align="center">Administrasi Data</h2> <?php
$sql = "SELECT nim, nama, alamat FROM " . mh_siswa;
$res = mysql_query($sql);
if ($res) {
$num = mysql_num_rows($res);
if ($num) { ?>
<div style="margin:auto; width:710px">
<a href="<?php echo $root;?>&amp;act=add">Tambah Data</a>
<table border=1 width=710 cellpadding=4 cellspacing=0 align=center bordercolor=#0000FF style="margin-top:5px">
<tr bgcolor=#CC00FF>
<th>No</th>
<th width=120>NIM</th>
<th width=200>Nama</th>
<th width=200>Alamat</th>
<th>Menu</th>
</tr>
<?php $i = 1; while ($row = mysql_fetch_row($res)) {
$bg = (($i % 2) != 0) ? '' : 'even'; $id = $row[0]; ?>
<tr class="<?php echo $bg;?>">
<td bgcolor="#FFFFFF" width="5%">
<?php echo $i;?>.
</td>
<td bgcolor="#FFFFFF">
<a href="<?php echo $root;?>&amp;act=view&amp;id= <?php echo $id;?>" title="Lihat Data"><?php echo $id;?></a>
</td>
<td bgcolor="#FFFFFF">
<?php echo $row[1];?>
</td>
<td bgcolor="#FFFFFF">
<?php echo $row[2]?>
</td>
<td align="center" bgcolor="#FFFFFF">
| <a href="<?php echo $root;?>&amp;act=edit&amp;id= <?php echo $id;?>"> Edit</a>
| <a href="<?php echo $root;?>&amp;act=del&amp;id= <?php echo $id;?>" title="Hapus Data"> Hapus</a>
| </td>
</tr>
<?php $i++;
} ?>
</table>
</div> <?php
} else {
echo 'Belum ada data, isi <a href="'.$root.'&amp;act=add">di sini</a>';
}
@mysql_close($res);
}
}
// Fungsi untuk menampilkan detail data mahasiswa * @param string root parameter menu * @param integer id nim mahasiswa
function data_detail($root, $id = 0) {
$sql = "SELECT nim, nama, alamat FROM " . mh_siswa . " WHERE nim = " . $id;
$res = mysql_query($sql);
if ($res) {
if (mysql_num_rows($res)) { ?>
<div>
<table border=1 width=700 cellpadding=4 cellspacing=0 align=center bordercolor=#0000FF> <?php
$row = mysql_fetch_row($res); ?>
<tr>
<td style="background-color:#CCCCCC" width="160">NIM</td>
<td bgcolor="#FF00FF"><?php echo $row[0];?></td>
</tr>
<tr>
<td style="background-color:#CCCCCC">Nama</td>
<td bgcolor="#FF00FF"><?php echo $row[1];?></td>
</tr>
<tr>
<td style="background-color:#CCCCCC">Alamat</td>
<td bgcolor="#FF00FF" ><?php echo $row[2];?></td>
</tr>
</table>
</div> <?php
} else {
echo 'Data Tidak Ditemukan';
}
@mysql_close($res);
}
}
// Fungsi untuk menghasilkan form penambahan/pengubahan * @param string root parameter menu * @param integer id nim mahasiswa
function data_editor($root, $id = 0) {
$view = true;
if (isset($_POST['nim']) && $_POST['nim'] ) {
// Jika tidak disertai id, berarti insert baru
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
if (!$id) {
// PHP SQL untuk INSERT data
$sql = "INSERT INTO " . mh_siswa . " (nim, nama, alamat) VALUES ('" .$nim. "', '" .$nama. "', '" .$alamat. "' )";
@$res = mysql_query($sql); if ($res) { ?>
<script type="text/javascript">
document.location.href="<?php echo $root;?>";
</script> <?php
} else {
echo 'Gagal menambah data';
}
} else {
// Pernyataan PHP SQL untuk UPDATE data
$sql = "UPDATE " . mh_siswa . " SET nim = '" .$nim. "', nama = '" .$nama. "', alamat = '" .$alamat. "' WHERE nim = " . $id;
@$res = mysql_query($sql);
if ($res) {
// Script untuk redireksi ke root ?>
<script type="text/javascript">
document.location.href="<?php echo $root;?>";
</script> <?php
} else {
echo 'Gagal memodifikasi';
}
}
}
// Menyiapkan data untuk updating
if ($view) {
if ($id) {
$sql = "SELECT nim, nama, alamat FROM " . mh_siswa . " WHERE nim = " . $id;
$res = mysql_query($sql);
if ($res) {
if (mysql_num_rows($res)) {
$row = mysql_fetch_row($res);
$nim = $row[0];
$nama = $row[1];
$alamat = $row[2];
} else {
show_admin_data();
return;
}
}
} else {
$nim = @$_POST['nim'];
$nama = @$_POST['nama'];
$alamat = @$_POST['alamat'];
} ?>
<h2 align="center"> <?php echo $id ? 'Edit' : 'Tambah';?> Data</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" style="margin:auto; width:auto">
<table border=1 cellpadding=4 cellspacing=0 align=center bordercolor=#0000FF>
<tr>
<td style="background-color:#CCCCCC" width=100>NIM*</td>
<td bgcolor="#FF00FF">
<input type="text" name="nim" size=10 value="<?php echo $nim;?>" />
</td>
</tr>
<tr>
<td style="background-color:#CCCCCC">Nama</td>
<td bgcolor="#FF00FF">
<input type="text" name="nama" size=40 value="<?php echo $nama;?>" />
</td>
</tr>
<tr>
<td style="background-color:#CCCCCC">Alamat</td>
<td bgcolor="#FF00FF">
<input type="text" name="alamat" size=60 value="<?php echo $alamat;?>" />
</td>
</tr>
<tr>
<td style="background-gt;<span ><strong>Konfirmasi</strong></span></td>
<td style="background-color:#CCCCCC">
<input type="submit" value="Ya" /> <input type="button" value="Tidak" onClick="history.go(-1)" />
</td>
</tr>
</table>
<div style="margin:auto; margin-top:5px; width:520px">
Ket : * Harus diisi
</div>
</form> <?php
}
return false;
}
// Fungsi untuk menghasilkan form menghapus @param string root parameter menu @param integer id nim mahasiswa
function data_delete($root, $id) {
if (isset($_GET['id']) && $_GET['id']) {
// Pernyataan SQL hapus data
$sql = "DELETE FROM " . mh_siswa . " WHERE nim =" . $id;
@$res = mysql_query($sql);
if ($res) {
// Script untuk redireksi ke root
?>
<script type="text/javascript">
document.location.href="<?php echo $root;?>";
</script>
<?php echo 'Data dengan NIM ' . $id . ' berhasil dihapus';
} else {
echo 'Gagal menghapus data';
}
@mysql_close($res);
}
}
// Memanggil fungsi data handler
data_handler('?m=data'); ?>
<div align="center">
<h2><a href="?m=logout">Logout</a></h2>
</div>
</body>
</html>
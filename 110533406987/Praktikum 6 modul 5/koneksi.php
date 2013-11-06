<?php
$host = 'localhost';
$root = 'root';
$pass = '131313';
$db   = 'myweb';

$con = mysql_connect($host, $root, $pass);
if($con) echo 'koneksi ok';
else echo 'koneksi ko';

$sdb = mysql_select_db($db);
if(!$sdb){
  echo 'database tidak ada';
  $cek = mysql_query('create database ' . $db) or die('berhasil membuat');
  if($cek){
    mysql_select_db($db);
  }
}else{
  echo 'database ada';
}
?>

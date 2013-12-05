<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>STUDI KASUS 1 By Shofi</title>
</head>

<body>

<?php
function Greeting()
{
$jam = date ("H");

if($jam>=00 and $jam<11){
	echo '*_* Pagi, darl !!!';}
else if ($jam>=11 && $jam <= 14){
	echo '*_* Siang, darl !!!';}
else if ($jam>=14 && $jam <=18){
	echo '*_* Sore, darl !!!';}
else if ($jam>=18 && $jam<=23) {
	echo '*_* Malem, darl !!!';}
else
	echo '*_* Salah -_- !!';
} 
?>
<?php
Greeting();

$jam = date ("H");
echo ' Pukul = 9 WIB'
?>

</body>
</html>
<html>
<head>
<title>Greeting</title>
</head>
<body bgcolor="green">
<div id="apDiv4">
<?php
if(is_string($_POST['user']) AND ($_POST['pass'])) 
{    
    if (($_POST['user']=='shofi')AND($_POST['pass']=='lali'))
    {

<img src="9.jpg" width = "550" hight = "700">

        echo 'Sukses, Anda Telah Masuk Halaman Administrator Dengan User Name :'.$_POST['user'];
        echo '<br>Hallo, Mr/Mrs ' . $_POST['user'];
<?php 
$d=date("G"); 
if ($d > "0" && $d < "6") {
echo "<<h1>Selamat Subuh</h1>". date("G");
echo "<h2>Selamat Datang di Chokyulatte Teritory</h2>";
echo "<h3>Sekarang adalah hari ". date("l"). " tanggal ". date("d m Y");
echo "<br>Waktu menunjukkan pukul ". date("H:i"). " WIB";
}

elseif ($d > "6" && $d < "12") {
echo "<h1>Selamat pagi</h1>";
echo "<h2>Selamat Datang di Chokyulatte Teritory</h2>";
echo "<h3>Sekarang adalah hari ". date("l"). " tanggal ". date("d m Y");
echo "<br>Waktu menunjukkan pukul ". date("H:i"). " WIB";
}


elseif ($d > "12" && $d < "18"){
echo "<h1>Selamat Siang</h1>";
echo "<h2>Selamat Datang di Chokyulatte Teritory</h2>";
echo "<h3>Sekarang adalah hari ". date("l"). " tanggal ". date("d m Y");
echo "<br>Waktu menunjukkan pukul ". date("H:i"). " WIB";
}

else {
echo "<h1>Selamat Malam</h1>";
echo "<h2>Selamat Datang di Chokyulatte Teritory</h2>";
echo "<h3>Sekarang adalah hari ". date("l"). " tanggal ". date("d m Y");
echo "<br>Waktu menunjukkan pukul ". date("H:i"). " WIB";
}

?>
    
    else 
    {
        echo "<script>alert ('Username atau Password Anda Kemungkinan Salah, Silahkan Mencoba Kembali...!!');</script>";
    }
    
}
}
?>

</center> 
</body>
</html>
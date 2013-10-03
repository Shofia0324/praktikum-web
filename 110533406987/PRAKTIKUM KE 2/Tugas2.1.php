<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tugas Praktikum 2</title>

</head>
<body bgcolor = "aqua">
<form method="post" action="Tugas2.2.php">
<h3 align="center" class="style1"><font color = "purple" size = "13"> Tugas Praktikum 2 [Tabel Otomatis] </font></h3>
<div align="center">
<table width="327" border="1" bgcolor = "orange">

<tr>
<td style="text-align:center"><label><font color = "red">Column : </font></label></td>
<td><strong>= </strong>
<input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td style="text-align:center"><font color = "red">Total Cells : </font></td>
<td><strong>= </strong>
<input name="JumlahCell" type="text" id="JumlahCell" onKeyUp="getmax();" onFocus="this.select();"></td>
</tr>

</table>
</div>
<div id="apDiv1">
<br/>
<br/>
<br/>
<input type="submit" name="Generate" value="Generate">
<input type="reset" name="Reset" value="Reset">
</div>
</form>
</body>

</html>
<html>
<head>
   <title>TUGAS PRAKTIKUM - LOGIN FORM</title>
</head>
<body onLoad="document.form1.user.focus();">
<form name="form1" action="Welcome.php"  method="post" onsubmit="return check(this)">
<div id="apDiv1">
  <div id="header">
    <br>
  </div>
  <div>
<h3><center>Input Your Username and Password below : </center></h3>
    <div align="center"><strong><br>User Name :</strong>    
    <br>
    <input type="text" name="user" size="35" value="" title="Input must be letter" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    <strong>Password : </strong>  
    <br>
    <input type="password" name="pass" size="35" title="Input must be letter" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    
  </div>
  <br><div id="apDiv3"><br>
    
     <input type="submit" name="submit" value="S U B M I T" >
    </div>
     <div id="footer" align="left"><br>
     <span class="style3">&copy;Copy Right Chokyulatte_Shofiana.Fitri</span><br>
    </div>
  </div>
<script type="text/javascript">
function check()
{
    if(form1.user.value == "")
    {
        alert('Input your username, please !!!');
        document.form1.user.focus();
        return false;
    }
    else if(form1.pass.value=="")
    {    
        alert('Input your password, please !!! ');
        document.form1.pass.focus();
        return false;
    }    
return true;
}

// fungsi mengecek input letter only
function Huruf(evt) 
{
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Masukkan User Name dan Password Harus Berupa Huruf ');
        return false;
    }
    return true;
}
</script>

<style type="text/css">
#apDiv1 {
    position:absolute;
    width:373px;
    height:330px;
    z-index:1;
    left: 441px;
    top: 62px;
    background-color: #FFFFFF;
    border: 2px solid Blue;
}
#apDiv3 {
    position:absolute;
    width:80px;
    height:25px;
    z-index:2;
    left: 289px;
    top: 274px;
}
.style3 {
    font-size: 10px;
    font-weight: bold;
}
#apDiv2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#header{
    width:373px;
    height:98px;
    background-image: url(headerlogin.JPG);
}
#footer{
    width:373px;
    height:40px;
    background-image: url(footer.JPG);
}
body {
    background-color: #99CCCC;
}
#apDiv4 {
    position:absolute;
    width:409px;
    height:221px;
    z-index:2;
    left: 426px;
    top: 411px;
}
</style>
</form>
</div>
</body>
</html>
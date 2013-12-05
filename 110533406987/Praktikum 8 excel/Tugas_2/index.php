<?php
    mysql_connect("localhost","root","");
    mysql_select_db("myweb");
	mysql_query("DELETE FROM mahasiswa");
    require_once "excel_reader2.php";
    $data = new Spreadsheet_Excel_Reader("index.xls",false);
    $row = $data->rowcount($sheet_index=0);
    for($i=1; $i<=$row; $i++){
        $nim = $data->val($i,1);
        $nama = $data->val($i,2);
		$alamat = $data->val($i,3);
		$prodi = $data->val($i,4);
        $insert=mysql_query("insert into mahasiswa values('$nim','$nama','$alamat','$prodi')")or die(mysql_error());
        if($insert) echo "$i. mahasiswa dengan: $nim berhasil dimasukkan.<br />";
    }
?>
<?php 

mysql_connect("localhost","root","");
mysql_select_db("crud");

$nama = @$_POST['nama'];
$nim = @$_POST['nim'];

if(mysql_query("INSERT INTO data(nama, nim) VALUES('$nama','$nim') ")){
	echo "true";
}else{
	echo "false";
}

?>
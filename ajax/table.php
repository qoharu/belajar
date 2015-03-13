<?php 

mysql_connect("localhost","root","");
mysql_select_db("crud");
?>


<table border="1">
	
<tr>
	<td>ID</td>
	<td>Nama</td>
	<td>NIM</td>
</tr>
<?php 
	$query = mysql_query("SELECT * FROM data");
	
	while($data = mysql_fetch_array($query)){
		echo "
		<tr>
			<td>$data[id]</td>
			<td>$data[nama]</td>
			<td>$data[nim]</td>
		</tr>


		";
	}
 ?>



</table>
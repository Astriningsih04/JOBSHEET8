<html>
<body>
<table border="1">
<tr bgcolor="#CCCCCC">
	<td>No</td>
	<td>Nama</td>
	<td>Alamat</td>
</tr>
<?php
include_once("mysql_connect.php");
$selectview=mysql_query("select id,nama,alamat
			from tamu order by id,nama asc");
while($data=mysql_fetch_array($selectview))
{ 	echo"<tr>
	<td>$data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
  </tr>";
}
?>
</table>
</body>
</html>

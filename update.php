<html>
<body>
<?php
include_once("mysql_connect.php");
$update=mysql_query("update tamu set nama = 'STEKOM SEMARANG' where id =1");

if($update)
{echo"Berhasil mengupdate data pada tabel Tamu";}
else
{echo"Gagal mengupdate data";}
?>
</body>
</html>
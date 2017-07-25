<html>
<body>
<?php
include_once("mysql_connect.php");
$id=2;
$delete=mysql_query("delete from tamu where id='$id'");
if($delete)
{echo"Berhasil menghapus data tamu dengan id $id";}
else
{echo"Gagal menghapus data";}
?>
</body>
</html>
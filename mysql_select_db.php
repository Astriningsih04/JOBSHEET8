<html>
<body>
<?php
include_once("mysql_connect.php");
$tabel=mysql_query("CREATE TABLE tamu(
id INT NOT NULL ,
nama VACHAR (30) NOT NULL ,
alamat VACHAR (50) NOT NULL ,
email VACHAR (30) NOT NULL,
komentar VACHAR (255) NOT NULL,
PRIMARY KEY(id))");

if($tabel)
{echo"Berhasil membuat tabel Tamu melalui script php";}
else
{echo"Gagal membuat tabel";}
?>
</body>
</html>

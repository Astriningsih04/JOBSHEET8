<html>
<body>
<?php
include_once("mysql_connect.php");
$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
		VALUES ('1','sekolah tinggi elektronika komputer',
		'jl. majapahit 605 semarang','info@stekom.ac.id','test.. ')");
		
if($insert)
{echo"Berhasil menyisipkan data pada tabel tamu";}
else
{echo"Gagal penyisipan data";}
?>
</body>
</html>

<?php
include 'function/login_check.php';
include 'function/database.php';

?>
<!DOCTYPE html>
<html>
     <head>
        <title>Home</title>
		<meta name="author" content="">
        <link rel="stylesheet" href="css/table.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/script.js"></script>
	</head>

<body>

<marquee><h1>SELAMAT DATANG DI DATABASE BIRD HOSPITAL</h1></marquee>

<div id="page-wrap">
		</body>
	<?php
	
		
try {
   $database = new Database();
  	$dbh = $database->connect();
$result = $dbh->query('SELECT * FROM tblPasien');
$data = $result->fetchAll(PDO::FETCH_BOTH);
	echo '<table border=1>
	<tr />
	<td><b>Nomor</td>
	<td><b>Nama</td>
	<td><b>Alamat</td>
	<td><b>Jenis Kelamin (inisial)</td>
	<td><b>Umur</td>
	<td><b>ACTION</td>
	</tr>';
	for($i = 0;$i< count($data);$i++)
	{
	echo '<tr />
   	<td>'.$data[$i]['noPasien'].'</td>
   	<td>'.$data[$i]['Nama'].'</td>
	<td>'.$data[$i]['Alamat'].'</td>
	<td>'.$data[$i]['JKelamin'].'</td>
	<td>'.$data[$i]['Umur'].'</td>
	
	<td>
        \
        <a href="pasien_delete.php?no='.$data[$i]['noPasien'].'">Hapus</a>
      </td>
	<br />';
	}
	echo '</table>';

   $result = $dbh->query('SELECT * FROM tblRuangan');
	$data = $result->fetchAll(PDO::FETCH_BOTH);
	echo '<table border=1>
	<tr />
	<td><b>Nomor Ruangan</td>
	<td><b>Nama Ruangan</td>
	<td><b>Tipe</td>
	<td><b>Harga</td>
	<td><b>ACTION</td>
	</tr>';
	for($i = 0;$i< count($data);$i++)
	{
	echo '<tr />
   	<td>'.$data[$i]['noRuangan'].'</td>
   	<td>'.$data[$i]['namaRuangan'].'</td>
	<td>'.$data[$i]['tipe'].'</td>
	<td>'.$data[$i]['harga'].'</td>
	<td>
        <a href="ruangan_edit.php?no='.$data[$i]['noRuangan'].'">Edit</a>
        &nbsp;
        <a href="ruangan_delete.php?no='.$data[$i]['noRuangan'].'">Hapus</a>
      </td>
	<br />';
	}
	echo '</table>';

	$result = $dbh->query('SELECT * FROM tblPenyakit');
	$data = $result->fetchAll(PDO::FETCH_BOTH);
	echo '<table border=1>
	<tr />
	<td><b>ID</td>
	<td><b>Nama Penyakit</td>
	<td><b>Jenis</td>
	<td><b>ACTION</td>
	</tr>';
	for($i = 0;$i< count($data);$i++)
	{
	echo '<tr />
   	<td>'.$data[$i]['noIDPenyakit'].'</td>
   	<td>'.$data[$i]['namaPenyakit'].'</td>
	<td>'.$data[$i]['Jenis'].'</td>
	<td>
        <a href="penyakit_edit.php?no='.$data[$i]['noIDPenyakit'].'">Edit</a>
        &nbsp;
        <a href="penyakit_delete.php?no='.$data[$i]['noIDPenyakit'].'">Hapus</a>
      </td>
	<br />';
	}
	echo '</table>';

	$result = $dbh->query('SELECT * FROM tblWaktu');
	$data = $result->fetchAll(PDO::FETCH_BOTH);
	echo '<table border=1>
	<tr />
	<td><b>Nomor Pasien</td>
	<td><b>Nomor Ruangan</td>
	<td><b>Nomor ID Penyakit</td>
	<td><b>Waktu Mulai Inap</td>
	</tr>';
	for($i = 0;$i< count($data);$i++)
	{
	echo '<tr />
   	<td>'.$data[$i]['noPasien'].'</td>
   	<td>'.$data[$i]['noRuangan'].'</td>
	<td>'.$data[$i]['noIDPenyakit'].'</td>
	<td>'.$data[$i]['waktu'].'</td>
	<br />';
	}
	echo '</table>';

   $dbh = null;
}
catch (PDOException $e) {

   print "Error... " . $e->getMessage() . "<br/>";
   die();
}
?>


<a href="welcome.php"><img src="Home_Button.jpg"  width="100" height="100" alt=""/></a>



   
</html>

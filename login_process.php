<?php
session_start();
header("refresh:3;url=loginsukses.php");
try
	{
		$db = new PDO("sqlite:database/dbUser.sq3");
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$login = $db->prepare('SELECT UserName, Password, Status FROM tblUser WHERE UserName = :UserName AND Password = :Password');
$login->execute(array(':UserName'=>$_POST['UserName'],':Password'=>$_POST['Password']));
$data = $login->fetch();

if(!isset($data[0]))
{
	$data[0] = null;
}

if($data[0]!= '')
{
	$_SESSION['UserName'] = $data[0];
	$_SESSION['Status'] = $data[2];
	header("Location: loginsukses.php");
}
else
{
	echo 'Maaf, Username atau Password salah. Silahkan coba lagi.';
}
	}
catch (PDOException $ex)
	{
		echo $ex->getMessage();		
	}
?>


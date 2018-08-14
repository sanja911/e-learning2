<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['id'])) {
 $nip= $_SESSION['id'];
 header("location:../index.php"); 
}
		
$nip = $_SESSION['id'];
$waktu = $_POST['date'] . ' ' . $_POST['time'];
$waktu = mysql_real_escape_string($waktu);
$waktu = strtotime($waktu);
date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s',$waktu);
$id 			= $_POST[id];
$nama		 	= $_POST[nama];
$jenis_kel 		= $_POST[jenis_kel];
$pass			= $_POST[pass];
$kelas			= $_POST[kelas];
$edit = mysql_query("UPDATE siswa SET nama='$nama',kelas='$kelas', jenis_kel='$jenis_kel', WHERE id='$id'");
$add = mysql_query("INSERT INTO log (id,waktu,act) values ('$nip','$waktu','edit data')");
	if ($edit.$add){
		header("Location: ../siswa.php");
		exit();
	}
else {	
	
	die ("Terdapat kesalahan : ". mysql_error());
}

?>
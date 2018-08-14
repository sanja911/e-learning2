<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['id'])) {
 $nip= $_SESSION['id'];
 header("location:../index.php"); 
}
		
$nip = $_SESSION['id'];
$id	= $_GET["id"];
$waktu = $_POST['date'] . ' ' . $_POST['time'];
$waktu = mysql_real_escape_string($waktu);
$waktu = strtotime($waktu);
date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s',$waktu);

$hapus=mysql_query("SELECT * FROM soal WHERE id='$id' ");
    $r=mysql_fetch_array($hapus);
$sql2=mysql_query("INSERT INTO log (id,waktu,act) values ('$nip','$waktu','hapus data')");
 
if($hapus = mysql_query ("DELETE FROM soal WHERE id='$id'")){
	header("Location: ../soal.php");
	if ($sql2){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=soal.php">';
    } else {
        		echo "Error!" .mysql_error();
			}
        exit();

}
die ("Terdapat Kesalahan : ".mysql_error());

?>
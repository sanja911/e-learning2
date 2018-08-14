<?php
session_start();
include "/comp/koneksi.php";
if (empty($_SESSION['id'])) {
 $nip= $_SESSION['id'];
 header("location:../index.php"); 
}
$nip 			= $_SESSION['id'];
$id 			= $_POST['id'];
$judul_soal		= $_POST['judul_soal'];
$mapel			= $_POST['mapel'];
$kunci 			= $_POST['kunci'];
$kelas			= $_POST['kelas'];	  
$waktu = $_POST['date'] . ' ' . $_POST['time'];
$waktu = mysql_real_escape_string($waktu);
$waktu = strtotime($waktu);
date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s',$waktu);
$sql= mysql_query("INSERT INTO soal (id,kelas,nip,judul_soal,soal,mapel) VALUES ('$id','$kelas','$nip','$judul_soal','','$mapel')");
$sql2=mysql_query("INSERT INTO log (id,waktu,act) values ('$nip','$waktu','tambah soal')");
if ($sql.$sql2){
       echo '<META HTTP-EQUIV="Refresh" Content="0; URL=soal.php">';
    } else {
        		echo "Error!" .mysql_error();
			}
        exit;
     

?>
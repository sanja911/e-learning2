<?php
session_start();
include "/comp/koneksi.php";
if (empty($_SESSION['id'])) {
 $nip= $_SESSION['id'];
 header("location:../index.php"); 
}
	
$nip 			= $_SESSION['id'];
$kelas			= $_POST['kelas'];
$id 			= $_POST['id'];
$nama			= $_POST['nama'];
$jenis_kel 		= $_POST['jenis_kel'];

$waktu = $_POST['date'] . ' ' . $_POST['time'];
$waktu = mysql_real_escape_string($waktu);
$waktu = strtotime($waktu);
date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s',$waktu);
$sql= mysql_query("INSERT INTO siswa (id,nama,kelas,jenis_kel) VALUES ('$id','$nama','$kelas','$jenis_kel')");
$sql2=mysql_query("INSERT INTO log (id,waktu,act) values ('$nip','$waktu','tambah data')");
if ($sql.$sql2){
       echo '<META HTTP-EQUIV="Refresh" Content="0; URL=siswa.php">';
    } else {
        		echo "Error!" .mysql_error();
			}
        exit;
     

?>
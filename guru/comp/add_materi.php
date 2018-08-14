<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['id'])) {
 $nip= $_SESSION['id'];
 header("location:../index.php"); 
}
$nip 			= $_SESSION['id'];
$id 			= $_GET['id'];
$materi			= $_POST['materi'];
$soal     		= $_POST['soal'];
$kunci			= $_POST['kunci'];
$waktu = $_POST['date'] . ' ' . $_POST['time'];
$waktu = mysql_real_escape_string($waktu);
$waktu = strtotime($waktu);
date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s',$waktu);	  
$sql= mysql_query("UPDATE soal SET soal='$soal' ,kunci='$kunci' WHERE id='$id'");
$sql2=mysql_query("INSERT INTO log (id,waktu,act) values ('$nip','$waktu','edit soal')");
if ($sql){

	 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../soal.php">';
    } else {
        		echo "Error!" .mysql_error();
			}
        exit;
     

?>
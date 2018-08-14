<?php
session_start();
if(isset($_SESSION['id'])){
	$nip = $_SESSION['id'];
}else{
header ("location:../index.php");
}
include "koneksi.php";
?>
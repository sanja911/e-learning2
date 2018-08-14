<?php 
session_start();
include "/guru/comp/koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$_SESSION['id']=$id;
$_SESSION['nama']=$nama;
$login = mysql_query("select * from siswa where id = '$_SESSION[id]' and nama = '$_SESSION[nama]'");
	$hasil = mysql_num_rows($login);
	$r = mysql_fetch_array($login);
	if ($hasil > 0){
		header("location: siswa/");
		$_SESSION['nama'] = $r['nama'];
	}
	else {
		echo "<script language='javascript'>
		alert('Inputan tidak sesuai');
		window.location='index.php';
		</script>";
	}
?>

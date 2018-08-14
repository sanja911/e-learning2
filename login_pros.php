<?php 
session_start();
include "/guru/comp/koneksi.php";
$id = $_POST['id'];
$pass = $_POST['pass'];
$nama=$_POST['nama'];
$_SESSION['id']=$id;
$_SESSION['pass']=$pass;
$_SESSION['nama']=$nama;
$op = $_GET['op'];
if($op=='guru'){
$login = mysql_query("select * from guru where id = '$_SESSION[id]' and pass = '$_SESSION[pass]'");
	$hasil = mysql_num_rows($login);
	$r = mysql_fetch_array($login);
	if ($hasil > 0){
		header("location: guru/");
		$_SESSION['id'] = $r['id'];
	}
	else {
		echo "<script language='javascript'>
		alert('Inputan tidak sesuai');
		window.location='index.php';
		</script>";
	}
}
else if($op='siswa'){
$login = mysql_query("select * from siswa where id = '$_SESSION[id]' and nama = '$_SESSION[nama]'");
	$hasil = mysql_num_rows($login);
	$r = mysql_fetch_array($login);
	if ($hasil > 0){
		header("location: siswa/");
		$_SESSION['id'] = $r['id'];
	}
	else {
		echo "<script language='javascript'>
		alert('Inputan tidak sesuai');
		window.location='index.php';
		</script>";
	}
}

?>

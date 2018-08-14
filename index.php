<?php 
session_start();
if(isset($_SESSION['id']) && strlen($_SESSION['id']) == 8) {
header("location: guru/");
}else if(isset($_SESSION['id']) && strlen($_SESSION['id']) == 7){ 
header("location: siswa/");
}
include "/guru/comp/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--=======Font Open Sans======-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--StyleSheet-->
	<link rel="stylesheet" href="css/style2.css">
</head>
<body>
<div class="forms">
	<ul class="tab-group">
		<li class="tab active"><a href="#login">Log In Guru</a></li>
		<li class="tab"><a href="#signup">Logi In Siswa</a></li>
	</ul>
	<form action="login_pros.php?op=guru" id="login" method="post">
	      <h1>Login Guru</h1>
	      <div class="input-field">
	        <label for="nip">NIP</label>
	        <input type="text" name="id" required />
	        <label for="password">Password</label> 
	        <input type="password" name="pass" required />
	        <input type="submit" value="Login" class="button"/>
	      </div>
	  </form>
	  <form action="login_pros.php?op=siswa" id="signup" method="post">
	      <h1>Login Siswa</h1>
	      <div class="input-field">
	        <label for="nama">Nama</label>
	        <input type="text" name="nama" onkeyup="this.value = this.value.toUpperCase()" required />
	        <label for="id">NISN</label> 
	        <input type="text" name="id" required />
	        <input type="submit" value="Login" class="button"/>
	      </div>
	  </form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
$(document).ready(function(){
	  $('.tab a').on('click', function (e) {
	  e.preventDefault();
	  
	  $(this).parent().addClass('active');
	  $(this).parent().siblings().removeClass('active');
	  
	  var href = $(this).attr('href');
	  $('.forms > form').hide();
	  $(href).fadeIn(500);
	});
});
</script>
</body>
</html>
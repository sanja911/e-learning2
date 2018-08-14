<?php
session_start();
session_destroy();
session_start();
echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
?>

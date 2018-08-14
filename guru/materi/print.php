<?php
	include 'koneksi.php';
	$data = mysql_query("select * from soal");
?>
<html>
<head>
	<title>Print Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr class="tableheader">
        	<th rowspan="1">Kode Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php while($hasil = mysql_fetch_array($data)){ ?>
        <tr id="rowHover">
        	<td width="10%" align="center"><?php echo $hasil['mapel']; ?></td>
            <td width="25%" id="column_padding"><?php echo $hasil['judul_soal']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['soal']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>
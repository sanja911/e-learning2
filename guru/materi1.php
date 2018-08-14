<!DOCTYPE html>
<?php
session_start();
include "/comp/koneksi.php";
if (empty($_SESSION['id'])) {
 $nip= $_SESSION['id'];
 header("location:../index.php"); 
}
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino UI Elements</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	   <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="aset/dist/js/app.min.js"></script>
	<!-- Daterange Picker -->
	<script src="aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="aset/plugins/select2/select2.full.min.js"></script>
	<script src="aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
</head>
<body onload="setInterval('displayServerTime()', 1000);">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Halaman</span>Guru</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<?php
							$nip = $_SESSION['id'];
							// jika proses simpan transaksi sukses, maka tampilkan nomor transaksi dan data pembayaran
							$sql = "select * from guru where id='$nip'";
							$hasil = mysql_query($sql);
							$data  = mysql_fetch_array($hasil);
					?>				
			<div class="profile-usertitle">
				<div class="profile-usertitle-name" name="nama"><?php echo $data['nama'];?></div><div class="profile-usertitle-status" name="nip">(<?php echo $data['id'];?>)</div>
				
			
		
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<?php date_default_timezone_set('Asia/Jakarta'); $date=date('Y/m/d'); $time=date('H:i:s');?> 	
		<label name="date"><?php echo $date;?></label> <label name="time" id="clock"><?php echo $time;?></label>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="parent"><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Data <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="siswa.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Siswa
					</a></li>
					<li><a class="active" href="soal.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Soal
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Nilai
					</a></li>
				</ul>
			</li>
			<li><a href="widgets.html"><em class="fa fa-cog">&nbsp;</em> Pengaturan</a></li>
			
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
		
			<ol class="breadcrumb">
				<li class="active">Data</li><li class="active">Soal</li>
			</ol>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				   <div class="panel-heading">Soal Kelas <?php echo $data['kelas'];?>
				   <div align="right"></div></div>
					<div class="panel-body">
						<div class="col-md-12">

		
		<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
        <br></br>        
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Buttons</div>
					<div class="panel-body">
					<label align="center">Nama Mapel</label><div align="center"><input class="form-control" placeholder="Judul"></div>
					<br><textarea class="form-control" rows="3"></textarea>
					<br><label>Jawaban</label>
									<input class="form-control" placeholder="Jawaban Kelompok">
					</div>
				</div><!-- /.panel-->
		<table id="data" class="table table-bordered table-striped table-scalable">
						<thead>
					<tr align="center">
						<th width="8%">No</th>
						<th width="8%">Kode Soal</th>
				   		<th width="20%">Tema</th>
				   		<th width="15%">Mapel</th>
						<th width="18%">Aksi</th>
					</tr>
				</thead>
                  </table>
		<br></br>		
		
			   </form>
			   
		<br/>
		<!-- edit modal-->
		<div id="edit" class="modal fade" tabindex="-1" role="dialog"></div>
		<!-- end-->
		<div class="modal fade" id="hapus">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
    </div><!-- /.content-wrapper -->
	<?php
//    mengatur error nip menjadi blank
    $error_id = "";
 
//dijalankan jika tombol submit ditekan
if(isset($_POST['submit'])){
    $id = htmlspecialchars(stripslashes(trim(($_POST['id']))));
    if($id == ""){
        $error_id= "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                id tidak boleh kosong
                </div>";
    }else{
        if(strlen($id)<>10){
        $error_id= "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                id Harus 10 digit
                </div>";
        };
        
        if(!is_numeric($id)){
            $error_id= "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                id Harus berupa angka
                </div>";
        };
    };
    
  if($error_id === ""){
        echo "  <div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                Sukses Di Input
                </div>";
    };
    
}
?>
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
				<!-- Modal content-->
					
					<div class="modal-content abt-w3l">
							<div class="modal-header">
								<button type="button" class="close clo1" data-dismiss="modal">&times;</button>
									<h4>Input Data Baru</h4>
									<form action="tambah_soal.php" method="post" role="form" >
						<fieldset>
							<?php
							echo " <div class='form-group'>";
							echo " <label>Pilih Mapel</label>";
							echo "<select name='mapel' class='form-control'>";
							
						$tampil=mysql_query("SELECT * FROM mapel order by mapel ASC");
	
						while($w=mysql_fetch_array($tampil))
							{
						echo "<option value='$w[mapel]' selected>$w[mapel]</option>";        
							}
						echo "</select>";
						echo "</div>";
							?>
							<div class="form-group"><label>Nama Guru</label>
								<input class="form-control" placeholder="NIS" name="nama_guru" type="text" autofocus="" minlength="8" maxlength="8" value=<?php echo $data['nama'];?> readonly required >
							</div>
							<div class="form-group"><label>Kelas</label>
								<input class="form-control" placeholder="Kelas" name="kelas" type="text" autofocus="" minlength="2" maxlength="4" value=<?php echo $data['kelas'];?> readonly required >
							</div>
							<div class="form-group">
							<label>Kode Soal</label>
							<input name="id" class="form-control" /></td>
                             </div>   
							<div class="form-group">
									<label>Judul Soal</label>
									<textarea class="form-control" rows="3" name="judul_soal"></textarea>
								</div>
							
							<button name="submit" class="btn btn-primary">Tambah</button></fieldset>
					</form>
					
			</div>
						</div>
					</div>
				 </div>
		</div>	
		</div>
		</div>
		</div>
	
   <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
	<!-- Daterange Picker -->
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/select2/select2.full.min.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		$('#Tanggal_Lahir').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true
		});		
      });
    </script>
	
	<!-- Javascript Edit--> 
	<script type="text/javascript"> 
		$(document).ready(function () {
		
		// Dosen
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "comp/edit_mapel.php",
					type: "GET",
					data : {id: m,},
					success: function (ajaxData){
					$("#edit").html(ajaxData);
					$("#edit").modal('show',{backdrop: 'true'});
					}
				});
			});
		});
	</script>	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#hapus").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>
	
</body>

</html>

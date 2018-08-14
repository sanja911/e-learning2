<?php
    include "koneksi.php";
	$id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM soal WHERE id='$id'");
	while($r=mysql_fetch_array($modal)){
	?>

 <div class="modal-dialog" role="document">
				<!-- Modal content-->
					<?php
							
							$sql = "select * from guru where id='$r[nip]'";
							$hasil = mysql_query($sql);
							$data  = mysql_fetch_array($hasil);
					?>		
					<div class="modal-content abt-w3l">
							<div class="modal-header">
								<button type="button" class="close clo1" data-dismiss="modal">&times;</button>
									<h4>Input Data Baru</h4>
									<form action="edit_soal.php" method="post" role="form" >
						<fieldset>
							<?php
							echo " <div class='form-group'>";
							echo " <label>Pilih Mapel</label>";
							echo "<select name='mapel' class='form-control'>";
							
						$tampil=mysql_query("SELECT * FROM mapel order by mapel ASC");
	
						while($w=mysql_fetch_array($tampil))
							{
						echo "<option value='$w[mapel]'>$w[mapel]</option>";        
							}
						echo "</select>";
						echo "</div>";
							?>
							<div class="form-group"><label>Nama Guru</label>
								<input class="form-control" placeholder="NIS" name="nama" type="text" autofocus="" minlength="8" maxlength="8" value="<?php echo $data['nama'];?>" readonly required >
							</div>
							<div class="form-group"><label>Kelas</label>
								<input class="form-control" placeholder="Kelas" name="kelas" type="text" autofocus="" minlength="2" maxlength="4" value="<?php echo $data['kelas'];?>" readonly required >
							</div>
							<div class="form-group">
							<label>Kode Soal</label>
							<input name="id" class="form-control" value="<?php echo $r['id'];?>" /></td>
                             </div>   
							<div class="form-group">
									<label>Judul Soal</label>
									<textarea class="form-control" rows="3" name="judul_soal"> <?php echo $r['judul_soal'];?></textarea>
								</div>
							
							<button name="submit" class="btn btn-warning">Ubah</button></fieldset>
					</form>
					  
			</div>
						</div>
					<?php } ?>
					</div>
				 </div>
				 
				 </div>
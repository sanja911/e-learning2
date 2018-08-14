<?php
    include "koneksi.php";
	$id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM siswa WHERE id='$id'");
	while($r=mysql_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content abt-w3l">
							<div class="modal-header">
								<button type="button" class="close clo1" data-dismiss="modal">&times;</button>
									<h4>Ubah Data</h4>
									<form action="comp/edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group"><label>NIS</label>
								<input class="form-control" placeholder="NIS" name="id" type="text" value="<?php echo $r['id'];?>" autofocus="" minlength="8" maxlength="8" required>
							</div>
							<div class="form-group"><label>Nama</label>
								<input class="form-control" placeholder="Nama" name="nama" type="text" value="<?php echo $r['nama'];?>" autofocus="" minlength="8" maxlength="16" onkeyup="this.value = this.value.toUpperCase()" required>
							</div>
							<div class="form-group">
										<label>Kelas</label>
										<select class="form-control" name="kelas" value="<?php echo $r['kelas'];?>" required>
											<option value="10">Kelas 10</option>
											<option value="11">Kelas 11</option>
											<option value="12">Kelas 12</option>
										</select>
									</div>
							<div class="form-group"><label>Jenis Kelamin</label>
								<div class="radio">
											<label>
												<input type="radio" name="jenis_kel" id="optionsRadios1" value="L" checked>Laki-Laki
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="jenis_kel" id="optionsRadios2" value="P">Perempuan
											</label>
										</div>
							</div>
							<button id="submit" name="submit" class="btn btn-primary">Tambah</button></fieldset>
					</form>
					
			</div>
						</div>
					</div>
			
             <?php } ?>


            </div>

           
        </div>
    </div>
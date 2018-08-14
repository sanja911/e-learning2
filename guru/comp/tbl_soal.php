				<thead>
					<tr align="center">
						<th width="8%">No</th>
						<th width="8%">Kode Soal</th>
				   		<th width="20%">Tema</th>
				   		<th width="15%">Mapel</th>
						<th width="18%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$nip = $_SESSION['id'];
						$sql = "select * from guru where id='$nip'";
						$hasil = mysql_query($sql);
						$data  = mysql_fetch_array($hasil);
						$query = mysql_query ("SELECT * FROM soal where kelas='$data[kelas]' order by mapel ASC");
						if($query == false){
							die ("Terjadi Kesalahan : ". mysql_error());
						}
						$i=1;
						while ($ar = mysql_fetch_array ($query)){
							
							echo "
								<tr>
									<td align=center>$i</td>
									<td>$ar[id]</td>
									<td><a href='materi.php?id=$ar[id]'>$ar[judul_soal]</a></td>
									<td>$ar[mapel]</td>														
									<td align=center>
									<a href='#' onClick='confirm_delete(\"./comp/hapus_soal.php?id=$ar[id]\")'><button type='button' class='btn btn-sm btn-danger'>Hapus</button></a>
									<a href='materi.php?id=$ar[id]'><button type='button' class='btn btn-sm btn-info'>Detail</button></a>
									<a href='#' class='open_modal' id='$ar[id]'><button type='button' class='btn btn-sm btn-warning'>Edit</button></a>
									</td>
								</tr>";
						$i++;		
						}
					?>
				</tbody>
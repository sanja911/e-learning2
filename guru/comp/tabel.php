				<thead>
					<tr align="center">
						<th width="8%">No</th>
						<th width="10%">NIS</th>
				   		<th width="15%">Nama</th>
				   		<th width="8%">Jenis Kelamin</th>
						<th width="8%">Kelas</th>
						<th width="18%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$nip = $_SESSION['id'];
						$sql = "select * from guru where id='$nip'";
						$hasil = mysql_query($sql);
						$data  = mysql_fetch_array($hasil);
						$query = mysql_query ("SELECT * FROM siswa where kelas='$data[kelas]' order by nama ASC");
						if($query == false){
							die ("Terjadi Kesalahan : ". mysql_error());
						}
						$i=1;
						while ($ar = mysql_fetch_array ($query)){
							
							echo "
								<tr>
									<td align=center>$i</td>
									<td>$ar[id]</td>
									<td>$ar[nama]</td>
									<td>$ar[jenis_kel]</td>
									<td>$ar[kelas]</td>
									<td align=center>
									<a href='#' onClick='confirm_delete(\"./comp/hapus.php?id=$ar[id]\")'><button type='button' class='btn btn-sm btn-danger'>Hapus</button></a>
									<a href='#' class='open_modal' id='$ar[id]'><button type='button' class='btn btn-sm btn-warning'>Edit</button></a>
									</td>
								</tr>";
						$i++;		
						}
					?>
				</tbody>
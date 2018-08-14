				<tbody>
					<?php
						$nip = $_SESSION['id'];
						$sql = "select * from guru where id='$nip'";
						$hasil = mysql_query($sql);
						$data  = mysql_fetch_array($hasil);
						
						$query = mysql_query ("SELECT * FROM soal where kelas='$data[kelas]' order by mapel ASC LIMIT 5");
						
						if($query == false){
							die ("Terjadi Kesalahan : ". mysql_error());
						}
						$i=1;
						while ($ar = mysql_fetch_array ($query)){
							
							echo "
								<div id=\"content_data\">
							<div style=\"width:200px\" align=\"left\">$i. $ar[soal]</div>
							<div style=\"width:140px\" align=\"left\">
							A. <br><br>
							B. <br><br>
							C. <br><br>	
							D. <br><br>
							</div>
							<div style=\"width:100px\" align=\"center\"> </div>
							<div style=\"width:150px\" align=\"center\">

							<img src=\"images/images_admin/img_admin_edit.png\" align=\"absmiddle\" class=\"img_edit\" />
							<a href=\"admin-home.php?page=listsoalinggris&act=edit&id= \" class=\"action\">Edit</a>

							<img src=\"images/images_admin/img_admin_delete.png\" align=\"absmiddle\" class=\"img_del\" />
							<a href=\"admin-home.php?page=listsoalinggris&act=delete&id=\" class=\"action\" onClick=\"return warning();\">Delete</a>

							</div>
							</div>
							";
						$i++;		
						}
						
					?>
					



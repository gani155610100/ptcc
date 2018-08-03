<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/1.css">
<div class="container">
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Home</a>
    </div>
    <!-- /.nav-collapse -->
  </nav>
</div>
<h1 class="c-text"> Info Imam Sholat </h1>
<div class="container">
	<div class="row">
		<div class="table-responsive">          
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th style='border: 2px ridge #25585c;' bgcolor='#5bc0de'>Sholat</th>
						<th style='border: 2px ridge #25585c;' bgcolor='#5bc0de'>Nama Imam</th>
						<th style='border: 2px ridge #25585c;' bgcolor='#5bc0de'>Alamat</th>
						<th style='border: 2px ridge #25585c;' bgcolor='#5bc0de'>Umur</th>
						<th style='border: 2px ridge #25585c;' bgcolor='#5bc0de'>No.Telp</th>
						<th style='border: 2px ridge #25585c;' bgcolor='#5bc0de'>Email</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php  
							include 'bckp2.php';
							// Perintah untuk menampilkan data
							
							$code = $_GET['id_lokasi'];
							$query="select * from sholat,ustad,lokasi
							where ustad.idUstd and sholat.idShlt=ustad.idShlt and lokasi.id_lokasi=ustad.id_lokasi and ustad.id_lokasi='$code'";

							$hasil=mysql_query ($query);
							while ($data = mysql_fetch_array ($hasil)){
							 echo "    
									<tr>
									<td style='border: 2px ridge #25585c;'>".$data['solat']."</td>
									<td style='border: 2px ridge #25585c;'>".$data['nama']."</td>
									<td style='border: 2px ridge #25585c;'>".$data['alamat']."</td>
									<td style='border: 2px ridge #25585c;'>".$data['umur']."</td>
									<td style='border: 2px ridge #25585c;'>".$data['noTelp']."</td>
									<td style='border: 2px ridge #25585c;'>".$data['email']."</td>
									</tr> 
									";
							}
						?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<p style="text-align: center;">
	<iframe src="http://www.jadwalsholat.org/adzan/ajax.row.php" height="220" width="750" frameborder="0"></iframe>
	<a href="http://www.jadwalsholat.org" target="_blank" rel="nofollow" >
</p>

<?php 
	include'source_code_php/koneksi.php';
	 	$koneksi = new Koneksi();
 	
 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Link Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/style.css">
</head>
<body>

	<!-- Navbar -->
 	<div class="container-fluid mb-5">
	 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		 	<div class="container">
		 		<a class="navbar-brand" href="index.php">Data Programmers</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link" href="data_programmers.php">Data Programmers</span></a>
				      </li>
				     <!--  <li class="nav-item">
				        <a class="nav-link" href="#">Features</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Pricing</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				      </li> -->
				    </ul>
				 </div>
		 	</div>
		</nav>
 	</div>



<div class="container-fluid">	
	<div class="row justify-content-center">	
		<div class="col-lg-8">	
			<table class="table table-bordered">	
				<thead>	
					<tr>	
						<th>Name_programmer</th>
						<th>Jumlah Sekil</th>
					</tr>
				</thead>
				<tbody>	
					<?php 	foreach ($koneksi->tampil_data() as $programmer): ?>
						<tr>	
							<td><?= $programmer['nama'] ?></td>
							<td>
									<?php
										$konek = mysqli_connect('localhost','root','','data_programmers');
										 $tampil = mysqli_query($konek,"SELECT name FROM skills where user_id = '$programmer[id]'"); 
										 $data = mysqli_num_rows($tampil);
									?>
										<?= $data ?>
	
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>	
</div>	
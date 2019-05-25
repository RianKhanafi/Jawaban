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
 	<div class="container-fluid">
	 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		 	<div class="container">
		 		<a class="navbar-brand" href="#">Data Programmers</a>
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

	<!-- Konten -->
<form method="POST" action="source_code_php/proses.php?aksi=tambah">
	<div class="container-fluid">
		<div class="row justify-content-center row-konten">
			<div class="col-lg-8">
				<div class="row row-input">
					<div class="col-lg-10">
						<div class="input-user">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Tambah programmer">
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<button type="submit" class="btn float-right">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>



		<!-- Tampil User -->
	<div class="container-fluid">
		<?php foreach ($koneksi->tampil() as $programmers): ?>
			<div class="row justify-content-center row-tampil">
				<div class="col-lg-8">
					<div class="row row-data">
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-12 col-nama">
									<h2><?= $programmers['nama']?></h2>
								</div>
								<div class="col-lg-12 col-sekil">
									<?php
										$konek = mysqli_connect('localhost','root','','data_programmers');
										 $tampil = mysqli_query($konek,"SELECT * FROM skills WHERE user_id = '$programmers[id]'"); 
										 while ($data = mysqli_fetch_array($tampil)):
									?>
										<p class="float-left pl-2"><?= $data['name'] ?>,</p>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<form method="POST" action="source_code_php/proses.php?aksi=tambah_sekill&user_id=<?= $programmers['id']?>" >
								<div class="row">
									<div class="col-lg-10">
										<div class="input-sekil">
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Tambah sekill">
											</div>
										</div>
									</div>
									<div class="col-lg-2">
										<button type="submit" class="btn float-right">Simpan</button>
									</div>
								</div>
							</form>
						</div>
					</div>	
				</div>
			</div>		
		<?php endforeach; ?>
	</div>
</body>
</html>






<?php 
	Class Koneksi{
		public $host = 'localhost';
		public $user = 'root';
		public $password ='';
		public $db = 'data_programmers';
		protected $koneksi;

		public function koneksi()
		{
			$this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->db);
			if($this->koneksi){
				// die('Koneksi Berhasil');
			}else{
				// die('Koneksi Gagal');
			}
		}

		// Tambah Data programmers
		public function simpan($name)
	 	{
	 		$simpan = mysqli_query($this->koneksi,"INSERT into users VALUES('','$name')");
	 	}

	 	public function tampil()
	 	{
	 		$tampil = mysqli_query($this->koneksi, "SELECT * FROM users order by id desc");
	 		while($data = mysqli_fetch_array($tampil)){
	 			$hasil[] = $data;
	 		}
	 		return $hasil;
	 	}

	 	public function simpan_sekill($name, $id)
	 	{
	 		mysqli_query($this->koneksi, "INSERT INTO skills values('','$name','$id')");
	 	}


	 	public function tampil_data()
	 	{
	 		$tampil = mysqli_query($this->koneksi, "SELECT * FROM users order by id desc");
	 		while($data = mysqli_fetch_array($tampil)){
	 			$hasil[] = $data;
	 		}
	 		return $hasil;
	 	}

	}

 ?>
<?php 
	Class Cetak{
		public function cetak1()
		{
			$baris=4;
			$kolom=4;
				 $h = [];
				 	 $h[0][0] = 'X';
				 	 $h[0][1] = 'X';
				 	 $h[0][2] = 'X';
				 	 $h[0][3] = 'X';
				 	 $h[0][4] = 'X';

				 	 $h[1][0] = '=';
				 	 $h[1][1] = '=';
				 	 $h[1][2] = 'X';
				 	 $h[1][3] = '=';
				 	 $h[1][4] = '=';

				 	 $h[2][0] = '=';
				 	 $h[2][1] = '=';
				 	 $h[2][2] = 'X';
				 	 $h[2][3] = '=';
				 	 $h[2][4] = '=';

				 	 $h[3][0] = '=';
				 	 $h[3][1] = '=';
				 	 $h[3][2] = 'X';
				 	 $h[3][3] = '=';
				 	 $h[3][4] = '=';

				 	 $h[4][0] = 'X';
				 	 $h[4][1] = 'X';
				 	 $h[4][2] = 'X';
				 	 $h[4][3] = 'X';
				 	 $h[4][4] = 'X';

	
					for ($i=0; $i <= $baris ; $i++) { 
						echo "<br>";
				 	 	for ($j=0; $j <= $kolom ; $j++) { 
				 	 		echo $h[$i][$j].'&nbsp;';
				 	 	}
				 	 }
			 
		}

		public function cetak2()
		{
			$baris=6;
			$kolom=6;
	 $h = [];
	 	 $h[0][0] = 'X';
	 	 $h[0][1] = 'X';
	 	 $h[0][2] = 'X';
	 	 $h[0][3] = 'X';
	 	 $h[0][4] = 'X';
	 	 $h[0][5] = 'X';
	 	 $h[0][6] = 'X';

	 	 $h[1][0] = '=';
	 	 $h[1][1] = '=';
	 	 $h[1][2] = '=';
	 	 $h[1][3] = 'X';
	 	 $h[1][4] = '=';
	 	 $h[1][5] = '=';
	 	 $h[1][6] = '=';

	 	 $h[2][0] = '=';
	 	 $h[2][1] = '=';
	 	 $h[2][2] = '=';
	 	 $h[2][3] = 'X';
	 	 $h[2][4] = '=';
	 	 $h[2][5] = '=';
	 	 $h[2][6] = '=';

	 	 $h[3][0] = '=';
	 	 $h[3][1] = '=';
	 	 $h[3][2] = '=';
	 	 $h[3][3] = 'X';
	 	 $h[3][4] = '=';
	 	 $h[3][5] = '=';
	 	 $h[3][6] = '=';

	 	 $h[4][0] = '=';
	 	 $h[4][1] = '=';
	 	 $h[4][2] = '=';
	 	 $h[4][3] = 'X';
	 	 $h[4][4] = '=';
	 	 $h[4][5] = '=';
	 	 $h[4][6] = '=';

	 	 $h[5][0] = '=';
	 	 $h[5][1] = '=';
	 	 $h[5][2] = '=';
	 	 $h[5][3] = 'X';
	 	 $h[5][4] = '=';
	 	 $h[5][5] = '=';
	 	 $h[5][6] = '=';

	 	
	 	 $h[6][0] = 'X';
	 	 $h[6][1] = 'X';
	 	 $h[6][2] = 'X';
	 	 $h[6][3] = 'X';
	 	 $h[6][4] = 'X';
	 	 $h[6][5] = 'X';
	 	 $h[6][6] = 'X';




		for ($i=0; $i <= $baris ; $i++) { 
			echo "<br>";
	 	 	for ($j=0; $j <= $kolom; $j++) { 
	 	 		echo $h[$i][$j].'&nbsp;';
	 	 	}
	 	 }
		}



	}

	$cetak = new Cetak();;
	$cetak->cetak1();
	$cetak->cetak2();

 ?>
<br>

<?php
	$kata= trim('programmer');
	$modif = strtolower($kata);
	$text = str_replace("","", $modif);
	$jml = strlen($text);

	$a = substr_count($text, "a");
	$i = substr_count($text, "i");
	$u = substr_count($text, "u");
	$e = substr_count($text, "e");
	$o = substr_count($text, "o");

	$hidup = $a+$i+$u+$e+$o;
	echo "jumlah huruf hidup : $hidup";

?>

<br>
<?php  

	$kota = [];
	$kota[0][0] = 'p';
	$kota[0][1] = 'u';
	$kota[0][2] = 'r';
	$kota[0][3] = 'w';
	$kota[0][4] = 'a';
	$kota[0][5] = 'k';
	$kota[0][6] = 'a';
	$kota[0][7] = 'r';
	$kota[0][8] = 't';
	$kota[0][9] = 'a';

	echo "Dari : ";
	for ($i=0; $i <= 9 ; $i++) { 
		echo $kota[0][$i];
	}
	echo"<br>";
	echo"Menjadi : ";
	for ($i=0; $i <= 9 ; $i++) { 
		if($kota[0][4] = 'a' || $kota[0][6] = 'a' || $kota[0][9] = 'a')
		{
			$kota[0][4] ='o'; 
			$kota[0][6] ='e';
			$kota[0][9] ='o';
		}
		echo $kota[0][$i];
	}

?>
<br>
	 <?php 
	 	class tanggal{

	 		public function betweendays($from, $to){
	 			    $dari = $from;
					$f = date_create($from);
					$t = date_create($to);
					$selisih_day = date_diff($f, $t);

					$selisih =  $selisih_day->d;
					
					$no =0;
					for ($i= 0; $i <= $selisih ; $i++) { 
						echo date('d-m-Y', strtotime('+'.$no.' days', strtotime($dari))) .", &nbsp;";
						$no++;
					}
			 	}
			 }
	 		$tgl = new tanggal();
	 		$tgl->betweendays('12-02-2018', '15-02-2018');
	 	

	  ?>




<br>
<?php 


	Class Biodata{

		public function bio()
		{
			$data = file_get_contents('biodata.json');
			$biodata = json_decode($data, true);
			echo"<table>";
			echo"<tr>";
					echo"<td>Name</td><td>:</td><td> ".$biodata[0]['name']."</td>";
			echo"</tr>";
			echo"<tr>";
					echo"<td>Address</td><td>:</td><td> ".$biodata[0]['address']."</td>";
			echo"</tr>";
			echo"<tr>";
					echo"<td>Hobbies</td><td>:</td><td> "
					.$biodata[0]['hobbies'][0]. "<br>"
					.$biodata[0]['hobbies'][1].
					"</td>";
			echo"</tr>";
			echo"<tr>";
			if($biodata[0]['is_married'] == false){
				$biodata[0]['is_married'] ="Belum Nikah";
			}else{
				$biodata[0]['is_married'] ="Sudah Nikah";	
			}
					echo"<td>Is_Married</td><td>:</td><td> ".$biodata[0]['is_married']."</td>";
			echo"</tr>";
			echo"<tr>";
					echo"<td>School</td><td>:</td><td> "
					.$biodata[0]['school']['school1']. "<br>"
					.$biodata[0]['school']['school2']. "<br>"
					.$biodata[0]['school']['school3']. "<br>"
					.
					"</td>";
			echo"</tr>";
			echo"<tr>";
					echo"<td>Skills</td><td>:</td><td> "
					.$biodata[0]['skills']['website'][0]. "<br>"
					.$biodata[0]['skills']['website'][1]. "<br>"
					.$biodata[0]['skills']['website'][2]. "<br>"
					.
					"</td>";
			echo"</tr>";


			echo"<table>";
		}
	}

	$biodata = new Biodata();
	$biodata->bio();
 ?>
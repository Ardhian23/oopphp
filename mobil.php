<?php 	

class mobil {
	public $nama;
	public $merk;
	public $warna;
	public $kecepatanMaksimal;
	public $jumlahPenumpang;

		public function tambahKecepatan(){
			return $this->kecepatanMaksimal += 10;
		}

		public function kurangiKecepatan(){

		}

		public function gantiTransmisi(){
			
		}
	}

	$avanza = new mobil;
	$avanza->nama = 'Avanza';
	$avanza->merk = 'Toyota';
	$avanza->warna = 'silver';
	$avanza->tambahKecepatan();

	var_dump($avanza);

 ?>
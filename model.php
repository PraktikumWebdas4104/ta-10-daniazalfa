<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			//buatlah koneksi seperti modul 9 kemarin
			$this->conn = mysqli_connect("localhost", "root","","ta10dania");
		}

		function execute($query){
			return $this->conn->query($query);
		}

		function selectAll(){
			$query = "SELECT * from mahasiswa";//query select*from
			return $this->execute($query);
		}

		function selectMhs($nim){
			$query = "SELECT * from mahasiswa where nim='$nim'";//query select mahasiswa berdasarkan nim
			return $this->execute($query);
		}

		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi,$genre,$wisata){
			$query = "UPDATE mahasiswa SET  nama='$nama', angkatan='$angkatan', fakultas='$fakultas', prodi='$prodi' ,prodi='$prodi',genre='$genre',wisata='$wisata' where nim='$nim'";//query update nim, nama, angkatan, fakultas, prodi
			return $this->execute($query);
		}

		function deleteMhs($nim){
			$query = "DELETE from mahasiswa where nim='$nim'";//query delete berdasarkan nim
			return $this->execute($query);
		}

		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi,$genre,$wisata){
			$query = "INSERT into mahasiswa values ('$nim', '$nama', '$angkatan', '$fakultas', '$prodi','$genre','$wisata')";//query insert nim,nama, angkatan, fakultas, prodi
			return $this->execute($query);
		}

		function fetch($var){
			return mysqli_fetch_array($var);
		}

		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>

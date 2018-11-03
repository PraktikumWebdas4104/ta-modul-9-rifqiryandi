<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "jurnal9"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);//buatlah koneksi secara OOP
		
	}

	function tampil_data(){
		//lengkapilah method tampil data
		$data = mysqli_query($this->conn,"SELECT * FROM data");//query select user

		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$genre,$wisata){
		$ck = implode(", ",$genre);
		$w = implode(", ",$wisata);
		$que = mysqli_query($this->conn,"INSERT INTO data(nama, alamat, usia, id, genre, wisata) VALUES ('$nama','$alamat','$usia','','$ck','$w')");//buatlah method input
		//query inset into user
	}

	function hapus($id){
		$que = mysqli_query($this->conn,"DELETE FROM data WHERE id='$id'");//buatlah method input
		//buatlah method hapus
		//query delete from id where id ='$id'
	}

	function edit($id){
		//lengkapilah method edit
		$data = mysqli_query($this->conn,"SELECT * FROM data WHERE id='$id'");//query select from user where id ='$id'
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$genre,$wisata){
		$ck = implode(", ",$genre);
		$w = implode(", ",$wisata);
		$que = mysqli_query($this->conn,"UPDATE data SET nama='$nama',alamat='$alamat',usia='$usia',genre='$ck',wisata='$w' WHERE id='$id'");//buatlah method update
		//query update user set blablabla where id='$id'
	}

} 

?>
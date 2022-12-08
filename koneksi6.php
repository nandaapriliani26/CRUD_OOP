<?php 
class dbh{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "dbmaribaca01";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from cerita02");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function tambah_data($id,$judul,$author)
	{
		mysqli_query($this->koneksi,"insert into cerita02 values ('$id','$judul','$author')");
	}

	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from cerita02 where id='$id'");
		return $query->fetch_array();
	}
	function update_data($judul,$author,$id)
	{
		$query = mysqli_query($this->koneksi,"update cerita02 set judul='$judul',author='$author' where id='$id'");
	}
	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from cerita02 where id='$id'");
	}
}
<?php 

/**
 * 
 */
class Koneksi {

	private $conn;
	function __construct(){
		$servername = "localhost"; 
		$username = "root"; 
		$password = ""; 
		$db = "tubes";
		$this->conn = mysqli_connect($servername, $username, $password, $db);
	}

	public function select_member(){
		$sql = "SELECT * FROM member";
		return $this->conn->query($sql);
	}
	public function pilih_member($id){
		$sql = "SELECT * FROM member WHERE id=$id";
		return $this->conn->query($sql);
	}
	public function hapus_member($id){
		$sql = "DELETE FROM member WHERE id=$id";
		$result = $this->conn->query($sql);
		if ($result == true) {
			echo "<script> alert('Data member berhasil dihapus');</script>";
		} else {
			echo "<script> alert('Data member gagal dihapus');</script>";
		}
		echo "<script> location='Masukk.php'; </script>";
	}
	public function insert_member(){
		$sql = "INSERT INTO member VALUES('', '$_POST[nama]', '$_POST[email]', '$_POST[no_hp]', '$_POST[password]')";
		$result = $this->conn->query($sql);
		if ($result == true) {
			echo "<script> alert('Data member berhasil ditambah');</script>";
		} else {
			echo "<script> alert('Data member gagal ditambah');</script>";
		}
		echo "<script> location='Masukk.php'; </script>";
	}

}
$koneksi = new Koneksi();

if (isset($_GET['hapus_member'])) {
	$koneksi->hapus_member($_GET['hapus_member']);
}
if (isset($_GET['insert_member'])) {
	$koneksi->insert_member();
}

 ?>
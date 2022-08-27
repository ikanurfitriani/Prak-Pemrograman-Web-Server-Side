<?php
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "akademik";
    var $koneksi = "";
    function __construct() {
        $this->koneksi = mysqli_connect($this->host,$this->username,
						$this->password,$this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }
    function tampilkan_data() {
        $data = mysqli_query($this->koneksi,"select * from mahasiswa");
        while($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tambah_data($nim,$nama,$email,$hp,$prodi) {
        mysqli_query($this->koneksi,"insert into mahasiswa 
					values ('$nim','$nama','$email','$hp','$prodi')");
    }
    function get_by_id($nim) {
        $query = mysqli_query($this->koneksi, "select * from mahasiswa where nim='$nim'");
        return $query->fetch_array();
    }
    function update_data($nama,$email,$hp,$prodi,$nim){
        $query = mysqli_query($this->koneksi,"update mahasiswa 
		set nama='$nama',email='$email',hp='$hp',prodi='$prodi' where nim='$nim'");
    }
	function delete_data($nim) {
        $query = mysqli_query($this->koneksi, "delete from mahasiswa where nim='$nim'");
    }
}
?>
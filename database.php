<?php
class Database{
    //variables
    var $host = "localhost:3306";//default port
    var $uname = "root";
    var $pass = "";
    var $db = "oop";
    var $koneksi;
    //constructor will executed when you call parent class
    function __construct(){
        $this->koneksi = new mysqli(
            $this->host,
            $this->uname,
            $this->pass,
            $this->db
        );
        if (mysqli_connect_errno()) {
            echo "koneksi gagal :".mysqli_connect_error();
        }else {
            return $this->koneksi;
        }
    }
    //fetch all data in array, display to view
    function render(){
        $query = "SELECT * FROM user";
        $data = $this->koneksi->query($query);
        if ($data->num_rows>0) {
            $result = array();
            while($d = $data->fetch_assoc()){
                $result[] = $d;
            }
            return $result;
        }else {
            echo "tidak ada data";
        }
    }
    //this function is for save the data to database with recive the parameters
    function save($nama,$alamat,$usia){
        $query = "INSERT INTO user(nama,alamat,usia) VALUES('$nama','$alamat','$usia')";
                $sql = $this->koneksi->query($query);
            if($sql == true){
                header("Location:view.php?msg1=insert");
            }else {
                echo "gagal input data";
            }
    }
    //this function will render to view with special id in array
    function getById($id){
        $query = "SELECT * FROM user WHERE id='$id'";
        $sql = $this->koneksi->query($query);
        if ($sql->num_rows>0) {
            while($d = $sql->fetch_assoc()){
                $result[] = $d;
            }
            return $result;
        }else {
            echo "Data tidak ada";
        }
    }
    function update($id,$nama,$alamat,$usia){
        $query = "UPDATE user SET nama='$nama',alamat='$alamat',usia='$usia' WHERE id='$id'";
        $sql = $this->koneksi->query($query);
        if ($sql == true) {
            header("Location:view.php?msg2=update");
        }else {
            echo "Gagal memperbarui data";
        }
    }
    function destroy($id){
        $query = "DELETE FROM user WHERE id='$id'";
        $sql = $this->koneksi->query($query);
        if ($sql == true) {
            header("Location:view.php?msg3=delete");
        }else {
            echo "gagal menghapus data";
        }
    }
}
?>
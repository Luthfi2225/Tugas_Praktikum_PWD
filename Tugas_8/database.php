<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "kosmetik_db";
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if (!$this->conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }
}
?>
<?php
class Koneksi {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "kosmetik_db"; // ganti dengan nama database kamu
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}
?>
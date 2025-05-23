<?php
require_once __DIR__ . '/../config/koneksi.php';

class Merk extends Koneksi {
    public function getAll() {
        $sql = "SELECT * FROM merk";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM merk WHERE id_merk = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function tambah($nama) {
        $stmt = $this->conn->prepare("INSERT INTO merk (nama_merk) VALUES (?)");
        $stmt->bind_param("s", $nama);
        return $stmt->execute();
    }

    public function ubah($id, $nama) {
        $stmt = $this->conn->prepare("UPDATE merk SET nama_merk = ? WHERE id_merk = ?");
        $stmt->bind_param("si", $nama, $id);
        return $stmt->execute();
    }

    public function hapus($id) {
        $stmt = $this->conn->prepare("DELETE FROM merk WHERE id_merk = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
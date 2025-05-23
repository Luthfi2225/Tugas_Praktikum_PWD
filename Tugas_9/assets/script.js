function confirmHapus(id) {
    if (confirm("Yakin ingin menghapus data ini?")) {
        window.location.href = "hapus.php?id=" + id;
    }
}
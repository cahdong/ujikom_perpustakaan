<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman where id_peminjam=$id");
?>
<script>
    alert("Hapus peminjaman Berhasil");
    location.href = "index.php?page=peminjaman";
</script>
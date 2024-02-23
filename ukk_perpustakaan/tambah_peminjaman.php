<h1 class="mt-4">Pinjam Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                        if (isset($_POST['submit'])) {
                            // Ambil nilai dari form
                            $id_user = $_SESSION['user']['id_user'];
                            $id_buku = $_POST['id_buku'];
                            $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                            $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                            $status_peminjaman = $_POST['status_peminjaman'];
                            
                            // Query untuk memasukkan data peminjaman ke database
                            $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_user, id_buku, tanggal_peminjaman, tanggal_pengembalian, status_peminjaman) values ('$id_user','$id_buku','$tanggal_peminjaman','$tanggal_pengembalian', '$status_peminjaman')");
                                
                            if ($query) {
                                echo '<script>alert("Peminjaman Berhasil.");</script>';
                            } else {
                                echo '<script>alert("Gagal Melakukan Peminjaman: ' . mysqli_error($koneksi) . '");</script>';
                            }
                            
                        }
                        ?>

                    <div class="row mb-3">
                        <div class="col-md-2">Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" class="form-select">
                                <?php
                                // Ambil data buku dari database
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                ?> 
                                    <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                                <?php
                                }
                                ?>
                            </select>    
                        </div> 
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">Tanggal Peminjaman</div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="tanggal_peminjaman">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-2">Tanggal Pengembalian</div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="tanggal_pengembalian">
                            </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">Status Peminjaman</div>
                        <div class="col-md-8">
                            <select name="status_peminjaman" class="form-select">
                                <option value="dipinjam">Dipinjam</option>
                                <option value="dikembalikan">Dikembalikan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
                            <!-- Tombol Reset untuk membersihkan nilai input -->
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <!-- Tombol Kembali untuk kembali ke halaman peminjaman -->
                            <a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row mb-3">
        <div class="col-md-12 ">
            <a href="?page=tambah_kategori" class="btn btn-primary">+ Tambah Kategori</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                <th>No</th>
                <th>Kategori</th>
                <th>Aksi</th>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM kategori");
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td>
                        <a href="?page=ubah_kategori&&id=<?php echo $data['id_kategori'] ?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Yakin Mau Di Hapus?');" href="?page=hapus_kategori&&id=<?php echo $data['id_kategori'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php

            }
            ?>
            </table>
        </div>
    </div>
        </div>
    </div>
<h2 align="center" >Laporan Peminjaman</h2>
<table border="1" cellspacing="0" cellpading="5">
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status Peminjaman</th>
                      
                </tr>
                <?php
                include "koneksi.php";
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.id_user= peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku");
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['tanggal_peminjaman']; ?></td>
                    <td><?php echo $data['tanggal_pengembalian']; ?></td>
                    <td><?php echo $data['status_peminjaman']; ?></td>
                    <td>
                        <a href="?page=ubah_ulasan&&id=<?php echo $data['id_ulasan'] ?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Yakin Mau Di Hapus? ');" href="?page=hapus_ulasan&&id=<?php echo $data['id_ulasan'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php

            }
            ?>
            </table>
            <script>
                window.print();
                setTimeout(function() {
                    window.close();
                }, 100 );
            </script>
<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <?php
                                            if (isset($_POST['register'])) {
                                                $nama = $_POST['nama'];
                                                $username = $_POST['username'];
                                                $password = md5($_POST['password']);
                                                $email = $_POST['email'];
                                                $alamat = $_POST['alamat'];
                                                $no_telepon = $_POST['no_telepon'];
                                                $level = $_POST['level'];

                                                $insert = mysqli_query($koneksi, "INSERT INTO user(nama,username,password,email,alamat,no_telepon,level) VALUES ('$nama', '$username', '$password', '$email', '$alamat', '$no_telepon', '$level')");

                                                if ($insert) {
                                                    echo '<script>alert("Selamat, register berhasil. Silahkan Login"); location.href="login.php"</script>';
                                                } else {
                                                    echo '<script>alert("Register Gagal, Silahkan Coba Lagi");</script>';
                                                }
                                            }

                                            ?>
                                            <div class="form-group">
                                                <label class="samll mb-1">Nama Lengkap</label>
                                                <input class="form-control" id="inputnama" type="text" required name="nama" placeholder="Masukkan Nama " />
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="samll mb-1">Email</label>
                                                <input class="form-control" id="inputEmail" type="text" required name="email" placeholder="Masukkan Email" />
                                               
                                            </div>
                                            <div class="form-group">
                                                <label class="samll mb-1">No. Telepon</label>
                                                <input class="form-control" id="inputTelepon" type="text" required name="no_telepon" placeholder="Masukkan No.telp   " />
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="samll mb-1">Alamat</label>
                                                <textarea name="alamat" rows="5" required class="form-control "></textarea>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="samll mb-1">Username</label>
                                                <input class="form-control" id="inputUsername" type="text" required name="username" placeholder="Masukkan Username" />
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Password</label>
                                                <input class="form-control" id="inputPassword" type="password" required name="password" placeholder="Password" />
                                                
                                            </div>
                                            <div class="form-group">
                                                <label>Level</label>
                                                <select name="level" required class="form-control">
                                                    <option value="peminjam">Peminjam</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                                
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="register" type="submit" value="register">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

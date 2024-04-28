<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-secondary ">
    <div class="container">
      <a class="navbar-brand"  href="index.php">Website Galeri Foto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto">

        </div>

        <a href="register.php" class="btn-daftar">Daftar</a>
       
        <a href="login.php" class="btn-masuk">Masuk</a>

      </div>
    </div>
  </nav>



<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">

                    <div class="text-center">
                        <h5>Daftar Akun</h5>
                    </div>

                    <form action="config/aksi_register.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <br>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <input type="checkbox" onclick="showPassword()"> Show Password
                        <br>
                        <br>
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" required>
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="form-control" required>
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                        <div class="d-grid mt-4">
                            <button class="btn btn-primary" type="submit" name="kirim">Sign in</button>
                        </div>
                    </form>

                    <hr>
                    <p>Sudah punya akun? <a href="login.php">Login disini!</a></p>

                </div>
                
            </div>
            <br>
        </div>
    </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>&copy; UKK PPLG 2024 | Nurdin Mahfud</p>
    </footer>
</body>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
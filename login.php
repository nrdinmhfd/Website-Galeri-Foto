<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
   




<div class="container  py-5">
    <div class="row justify-content-center" >
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-transparant shadow-sm">

                    <div class="text-center">
                        <h4><b>Login </b></h4>
                    </div>

                    <form action="config/aksi_login.php" method="POST">
                        <label class="form-label" style="margin-top: 4px;" >Username</label>
                        
                        <input type="text" name="username" class="form-control "  placeholder="Masukkan username"  required>
                       
                        
                        <label class="form-label mt-2">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <input type="checkbox" onclick="showPassword()"> Show Password
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" style="margin-top: 7px;" type="submit" name="kirim">Masuk</button>
                        </div>
                    </form>

                    <hr>
                    <p>Belum punya akun? <a href="register.php">Daftar disini!</a></p>

                </div>
            </div>
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
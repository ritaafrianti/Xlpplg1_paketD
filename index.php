_<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Siswa - Aplikasi Pembayaran SPP.</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
           <h4 class="text-center">LOGIN SISWA</h4>
           <div class="card">
              <div class="card-header">
                  <img src="logo-spp.png" width="100%">
              </div>
              </div class="card-body">
                   <form action="proses-login-siswa.php" method="post">
                       <div class="form-group mb-2">
                       <label>NISN</label>
                    <input type="number" name="nisn" class="form-control" placeholder="masukan NISN anda.." required>
                </div>
                <div class="form-group mb-2">
                    <label>NISN</label>
                    <input type="number" name="nisn" class="form-control" placeholder="masukan NISN anda.." required>
                 </div>
                 <div class="form-group mb-2">
                     <button type="submit" class="btn btn-primary"> LOGIN </button>
                 </div>
                 <a href="index2.php"> Login Sebagai Administrator / petugas </a>
              </form>
            </div>
          </div>
       </div>
    </div>

<script src="js/bootstrap.bundle.min.js"></script> 
<body>
</html> 
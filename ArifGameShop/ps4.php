<?php
  include('koneksi.php');
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arif Game Shop - PS4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <style>
    body{
      background-image: url(assets/imgs/bgps.jpg);
    }
    hr{
      color:white;
    }
  </style>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark py-3 fixed-top">
        <div class="container-fluid">
          <img src="assets/imgs/Logo1.png" style="width: 60px; margin-right: 15px;">
          <a class="navbar-brand text-light" href="halaman_user.php">ARIF GAME SHOP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link" href="ps4.php">PS4</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="ps5.php">PS5</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="xboxone.php">Xbox One</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="xboxx.php">Xbox X/S</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="switch.php">Switch</a>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <a class="log" href="logout.php"><button>LOGOUT</button></a>
          </div>
        </div>
      </nav>

      <br><br><br><br><br>
      <center><h1>PS4</h1><center>
      <hr>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Dekripsi</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM ps4 ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_game']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 20); ?>...</td>
          <td><?php echo substr($row['kategori'], 0, 20); ?></td>
          <td>Rp <?php echo $row['harga']; ?>.000</td>
          <td style="text-align: center;"><img src="assets/imgs/<?php echo $row['gambar_game']; ?>" style="width: 120px;"></td>
          <td><a href="#?id=<?php echo $row['id']; ?>">Beli</a></td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>

    <style>
      footer{
        text-align: left;
      }
    </style>
          <footer class="mt-5 py-5">
            <div class="row">
              <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <img src="assets/imgs/Logo1.png" style="width: 100px;">
                <p class="pt-3">We provide the best products for the most affordable prices</p>
              </div>
                <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                  <h5 class="pb-2">Featured</h5>
                  <ul class="text-uppercase">
                    <li><a href="#">Playstation</a></li>
                    <li><a href="#">Xbox</a></li>
                    <li><a href="#">Nintendo</a></li>
                  </ul>
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                  <h5 class="pb-2">Contact Us</h5>
                  <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>001 Bengkong st., Batam, Indonesia</p>
                  </div>
                  <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>083186369947</p>
                  </div>
                  <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>dababy1227@gmail.com</p>
                  </div>
                </div>
              <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Resources</h5>
                <div class="row">
                  <img src="assets/imgs/footer1.jpg" class="img-fluid w-25 h-100 m-2">
                  <img src="assets/imgs/footer1.jpg" class="img-fluid w-25 h-100 m-2">
                  <img src="assets/imgs/footer1.jpg" class="img-fluid w-25 h-100 m-2">
                  <img src="assets/imgs/footer1.jpg" class="img-fluid w-25 h-100 m-2">
                  <img src="assets/imgs/footer1.jpg" class="img-fluid w-25 h-100 m-2">
                </div>
              </div>
            </div>
            <div class="copyright mt-5">
              <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                  <img src="assets/imgs/payment.jpg" style="width: 80px; top: 9px; position: relative;">
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                  <p>eCommerce @ 2022 All Rights Reserved</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                  <a href="#"><i class="fab fa-facebook fa-lg" style="position:relative; top:9px;"></i></a>
                  <a href="#"><i class="fab fa-instagram fa-lg" style="position:relative; top:9px;"></i></a>
                  <a href="#"><i class="fab fa-whatsapp fa-lg" style="position:relative; top:8px;"></i></a>
                </div>
              </div>
            </div>
          </footer>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
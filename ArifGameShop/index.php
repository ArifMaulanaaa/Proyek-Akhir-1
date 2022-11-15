<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arif Game Shop - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark py-3 fixed-top">
        <div class="container-fluid">
          <img src="assets/imgs/Logo1.png" style="width: 60px; margin-right: 15px;">
          <a class="navbar-brand text-light" href="index.php">ARIF GAME SHOP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link" href="index_ps4.php">PS4</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="index_ps5.php">PS5</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="index_xb1.php">Xbox One</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="index_xbx.php">Xbox X/S</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="index_nt.php">Switch</a>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <a class="login" href="login.php"><button>LOGIN</button></a>
          </div>
        </div>
      </nav>

      <br><br><br><br>
      <!--Carousel--->
      <div class="owl-carousel owl-theme"  style='width:1310px; height:500px;'>
      <div class="item" >
        <h4><img src="assets/imgs/dr.png" class="d-100" width="1310" height="340" ></h4>
      </div>
      <div class="item">
        <h4><img src="assets/imgs/ff23.png " class="d-100" width="1310" height="340" ></h4>
      </div>
      <div class="item" >
        <h4><img src="assets/imgs/ff32u.png" class="d-100" width="1310" height="340" ></h4>
      </div>
      <div class="item">
        <h4><img src="assets/imgs/mw2.png" class="d-100" width="1310" height="340" ></h4>
      </div>
      <div class="item" >
        <h4><img src="assets/imgs/ps5.png" class="d-100" width="1310" height="340" ></h4>
      </div>
      <div class="item">
        <h4><img src="assets/imgs/tlof.png" class="d-100" width="1310" height="340" ></h4>
      </div>
    </div>

    <div class="owl-dots">
      <button role="button" class="owl-dot active" style='right:3px;'><span></span></button>&nbsp
      <button role="button" class="owl-dot" style='right:2px;'><span></span></button>&nbsp
      <button role="button" class="owl-dot"><span></span></button>&nbsp
      <button role="button" class="owl-dot"><span></span></button>&nbsp
      <button role="button" class="owl-dot" style='left:1px;'><span></span></button>&nbsp
      <button role="button" class="owl-dot" style='left:3.5px;'><span></span></button>
    </div>
        
        <!--Brand-->
      <section id="brand" class="container">
        <div class="row">
          <img class="img-fluid col-lg-4 col-md-6 col-sm-12"
      src="assets/imgs/ps.jpg" alt="">
          <img class="img-fluid col-lg-4 col-md-6 col-sm-12"
      src="assets/imgs/xb.jpg" alt="">
          <img class="img-fluid col-lg-4 col-md-6 col-sm-12"
      src="assets/imgs/nt.jpg" alt="">
        </div>
      </section>

      <!--Featured-->
      <section id="freatured">
        <div class="container text-center mt-5 py-5">
          <h3>New Arrival</h3>
          <hr class="mx-auto">
          <p>Here you can check out our New Product</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="assets/imgs/ff23.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">FIFA 23</h5>
            <h4 class="p-price">Rp 849.000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="assets/imgs/hwu.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Hot Wheels: Unleashed</h5>
            <h4 class="p-price">Rp 699.000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="assets/imgs/nba2k23.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">NBA 2K23</h5>
            <h4 class="p-price">Rp 859.000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="assets/imgs/sr.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Saints Row</h5>
            <h4 class="p-price">Rp 829.000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>
      <section id="freatured" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Coming Soon</h3>
          <hr class="mx-auto">
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/mw2.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Call of Duty: MW2</h5>
            <h4 class="p-price">Rp 1.025.000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="assets/imgs/gowr.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">God  of War: Ragnarok</h5>
            <h4 class="p-price">1.029.000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="assets/imgs/nfsu.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">NFS: Unbound</h5>
            <h4 class="p-price">Rp 1.009.000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="assets/imgs/gh.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Gotham Knight</h5>
            <h4 class="p-price">Rp 990.000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>

          <!--Footer-->
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
                    <p>0812345678</p>
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
                  <a href="#"><i class="fab fa-facebook fa-lg" style="position:relative; top:7px;"></i></a>
                  <a href="#"><i class="fab fa-instagram fa-lg" style="position:relative; top:8px;"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-lg" style="position:relative; top:8px;"></i></a>
                </div>
              </div>
            </div>
          </footer>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet"/>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
</body>
</html>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  autoplayTimeout: 3000,
  dots: true,
  dotsData:true,
  dotsContainer: '.owl-dots',
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 1
    }
  }
})
</script>

<style>
    .login button {
    background-color: greenyellow;
    border: none;
    color: white;
}
    .login:hover{
    box-shadow: 0px 0px 10px greenyellow;
}
</style>
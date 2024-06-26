<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="style.css" rel="stylesheet" />

    <title>Contact</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!--Bagian Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Cheesy Cheese Bakery <i class="bi bi-chat-left-heart-fill"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!--Bagian Gambar-->
      <!-- <div class="container image">
        <h2 class="contact-us">Contact Us</h2>
            <div class="container text-center">
                <div class="row">
                <div class="col">
                    
                </div>
                <div class="col-8">
                    <img src="image/bakery.jpg" class="contact-us-image" width="600px" height="350px">
                </div>
                <div class="col">
            
                </div>
                </div>
                </div>
            </div>
      </div> -->
      <div data-aos="fade-down" data-aos-duration="1000" class="container contact-image mb-3">
        <h2 class="contact-us">Contact Us</h2>
        <div class="contact-div mb-3">
          <center><img src="image/bakery.jpg" class="responsive contact-us-image" width="600px" height="350px"></center>
        </div>
      </div>

      <!--Bagian Sosial Media-->
      <div class="container text-center">
        <div class="row g-2 social-media">
          <div data-aos="fade-down-right" data-aos-duration="1000" class="col-lg-6 social-media-hover">
            <!--Instagram-->
            <i class="bi bi-instagram social-media-icons"></i>
            <div class="p-3">@cheesycheesebakery</div>
          </div>
          <div data-aos="fade-down-left" data-aos-duration="1000" class="col-lg-6 social-media-hover">
            <!--Twitter-->
            <i class="bi bi-twitter social-media-icons"></i>
            <div class="p-3">@CheesyCheeseBakery</div>
          </div>
          <div data-aos="fade-up-right" data-aos-duration="1000" class="col-lg-6 social-media-hover">
            <!--Facebook-->
            <i class="bi bi-facebook social-media-icons"></i>
            <div class="p-3">Cheesy Cheese Bakery</div>
          </div>
          <div data-aos="fade-up-left" data-aos-duration="1000" class="col-lg-6 social-media-hover">
            <!--YouTube-->
            <i class="bi bi-youtube social-media-icons"></i>
            <div class="p-3">Cheesy Cheese Bakery</div>
          </div>
        </div>
      </div>

      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>
</html>
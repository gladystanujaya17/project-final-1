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
    
    <title>Products</title>

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
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <!--Bagian Product-->
    <div class="container text-center">
        <h2 class="our-products">Our Products</h2>
        <div class="row product-images">
          <div data-aos="zoom-in-down" data-aos-duration="1000" class="col-sm-12 product-image-bagels">
            <center><img src="image/bagels.jpg" class="responsive" width="700px" height="400px" alt="Bagels"></center>
            <p class="bagels-product"><strong>NEW PRODUCT FROM CHEESY CHEESE BAKERY</strong></p>
            <p>Bagels</p>
          </div>
        </div>
        <div data-aos="zoom-in-down" data-aos-duration="1000" class="row">
          <div class="col-sm">
            <img src="image/brownies.jpg" width="300px" height="200px" alt="Brownies">
            <p>Brownies</p>
          </div>
          <div class="col-sm">
            <img src="image/macaron.jpg" width="300px" height="200px" alt="Macaron">
            <p>Macaron</p>
          </div>
          <div class="col-sm">
            <img src="image/cinamon rolls.jpg" width="300px" height="200px" alt="Cinnamon Rolls">
            <p>Cinnamon Rolls</p>
          </div>
        </div>
        <div data-aos="zoom-in-down" data-aos-delay="200" data-aos-duration="1000" class="row">
            <div class="col-sm">
              <img src="image/croissant.jpg" width="300px" height="200px" alt="Croissant">
              <p>Croissant</p>
            </div>
            <div class="col-sm">
              <img src="image/cupcakes1.jpg" width="300px" height="200px" alt="Cupcakes">
              <p>Cupcakes</p>
            </div>
            <div class="col-sm">
              <img src="image/doughnut.jpg" width="300px" height="200px" alt="Doughnut">
              <p>Doughnut</p>
            </div>
          </div>
      </div>

      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>
</html>
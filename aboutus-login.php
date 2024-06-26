<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'koneksi.php';
?>

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

    <title>About Us</title>

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
                <a class="nav-link" aria-current="page" href="index-login.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="products-login.php">Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact-login.php">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php" onclick="return confirm('Are you sure you want to log out?');"><i class="bi bi-person-fill"></i> <?php echo $_SESSION["username"]; ?></a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

      <!--Bagian Gambar-->
      <!-- <div class="container image">
        <h2 class="about-us">About Us</h2>
            <div class="container text-center">
                <div class="row">
                <div class="col">
                    
                </div>
                <div class="image-about-us">
                  <div class="bakery-about-us">
                      <img src="image/aboutus.jpg" width="600px" alt="Bakery">
                  </div>
                </div>
                <div class="col">
            
                </div>
                </div>
                </div>
            </div>
      </div> -->
      <div data-aos="zoom-in-down" data-aos-duration="1000" class="container image-about-us">
        <h2 class="about-us">About Us</h2>
        <div class="image-about-us">
            <center><img src="image/aboutus.jpg" class="responsive about-us-image" width="600px" alt="Bakery"></center>
        </div>
      </div>
      
      <!--Bagian Paragraf-->
      <div class="container paragraph">
        <p class="about-us-main">
          <div data-aos="fade-up" data-aos-duration="1000" class="about-us-paragraph">
            <strong class="about-us-paragraph">Welcome to Our Bakery!</strong><br>

            <p style="color: black;">We are a family-owned bakery that has been serving the community for over 20 years. Our mission is to provide our customers with the highest quality baked goods made with only the freshest ingredients.<br><br></p>
          </div>

          <div data-aos="fade-up" data-aos-duration="1000" class="about-us-paragraph">
            <strong class="about-us-paragraph">Our Story</strong><br>
            
            <p style="color: black;">Our bakery was founded in 2001 by our grandmother, Maria, who had a passion for baking since she was a child. She learned everything she knows from her own grandmother and passed down her knowledge and recipes to us.
            
            Today, our bakery is run by Maria's children and grandchildren, who are all equally passionate about baking. We continue to use the same recipes and techniques that have been passed down through generations, ensuring that each item we bake is made with love and care.<br><br></p>
          </div>

          <div data-aos="fade-up" data-aos-duration="1000" class="about-us-paragraph">
            <strong class="about-us-paragraph">Our Products</strong><br>
            
            <p style="color: black;">At our bakery, we offer a wide variety of baked goods to satisfy any sweet tooth. From traditional cakes and pastries to custom-designed cakes for special occasions, we have something for everyone.
            
            We also offer a selection of bread, bagels, and other savory items for those who prefer something on the savory side. All of our products are made fresh daily, using only the highest quality ingredients.<br><br></p>
          </div>

          <div data-aos="fade-up" data-aos-duration="1000" class="about-us-paragraph">
            <strong class="about-us-paragraph">Our Promise</strong><br>
            
            <p style="color: black;">At our bakery, we take pride in our products and our commitment to customer satisfaction. If you are not completely satisfied with your purchase, please let us know and we will do everything we can to make it right.
            
            Thank you for considering our bakery for your next sweet treat or special occasion. We look forward to serving you soon!<br><br></p>
          </div>
      </div>

      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>
</html>
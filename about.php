<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Logo -->
  <link rel="icon" href="all_style/img/logo1.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <!-- Carousel -->
  <link rel="stylesheet" href="all_style/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="all_style/owl-carousel/css/owl.theme.default.min.css">
  <!-- Css -->
  <link rel="stylesheet" href="all_style/css/style.css">
  <title>about</title>
  <style>
  #about-bg {
    background-image: url(all_style/img/jefferson-santos-9SoCnyQmkzI-unsplawsh.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    width: 100%;
    height: 80vh;
  }


  #about .social-link i {
    font-size: 20px;
    border-radius: 50%;
    width: 40px;
    height: 41px;
    background-color: #4267B2;
    color: white;
    padding-top: 10px;

  }

  #about-bg .content {
    padding-top: 20vh;
  }

  #about-ceo .social-link i {
    font-size: 20px;
    border-radius: 50%;
    width: 40px;
    height: 41px;
    background-color: #4267B2;
    color: white;
    padding-top: 10px;
  }
  </style>
</head>

<body>
  <?php
include('header.php');
?>

  <section id="about-bg">
    <div class="container content">
      <h1 class="text-center text-light"><span style="border-bottom: 2px solid #fff; padding-bottom: 5px">About
          Us</span></h1>
      <p class="text-light text-center pt-2">Be Good, Be Direct, Be Better, Be Adventurous, Be
        Genuine.</p>
    </div>
  </section>

  <section id="about-ceo">
    <div class="container py-4 text-center">
      <div class="item  m-auto pt-5">
        <img src="all_style/img/rishad.png" alt="" class="img-fluid rounded-circle">
        <h6 class="text-center mt-3">Name: SM Rishad</h6>
        <h6 class="text-center">Chief Execute Officer(CEO)</h6>
      </div>
      <div class="social-link pt-4">
        <a href="https://www.facebook.com/s.m.rishad" target="_blank"><i class="fab fa-facebook-f text-center"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/rishadblack" target="_blank"><i class="fab fa-github"></i></a>
        <a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
      </div>
    </div>
  </section>
  <section id="about">
    <div class="container text-center py-5">

      <img src="all_style/img/shuvo2.jpg" alt="" class="img-fluid rounded-circle">
      <h6 class="text-center mt-3">Name: Mehedi Hasan</h6>
      <h6 class="text-center">Software Developer</h6>
      <div class="social-link">
        <a href="https://www.facebook.com/coder.mehedi" target="_blank"><i
            class="fab fa-facebook-f text-center"></i></a>
        <a href="https://twitter.com/mehedi_dnt_fci" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/mh-shuvo" target="_blank"><i class="fab fa-github"></i></a>
        <a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>

      </div>

      <img src="all_style/img/raihan.jpeg" alt="" class="img-fluid rounded-circle">
      <h6 class="text-center mt-3">Name: Azhar Raihan</h6>
      <h6 class="text-center">Junior Web Developer</h6>
      <div class="social-link">
        <a href="https://www.facebook.com/au.shahin.7" target="_blank"><i class="fab fa-facebook-f text-center"></i></a>
        <a href="https://twitter.com/AzharRa23404657" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/AzharRaihan" target="_blank"><i class="fab fa-github"></i></a>
        <a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>

      </div>

      <img src="all_style/img/sujon2.jpg" alt="" class="img-fluid rounded-circle">
      <h6 class="text-center mt-3">Name: Sujon Kumar Sorkar</h6>
      <h6 class="text-center">Junior Web Developer</h6>
      <div class="social-link">
        <a href="https://www.facebook.com/Sujon.Sorkar.www" target="_blank"><i
            class="fab fa-facebook-f text-center"></i></a>
        <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/sujonkumer" target="_blank"><i class="fab fa-github"></i></a>
        <a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
      </div>
    </div>
    </div>
    </div>
  </section>
  <!--**-- Web Design Section End --**-->


  <?php
include('footer.php');
?>


  <!-- All Script Links-->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="all_style/owl-carousel/js/owl.carousel.min.js"></script>
  <script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: 1000,
    responsive: {
      0: {
        items: 0
      },
      600: {
        items: 1
      },
      1000: {
        items: 3
      }
    }
  })
  </script>
</body>

</html>
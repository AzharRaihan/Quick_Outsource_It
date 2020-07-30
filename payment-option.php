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
  <title>payment-option</title>
  <style>
  .hr {
    border-bottom: 2px solid black;
    width: 450px;
  }
  </style>
</head>

<body>
  <?php
include('header.php');
?>

  <!--**-- Payment Section Start --**-->
  <section id="pement">
    <div class="container py-4">
      <h1 class="text-center pt-5 pb-2">Payment Options</h1>
      <hr class="hr">
      <div class="pament-body text-center border mt-5">
        <img src="all_style/img/payment.png" alt="" style="width: 100%; height: 100px;">
      </div>
      <p class="text-center py-5 px-5">Pay from anywhere in Bangladesh. You can buy Domain Names, VPS and Hosting
        Services anytime, and pay from anywhere in Bangladesh or abroad using bKash, Bank Transfer, Credit Card or
        Paypal.
        See all your <a href="#">Payment Options</a> </p>
    </div>
  </section>
  <!--**-- Payment Section End --**-->

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
        items: 6
      }
    }
  })
  </script>
</body>

</html>
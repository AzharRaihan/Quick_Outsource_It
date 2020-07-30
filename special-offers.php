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
  <title>special-offers</title>
</head>

<body>
  <?php
include('header.php');
?>

  <!--**-- Special Offer Section Start --**-->
  <section id="special-offer">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-5">
          <p class="text-right pt-4" style="font-size: 25px; color: #2D0D2F;"><b>50% Discount</b> <br>
            <b>For CSE Student</b></p>
        </div>
        <div class="col-md-2 text-center">
          <i class="fas fa-user-graduate" style="font-size: 80px; color:#2D0D2F;"></i>
        </div>
        <div class="col-md-5 text-left">
          <p class="text-left pt-4">Get a 50% Discount on any Hosting package. If you are an active Computer or
            Electronics Department Student, show your ID card & get a 50% Discount on all Web Hosting Packages from
            Quick Outsource & IT.</p>
        </div>
      </div>
      <div class="text-center">
        <a href="#" class="custom-button btn btn">See More</a>
      </div>
    </div>
  </section>
  <!--**-- Special Offer Section End --**-->


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
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
  <title>photos</title>
</head>

<body>
  <?php
include('header.php');
?>

  <section id="photos">
    <div class="container py-5">
      <div class="office-program">
        <div class="col-md-6 offset-md-3">
          <h3 class=" text-center py-4 mb-5" style="border-bottom: 1px solid #2D0C2E;">Office Event Photos</h3>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img src="all_style/img/rishad2.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/shuvo2.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/shahin.jpeg" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/sujon2.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="row pt-4">
          <div class="col-md-3">
            <img src="all_style/img/rishad2.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/shuvo2.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/shahin.jpeg" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/sujon2.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="office-tour">
        <div class="col-md-6 offset-md-3">
          <h3 class=" text-center py-4 my-5" style="border-bottom: 1px solid #2D0C2E;">Office Tour Photos</h3>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img src="all_style/img/rishad2.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/shuvo2.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/shahin.jpeg" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/sujon2.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="row pt-4">
          <div class="col-md-3">
            <img src="all_style/img/rishad2.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/shuvo2.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/shahin.jpeg" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="all_style/img/sujon2.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>


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
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
  <title>office-location</title>
</head>

<body>
  <?php
include('header.php');
?>

  <div class="container">
    <div class="text-center py-5">
      <h1>Address:</h1>
      <h3>Quick Out Source & IT</h3>
      <h6>House 121, Road 10/7, Block F, South Banasree, Dhaka</h6>
    </div>
    <div class="map">
      <iframe style="width:100%; height:470px; vertical-align: middle;"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3649.624660516285!2d90.41672575609982!3d23.83194246878936!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7bae8bc3a45%3A0xdec0ba6674435973!2sMehedi%20Hasan%20Shuvo!5e0!3m2!1sen!2sbd!4v1579938299190!5m2!1sen!2sbd"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>


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
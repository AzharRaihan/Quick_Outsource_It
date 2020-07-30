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
  <title>g-suite-google-mail</title>
  <style>
  #g-suit-bg {
    background-image: linear-gradient(to right, rgb(11, 22, 54), rgb(46, 12, 46));
    height: auto;

  }

  #g-suit-article .custom-button {
    background-color: #4c0353;
    color: white;

  }

  #g-suit-article .custom-button:hover {
    background-color: #290E2F;
    color: white;

  }
  </style>




</head>

<body>
  <?php
include('header.php');
?>

  <section id="g-suit-bg">
    <div class="container py-5 text-center text-light">
      <h2 class="pb-3">Google Cloud Present G-Suite</h2>
      <P class="px-5" style="line-height: 2em;">Now a day’s Google Mail with Google Doc Most Popular Email & cloud
        platform. Quick Outsource & IT is an authorized Distributor of Google Cloud Platform in Bangladesh. Setup your
        own Domain with Powerful Google Service & get 30 GB of space, ad-free inboxes, Easy Migration tools, and
        unlimited groups included spam protection & Backups.</P>
    </div>
  </section>

  <section id="g-suit-article">
    <div class="container py-5">
      <h3 class="text-center pb-4">Get Full Access of G-Suite</h3>
      <div class="row">
        <div class="col-md-6">
          <ul style="padding-left: 0px;">
            <li class="list-group-item"> Gmail -Custom Email Address (name@yourdomain.ext)</li>
            <li class="list-group-item"> Calendar (Integrated Online Calendars)</li>
            <li class="list-group-item"> Drive (30 GB Cloud Storage)</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul style="padding-left: 0px;">
            <li class="list-group-item"> Docs, Sheets, Slides (Online Office)</li>
            <li class="list-group-item"> Sites - Easy To Create Project sites</li>
            <li class="list-group-item"> Admin - Secured Admin Control Panel</li>
          </ul>
        </div>
      </div>
      <div class="text-center">
        <p class="text-light py-3"
          style="background-image: linear-gradient(to right, rgb(11, 22, 54), rgb(46, 12, 46)); letter-spacing: 5px;">
          Price: BDT 600/- Month / Account</p>
        <a href="#" class="btn btn text-light custom-button" style="letter-spacing: 8px;">ORDER NOW</a>
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
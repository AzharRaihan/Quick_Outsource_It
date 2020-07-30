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
  <title>joomla-website</title>


  <style>
  #joomla {
    background-image: url(all_style/img/women-1209678_1920.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    width: 100%;
    height: auto;
  }

  #joomla .custom-button {
    border: 1px solid white;
    color: #FFFFFF;

  }

  #joomla .custom-button:hover {
    background-color: #2C0D2F;
    color: white;
    border: 1px solid #2C0D2F;
  }

  #joomla-article .custom-button {
    border: 2px solid #4c0353;
    color: #4c0353
  }

  #joomla-article .custom-button:hover {
    background-color: #2C0D2F;
    color: white;
    border: 2px solid #2C0D2F;
  }
  </style>
</head>

<body>
  <?php
include('header.php');
?>

  <section id="joomla">
    <div class="container py-5">
      <div class="text-center text-light pb-5">
        <h1 style="letter-spacing: 4px;">The Flexible Platform<br> Empowering Website Creators</h1>
        <p style="letter-spacing: 3px;"> Joomla! is an award-winning content management system (CMS), <br>which enables
          you to build web sites and powerful online applications.</p>
        <a href="#" class="btn btn custom-button ml-5 mt-4 px-5" style="letter-spacing: 4px;">GET JOOMLA WEBSITE</a>
      </div>
    </div>
  </section>
  <section id="joomla-article">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 pt-5">
          <h4>Why Joomla?</h4>
          <p>Hundreds of developers have been improving Joomla! since the first version was released in 2005. This
            immense effort has made Joomla! very popular, easy to use, stable and secure.

            Joomla! has thousands of free extensions and templates allowing you to customize your site to fit your
            specific needs.</p>
          <a href="#" class="btn btn custom-button" style="letter-spacing: 5px;">LEARN MORE</a>
        </div>
        <div class="col-md-6">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/8AZ8GqW5iak" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
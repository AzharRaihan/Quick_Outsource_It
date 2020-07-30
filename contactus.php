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
  <title>contact-quick-outsource-and-it</title>

  <style>
  #contact-bg {
    background-image: url(all_style/img/cup-of-coffee-1280537_19201.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    width: 100%;
    height: 300px;
  }

  #contact {
    background-image: linear-gradient(to right, rgb(11, 22, 54), rgb(46, 12, 46));

  }

  #contact .custom-button {
    border: 2px solid #4c0353;
    color: #b528c2;
    /* border: 2px solid #5b0668;
    color: #cf55e2; */


  }

  #contact .custom-button:hover {
    background-color: #2C0D2F;
    border: 2px solid #2C0D2F;
    color: white;
  }

  .hr {
    border: 1px solid white;
    width: 450px;
  }

  textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    border-radius: 5px;
    width: 100%;
    background-image: linear-gradient(to right, rgb(11, 22, 54), rgb(46, 12, 46));
    color: white;
  }

  .form-control {
    background-image: linear-gradient(to right, rgb(11, 22, 54), rgb(46, 12, 46));
    color: white;
  }
  </style>
</head>

<body>


  <?php
include('header.php');
?>

  <section id="contact-bg">
    <div class="container py-5">
      <h1 class="text-center text-light">Contact Us</h1>
      <hr class="hr">
      <h4 class="text-light text-center">Contact Our Support And Sales Team</h4>
      <p class="text-light text-center">Need to get in touch with the team we're all ears</p>
    </div>
  </section>

  <section id="contact">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="name" style="letter-spacing: 5px;" class="text-light">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
            </div>
            <div class="form-group">
              <label for="email" style="letter-spacing: 5px;" class="text-light">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
            </div>
            <textarea class="pl-2 pt-2" placeholder="Write Your Message" rows="8" id="message" type="text"
              required="required" spellcheck="false" class="border-rounded"></textarea>
            <div class="text-center">
              <a href="" type="submit" class="btn btn custom-button px-4 mt-4" style="letter-spacing: 5px;">Submit</a>
            </div>
          </form>
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
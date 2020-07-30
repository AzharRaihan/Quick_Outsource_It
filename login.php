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
  <title>Login_Page</title>




  <style>
  /* ======= Login Section Css End =========*/
  #login .custom-button {
    border: 2px solid #4c0353;
    color: #4c0353;
  }


  #login .custom-button:hover {
    background-color: #4c0353;
    color: whitesmoke;
  }

  .hr {
    style="border-bottom: 2px solid black;
width: 300px;
  }

  /* ======= Login Section Css End =========*/
  </style>
</head>

<body>




  <!-- Login Section Start -->
  <div class="container pt-5">
    <div class="row pb-5">
      <div class="col-md-4 offset-md-4 p-3"
        style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="logo d-flex">
          <a href="index.php ">
            <img src="all_style/img/logo1.png" alt="" class="img-fluid" style="width: auto; height: 80px;">
          </a>
          <h4 class="text-center pt-2">Quick Outsource & IT</h4>
        </div>
        <h5 class="text-center">Log In</h5>
        <hr class="hr">
        <form action="#">
          <div class="form-group">
            <label for="email"><b>Email:</b></label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd"><b>Password:</b></label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group form-check d-flex">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"><b>Remember me</b>
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-right">
                <a href="#"><b>Forgot Password</b></a>
              </div>
            </div>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn text-light" style="background-color: #2E0D2E;">Submit</button>
          </div>
        </form>
      </div>
      <div class="col-md-8 offset-md-2 pt-5">
        <p class="text-center" style="color:#808080;">All Registered Trademarks, Logo and Brand Names are properties of
          their respective owners.
          Copyright © 2001-2020 Quick Outsource & It , Bangladesh. All rights reserved.</p>
      </div>
    </div>
  </div>
  <!-- Login Section End -->




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
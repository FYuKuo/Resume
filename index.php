<?php
include('./api/base.php');
$Introduce = new DB('resume_introduce');
$Contact = new DB('resume_contact');

?>

<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FY's Resume</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/home.css">
</head>

<body>
  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-5 py-2 fixed-top myNav">
    <a class="navbar-brand myLogo" href="#">FY's Resume</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
      <ul class="navbar-nav mt-2 mt-lg-0 ">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- nav end -->

  <!-- banner -->
  <div class="banner">

    <div class="container bannerText">
      <h1 class="display-4">Hi I'm FY Kuo.</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>

  </div>
  <!-- banner end -->

  <!-- introduce-->
  <div class="introduce box_item">
    <div class="container myTitle">
      <h2>
        About
      </h2>

    </div>

    <div class="container myIntroduce ">

      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-5 col-sm-10 mx-4 d-flex justify-content-center my-4">
          <img src="./img/photo-1.jpg" alt="" class="myPhoto">
        </div>

        <div class="myText col-lg-5 col-sm-10 mx-4 my-4">
          <pre><?= $Introduce->find(1)['text'] ?></pre>
        </div>

      </div>
    </div>

  </div>
  <!-- introduce end -->

  <!-- skill -->
  <div class="skill box_item">
    <div class="container myTitle">
      <h2>
        Skills
      </h2>

    </div>
  </div>
  <!-- introduce end -->

  <!-- Resume -->
  <div class="Resume box_item">
    <div class="container myTitle">
      <h2>
        Resume
      </h2>

    </div>
  </div>
  <!-- Resume end -->

  <!-- Portfolio -->
  <div class="Portfolio box_item">
    <div class="container myTitle">
      <h2>
        Portfolio
      </h2>

    </div>
  </div>
  <!-- Portfolio end -->

  <!-- contact -->
  <div class="contact box_item">
    <div class="container myTitle">
      <h2>
        Contact
      </h2>

      <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.6936687803554!2d120.60035871499973!3d24.1824737780497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693e1c3a406707%3A0xd43d01bc4fb2806a!2z5p2x5rW35aSn5a24!5e0!3m2!1szh-TW!2stw!4v1659794091107!5m2!1szh-TW!2stw" width="360" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="contact_text">
          <p>
            <span><i class="fa-solid fa-location-dot"></i></span> <?= $Contact->find(1)['address'] ?>
          </p>
          <p>
            <span><i class="fa-solid fa-mobile-screen-button"></i></span> <?= $Contact->find(1)['tel'] ?>
          </p>
          <p>
            <span><i class="fa-solid fa-envelope"></i> </span><?= $Contact->find(1)['email'] ?>
          </p>
        </div>


      </div>
    </div>
  </div>
  <!-- contact end -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

<script>
  $(document).ready(function() {

    $(document).scroll(function() {

      if ($(document).scrollTop() > 150) {
        $('.myNav').addClass('myNavScroll');
      } else {
        $('.myNav').removeClass('myNavScroll')
      }

    })


  })
</script>

</html>
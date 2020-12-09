<?php include('start-session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>O2</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="./css/style.css" rel="stylesheet">
</head>

<body>

  <?php include('navComponent.php') ?>

  <!-- Image Slider -->
  <div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
      <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/showcase.jpg" alt="">
        <div class="carousel-caption">
          <h1 class="display-2"><b>O2</b></h1>
          <h2>Breath of Fresh Air</h2>
          <a href="productsPage.php"><button type=button class='btn btn-outline-light btn-lg'>View Products</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/showcase1.jpg" alt="">
        <div class="carousel-caption">
          <h2>Take a deep breath of our oxygen, one of the six fundamental building
            blocks of life.</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/showcase2.jpg" alt="">
        <div class="carousel-caption">
          <h2>Over 10 different oxygens from across the globe</h2>
          <a href="productsPage.php"><button type=button class='btn btn-outline-light btn-lg'>View Products</button></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Jumbotron -->
  <div class="container-fluid">
    <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">
          Not interested in O<sup>2</sup>? There are tons of others products that you can check out at our marketplace!
        </p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a href="http://potato-katie.com/marketplace.php"><button type="button" class="btn btn-outline-secondary btn-lg">Marketplace</button></a>
      </div>
    </div>
  </div>

  <!-- Welcome Section -->
  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h1 class="display-4">
          What is O<sup>2</sup>?
        </h1>
      </div>
      <hr>
      <div class="col-12">
        <p class="lead">
          O2 is a Silicon Valley company based in the heart of the bay area.
          Nowadays the air quality sucks. There's smoke from fires, airborne
          coronavirus, and pollution. O2 aims to provide people with samples of
          clean air from nature so they can reminise the good ole days of clear
          sky and fresh breathes.
        </p>
      </div>
    </div>
    <hr class="my-4">
  </div>

  <!-- Products Section -->
  <div class="container-fluid padding">
    <div class="row products text-center padding">
      <div class="col-12">
        <h1>
          Our Products
        </h1>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="/img/fresh.jpg" alt="">
        <h3>Oxy Fresh</h3>
        <p>Treat yourself with the refreshing oxygen from Banff National Park
          in Canada to relax your body.</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="/img/icy.jpg" alt="">
        <h3>Oxy Icy</h3>
        <p> Brrrr! Our air from the glaciers of Greenland will instantly wake you up.</p>
      </div>
      <div class="col-xs-12 col-md-4">
        <img src="/img/mist.jpg" alt="">
        <h3>Oxy Mist</h3>
        <p> Breath in the cool mist from the forests of Northern California,
          and feel the wet air fill your lungs.</p>
      </div>
      <div class="col-12">
        <a href="productsPage.php"><button type="button" class="btn btn-primary btn-lg">View More Products</button></a>
      </div>
    </div>
    <hr class="my-4">
  </div>

  <!-- News Section -->
  <div class="container-fluid padding">
    <div class="row news text-center padding">
      <div class="col-12">
        <h1>
          News
        </h1>
      </div>
      <div class="col-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac
          bibendum felis. Donec lobortis tortor auctor, malesuada quam
          ullamcorper, maximus felis. Sed eu ornare magna, et varius leo. In
          euismod dui neque, eu interdum lacus viverra a. Ut id tellus
          condimentum, ultricies turpis vel, sagittis lectus. Curabitur volutpat
          sed lectus in placerat. Aenean pharetra mauris dui, vel ultrices elit
          interdum in. Cras congue accumsan metus. Nulla euismod vel elit et
          sollicitudin. Maecenas libero justo, ullamcorper vitae ligula quis,
          ornare feugiat justo. Nam ullamcorper molestie gravida. Morbi interdum
          eros eget congue aliquet. Nam finibus felis vel nulla rutrum, vitae
          condimentum nisl tristique. Cras ullamcorper vitae lectus ac posuere.
          Vestibulum eu ligula ipsum.</p>
      </div>
      <div class="col-12">
        <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Latest News</button></a>
      </div>
    </div>
  </div>

  <?php include('footerComponent.php'); ?>

</body>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>O2</title>
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1>O2</h1>
      </div>

      <nav>
        <ul>
          <li>
            <a href="index.php">hO<sup>2</sup>me</a>
          </li>
          <li><a href="">abO<sup>2</sup>ut</a></li>
          <li><a href="">prO<sup>2</sup>ducts</a></li>
          <li><a href="">N<sup>2</sup>ews</a></li>
          <li><a href="">cO<sup>2</sup>ntacts</a></li>
          <li><a href="loginPage.php">lo<sup>2</sup>gin</a></li>
          <li><a href="usersSqlPage.php">users</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="showcase">
    <div class="container">
      <h1>Breath of fresh air</h1>
      <p>
        Take a deep breath of our oxygen, one of the six fundamental building
        blocks of life.
      </p>
    </div>
  </section>

  <section id="about">
    <div class="container">
      <h1>What is O2?</h1>
      <p>
        O2 is a Silicon Valley company based in the heart of the bay area.
        Nowadays the air quality sucks. There's smoke from fires, airborne
        coronavirus, and pollution. O2 aims to provide people with samples of
        clean air from nature so they can reminise the good ole days of clear
        sky and fresh breathes.
      </p>
    </div>
  </section>

  <section id="products">
    <div class="container">
      <h1>Our Products</h1>
      <p>Availiable in various sizes*</p>
      <div class="box">
        <h2>Oxy Chill</h2>
        <img src="./img/DiskoBayGreenland.jpg" alt="" srcset="" />
        <p>
          Inhale oxygen from the cold waters of Disko Bay, Greenland to cool
          down your body, giving a sharp sensation best for recovery.
        </p>
      </div>
      <div class="box">
        <h2>Oxy Fresh</h2>
        <img src="./img/BanffNPCanada.jpg" alt="" srcset="" />
        <p>
          Treat yourself with the refreshing oxygen from Banff National Park
          in Canada to relax your body.
        </p>
      </div>
      <div class="box">
        <h2>Oxy Dry</h2>
        <img src="./img/AtacamaDesertChile.jpg" alt="" srcset="" />
        <p>
          Take in the heat with air from the Atacama Desert in Chile to fill
          your lungs with warmth from the desert air.
        </p>
      </div>
    </div>
  </section>

  <section id="news">
    <div class="container">
      <h1>News</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac
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
        Vestibulum eu ligula ipsum.
      </p>
      <h4><a href="">More of the latest news</a></h4>
    </div>
  </section>

  <section id="contacts">
    <div class="container">
      <h1>Contacts</h1>
      <?php require('./php/contacts.php') ?>
    </div>
  </section>
</body>

</html>
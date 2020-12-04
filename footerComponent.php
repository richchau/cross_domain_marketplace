<?php echo '  <footer>
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-md-4">
          <img style="max-width: 150px; filter:brightness(85%);" src="img/o2-logo.png" alt="">
          <hr class="light">'; ?>
          <?php
            $fh = fopen("contacts.txt", "r");
            while ($line = fgets($fh)) {
                list($email, $phone, $street, $city, $state, $zip) = preg_split("/\,/", $line);
                echo ("<p>$phone</p>");
                echo ("<p>$email</p>");
                echo ("<p>$street</p>");
                echo ("<p>$city, $state, $zip</p>");
            }
            fclose($fh); ?>
          <?php echo '
        </div>

        <div class="col-md-4">
          <hr class="light">
          <h5>Our hours</h5>
          <hr class="light">
          <p>Mon-Fri: 8am - 6pm</p>
          <p>Sat & Sun: Closed</p>
        </div>

        <div class="col-md-4">
          <hr class="light">
          <h5>Menu</h5>
          <hr class="light">
          <p><a href="#">Home</a></p>
          <p><a href="#">About</a></p>
          <p><a href="productsPage.php">Products</a></p>
          <p><a href="#">News</a></p>
          <p><a href="#">Contact</a></p>
          <p><a href="#">Marketplace</a></p>
        </div>

        <div class="col-12">
          <hr class="light-100">
          <h5>&copy; o2-heroku.herokuapp.com</h5>
        </div>

      </div>
    </div>
  </footer>'; ?>

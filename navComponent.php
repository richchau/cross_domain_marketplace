<?php
include('start-session.php');
echo '
<!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img style="max-width: 150px; filter:brightness(85%);" src="img/o2-logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">hO<sup>2</sup>me</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">abO<sup>2</sup>ut</a>
          </li>
          <li class="nav-item">
            <a href="productsPage.php" class="nav-link">prO<sup>2</sup>ducts</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">N<sup>2</sup>ews</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">cO<sup>2</sup>ntact</a>
          </li>
          <li class="nav-item">
            <a href="http://potato-katie.com/marketplace.php" class="nav-link">Marketplace</a>
          </li>';

if (isset($_GET["name"])) {
  echo '<li class="nav-item">
                  <a href="includes/logout.inc.php" class="nav-link">lO<sup>2</sup>gout</a>
                 </li>';
} else {
  echo '<li class="nav-item">
            <a href="https://annasys.com/cafe9/MarketplaceLogin.php#" class="nav-link">lO<sup>2</sup>gin</a>
          </li>';
}
echo '
        </ul>
      </div>
    </div>
  </nav>';

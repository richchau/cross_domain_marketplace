<?php

//session_start();
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.annasys.com/cafe9/get-active-user-api.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
  // CURLOPT_SSL_VERIFYHOST => false,
  // CURLOPT_SSL_VERIFYPEER => false,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response, true);

print_r($response);
print_r($err);

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

if ($response) {
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

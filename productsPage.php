<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://kit.fontawesome.com/f99fe1a433.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <!-- <style>
        .grid-container {
            /* display: inline-grid;
            grid-template-columns: auto auto; */
        }


        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style> -->
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href='#'><img style="max-width: 150px; filter:brightness(85%);" src="img/o2-logo.png"></a>
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
                    <li class="nav-item active">
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
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Products -->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Products</h1>
            </div>
            <hr>
        </div>
    </div>

    <!-- Product Cards -->
    <div class="container-fluid padding">
        <div class="row product-list padding">
            <?php

            include("dbconfig.php");
            include("starsComponent.php");

            $sql = "SELECT * FROM products";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($query)) {

                echo '<div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                          <img class="card-img-top" src="/img/' . $row["image"] . '">
                          <div class="card-body">
                            <h4 class="card-title">' . $row["name"] . ' </h4>' ?>
                <?php displayStars($row['product_rating']) ?>
            <?php echo '(' . $row["product_rating"] . ')' . '<p class="card-text">$' . $row["pricing"] . '</p>
                            <a href="detailPage.php?value=' . $row["product_id"] . '" class="btn btn-outline-secondary">View Item</a>
                          </div>
                        </div>
                      </div>';
            }
            ?>
        </div>
    </div>

    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <img style="max-width: 150px; filter:brightness(85%);" src="img/o2-logo.png" alt="">
                    <hr class="light">
                    <?php
                    $fh = fopen('contacts.txt', 'r');
                    while ($line = fgets($fh)) {
                        list($email, $phone, $street, $city, $state, $zip) = preg_split("/\,/", $line);
                        echo ("<p>$phone</p>");
                        echo ("<p>$email</p>");
                        echo ("<p>$street</p>");
                        echo ("<p>$city, $state, $zip</p>");
                    }
                    fclose($fh); ?>
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
    </footer>

</body>

</html>
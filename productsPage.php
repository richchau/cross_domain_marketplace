<?php //session_start() 
?>

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
    <?php include('navComponent.php') ?>

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

    <!-- Top FIVE -->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h3>Top Products</h3>
            </div>
            <hr>
        </div>
    </div>

    <!-- Top 5 Cards -->
    <div class="container-fluid padding">
        <div class="row product-list padding">
            <?php

            $sql = "SELECT * FROM products ORDER BY product_rating DESC LIMIT 5";
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

    <?php include('footerComponent.php'); ?>

</body>

</html>
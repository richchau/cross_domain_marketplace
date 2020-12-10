<?php

// Database configuration
include("dbconfig.php");

// Stars Component
include("starsComponent.php");

// Mysql update page view count on database
$sql_view_count = 'UPDATE products SET view_count = view_count + 1 WHERE product_id =' . $_GET["value"];
mysqli_query($conn, $sql_view_count);

// Mysql query for product
$sql1 = 'SELECT * FROM products WHERE product_id = ' . $_GET["value"] . '';
$query1 = mysqli_query($conn, $sql1);
$products = mysqli_fetch_assoc($query1);


//Sends to marketplace to track user visits
if (isset($_COOKIE['name'])) {
    $ch = curl_init('http://potato-katie.com/api/user_visits/create.php');
    // curl_setopt($ch, CURLOPT_POSTFIELDS, 'username=' . $_COOKIE['name'] . '&product_name=' . $products['name'] .
    //     '&product_details_url="https://o2-heroku.herokuapp.com/detailPage.php?value=' . $products["product_id"] .
    //     '"&price=' . $products['pricing'] . '&image_url="https://o2-heroku.herokuapp.com/img/' . $products['image'] .
    //     '"&avg_rating=' . $products["product_rating"] . '');
    $payload = array(
        'username' => $_COOKIE['name'], 'product_name' => $products['name'],
        'product_details_url' => 'https://o2-heroku.herokuapp.com/detailPage.php?value=' . $products["product_id"],
        'price' => $products['pricing'], 'image_url' => 'https://o2-heroku.herokuapp.com/img/' . $products['image'],
        'avg_rating' => $products["product_rating"]
    );
    curl_setopt($ch, CURLOPT_POST, count($payload));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $chresult = curl_exec($ch);
    curl_close($ch);
}


if (!isset($_COOKIE["viewed_products"])) {
    $arr = array();
    array_push($arr, $products["product_id"]);
    $cookie = json_encode($arr);
    setcookie('viewed_products', $cookie);
    // Else push pages into the queue, maximum of 5 elements 
} else {

    $cookie = $_COOKIE['viewed_products'];
    $cookie = stripslashes($cookie);
    $arr = json_decode($cookie, true);
    //print_r($arr);
    // Check if product is already viewed, if so move to end of queue
    $pos = array_search($products["product_id"], $arr);
    if ($pos) {
        $x = $arr[$pos];
        unset($arr[$pos]);
        $arr[$pos] = $x;
    } else {
        // Max queue size
        if (count($arr) > 4) {
            array_shift($arr);
        }
        array_push($arr, $products["product_id"]);
    }

    $cookie = json_encode($arr);
    setcookie('viewed_products', $cookie);
}

?>
<?php
// Add review to sql database
if (isset($_POST['AddReview'])) {

    // Insert into ratings database
    $user_name = mysqli_real_escape_string($conn, $response);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $rating = mysqli_real_escape_string($conn, $_POST['rate']);
    $product_id = $_GET["value"];

    $sql = "INSERT INTO ratings (product_id, user_name, comment, rating)
        VALUES ('$product_id', '$user_name', '$comment', '$rating')";

    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Insert average rating into products database
    $sql = 'SELECT AVG(rating) FROM ratings where product_id = ' . $_GET["value"];
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $product_rating = $row['AVG(rating)'];
    $product_rating = round($product_rating, 2);

    $sql = 'UPDATE products SET product_rating =' . $product_rating . ' WHERE product_id =' . $product_id;

    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }


    header('Location: detailPage.php?value=' . $_GET["value"]);
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <script src="https://kit.fontawesome.com/f99fe1a433.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>

    <!-- Navigation -->
    <?php include('navComponent.php') ?>


    <div class="container">
        <form action="productsPage.php">
            <input type="submit" value="Back to products" />
        </form>
        <div class="row">
            <div class="column">
                <?php echo '<img src="/img/' . $products['image'] . '">'; ?>
            </div>
            <div class="column">
                <?php

                echo '<h1>' . $products['name'] . '</h1>';
                echo "</br>";
                displayStars($products["product_rating"]);
                echo "</br>";
                echo $products['description'];
                echo "</br>";
                echo $products['pricing'];
                echo "</br>";

                ?>
            </div>

        </div>
        </br>
        <!-- Reviews component -->
        <?php
        if (isset($response)) {
            echo '<div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                    <div>
                        Comment: <br />
                        <input type="text" name="comment" style="width: 300px"><br />
                        <input type="submit" name="AddReview" value="Post Review">
                    </div>
                </form>
            </div>';
        }
        ?>

        <hr>

        <!-- Display reviews -->
        <div>
            <h2>Reviews</h2>
            <?php
            $sql = 'SELECT * FROM ratings WHERE product_id = ' . $_GET["value"];
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($query)) {
                echo "<div>";
                displayStars($row['rating']);
                echo "</br>";
                echo $row['user_name'];
                echo "</br>";
                echo $row['comment'];
                echo "</br>";
                echo "</div>";
                echo "</br>";
            }
            ?>
        </div>

        <?php
        include("recentlyViewed.php");
        ?>
    </div>

    <?php include('footerComponent.php'); ?>
</body>

</html>
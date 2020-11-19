<?php

// Database configuration
include("dbconfig.php");

// Mysql query for product
$sql = 'SELECT * FROM products WHERE product_id = ' . $_GET["value"] . '';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

// // User page view count
// if (!isset($_COOKIE["count_id_" . $row["product_id"]])) {
//     $count = 1;
//     setcookie("count_id_" . $row["product_id"], $count);
// } else {
//     $count = ++$_COOKIE["count_id_" . $row["product_id"]];
//     setcookie("count_id_" . $row["product_id"], $count);
// }

// Add to recently viewed queue
// Create viewed products cookie if not exist and add this page
//unset($_COOKIE["viewed_products"]);
if (!isset($_COOKIE["viewed_products"])) {
    $arr = array();
    array_push($arr, $row["product_id"]);
    $cookie = json_encode($arr);
    setcookie('viewed_products', $cookie);
    // Else push pages into the queue, maximum of 5 elements 
} else {

    $cookie = $_COOKIE['viewed_products'];
    $cookie = stripslashes($cookie);
    $arr = json_decode($cookie, true);
    //print_r($arr);
    // Check if product is already viewed, if so move to end of queue
    $pos = array_search($row["product_id"], $arr);
    if ($pos) {
        $x = $arr[$pos];
        unset($arr[$pos]);
        $arr[$pos] = $x;
    } else {
        // Max queue size
        if (count($arr) > 4) {
            array_shift($arr);
        }
        array_push($arr, $row["product_id"]);
    }

    $cookie = json_encode($arr);
    setcookie('viewed_products', $cookie);
}

if (isset($_POST['AddReview'])) {

    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
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
    <link rel="stylesheet" href="./css/detailPage.css" />
</head>

<body>

    <?php

    echo $row['name'];
    echo "</br>";
    echo $row['image'];
    echo "</br>";
    echo $row['description'];
    echo "</br>";
    echo $row['pricing'];
    echo "</br>";
    ?>
    </br>
    <div>
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
                Name: <br />
                <input type="text" name="user_name"><br />
                Comment: <br />
                <input type="text" name="comment" style="width: 300px"><br />
                <input type="submit" name="AddReview" value="Post Review">
            </div>
        </form>
    </div>
    </br>

    <div>
        <h2>Reviews</h2>
        <?php
        $sql = 'SELECT * FROM ratings WHERE product_id = ' . $_GET["value"];
        $query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($query)) {
            echo "<div>";
            echo $row['rating'];
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


</body>

</html>
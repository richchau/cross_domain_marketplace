<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://kit.fontawesome.com/26e7b01587.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <style>
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
    </style>
</head>

<body>
    <header>
        <?php include("navBarComponent.php") ?>
    </header>
    <div class="container">
        <div class="grid-container">
            <?php

            include("dbconfig.php");
            include("starsComponent.php");

            $sql = "SELECT * FROM products";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($query)) {

                echo '<div class="card"> 
                <img src="/img/' . $row["image"] . '">
                <div class="card-container">
                    <h4>' . $row["name"] . ' </h4>
                    <p>$' . $row["pricing"] . '</p>
                </div>
                <div>';

                displayStars($row["product_rating"]);

                echo '</div>
                <a href="detailPage.php?value=' . $row["product_id"] . '">View</a>
            </div>
            </br>';
            }


            ?>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>

    <?php

    include("dbconfig.php");

    $sql = "SELECT * FROM products";
    $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($query)) {

        echo '<div> 
                <div>
                    ' . $row["name"] . '
                </div>
                <div>
                    ' . $row["description"] . '
                </div>
                <div>
                    ' . $row["pricing"] . '
                </div>
                <a href="detailPage.php?value=' . $row["product_id"] . '">click me</a>
            </div>
            </br>';
    }


    ?>

</body>

</html>
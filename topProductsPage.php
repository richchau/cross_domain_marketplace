<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Products</title>
</head>


<body>

    <h1>Five recently viewed Products</h1>

    <?php
    $arr = explode(",", $_COOKIE['viewed_products']);
    //$popped = array_pop($arr);
    if (sizeof($arr) > 6) {
        $recent = array_slice($arr, -6);
        $arr = $recent;
    }

    foreach ($arr as &$page) {
        echo "<h4>$page</h4>";
    }
    ?>

</body>

</html>
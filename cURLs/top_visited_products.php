<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("curlSetUp.php");
    $query = 'SELECT name, image, product_id, pricing, product_rating FROM products ORDER BY view_count DESC limit 5';
    getCURLdata($query);
    ?>
</body>

</html>
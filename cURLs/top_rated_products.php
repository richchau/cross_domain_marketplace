<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    include("../dbconfig.php");

    $query = 'SELECT name, image, product_id, pricing, product_rating FROM products ORDER BY product_rating DESC limit 5';

    $result = $conn->query($query);

    $rows = array();

    while ($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    //print_r($rows);

    $data_arr = array();

    foreach ($rows as $row) {
        $arr = array();
        $arr['product_name'] = $row['name'];
        $arr['image_url'] = $_SERVER['SERVER_NAME'] . '/img/' . $row['image'];
        $arr['product_details_url'] = $_SERVER['SERVER_NAME'] . '/detailPage.php?value=' . $row['product_id'];
        $arr['price'] = $row['pricing'];
        $arr['avg_rating'] = $row['product_rating'];
        $data_arr[] = $arr;
    }

    print_r($data_arr);
    //print(json_encode($rows));
    $conn->close();
    ?>
</body>

</html>
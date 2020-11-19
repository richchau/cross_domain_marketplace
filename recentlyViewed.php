<?php

// if (!isset($arr_result)) {
//     $arr_result = [];
// }

// foreach ($_COOKIE as $cookie => $value) {
//     $exp_cookie = explode('_', $cookie);
//     if ($exp_cookie[0] == 'count') {
//         $arr_result[$exp_cookie[2]] = $value;
//     }
// }

// if (isset($arr_result) && count($arr_result) > 0) {

//     arsort($arr_result);

//     if (count($arr_result) > 5) {
//         $top_products = array_slice($arr_result, 0, 5);
//     } else {
//         $top_products = array_slice($arr_result, 0, count($arr_result));
//     }

//     print_r($top_products);
// }

include('dbconfig.php');

if (isset($_COOKIE['viewed_products'])) {
    $cookie = $_COOKIE['viewed_products'];
    $cookie = stripslashes($cookie);
    $recentProductsArr = json_decode($cookie, true);

    echo '
        <h2>Recently Viewed</h2> 
    ';

    foreach ($recentProductsArr as $product) {
        $sql = 'SELECT * FROM products WHERE product_id = ' . $product . '';
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        echo $row['name'];
        echo "</br>";
    }
}

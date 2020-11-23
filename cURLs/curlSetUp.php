<?php

function getCURLdata($query)
{
    include("../dbconfig.php");
    $result = $conn->query($query);
    $rows = array();
    while ($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }

    $data_arr = array();

    foreach ($rows as $row) {
        $arr = array();
        $arr['product_name'] = $row['name'];
        $arr['image_url'] = $_SERVER['SERVER_NAME'] . '/img/' . $row['image'];
        $arr['product_details_url'] = $_SERVER['SERVER_NAME'] . '/detailPage.php?value=' . $row['product_id'];
        $arr['price'] = $row['pricing'];
        $arr['avg_rating'] = $row['product_rating'];
        if (array_key_exists('view_count', $row)) {
            $arr['num_visits'] = $row['view_count'];
        }
        $data_arr[] = $arr;
    }

    $json = json_encode($data_arr);
    print($json);
}

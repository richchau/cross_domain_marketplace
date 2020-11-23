
    <?php
    include("curlSetUp.php");
    $query = 'SELECT name, image, product_id, pricing, product_rating FROM products ORDER BY pricing DESC limit 5';
    getCURLdata($query);
    ?>

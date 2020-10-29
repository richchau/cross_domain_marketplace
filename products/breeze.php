<!DOCTYPE html>

<?php
if (!isset($_COOKIE['viewed_products'])) {
    $cookie = 'Oxy Breeze,';
    $expire = time() + 3600;
    setcookie("viewed_products", $cookie, $expire, '/');
} else {
    $cookie = $_COOKIE['viewed_products'] . "Oxy Breeze,";
    $expire = time() + 3600;
    setcookie("viewed_products", $cookie, $expire, '/');
}

print_r($_COOKIE);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxy | Breeze</title>
</head>

<body>
    <h1>Oxy Breeze</h1>
    <img src="img/BanffNPCanada.jpg" alt="">
    <p>Breath of fresh breeze air.</p>
</body>


<?php
echo ($_COOKIE['count_breeze']);
?>

</html>
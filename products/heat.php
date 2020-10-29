<!DOCTYPE html>
<html lang="en">

<?php
if (!isset($_COOKIE['viewed_products'])) {
    $cookie = 'Oxy Heat,';
    $expire = time() + 3600;
    setcookie("viewed_products", $cookie, $expire, '/');
} else {
    $cookie = $_COOKIE['viewed_products'] . "Oxy Heat,";
    $expire = time() + 3600;
    setcookie("viewed_products", $cookie, $expire, '/');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxy | Heat</title>
</head>

<body>
    <h1>Oxy Heat</h1>
    <img src="BanffNPCanada.jpg" alt="">
    <p>Breath of fresh hot air.</p>
</body>

</html>
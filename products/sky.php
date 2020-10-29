<!DOCTYPE html>
<html lang="en">

<?php
if (!isset($_COOKIE['viewed_products'])) {
    $cookie = 'Oxy Sky,';
    $expire = time() + 3600;
    setcookie("viewed_products", $cookie, $expire, '/');
} else {
    $cookie = $_COOKIE['viewed_products'] . "Oxy Sky,";
    $expire = time() + 3600;
    setcookie("viewed_products", $cookie, $expire, '/');
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxy | Sky</title>
</head>

<body>
    <h1>Oxy Sky</h1>
    <img src="BanffNPCanada.jpg" alt="">
    <p>Breath of fresh sky air.</p>
</body>

</html>
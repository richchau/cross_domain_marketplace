<!DOCTYPE html>

<?php
if (!isset($_COOKIE['count_breeze'])) {
    $cookie = 1;
    $expire = time() + 3600;
    setcookie("count_breeze", $cookie, $expire, "/", "https://o2-heroku.herokuapp.com/");
} else {
    $cookie = ++$_COOKIE['count_breeze'];
    setcookie("count_breeze", $cookie);
}
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
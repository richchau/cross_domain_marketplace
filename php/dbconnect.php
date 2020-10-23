
<?php
$user = 'root';
$password = 'root';
$db = 'usersdb';
$host = 'localhost';
$port = 3307;

$link = mysqli_connect(
    "$host:$port",
    $user,
    $password
);
$db_selected = mysqli_select_db(
    $db,
    $link
);

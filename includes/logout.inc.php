<?php
unset($_COOKIE['name']);
setcookie('name', null, -1, '/');
header('location: ../index.php');
exit();

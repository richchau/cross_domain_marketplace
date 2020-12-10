<?php
unset($_COOKIE['name']);
setcookie('name', null, -1, '/');
header('location: http://potato-katie.com/marketplace.php?logout=true ');
exit();

<?php
$fh = fopen('./contacts.txt', 'r');
while ($line = fgets($fh)) {
    list($name, $email, $phone) = preg_split("/\,/", $line);
    echo ("<h4>$name</h4>");
    echo ("<p>$email | $phone</p>");
}
fclose($fh);

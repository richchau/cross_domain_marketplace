<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <h1>Current Users:</h1>
    <?php
    $fh = fopen('currentUsers.txt', 'r');
    while ($line = fgets($fh)) {
        print("<h4>$line</h4>");
    }
    fclose($fh);
    ?>
</body>

</html>
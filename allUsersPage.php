<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function get_data($url)
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    $returned_content = get_data('http://potato-katie.com/users2.php');

    $otherUsers = json_decode($returned_content);

    echo "<table>";
    echo "<tr>";
    echo "<th>first_name</th>";
    echo "<th>last_name</th>";
    echo "<th>email</th>";
    echo "<th>address</th>";
    echo "<th>home_phone</th>";
    echo "<th>cell_phone</th>";
    echo "</tr>";

    foreach ($otherUsers as $value) {
        //echo $value->firstName;
        echo "<tr>";
        echo "<td>" . $value->firstName . "</td>";
        echo "<td>" . $value->lastName . "</td>";
        echo "<td>" . $value->email . "</td>";
        echo "<td>" . $value->address . "</td>";
        echo "<td>" . $value->homePhone . "</td>";
        echo "<td>" . $value->cellPhone . "</td>";
        echo "</tr>";
    }

    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conn = mysqli_connect($server, $username, $password, $db);

    //$conn = mysqli_connect("localhost", "root", "root", "usersdb");

    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }


    $query = "SELECT * FROM users";
    $result = $conn->query($query);

    if ($result = mysqli_query($conn, $query)) {

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['home_phone'] . "</td>";
            echo "<td>" . $row['cell_phone'] . "</td>";
            echo "</tr>";
        }
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }

    echo "</table>";

    $conn->close();

    echo "</table>";
    ?>
</body>

</html>
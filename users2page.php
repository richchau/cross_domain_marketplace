<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    /*
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);

    */

    $conn = mysqli_connect("localhost", "root", "root", "usersdb");

    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }


    $query = "SELECT * FROM users";
    $result = $conn->query($query);
    $rows = array();

    while ($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }

    print(json_encode($rows));
    // if ($result = mysqli_query($conn, $query)) {
    //     echo "<table>";
    //     echo "<tr>";
    //     echo "<th>id</th>";
    //     echo "<th>first_name</th>";
    //     echo "<th>last_name</th>";
    //     echo "<th>email</th>";
    //     echo "<th>address</th>";
    //     echo "<th>home_phone</th>";
    //     echo "<th>cell_phone</th>";
    //     echo "</tr>";
    //     while ($row = mysqli_fetch_array($result)) {
    //         echo "<tr>";
    //         echo "<td>" . $row['id'] . "</td>";
    //         echo "<td>" . $row['first_name'] . "</td>";
    //         echo "<td>" . $row['last_name'] . "</td>";
    //         echo "<td>" . $row['email'] . "</td>";
    //         echo "<td>" . $row['address'] . "</td>";
    //         echo "<td>" . $row['home_phone'] . "</td>";
    //         echo "<td>" . $row['cell_phone'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    //     // Free result set
    //     mysqli_free_result($result);
    // } else {
    //     echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    // }

    $conn->close();
    ?>
</body>

</html>
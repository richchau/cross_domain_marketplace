<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<?php
$conn = mysqli_connect("localhost", "root", "root", "usersdb");
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

if (isset($_POST['AddUser'])) {
    $sql = "INSERT INTO users (first_name, last_name, email, address, home_phone, cell_phone)
    VALUES ('" . $_POST["firstname"] . "','" . $_POST["lastname"] . "'
    ,'" . $_POST["email"] . "' ,'" . $_POST["address"] . "' ,'" . $_POST["homephone"] . "'
    ,'" . $_POST["cellphone"] . "')";

    $result = mysqli_query($conn, $sql);
}

if (isset($_POST['FindUser'])) {
    $sql = "SELECT * FROM users WHERE '" . $_POST["query"] . "' in (first_name, last_name, email, home_phone, cellphone) ";
    $result = mysqli_query($conn, $sql);
    echo $result;
}
?>

<h2>Add User</h2>
<form action="usersSqlPage.php" method="post">
    First Name: <br />
    <input type="text" name="firstname"><br />
    Last Name: <br />
    <input type="text" name="lastname"><br />
    Email: <br />
    <input type="text" name="email"><br />
    Address: <br />
    <input type="text" name="address"><br />
    Home Phone: <br />
    <input type="text" name="homephone"><br />
    Cell Phone: <br />
    <input type="text" name="cellphone"><br />
    <input type="submit" name="AddUser" value="Add User">
</form>

<h2>Find User</h2>
<form action="usersSqlPage.php" method="post">
    Enter name, phone, or email: <br />
    <input type="text" name="query"><br />
    <input type="submit" name="FindUser" value="Find User">
</form>

<body>

</body>

</html>
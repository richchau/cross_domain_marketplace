<?php

$conn = mysqli_connect("localhost", "root", "root", "oxy");

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

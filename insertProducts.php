<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
</head>

<body>

    <?php

    include("dbconfig.php");

    if (isset($_POST['AddProduct'])) {

        //Get product name
        $name = mysqli_real_escape_string($conn, $_POST['name']);

        //Get description
        $description = mysqli_real_escape_string($conn, $_POST['description']);

        //Get pricing
        $pricing = mysqli_real_escape_string($conn, $_POST['pricing']);

        //Get image name
        // var_dump($_FILES);
        // $image_name = $_POST['image'];
        $image = $_FILES['image']['name'];

        //Image file directory
        $target = "img/" . basename($image);

        $sql = "INSERT INTO products (name, image, description, pricing)
        VALUES ('$name', '$image', '$description', '$pricing')";

        if (mysqli_query($conn, $sql)) {
            echo "Records inserted successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

        move_uploaded_file($_FILES['image']['tmp_name'], $target);

        header('Location: insertProducts.php');
        exit();
    }

    ?>

    <h2>Add Product</h2>
    <form action="insertProducts.php" method="post" enctype="multipart/form-data">
        Name: <br />
        <input type="text" name="name"><br />
        Description: <br />
        <input type="text" name="description" style="width: 300px"><br />
        Pricing: <br />
        <input type="text" name="pricing"><br />
        Select image to upload: <br />
        <input type="file" name="image"><br />
        <input type="submit" name="AddProduct" value="Add Product">
    </form>

    <?php

    $sql = "SELECT image from products where product_id = 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $image = $row['image'];
    $image_src = "img/" . $image;
    ?>

    <img src='<?php echo $image_src;  ?>'>

</body>

</html>
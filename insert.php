<?php

// Include db connection
include 'config.php';

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $expiry = $_POST['expiry'];
    $inventory = $_POST['inventory'];

    // Check if the 'image' key exists in $_FILES
    if (isset($_FILES['image'])) {
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        move_uploaded_file($img_loc, 'uploadImage/' . $img_name);

        // Insert data into the database
        $query = "INSERT INTO `tblcard` (`name`, `unit`, `price`, `expiry`, `inventory`, `image`) VALUES ('$name', '$unit', '$price', '$expiry', '$inventory', '$img_name')";

        // Execute the query
        mysqli_query($con, $query);

        // Check if the insertion was successful
        if (mysqli_affected_rows($con) > 0) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}

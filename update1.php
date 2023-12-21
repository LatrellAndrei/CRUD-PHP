<?php
include 'config.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
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
        $query = "UPDATE `tblcard` SET `name`= '$name', `unit`='$unit', `price`='$price', `expiry`='$expiry', `inventory`='$inventory', `image`='$img_name' WHERE id = '$id'";
        header("location: index.php");
        // Execute the query
        mysqli_query($con, $query);

        // Check if the update was successful
        if (mysqli_affected_rows($con) > 0) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}

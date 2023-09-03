<?php
include "connect.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `crud` WHERE id='$id'";
    // You should use double quotes around the SQL query and properly concatenate the variable $id into the string.
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}

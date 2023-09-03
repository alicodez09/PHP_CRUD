<?php
include 'connect.php';
$id = $_GET['update_data'];

// Fetch the current data based on the ID
$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);

    // Store the current data in variables
    $username = $row['username'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
} else {
    die(mysqli_error($con));
}

if (isset($_POST['submit'])) {
    // Handle the form submission to update the data
    $newUsername = $_POST['username'];
    $newEmail = $_POST['email'];
    $newPhone = $_POST['phone'];
    $newAddress = $_POST['address'];

    // Update the data in the database
    $updateSql = "UPDATE `crud` SET username='$newUsername', email='$newEmail', phone='$newPhone', address='$newAddress' WHERE id=$id";
    $updateResult = mysqli_query($con, $updateSql);

    if ($updateResult) {
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <!-- Bootstarp CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>


<body>
    <div class="container">
        <div class="row min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <h2 class="mb-3">Update Information</h2>
                <form method="post">
                    <div class="mb-3">
                        <input autocomplete="off" type="text" class="form-control full-width" placeholder="Enter Your Name" name="username" value="<?php echo $username; ?>" />
                    </div>
                    <div class="mb-3">
                        <input autocomplete="off" type="email" class="form-control full-width" placeholder="Enter Your Email" name="email" value="<?php echo $email; ?>" />
                    </div>
                    <div class="mb-3">
                        <input autocomplete="off" type="number" class="form-control full-width" placeholder="Enter Your Phone No." name="phone" value="<?php echo $phone; ?>" />
                    </div>
                    <div class="mb-3">
                        <input autocomplete="off" type="text" class="form-control full-width" placeholder="Enter Your Address" name="address" value="<?php echo $address; ?>" />
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success w-50" name="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
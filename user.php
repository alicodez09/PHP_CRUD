<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "insert into `crud` (username,email,phone,address) values('$username','$email','$phone','$address')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Users</title>
    <!-- Bootstarp CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <h2 class="mb-3">User Information</h2>
                <form method="post">
                    <div class="mb-3">
                        <input autocomplete="off" type="text" class="form-control full-width" placeholder="Enter Your Name" name="username" />
                    </div>
                    <div class="mb-3">
                        <input autocomplete="off" type="email" class="form-control full-width" placeholder="Enter Your Email" name="email" />
                    </div>
                    <div class="mb-3">
                        <input autocomplete="off" type="number" class="form-control full-width" placeholder="Enter Your Phone No." name="phone" />
                    </div>
                    <div class="mb-3">
                        <input autocomplete="off" type="text" class="form-control full-width" placeholder="Enter Your Address" name="address" />
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success w-50" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<!-- Bootstarp JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

</html>
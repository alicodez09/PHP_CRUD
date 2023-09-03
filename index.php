<?php
include "connect.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <!-- Bootstarp CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <button class="btn btn-success mt-5">
            <a href="user.php" class="text-white text-decoration-none">Create User</a>
        </button>
        <div class="table-responsive-sm mt-4 border-3">
            <table class="table table-striped  table-bordered table-hover">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "Select * from `crud`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $username = $row['username'];
                            $email = $row['email'];
                            $phone = $row['phone'];
                            $address = $row['address'];
                            echo '
                        <tr class="text-center">
                            <th scope="row">' . $id . '</th>
                            <td>' . $username . '</td>
                            <td>' . $email . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $address . '</td>
                            
                            <td>
                            <button class="btn btn-sm btn-info"><a href="update.php?update_data=' . $id . '" class="text-white text-decoration-none">Update</a></button>
                            <button class="btn btn-sm btn-danger"><a href="delete.php?id=' . $id . '" class="text-white text-decoration-none">Delete</a></button>
                            </td>
                        </tr>
                             ';
                        }
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</body>
<!-- Bootstarp JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

</html>
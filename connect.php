<!-- Connecting Database -->
<?php
    $con = new mysqli('localhost', 'root', 'Comp0944', 'crud_operation');
    if ($con) {
        echo "Database is Connected";
    }else{
        die(mysqli_error($con));
    }
?>
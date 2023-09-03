<!-- Connecting Database -->
<?php
$con = new mysqli('localhost', 'root', 'Comp0944', 'crud_operation');
if (!$con) {
    die(mysqli_error($con));
}

?>
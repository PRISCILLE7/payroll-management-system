<?php
    include_once 'config/config.php';
    var_dump($_POST);

    $id = $_GET['id'];
    $q = "DELETE FROM branch WHERE Branch_id = '$id'";
    $status = mysqli_query($connection_obj, $q);
    
    if ($status) {
        header("location:./branch_view.php");
    } else {
        header("location:./500.php");
    }
?>

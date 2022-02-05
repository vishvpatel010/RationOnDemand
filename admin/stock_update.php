<?php
    session_start();
    include '../includes/db.php';
    $id = $_REQUEST['id'];
    $result = mysqli_query($con, "SELECT *FROM officerdata where `id` = '$id'");
    $row = mysqli_fetch_assoc($result);
    $pincode = $row['pincode'];
    $result1 =mysqli_query($con,"SELECT *FROM userdata where `pincode` = '$pincode'");
    $count = mysqli_num_rows($result1);
    $result2 = mysqli_query($con, "UPDATE officerdata SET `stock` = '$count' WHERE `id` = '$id'");
    $result = mysqli_query($con,"UPDATE userdata SET `delivery_status` = 'NO' where `pincode` = '$pincode'");
    if($result2)
    {
        $_SESSION = "Stock Updated Successfully";
        header("Location:officer_record.php");
    }
?>
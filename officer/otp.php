<form action="" method="POST">
    <label for="otp">OTP</label>
    <input type="number" name="otp" placeholder="000000"><br>
    <input type="submit" name="submit">
</form>
<?php
session_start();
include '../includes/db.php';
if(isset($_POST['submit']))
{
    $user_otp = $_POST['otp'];
    $otp = $_SESSION['otp'];
    if($user_otp == $otp)
    {
        $id = $_SESSION['id'];
        $result=mysqli_query($con,"UPDATE `userdata` SET `delivery_status`='YES' where `id`='$id'");
        $result1 = mysqli_query($con, "INSERT INTO delivery_status (`id`) VALUES ('$id')");
        $result3 = mysqli_query($con,"SELECT *FROM userdata WHERE `id`= '$id'");
        $row = mysqli_fetch_assoc($result3);
        $pincode = $row['pincode'];
        $result2 = mysqli_query($con,"UPDATE `officerdata` SET `stock` = (stock-1) where `pincode` = '$pincode'");
        if($result && $result1 && $result2)
        {
            $_SESSION['status']="Update Succesfully";
            header('Location:index.php');
        }
        
    }
    else
        {   
            echo "Please Enter Valid OTP!";
        }
}
?>
<?php
session_start();
$con = mysqli_connect("localhost","root","","employees");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
if(isset($_POST['update_user']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    $name = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['phoneNum']);
    $Salary = mysqli_real_escape_string($con, $_POST['fullName']);

    $query = "UPDATE amployeestable SET nameOfemployee='$name', AddressOfEmployee='$address', Salary='$Salary' WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "user Updated Successfully";
        header("Location: landing.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Updated";
        header("Location: landing.php");
        exit(0);
    }

}


if(isset($_POST['save_user']))
{
    $name = mysqli_real_escape_string($con, $_POST['nameOfemployee']);
    $address = mysqli_real_escape_string($con, $_POST['AddressOfEmployee']);
    $Salary = mysqli_real_escape_string($con, $_POST['Salary']);

    $query = "INSERT INTO amployeestable (nameOfemployee,AddressOfEmployee,salary) VALUES ('$name','$address','$Salary')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "user Created Successfully";
        header("Location: landing.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Created";
        header("Location: landing.php");
        exit(0);
    }
}
?>
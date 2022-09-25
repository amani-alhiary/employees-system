<?php
$id=$_GET["id"];
echo '<script>alert("<h3> Are you sure you want to delete this employee??</h3>")</script>';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employees";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "DELETE FROM amployeestable WHERE id=$id";
    $conn->query($sql);

    
    $_SESSION['message'] = "Employee is deleted";
    header("Location: landing.php");
    exit(0);
?>
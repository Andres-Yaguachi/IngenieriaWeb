<?php
include('../db/config.php');

 $userName=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $password=md5($password);
 $rol=$_POST['rol'];

 $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

  $sql="INSERT INTO `user`(`name`, `email`, `password`, `rol`) VALUES ('$userName','$email','$password','$rol')";  
  $resql=mysqli_query($conn, $sql);

echo '<script>alert("Datos Guardados correctamente...");</script>';
echo "<script>location.href='Login.html'</script>";
?>s
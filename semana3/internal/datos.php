<?php
include('../db/config.php');
 $userName=$_POST['username'];
 $password=$_POST['password'];
 $password=md5($password);
 echo $userName;
 echo $password;
 // CREATE
 echo DBHOST;
 $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
 /*$sql="INSERT INTO `user`(`id`, `name`, `email`, `password`, `rol`) VALUES ('5','Santi','villashort@utpl','sdvs','1')";
*/

 $sql="select * from user"
 $resql=mysqli_query($conn, $sql);
    if ($resultado->num_rows > 0) {
                echo "<table border=1>";
                while($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['id'] . "</td>";
                    echo "<td>" . $fila['name'] . "</td>";
                    echo "<td>" . $fila['email'] . "</td>";
                    echo "<td>" . $fila['password'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<tr><td colspan='4'>No hay registros</td></tr>";
        }
?>
<?php

//same for students
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "arucsd_mysql";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

$id = $_GET['id'];

$stuid=$_POST['StudentID'];
$stufn=$_POST['FirstName'];
$stuln=$_POST['Lastname'];
$stuag=$_POST['Age'];
$stugdr=$_POST['Gender'];
$stugrd=$_POST['Currentgrade'];

mysqli_query($conn,"update `students` set StudentID='$stuid', FirstName='$stufn', Lastname='$stuln', Age='$stuag', Gender='$stugdr', Currentgrade='$stugrd' where id='$id'");
header('location:edit_databasestu.php');


?>
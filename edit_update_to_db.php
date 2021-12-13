<?php

// Connection to db
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "arucsd_mysql";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// fetching and storing id row from datbase into variable.
$id = $_GET['id'];

// creating variables and usign the post method to get the new entrys added from the edit.php page.
$staffid=$_POST['StaffID'];
$stafffn=$_POST['FirstName'];
$staffln=$_POST['Lastname'];
$staffag=$_POST['Age'];
$staffgdr=$_POST['Gender'];
$staffpos=$_POST['Position'];

// creating a sql queery to update each row to the variable above witch are the new user updated inputs, 
// then connecting it to the db
// then i am using ht header to rederect the user back to the edit_database page.

mysqli_query($conn,"update `staff` set StaffID='$staffid', FirstName='$stafffn', Lastname='$staffln', Age='$staffag', Gender='$staffgdr', Position='$staffpos' where id='$id'");
header('location:edit_database.php');


?>
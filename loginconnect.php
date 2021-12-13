<! HTML code explained on previouse pages. >

<html>

    <head>
        <title>aru-Cyber-Security.ac.uk/ContactUs</title>
        <link rel="stylesheet" href=Style00.css> 
    </head>

<body text="white">


<nav class="navigation-bar">

<img src="aruu.jpg" alt="navbarlogo" class="logo">
<a href ="index.php" class="button">Back to home</a>

</nav>

<body>
    

    <section class="content">
        <h1 class="title"></h1>
        <div class="loginandregpos">

    
    <br>
    <br>


<?php

// Here i am defining variables to put my database conenction info in.
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "login";

// Here i have stored teh sql connection string into a variable.
$conn = mysqli_connect($serverName, $userName, $password, $dbName);


// I have used the post method to retrive the information assosiated witht the names,
// the names are from the login.php page are are the user input into the log in fileds.
$username = $_POST['username'];
$password = $_POST['password'];

// Here i have my sql query, it is in lower case because i when the key words such as select or where,
$sql = "select *from users where Username = '$username' and Password = '$password'";

// Here i am storing my data and connection into a variable named data.
$data = mysqli_query($conn, $sql);
// Here i am using mysqli_fetch_array to allow me to acces the data from the query.
// I have used the mysqli_assoc function to to make the aray work as if it was fetch_associated.
$row = mysqli_fetch_array($data, MYSQLI_ASSOC);
// This finds the number of rows from the users table.
$count = mysqli_num_rows($data);

// if there is 1 row exactly equal to the input,
// then the user will get a welcom message.
if($count == 1){
    echo "";

?>  <! Here i have indednted a button to the database for the users who have sussefuly loged in. >
    <h1>Welcome back</h1>
    <br>
    <br>
     <a href="Database.php" style="text-decoration: none;"> <button class="boxbutton"> Go to Database </button></a>


<?php
    
}// If the row is not the exact same,
// The user is returend a message and no acces to the databse is premited.
else{
    echo "Invalid username or password";
    
}

?>

<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
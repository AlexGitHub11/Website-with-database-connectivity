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
        <h1 class="title">Register here </h1>
        <div class="loginandregpos">


<?php

// Here is my php code to connect my registration page to my login database, here is where the useres input from the registration page is sent and stored in the,
// respective rows of the database.

// Firsty i have used the $_POST find the username and password,
$username = $_POST['username'];
$password = $_POST['password'];

// Here is an if statment witch consists of if our two variables are not empty,
// then the database connection is started,
// Firstly i define variables with the server name, user name, password and database name. 
// the username and password are both defult and the dbname is the name i used when creating my db in phpmyadmin. 
if (!empty($username)){
    if (!empty($password)) {
        $serverName = "localhost";
        $dbuserName = "root";
        $dbpassword = "";
        $dbName = "login";

         // I have stores the connection variables in the variable conn,
         // with the mysqli_connect witch witch makes the variable represent the connection to the login database on the server.
        $conn = mysqli_connect($serverName, $dbuserName, $dbpassword, $dbName);
        
        // Here is an if statment for a connection error,
        // if the databsae can connect it produces a message. 
        if(mysqli_connect_error()){
            die('Could not connect to database ('.
                mysqli_connect_errno().')' .
                mysqli_connect_error());       
        }
        // Here is the SQL code to unsert the input into the Username and Password rows in the db,
        // Insert info into database users, user input username into username row and user input password into password row,
        // if the connection and quary gets completed return message,
        // If not return error with the sql string,
        // Finally close connection ot db.
        // If password field is left blank, produce a message and then exit php script same for username field.
        else {
            $sql = "INSERT INTO users (Username, Password) values ('$username', '$password')";
            if (mysqli_query($conn, $sql)){
                echo "New user has been registered successfuly! ";
            }
            
            else{
                echo "" . mysqli_error($conn);
            }
            $conn->close();
        }
    }
    else {
        echo "password filed required.";
        die();
    }
}
else {
    echo "Username filed required";
    die();
}   

?>

<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
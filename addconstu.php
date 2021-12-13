<! Same for students. >


<html>

    <head>
        <title>aru-Cyber-Security.ac.uk/ContactUs</title>
        <link rel="stylesheet" href=Style00.css> 
    </head>

<body text="white">

<section class="content">

<nav class="navigation-bar">

<img src="aruu.jpg" alt="navbarlogo" class="logo">
<a href ="Database.php" class="button">Back to Database home</a>

</nav>


<?php

if(isset($_POST['submit'])){

    $studentident = $_POST['studentid'];
    $studentfn = $_POST['firstname1'];
    $studentln = $_POST['lastname1'];
    $studentage = $_POST['age1'];
    $studentgdr = $_POST['gender1'];
    $studentgrd = $_POST['grade1'];

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "arucsd_mysql";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

   
    $sql = "INSERT INTO students(StudentID, FirstName, Lastname, Age, Gender, Currentgrade) VALUES('$studentident','$studentfn','$studentln','$studentage','$studentgdr','$studentgrd')";

    
    if (mysqli_query($conn, $sql)){
        echo "Uploaded";
    }
    else{
        echo "An error occurred" . mysqli_error($conn);

    }

}

?>

<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
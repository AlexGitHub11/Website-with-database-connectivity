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

// Here i have added this isset,
// thsi has been added to stop the undifined index message showing,
if(isset($_POST['submit'])){



    // I have used the post method to retrive the information assosiated witht the names,
    // the names are from the add_to_database.php page within the html code.
    // I have then put them in variables,
    // now all the usern input is stored in thies variables
    $staddident = $_POST['staffid'];
    $stafffn = $_POST['firstname'];
    $staffln = $_POST['lastname'];
    $staffage = $_POST['age'];
    $staffgdr = $_POST['gender'];
    $staffpstn = $_POST['position'];

    // connection process explained on previouse page.
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "arucsd_mysql";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    // Here we have our sql code that is inserting into the staff table in the arucsd_mysql database,
    // It is finding all the column names and assigning htem values of the variables we definded erlier witch contain the user inputs,
    // i have used the mysqli_query to run the query agaisnt the database.
    $sql = "INSERT INTO staff(StaffID, FirstName, Lastname, Age, Gender, Position) VALUES('$staddident','$stafffn','$staffln','$staffage','$staffgdr','$staffpstn')";

    // Here is a message to let the user know if the upload was completed.
    // If the query is conneted and excecuted it will produce uploaded,
    // else it will show error.
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
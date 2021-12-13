<html>


<head>
    <title>aru-Cyber-Security.ac.uk/ContactUs</title>
    <link rel="stylesheet" href=Style00.css> 
</head>

<nav class="navigation-bar">

<img src="aruu.jpg" alt="navbarlogo" class="logo">
<a href ="Database.php" class="button">Back to Database home</a>

</nav>

<body text="white">

<section class="content">

<table class="table1">
    <! Here i have used the thead tag, this helps group my headings. >
    <thead>
        <th>Staff-ID</th>
        <th>Staff-FirstName</th>
        <th>Staff-LastName</th>
        <th>Staff-Age</th>
        <th>Staff-Gender</th>
        <th>Staff-Position</th>
        <th>Edit-Staff</th>
    </thead>

    <?php

    // Connection to server variables.
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "arucsd_mysql";

    // using mysqli_connect and storing in variable,
    // explained full process on other pages.
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if(mysqli_connect_errno()){
        echo "Could not connect to databse!";
        exit();
    }
    echo "Connection to database successful!";

    // here i have stored my query to fetch all data from the staff databse,
    // and have stored this in a variable.
    $sql= mysqli_query($conn, "select * from `staff`");

    // 
    while($data= mysqli_fetch_array($sql)){
        ?>
        <tr>
        <td><?php echo $data['StaffID']; ?></td>
        <td><?php echo $data['FirstName']; ?></td>
        <td><?php echo $data['Lastname']; ?></td>
        <td><?php echo $data['Age']; ?></td>
        <td><?php echo $data['Gender']; ?></td>
        <td><?php echo $data['Position']; ?></td>
        <! Here i am linking the edit text on each row to work as a button, this will go to the edit.php page.>
        <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
        </tr>

        <?php
    }
?>
   
</table>
           

<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
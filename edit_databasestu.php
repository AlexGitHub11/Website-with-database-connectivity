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
    
    <thead>
        <th>Student-ID</th>
        <th>Student-FirstName</th>
        <th>Student-LastName</th>
        <th>Student-Age</th>
        <th>Student-Gender</th>
        <th>Student-Position</th>
        <th>Edit-Student</th>
    </thead>

    <?php

    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "arucsd_mysql";

  
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if(mysqli_connect_errno()){
        echo "Could not connect to databse!";
        exit();
    }
    echo "Connection to database successful!";

    
    $sql= mysqli_query($conn, "select * from `students`");

    // 
    while($data= mysqli_fetch_array($sql)){
        ?>
        <tr>
        <td><?php echo $data['StudentID']; ?></td>
        <td><?php echo $data['FirstName']; ?></td>
        <td><?php echo $data['Lastname']; ?></td>
        <td><?php echo $data['Age']; ?></td>
        <td><?php echo $data['Gender']; ?></td>
        <td><?php echo $data['Currentgrade']; ?></td>

        <td><a href="editstu.php?id=<?php echo $data['id']; ?>">Edit</a></td>
        </tr>

        <?php
    }
?>
   
</table>
           

<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
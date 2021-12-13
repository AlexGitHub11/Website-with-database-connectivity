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
                echo "Refresh after deleting an entry to see the updated data!";
                
                // Here i am storing the data from my staff database and the connection to the databsae.
                $result = mysqli_query($conn, "SELECT * FROM staff");

                ?>

<! Here i have created a table that will be displayed on the front end, >
<! i have also linked it to a ccs class to format and style it. >
<table class="table1">
                <tr>
                    <td><u>Staff-ID</u></td>
                    <td><u>Staff-FirstName</u></td>
                    <td><u>Staff-LastName</u></td>
                    <td><u>Staff-Age</u></td>
                    <td><u>Staff-Gender</u></td>
                    <td><u>Staff-Position</u></td>
                    <td><u>Delete-staff</u></td>
                </tr>    

                <?php

                
                // Below i have stored the the data from the db and used the fetch array function,
                // to fetch the rows of data.

                
                while($data = mysqli_fetch_array($result)) {
                ?>
                
                <! Here i am calling the data from the database using the table headings adn then showing the results on the screen under there, >
                <! corrisponding tables from the above table. >
                <tr>
                    <td><?php echo $data['StaffID'];?></td>
                    <td><?php echo $data['FirstName'];?></td>
                    <td><?php echo $data['Lastname'];?></td>
                    <td><?php echo $data['Age'];?></td>
                    <td><?php echo $data['Gender'];?></td>
                    <td><?php echo $data['Position'];?></td>

                    <! Here is the delete button i have referanced the page so the programme can find the delete function. >
                    <td><a href="delete_from_database.php?StaffID=<?php echo $data["StaffID"]; ?>" class="delete">Delete</a></td>
                </tr>  
                <?php
                 
                }
                ?>
                
                <?php
                // Used this to stop undifined index error message.
                if(isset($_GET['StaffID'])){

                // Here i have stored the sql code to delete the row in the database,
                // if the row is not deleted it prodices a error message and a function to show that error.
                $sql = "DELETE FROM staff WHERE StaffID='" . $_GET['StaffID'] . "'";
                if (mysqli_query($conn, $sql)) {
                    echo "";
                }else{
                    echo "" . mysqli_error($conn);
                }

                // Lastly i close the connection to the database.
                $conn->close();
                }
                ?>
                      
</table>



                <?php
                

                // Same for students table.
                $serverName = "localhost";
                $userName = "root";
                $password = "";
                $dbName = "arucsd_mysql";

                $conn = mysqli_connect($serverName, $userName, $password, $dbName);

                $result = mysqli_query($conn, "SELECT * FROM students");

                ?>

                <table class="table1">
                <tr>
                    <td><u>Student-ID</u></td>
                    <td><u>Student-FirstName</u></td>
                    <td><u>Student-LastName</u></td>
                    <td><u>Student-Age</u></td>
                    <td><u>Student-Gender</u></td>
                    <td><u>Student-Position</u></td>
                    <td><u>Delete-student</u></td>
                </tr>    

                <?php

                $number = 0;
                while($data = mysqli_fetch_array($result)) {
                ?>

                <tr>
                    <td><?php echo $data['StudentID'];?></td>
                    <td><?php echo $data['FirstName'];?></td>
                    <td><?php echo $data['Lastname'];?></td>
                    <td><?php echo $data['Age'];?></td>
                    <td><?php echo $data['Gender'];?></td>
                    <td><?php echo $data['Currentgrade'];?></td>
                    <td><a href="delete_from_database.php?StudentID=<?php echo $data["StudentID"]; ?>" class="delete">Delete</a></td>
                </tr>  
                <?php
                $number++;   
                }
                ?>

                <?php
                // Used this to stop undifined index error message.
                if(isset($_GET['StudentID'])){
                

                $sql = "DELETE FROM students WHERE StudentID='" . $_GET['StudentID'] . "'";
                //$sql = "DELETE FROM students WHERE StudentID="' . $_GET['StudentID'] . "'";
                if (mysqli_query($conn, $sql)) {
                    echo "";
                }else{
                    echo "" . mysqli_error($conn);
                }

                $conn->close();

                }
                ?>
                    
                </table>

<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
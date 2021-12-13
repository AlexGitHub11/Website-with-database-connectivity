<html>

    <head>
        <title>aru-Cyber-Security.ac.uk/ContactUs</title>
        <link rel="stylesheet" href=Style00.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="aruu.jpg" alt="navbarlogo" class="logo">
    <a href ="Database.php" class="button">Back to Database home</a>

    </nav>

        <body>


        <section class="content">

            <! Setting up two tables to display all content from both tables in SQL database. >
            <! Added a class for the CSS and have used the underline method for the titles. >
            <table class="table1">
                <tr>
                    <th><u>Staff-ID</u></th>
                    <th><u>Staff-FirstName</u></th>
                    <th><u>Staff-LastName</u></th>
                    <th><u>Staff-Age</u></th>
                    <th><u>Staff-Gender</u></th>
                    <th><u>Staff-Position</u></th>
                </tr>

                <! Here i will write my php code to connect my SQL database to my website. >
                <?php
                

                // Firstly i define variables with the server name, user name, password and database name. 
                // the username and password are both defult and the dbname is the name i used when creating my db in phpmyadmin. 
                $serverName = "localhost";
                $userName = "root";
                $password = "";
                $dbName = "arucsd_mysql";

                // I have stores the mysqli_connect string in the variable conn.
                $conn = mysqli_connect($serverName, $userName, $password, $dbName);

                // Here is a simple if staytment, if the connect_errno function os produced then a message will display to say no connection,
                // and then it will exit the connection, if the connection is successful then a message will display to make the user aware.
                if(mysqli_connect_errno()){
                    echo "Could not connect to databse!";
                    exit();
                }
                echo "Connection to database successful!";

                // Here i have put all data from my db in a variable,
                // Then i have stored the conection to the database in a variable,
                // This is so i can execute querys.
                $sql = "SELECT * From staff ";
                $result = $conn->query($sql);

                // Here is the php code to display my table content,
                // Firstly a if statment to say if the is more rows than 0 execute,
                // We use the fetch assoceated rows within the databse and echo on the screen the contents next to the html tags we have added in,
                // We use the row function to call the respective data and use . to concatinate them all i none line,
                // If number of rows is 0 then a no result found statment is produced,
                // I am using html table tags to pu this data in the html table outside the php tags.
                if ($result->num_rows > 0) {
                    while($row = $result-> fetch_assoc()) {
                        echo "<tr><td>" . $row["StaffID"] . "</td><td>" . $row["FirstName"] . "</td><td>" . $row["Lastname"] . "</td><td>" . $row["Age"] . "</td><td>" . $row["Gender"] . "</td><td>" . $row["Position"] . "</td></tr>";
                    }   
                } 
                else {
                    echo "No Results found!";
                }
                
                $conn -> close();
                ?>

                <table class="table1">
                <tr>
                    <th><u>Student-ID</u></th>
                    <th><u>Student-FirstName</u></th>
                    <th><u>Student-LastName</u></th>
                    <th><u>Student-Age</u></th>
                    <th><u>Student-Gender</u></th>
                    <th><u>Student-grade</u></th>
                </tr>

                <?php
                

                $serverName = "localhost";
                $userName = "root";
                $password = "";
                $dbName = "arucsd_mysql";

                $conn = mysqli_connect($serverName, $userName, $password, $dbName);

                //Same for students table in database.
                $sql1 = "SELECT * From students";
                $result1 = $conn->query($sql1);
                
                
                if ($result1->num_rows > 0) {
                    while($row = $result1-> fetch_assoc()) {
                        echo "<tr><td>" . $row["StudentID"] . "</td><td>" . $row["FirstName"] . "</td><td>" . $row["Lastname"] . "</td><td>" . $row["Age"] . "</td><td>" . $row["Gender"] . "</td><td>" . $row["Currentgrade"] .  "</td></tr>";
                    }   
                } 
                else {
                    echo "No Results found!";
                }
                
                $conn -> close();

                ?>            

                </table> 

            
        </body>

    <footer class="footer">
        ARU Cyber Security Division, at the forfront of a digital age.
    </footer>



</html>
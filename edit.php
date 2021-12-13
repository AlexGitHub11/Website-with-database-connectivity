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

<?php

// Connection to db
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "arucsd_mysql";

// connection to db
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// fetching and storing id row from datbase into variable.
$id = $_GET['id'];
// Creating a query, conencting to database and selecting all data from staff database,
// wher id row is equal to the id variable we just created.
$sql = mysqli_query($conn, "select * from `staff` where id='$id'");
// here i am fetchign the rows from the db and storing them as array in the data variable.
$data = mysqli_fetch_array($sql);

?>

<html>

<section class="content">
        <! Title of page.>
        <h1 class="title">Edit a row here </h1>

    <! Here is a form with input boxes for each row in the table here you will chang the entry adn then use the submit button to upload the updated inforation back into the table, >
    <! the entry the user selected will fill the boxes first beacause we are echo the data into them.>
    <! the update sql code us on the edit_update_to_db/php page.>
    <! I have also added a class to arrange the boxes in a better format.>
    <form class="editpos" method = "POST" action="edit_update_to_db.php?id=<?php echo $id; ?>">
        <label>Staff-ID: </label><input type="text" value="<?php echo $data['StaffID']; ?>"name="StaffID">
        <label>Staff-FirstName: </label><input type="text" value="<?php echo $data['FirstName']; ?>"name="FirstName">
        <label>Staff-LastName: </label><input type="text" value="<?php echo $data['Lastname']; ?>"name="Lastname">
        <label>Staff-Age: </label><input type="text" value="<?php echo $data['Age']; ?>"name="Age">
        <label>Staff-Gender: </label><input type="text" value="<?php echo $data['Gender']; ?>"name="Gender">
        <label>Staff-Position: </label><input type="text" value="<?php echo $data['Position']; ?>"name="Position">
        <input type="submit" name="submit">
        <a href="edit_database.php">Go Back</a>
    </form>



</html>
    
</table>

                

<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
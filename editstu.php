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

//same for students
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "arucsd_mysql";


$conn = mysqli_connect($serverName, $userName, $password, $dbName);


$id = $_GET['id'];

$sql = mysqli_query($conn, "select * from `students` where id='$id'");

$data = mysqli_fetch_array($sql);

?>

<html>

<section class="content">
        <! Title of page.>
        <h1 class="title">Edit a row here </h1>

   
    <form class="editpos" method = "POST" action="edit_update_to_db_stu.php?id=<?php echo $id; ?>">
        <label>Student-ID: </label><input type="text" value="<?php echo $data['StudentID']; ?>"name="StudentID">
        <label>Student-FirstName: </label><input type="text" value="<?php echo $data['FirstName']; ?>"name="FirstName">
        <label>Student-LastName: </label><input type="text" value="<?php echo $data['Lastname']; ?>"name="Lastname">
        <label>Student-Age: </label><input type="text" value="<?php echo $data['Age']; ?>"name="Age">
        <label>Student-Gender: </label><input type="text" value="<?php echo $data['Gender']; ?>"name="Gender">
        <label>Current=Grade: </label><input type="text" value="<?php echo $data['Currentgrade']; ?>"name="Currentgrade">
        <input type="submit" name="submit">
        <a href="edit_databasestu.php">Go Back</a>
    </form>



</html>
    
</table>

                

<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
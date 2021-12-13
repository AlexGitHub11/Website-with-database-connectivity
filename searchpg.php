<?php

// On this page i have used a differant type of database connection method,
// here i have used the PDO (PHP data object) method, i have done this because when i was trouble shooting the method fetch all,
// was not being recognised, i later found out this was becouse i was usign the wrong connection method.

// Here i have defiend the corisponding values with a variable, similar to the mysqli_connect ones.
define("DB_HOST", "localhost");
define("DB_NAME", "arucsd_mysql");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");


// Here my programe will try to connect to the database using the connection string in the conn variable.
// I have the try catch incase the databse cant connect them the catch will exit the programme and display an error message.
try{            
  $conn = new PDO(
      "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME, DB_USER, DB_PASSWORD, [
      
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]   
    );
} catch (Exception $ex) {exit($ex->getMessage());}


// Here is my sql statment to get all data from the staff table where the user input is simular to any value in the rows.
$sql = $conn->prepare("SELECT * FROM `staff` WHERE `StaffID` LIKE ? OR `FirstName` LIKE ? OR `Lastname` LIKE ? OR `Age` LIKE ? OR `Gender` LIKE ? OR `Position` LIKE ? ");

// the % oporator is used a a placment holder much like python, here it is attatching to either side of the user input so it can be compared to the table.
$sql->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%"]);

// here we have stored all the recived data in a variable witch is used on the search_database.php page.
$results = $sql->fetchAll();


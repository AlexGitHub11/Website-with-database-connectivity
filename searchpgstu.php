<?php

// same as searchpg.php only change is student databse.

define("DB_HOST", "localhost");
define("DB_NAME", "arucsd_mysql");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

try{            
  $conn = new PDO(
      "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME, DB_USER, DB_PASSWORD, [
      
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]   
    );
} catch (Exception $ex) {exit($ex->getMessage());}

$sql = $conn->prepare("SELECT * FROM `students` WHERE `StudentID` LIKE ? OR `FirstName` LIKE ? OR `Lastname` LIKE ? OR `Age` LIKE ? OR `Gender` LIKE ? OR `Currentgrade` LIKE ? ");

$sql->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%"]);

$results = $sql->fetchAll();
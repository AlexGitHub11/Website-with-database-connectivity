<! same as search_database.php, only change is student database.>

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

<! Here i have created a form with an input field, >
<! this is so a user can input a word they wish to search.>
<! next i have a search button.>
<! I have also linked the action to the php code on this page.>
<form method ="post" action ="serchdatabasestu.php">
    <! message>
    <h1> Search for a user below </h1>
    <! the required filed makes it so an input has to be there befre the button will work.>
    <input type="text" name ="search" required/>
    <input type="submit" value ="Search"/>
</form>

<?php

if (isset($_POST["search"])){
    require "searchpgstu.php";
    if (count($results) > 0) {
        foreach ($results as $r) {
            printf("<div>%s <div>%s <div>%s <div>%s <div>%s %s</div>", $r['StudentID'], $r['FirstName'], $r['Lastname'], $r['Age'], $r['Gender'], $r['Currentgrade']);
        
    }} else{ 
        echo "No result found in database";
    }
}

?>

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
<form method ="post" action ="search_database.php">
    <! message>
    <h1> Search for a user below </h1>
    <! the required filed makes it so an input has to be there befre the button will work.>
    <input type="text" name ="search" required/>
    <input type="submit" value ="Search"/>
</form>

<?php

// Firsty the isset stops any undifined index error codes coming due to the variables are called and not static on the webpage,
// i have linked the searchpg page with has the code to connect to the db and retrive the entrys,
// if there is any (more than 0 ) results then for each result this programe will show the entrys, here you can see we are calling it within divs.
// i have done this by iterating throgh a loop by using the foreach, this is looping through all entrys in the results variable from the db.
// presentation, the dots are there to concatinate the results together,
// if thre are no results a message will be displayed.
// the printf function is needed so we can format the string alongside the %s.
if (isset($_POST["search"])){
    require "searchpg.php";
    if (count($results) > 0) {
        foreach ($results as $r) {
            printf("<div>%s <div>%s <div>%s <div>%s <div>%s %s</div>", $r['StaffID'], $r['FirstName'], $r['Lastname'], $r['Age'], $r['Gender'], $r['Position']);
        
    }} else{ 
        echo "No result found in database";
    }
}

?>



<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
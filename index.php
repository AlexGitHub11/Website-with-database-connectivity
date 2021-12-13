<! First i need to declare the file HTML. >

<!DOCTYPE html>

<! declare the parameters for the code. >

<html>

    <! Code within head tags defines the doc title  and style. >
    <head>

        <! Title is show in the browser bar. >
        <title>aru-Cyber-Security.ac.uk/Home</title>

        <! To import the css code we need to define the relationship between our two files both html adn css. >
        <link rel="stylesheet" href=Style00.css> 
    </head>

    <! Set text to white. >
    <body text="white">

    <! Creating the navigation bar. >
    <nav class="navigation-bar">

    <! Using a hreft to link page and using a class for the css of the buttons, finally adding teh text to display within the buttons. >
    <img src="aruu.jpg" alt="navbarlogo" class="logo">
    <a href ="ContactUs.php" class="button">Contact us</a>
    
    <a href ="Login.php" class="button">Login</a>
    <a href ="Index.php" class="button">Home</a>

</nav>

<! Here i have created a section where i will write my main content, i have done this becosue it allows me to edit the
positioning and font in css. >
<section class="content">
    <h1 class="title">Welcome to ARU Cyber Security division </h1>



<! Here i have created a divide, i have done this so i can have my image and button in the same class, >
<! this is because i want the button to sit ontop of the image, i have then set the image and teh button, >
<! i have also linked the button to the respective page. >
<div class="container">
    <img src="indexdrop.jpg" alt="cyber">
    <a href="Login.php"><button class="btn">Login/Register</button></a>
</div>



<! Here i have added my footer text. >
<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>


    </body>


</html>
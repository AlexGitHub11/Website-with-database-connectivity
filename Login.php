<html>

    <head>
        <title>aru-Cyber-Security.ac.uk/Login</title>
        <link rel="stylesheet" href=Style00.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">
    <img src="aruu.jpg" alt="navbarlogo" class="logo">
    <a href ="ContactUs.php" class="button">Contact us</a>
    
    <a href ="Login.php" class="button">Login</a>
    <a href ="Index.php" class="button">Home</a>

</nav>


<body>
    

    <section class="content">
        <h1 class="title">Log into your account here </h1>

        <! Here i am creating a div, this will create a section in my code. >
        <! I have created a class so i can ajust positioning and style. >
        <div class="loginandregpos">

            <! Here i am creating a username and password input box, >
            <! and text to the left to indicate, >
            <! Firstly i have used the form function witch will send the user to loginconnect>
            <! Next i have used the post method witch will send the data to my server, >
            <! Then i have created a table the td tags reprosent where my text will be aligned on the left, >
            <! and the tr tags are used for table rows where the input will be passed. >
            <! Next i have created another box with the text of login, >
            <! Next i have created a link to teh register page with the text join today, >
            <! this is for new users to register. >
            <form method="POST" action="loginconnect.php" >

                <table>
                    <tr>
                        <td>Username: </td>
                        <td>
                            <input type="text" name="username">
                        </td>
                    </tr>

                    <tr>
                        <td>Password: </td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit"
                            value="Login">
                        </td>
                        <td>
                            Join today: <a href="register.php">Register here!</a>

                        </td>

                    </tr>
                    
                </table>


                
            </form>

        </div>

    
    <! Here i am going to create the ARU Cyber Devision logo in SVG,
    firstly i defined the are for my SVG, then created a blue rectangle with a white border,
    next i positioned the rectangle and created two sets of text in one yellow and one black,
    i then used the x and y axis to position it on the screen. >
    
    <svg class="svglogo" width="500" height= "500">

    <rect width="150" height="70" x="-500" y="-170" style="fill:rgb(59, 101, 238);stroke-width:3;stroke:white" />
    <text fill="yellow" font-size="30" x="-490" y="-120">ARU</text>
    <text fill="black" font-size="30" x="-430" y="-120">/CSD</text> 
    </svg>

    

</body>
    
<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>
    
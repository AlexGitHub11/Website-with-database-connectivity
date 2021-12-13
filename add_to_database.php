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


<section class="content">
        <h1 class="title">Upload new entrys below </h1>

<form method="POST" action="addconn.php" >
<table class="addtodbpos">
        <tr>
            <td>Staff-ID : </td>
            <td>
                <input type="text" name="staffid">
            </td>
        </tr>

        <tr>
            <td>First-Name : </td>
            <td>
                <input type="text" name="firstname">
            </td>
        </tr>

        <tr>
            <td>Last-Name : </td>
            <td>
                <input type="text" name="lastname">
            </td>
        </tr>

        <tr>
            <td>Age : </td>
            <td>
                <input type="text" name="age">
            </td>
        </tr>

        <tr>
            <td>Gender : </td>
            <td>
                <input type="text" name="gender">
            </td>
        </tr>

        <tr>
            <td>Position : </td>
            <td>
                <input type="text" name="position">
            </td>
        </tr>

        <tr>
            
            <td>
                <! Here we are adding our save button fo the above fields. >
                <! This button will be fowarded to addconn.php .>
                <input type ="submit" name="submit" value="Save">
            </td>
        </tr>
        
        
</table>




<footer class="footer">
    ARU Cyber Security Division, at the forfront of a digital age.
</footer>

</html>
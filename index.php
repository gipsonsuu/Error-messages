<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Signup</h2>
    <form action="include/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder="Firstname">
        <input type="text" name="last" placeholder="Lastname">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="pwd" placeholder="Password">
        <button type="Submit" name="Submit">Sign up</button>
    </form>
    <?php
    $fullurl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strops($fullurl, "signup=empty") == true) {
        echo "<P class='error'>You did not fill in all fields!</P>";
        exit();
    }

    elseif (strops($fullurl, "signup=char") == true) {
        echo "<P class='error'>You used invalid characters!</P>";
        exit();
    }

    elseif (strops($fullurl, "signup=email") == true) {
        echo "<P class='error'>You used an invalid e-mail!</P>";
        exit();
    }

    elseif (strops($fullurl, "signup=success") == true) {
        echo "<P class='success'>You have been sigend up!</P>";
        exit();
    }
    
    ?>
</body>
</html>
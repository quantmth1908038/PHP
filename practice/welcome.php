<?php
session_start();

if (isset($_SESSION['fullname']) && isset($_SESSION['surname']))
{
    $fullname = htmlspecialchars($_SESSION['fullname']);
    $surname = htmlspecialchars($_SESSION['surname']);

    echo "Welcome back $fullname.<br> Your full name is $fullname $surname.<br>";
}
else
{
    echo "Please <a href='register.php'>click here</a> to log in";
}
?>

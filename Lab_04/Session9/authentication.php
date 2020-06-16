<html>
<body>
<h3>Sign In</h3>
<form method="get" action="authentication1.php">
    Enter User Name
    <input type="text" name="name">
    <br><br>
    Enter Password &nbsp;&nbsp;
    <input type="text" name="passtext">
    <br><br>
    <input type="submit" name="confirm" value="log in">
    <br>
</form>
<?php
$a=$_GET['passtext'];
if ($a=='pass')
{
    echo "you are a Valid User.";
}
else
{
    echo "Sorry, you are an Invalid User.";
}

?>
</body>
</html>

<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($server,$username,$password);
if ($connect_mysql)
{
    echo "Connectiom established<br>";
}
else
{
    die("Unable to connect<br>");
}
$mysql_db = mysqli_select_db($connect_mysql,"publications");
if ($mysql_db)
{
    echo "Connected to the database<br>";
}
else
{
    die("Unable to connect to the database<br>");
}
$sql_disp = ("select * from user_contact;");
echo "<br>Displaying Records from the User_contact table:<br>";
$result = mysqli_query($connect_mysql, $sql_disp);
while ($row = mysqli_fetch_array($result))
{
    echo "$row[user_id] ";
    echo "$row[user_name] ";
    echo "$row[user_email_id] <br>";
}
?>


<?php
$server = "127.0.0.1";
$username = "root";
$pw = "";
$conn = mysqli_connect($server,$username,$pw);
if ($conn)
{
    echo "Connection established<br>";
}
else
{
    die("Unable to connect<br>");
}
$mysql_db = mysqli_select_db($conn,"publications");
if ($mysql_db)
{
    echo "Connected to the database<br>";
}
else
{
    die("Unable to connect to the database<br>");
}
$sql_table = "create table user_contact("."user_id int not null primary key,"."user_name char(25) not null, "." user_email_id char(25)".")";
if (mysqli_query($conn, $sql_table))
{
    echo "table is created<br>";
}
else
{
    die("Unable to create the table<br>");
}
?>
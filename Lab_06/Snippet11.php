<html>
<body>
<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($server,$username,$password);
if ($connect_mysql)
    echo "Connectiom established<br>";
$mysql_db = mysqli_select_db($connect_mysql,"publications");
if ($mysql_db)
    echo "<br><br>Connected to the database<br><br>";

echo "<Table border bgcolor = white >";
echo "<tr><th>user_id</th><th>user_name</th><th>user_email_id</th>";
echo "<dbquery q> select * from user_contact";
echo "<dbrow><tr><td><? q.user_id></td><td><? q.user_name></td><td><? q.user_email></td></tr>";
echo "</dbquery>";
echo "</tr>";
echo "</table>";

?>
</body>
</html>


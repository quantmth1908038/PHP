<html>
<head>
    <title> Register Page </title>
</head>
<body>
<h4> Please enter your details </h4>
<form action="register.php" method="get">
    <table>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="fullname"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <br>
    <input type="submit" name="registration" value="registration">
</form>
</body>
</html>
<?php
if (isset($_GET['registration'])) {
    include 'bd-login.php';
    if ($conn->connect_error) die("fatal error");

    if (isset($_GET['fullname']) && isset($_GET['email']) && isset($_GET['username']) && isset($_GET['password']))
    {
        $fullname = mysql_entities_fix_string($conn, $_GET['fullname']);
        $email = mysql_entities_fix_string($conn, $_GET['email']);
        $username = mysql_entities_fix_string($conn, $_GET['username']);
        $password = mysql_entities_fix_string($conn, $_GET['password']);
        $hash = password_hash($password, PASSWORD_DEFAULT);


        if ($fullname == "" || $email == "" || $username == "" || $password == "")
        {
            echo "Vui lòng điền đầy đủ thông tin";
        }
        else {
            $query = "insert into customer(fullname, email, username, password) values ('$fullname','$email','$username','$hash')";
            $result = $conn->query($query);

            session_start();
            $_SESSION['fullname'] = $fullname;
            $_SESSION['surname'] = $username;

            if (!$result) die("register fail");
            else {
                header("location: ../practive/welcome.php");
                exit();
            }
        }
    }
}

function mysql_entities_fix_string($conn,$string)
{
    return htmlentities(mysql_fix_string($conn, $string));
}
function mysql_fix_string($conn, $string)
{
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
}
?>

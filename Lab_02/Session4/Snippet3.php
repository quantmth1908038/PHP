<HTML>
<HEAD>
    <Title>Employee Details</Title>
</HEAD>
<BODY>
<h4>Enter your details</h4>
<form method="post" action="EMP_DETAILS.php">
    <table>
        <tr>
            <td>Employee ID</td>
            <td><input type="text" name="empid"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="Name"></td>
        </tr>
        <tr>
            <td>Department</td>
            <td>
                <input type="radio" name="dept" value="Finance">Finance
                <input type="radio" name="dept" value="Marketing">Marketing
                <input type="radio" name="dept" value="IT">IT
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
    </table>
    <br>
    <td><input type="submit" value="Submit"></td>
</form>
</BODY>
</HTML>
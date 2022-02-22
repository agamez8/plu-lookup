<html lang="en">
<title>Add Items</title>
<body>
<h3>Add item to inventory:</h3>
<form action="plu-info.php" method="post">
    <table border="0">
        <tr>
            <td>Item Name:</td>
            <td align="center"><input type="text" name="name" size="30" /></td>
        </tr>

        <tr>
            <td>Produce Code:</td>
            <td align="center"><input type="text" name="number" size="30" /></td>
        </tr>

        <tr>
            <td colspan="1" align="center"><input type="submit" value="Submit"/></td>
        </tr>
    </table>
</form>

<form action="manager-page.php" method="post">
    <input colspan="1" type="submit" value="Back to Home">
</form>

<!--<a href="manager-page.php"><button colspan="2" type="submit">Manager Login</button></a>-->

</body>
</html>
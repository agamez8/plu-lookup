<html lang="en">
<title>Manager Login</title>
<body>
<h1>Manager Login</h1>
Today's Date:
<?php echo date("l F d, Y"); ?>
<h3>Enter passcode to add items:</h3>

<!--- Input field for manager passcode --->
<form action="plu-info.php" method="post">
    <input type="text" name="passcode">
    <p/>
    <input type="submit" name="login" value="Login">
</form>

<!--- Takes you to page containing current inventory --->
<form action="inventory.php" method="post">
    <input type="submit" name="display items" value="Show Inventory">
</form>

</body>
</html>
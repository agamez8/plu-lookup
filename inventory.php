<html lang="en">
<title>Inventory</title>
<body>
<h3>Inventory: </h3>

<?php
$produce = array( // Array containing produce
    array(
        'plu' => '4010',
        'name' => 'Apples',
    ),
    array(
        'plu' => '4011',
        'name' => 'Oranges',
    ),
    array(
        'plu' => '4012',
        'name' => 'Rambutans',
    ),
    array(
        'plu' => '4013',
        'name' => 'Grapes',
    ),
);
?>

<!--- Table that shows PLU and Item Name --->
<table border="1" width="400">
    <tr>
        <td><b>PLU</b></td>
        <td><b>Item Name</b></td>
    </tr>

    <tr>
        <td><?php echo $produce[0]['plu'];?></td>
        <td><?php echo $produce[0]['name'];?></td>
    </tr>
    <tr>
        <td><?php echo $produce[1]['plu'];?></td>
        <td><?php echo $produce[1]['name'];?></td>
    </tr>
    <tr>
        <td><?php echo $produce[2]['plu'];?></td>
        <td><?php echo $produce[2]['name'];?></td>
    </tr>
    <tr>
        <td><?php echo $produce[3]['plu'];?></td>
        <td><?php echo $produce[3]['name'];?></td>
    </tr>
</table>

<!--- Button redirects you back to home page --->
<form action="manager-page.php" method="post">
    <input type="submit" value="Back to Home">
</form>

</body>
</html>
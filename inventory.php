<html lang="en">
<body>
<h3>Inventory: </h3>

<?php
$produce = array(
    array(
        'plu' => '4010',
        'name' => 'Apples',
    ),
    array(
        'plu' => '4011',
        'name' => 'Oranges'
    ),
);
?>

<table border="1" width="300">
    <tr>
        <td>PLU</td>
        <td>Item Name</td>

    </tr>

    <tr>
        <td><?php echo $produce[0]['plu'];?></td>
        <td><?php echo $produce[0]['name'];?></td>
    </tr>

</table>

<form action="manager-page.php" method="post">
    <input type="submit" value="Back to Home">
</form>

</body>
</html>
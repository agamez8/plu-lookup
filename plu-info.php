<html lang="en">
<body>

<?php

/*
 * Function to get customer input
 */
function getInfo()
{
    $itemName = $_POST['name']; // Item name input saved
    $pluNum = $_POST['number']; // PLU code input saved

    echo $itemName . "</br>";
    echo $pluNum . "</br>";
}

getInfo();

?>

</body>
</html>
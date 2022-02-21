<?php

/*
 * Function to display items in inventory
 */
function displayItems()
{

}

/*
 * Store manager login info
 */
function managerLogin()
{
    $userIn = $_POST['code'];

    if (isset($_POST['login']) && !empty($_POST['code'])) {
        if ($_POST['code'] == '1234') {
            header('Refresh: 2; URL = plu-menu.html');
        }else {
            header('Refresh: 2; URL = manager-page.html');
            exit;
        }
    }
//    echo $userIn . "</br>";
}

/*
 * Function to add new items to the list
 */
function addItems()
{
    $itemName = $_POST['name']; // Item name input saved
    $pluNum = $_POST['number']; // PLU code input saved

}

displayItems();
managerLogin();

?>

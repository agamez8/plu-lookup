<?php
managerLogin();

/*
 * Function to display items in inventory
 */
function displayItems()
{

}

/*
 * Store manager login authentication
 */
function managerLogin()
{
    $userIn = $_POST['passcode'];

    if (isset($_POST['login']) && !empty($_POST['passcode'])) {
        if ($_POST['passcode'] == '1234') { // Enter correct passcode
            header('Refresh: 2; URL = plu-menu.php'); // Correct: Redirect to menu
        }else {
            header('Refresh: 2; URL = manager-page.php'); // Incorrect: Redirect back to login
            exit;
        }
    }
}

/*
 * Function to add new items to the list
 */
function addItems()
{
    $itemName = $_POST['name']; // Item name input saved
    $pluNum = $_POST['number']; // PLU code input saved
}
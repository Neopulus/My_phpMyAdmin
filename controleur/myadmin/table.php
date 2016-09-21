<?php
/**
 * Created by PhpStorm.
 * User: crea
 * Date: 04/01/16
 * Time: 12:26
 */

include_once('modele/myadmin/table.php');

if (isset($_POST['database']))
{
    $data = new Table($_POST['database']);
} else {
    $data = new Table($_GET['database']);
}

if (isset($_POST['function'])) {
    if ($_POST['function'] == 'add_tb') {
        $data->AddTable($_POST['name'], $_POST['el'], $_POST['type']);
    }

    if ($_POST['function'] == 'delete_tb') {
        die('Function in progress ...');
    }

    if ($_POST['function'] == 'rename_tb') {
        $data->RenameTable($_POST['name'], $_POST['newname']);
    }

    if ($_POST['function'] == 'add_el') {
        $data->AddElement($_POST['table'], $_POST['el'], $_POST['type']);
    }

    if ($_POST['function'] == 'delete_el') {
        $data->DeleteElement($_POST['table'], $_POST['el']);
    }

    if ($_POST['function'] == 'edit_el') {
        $data->EditElement($_POST['table'], $_POST['el'], $_POST['newel'], $_POST['type']);
    }
}

if (isset($_GET['table']))
{
    $table = $_GET['table'];
    include_once('vue/myadmin/table_2.php');
} else if (isset($_POST['table'])) {
    $table = $_POST['table'];
    include_once('vue/myadmin/table_2.php');
} else {
    include_once('vue/myadmin/table_1.php');
}
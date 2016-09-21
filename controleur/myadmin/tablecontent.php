<?php
/**
 * Created by PhpStorm.
 * User: crea
 * Date: 04/01/16
 * Time: 12:26
 */

include_once('modele/myadmin/tableContent.php');

if (isset($_POST['database']))
{
    $data = new tableContent($_POST['database'], $_POST['table']);
} else {
    $data = new tableContent($_GET['database'], $_GET['table']);
}

if (isset($_POST['function'])) {
    if ($_POST['function'] == 'add_content') {
        $data->insert($_POST['data']);
    }

    if ($_POST['function'] == 'delete_content') {
        $data->delete_content($_POST['el'], $_POST['value']);
    }

    if ($_POST['function'] == 'edit_content') {
        $data->edit($_POST['el'], $_POST['value'], $_POST['newvalue']);
    }
}

include_once('vue/myadmin/content.php');

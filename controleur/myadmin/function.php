<?php
/**
 * Created by PhpStorm.
 * User: victorbalssa
 * Date: 03/01/2016
 * Time: 17:17
 */

include_once('modele/myadmin/get_dbs.php');

if ($_POST['function'] == 'add_db')
{
    add_db($_POST['name']);
}

if ($_POST['function'] == 'delete_db')
{
    delete_db($_POST['name']);
}

if ($_POST['function'] == 'rename_db')
{
    rename_db($_POST['name'], $_POST['newname']);
}

include_once('modele/myadmin/database.php');
$data = get_dbs();
include_once('vue/myadmin/index.php');
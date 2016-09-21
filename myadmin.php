<?php
/**
 * Created by PhpStorm.
 * User: victorbalssa
 * Date: 28/12/2015
 * Time: 16:26
 */

ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);

include_once('modele/connexion_sql.php');

if (isset($_GET['content']) || isset($_POST['content']))
{
    include_once('controleur/myadmin/tablecontent.php');
} elseif (isset($_GET['database']) || isset($_POST['database'])) {
    include_once('controleur/myadmin/table.php');
} elseif (isset($_POST['function'])) {
    include_once('controleur/myadmin/function.php');
} else {
    include_once('controleur/myadmin/index.php');
}
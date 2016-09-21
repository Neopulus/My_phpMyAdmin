<?php
/**
 * Created by PhpStorm.
 * User: victorbalssa
 * Date: 06/01/2016
 * Time: 11:36
 */

include_once('modele/myadmin/get_dbs.php');
include_once('modele/myadmin/database.php');
include_once('modele/myadmin/table.php');
$data1 = get_dbs();
$data3 = NULL;
if (isset($_GET['database'])) {
    $data2 = new Table($_GET['database']);
    $data3 = $data2->request($_GET['sql']);
}
include_once('vue/myadmin/request.php');
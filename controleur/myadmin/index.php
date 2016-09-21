<?php
/**
 * Created by PhpStorm.
 * User: victorbalssa
 * Date: 28/12/2015
 * Time: 16:30
 */

/**
 * On demande toutes les dbs du serveur (modèle)
 * et chaque db devient un objet database en appelant get_dbs();
 */
include_once('modele/myadmin/get_dbs.php');
include_once('modele/myadmin/database.php');
$data = get_dbs();
include_once('vue/myadmin/index.php');
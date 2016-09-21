<?php
/**
 * Created by PhpStorm.
 * User: victorbalssa
 * Date: 28/12/2015
 * Time: 16:35
 */

function get_dbs()
{
    global $conn;

    $sql = "SHOW DATABASES";
    $result = $conn->query($sql);
    $i = 0;
    $data = NULL;
    while ($row = $result->fetch_assoc())
    {
        $data[$i] = new database($row['Database']);
        $i++;
    }
    return $data;
}

function add_db($name)
{
    global $conn;

    $sql = "CREATE DATABASE $name";
    if(!$conn->query($sql))
    {
        die("Creation failed: " . $conn->error);
    }
}

function delete_db($name)
{
    global $conn;

    $sql = "DROP DATABASE $name";
    if(!$conn->query($sql))
    {
        die("Delete failed: " . $conn->error);
    }
}

function rename_db($name, $newname)
{
    exec("./rename_db.sh $name $newname");
}
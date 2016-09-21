<?php
/**
 * Created by PhpStorm.
 * User: victorbalssa
 * Date: 02/01/2016
 * Time: 01:58
 */

class database
{
    private $name;

    public function __construct($db)
    {
        $this->name = $db;
    }

    public function db_name()
    {
        return $this->name;
    }

    public function db_link_table()
    {
        $link = "myadmin.php?database=$this->name";
        return $link;
    }

    public function nb_tables()
    {
        global $conn;

        $sql = "SHOW TABLES FROM $this->name";
        $result = $conn->query($sql);
        $nb = 0;
        while ($row = $result->fetch_assoc())
        {
            $nb++;
        }
        return $nb;
    }

    public function size()
    {
        global $conn;

        $sql = "SHOW TABLE STATUS FROM $this->name";
        $result = $conn->query($sql);
        $size = 0;
        while($row = $result->fetch_assoc())
        {
            $size += $row["Data_length"] + $row["Index_length"];
        }
        return (($size / 1024) / 1024);
    }

    public function creation_date()
    {
        global $conn;

        $sql = "SELECT create_time FROM INFORMATION_SCHEMA.TABLES WHERE table_schema = '{$this->name}'";
        $result = $conn->query($sql);
        $date = $result->fetch_row();
        return $date[0];
    }
}
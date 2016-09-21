<?php

/**
 * Created by PhpStorm.
 * User: crea
 * Date: 04/01/16
 * Time: 14:35
 */
class tableContent
{
    private $db;
    private $table;
    private $dbname;

    /**
     ** tableContent constructor.
     ** @param $db
     ** @param $table
     **/
    public function __construct($db, $table)
    {
        $this->dbname = $db;
        $this->table = $table;
        $this->db = new mysqli('localhost', 'root', 'root', $db)
        or die("Impossible de se connecter : " . mysqli_error($this->db));
        if (!$this->db) {
            die ('Impossible de sélectionner la base de données : ' . mysqli_error($this->db));
        }
    }

    /**
     ** @return mixed
     **/
    public function getTable()
    {
        return $this->table;
    }

    /**
     ** @return mixed
     **/
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     ** @param $data ensemble des données à rajouté
     ** exemple : $data = 1, toto, 5
     **/
    public function insert($data)
    {
        $sql = "INSERT INTO $this->table VALUES ($data)";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête invalide : ' . mysqli_error($this->db) . '\n');
        }
    }

    /**
     ** @param $data  condition de suppression
     ** exemple : $data = id = 4
     **/
    public function delete_content($el, $value)
    {
        $sql = "DELETE FROM $this->table WHERE $el = '$value'";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête invalide : ' . mysqli_error($this->db) . '\n');
        }
    }

    /**
     ** @param $data fin de requete (valeur et condition d'edit)
     ** exemple : $data = id=5 WHERE Nom=toto ou solde=5
     **/
    public function edit($el, $value, $newvalue)
    {
        $sql = "UPDATE $this->table SET $el = '$newvalue' WHERE $el = '$value'";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête invalide : ' . mysqli_error($this->db) . '\n');
        }
    }

    public function listContent()
    {
        $sql = "SELECT * FROM $this->table";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête invalide : ' . mysqli_error($this->db) . '\n');
        }
        $data = NULL;
        while ($row = $result->fetch_row()) {
            $data[] = $row;
        }
        return $data;
    }

    public function nbElem()
    {
        $sql = "SHOW COLUMNS FROM $this->table";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête' . $sql . 'invalide : ' . mysqli_error($this->db));
        }
        $data = NULL;
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $data[$i++][0] = $row['Field'];
        }
        return $data;
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: crea
 * Date: 24/12/15
 * Time: 14:32
 */

class Table
{
    private $db;
    private $dbname;

    public function __construct($db)
    {
        $this->db = new mysqli('localhost', 'root', 'root', $db)
        or die("Impossible de se connecter : " . mysqli_error($this->db));
        if (!$this->db) {
            die ('Impossible de sélectionner la base de données : ' . mysqli_error($this->db));
        }
        $this->dbname = $db;
    }

    public function getDbname()
    {
        return $this->dbname;
    }

    public function tb_link_content($table)
    {
        $link = "myadmin.php?database=$this->dbname&table=$table&content=true";
        return $link;
    }

    public function edit_link($table)
    {
        $link = "myadmin.php?database=$this->dbname&table=$table";
        return $link;
    }

    public function ListTable()
    {
        $sql = "SHOW TABLES FROM $this->dbname";
        $result = mysqli_query($this->db, $sql);

        if (!$result) {
            echo "Impossible de lister les tables\n";
            echo mysqli_error($this->db);
            exit;
        }
        $data = NULL;
        while ($row = $result->fetch_row()) {
            $data[] = $row[0];
        }
        return $data;
    }

    public function AddTable($name, $el, $type)
    {
        $res = mysqli_query($this->db, "USE $this->dbname");
        if (!$res) {
            die('Requete invalide : ' . mysqli_error($this->db));
        }
        $sql = "CREATE TABLE $name ($el $type)";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requete invalide : ' . mysqli_error($this->db));
        }
    }

    public function RenameTable($name, $new)
    {
        $sql = "RENAME TABLE $name TO $new";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête' . $sql . 'invalide : ' . mysqli_error($this->db));
        }
    }

    public function ListElem($table)
    {
        $sql = "SHOW COLUMNS FROM $table";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête' . $sql . 'invalide : ' . mysqli_error($this->db));
        }
        $i = 0;
        $data[0] = NULL;
        while ($row = $result->fetch_assoc()) {
            $data[$i][0] = $row['Field'];
            $data[$i++][1] = $row['Type'];
        }
        return $data;
    }

    public function AddElement($table, $el, $type)
    {
        $sql = "ALTER TABLE $table add $el $type";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête invalide : ' . mysqli_error($this->db) . '\n');
        }
    }

    public function DeleteElement($table, $el)
    {
        $sql = "ALTER TABLE $table DROP COLUMN $el";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête invalide : ' . mysqli_error($this->db) . '\n');
        }
    }

    public function StatTable($table)
    {
        $sql = "SELECT * FROM $table";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête invalide : ' . mysqli_error($this->db) . '\n');
        }
        echo $result->num_rows;
        $result->close();
    }

    public function EditElement($table, $el, $new, $type)
    {
        $sql = "ALTER TABLE $table CHANGE $el $new $type";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die('Requête invalide : ' . mysqli_error($this->db) . '\n');
        }
    }

    public function Close()
    {
        $this->db->close();
    }

    public function request($sql)
    {
        $result = mysqli_query($this->db, $sql);
        $i = 0;
        $data = NULL;
        if (gettype($result) == 'object')
        {
            while ($row = $result->fetch_assoc()) {
                $data[$i++] = $row;
            }
        } elseif ($result == FALSE) {
            $data = 'Requete '. $sql .' invalide : ' . mysqli_error($this->db) . '\n';
        }
        else {
            $data = "DONE (Traitement en 0.0062)";
        }
        return $data;
    }
}
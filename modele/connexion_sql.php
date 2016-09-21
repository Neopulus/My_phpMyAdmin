<?php
/**
 * Created by PhpStorm.
 * User: victorbalssa
 * Date: 28/12/2015
 * Time: 16:27
 */

$conn = new mysqli("localhost", "root", "root");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
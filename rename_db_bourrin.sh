#!/bin/bash

mysqlconn="mysql -u root -proot -h localhost"
olddb=$1
newdb=$2

params=$($mysqlconn -N -e "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE table_schema='$olddb'")

$mysqlconn -e "CREATE DATABASE $newdb"

for name in $params; do
      $mysqlconn -e "RENAME TABLE $olddb.$name to $newdb.$name";
done;

$mysqlconn -e "DROP DATABASE $olddb"
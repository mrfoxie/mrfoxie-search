<?php
ob_start();

try {
    $con = new PDO("mysql:dbname=mrfoxie;host:localhost", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    echo "Connection Successful.";
}catch (PDOException $e){
    echo "Connection failed:" . $e->getMessage();
}
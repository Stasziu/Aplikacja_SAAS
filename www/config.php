<?php

define('DB_SERVER', 'mysql');
define('DB_USERNAME', 'user');
define('DB_PASSWORD', 'test');
define('DB_NAME', 'myDb');

$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Nie udało się połaczyć. " . mysqli_connect_error());
}
?>
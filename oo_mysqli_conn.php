<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hr';
    $conn = new mysqli($host, $username, $password ) or 
    die("Can't Connect Database". $conn->connect_error);
    $conn->select_db($dbname);
?>
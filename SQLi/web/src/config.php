<?php
    error_reporting(0);
    $host="mysql";
    $username="root";
    $password="toor";
    $dbname="ctf";
    $conn=mysql_connect($host,$username,$password);
    mysql_select_db($dbname);
?>
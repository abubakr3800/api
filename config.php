<?php

$host = "remotemysql.com";    /* Host name */
$user = "FYoiZhyaoJ";         /* User */
$password = "aDme9BMBKy";         /* Password */
$dbname = "FYoiZhyaoJ";   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


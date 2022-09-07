<?php

session_start();

$host = "mysqldb2022.cqyjl3sbn0g1.us-west-2.rds.amazonaws.com"; /* Host name */
$user = "admin"; /* User */
$password = "admin123"; /* Password */
$dbname = "customers"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

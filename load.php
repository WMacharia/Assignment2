<?php
require "db/constants.php";
require "db/dbconn.php";
require "forms/signupform.php";
require "forms/signinform.php";

$db = new dbConnection(DBTYPE , HOSTNAME, DBPORT, HOSTUSER, HOSTPASS, DBNAME);
$conn = $db->connection;

$objform = new signupform();
$objsignin = new signinform();
?>
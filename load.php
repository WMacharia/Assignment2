<?php
require "constants.php";
require "dbconn.php";

$conn = new dbConnection(DBTYPE , HOSTNAME, DBPORT, HOSTUSER, HOSTPASS, DBNAME);
?>
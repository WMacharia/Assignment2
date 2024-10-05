<?php
require_once "load.php";  

$objsignupform = new signupform();
$objsignupform->sign_up_form($conn);
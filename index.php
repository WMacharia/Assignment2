<?php
require_once "load.php";  // Make sure this file correctly initializes the DB connection

// Initialize the signupform object
$objsignupform = new signupform();

// Call the sign_up_form method
$objsignupform->sign_up_form($conn);

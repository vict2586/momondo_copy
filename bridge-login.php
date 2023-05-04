<?php

require_once __DIR__.'/dictionary.php';


$correct_email = 'momondo@kea.com';
$correct_password = 'Kea2022';

// Validate
if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ){
    header("Location: /kea/Momondo_Copy/?language=$language");
    exit();
};

// Check if the user's email do not match the correct email
if( filter_var( $_POST['email'] != $correct_email ) ){
    header("Location: /kea/Momondo_Copy/?language=$language");
    exit();
};

if( filter_var( $_POST['password'] != $correct_password ) ){
    header("Location: /kea/Momondo_Copy/?language=$language");
    exit();
};

// Success
session_start();
$_SESSION['user_name'] = 'Victoria';
//echo $_SESSION['user_name'];
header("Location: /kea/Momondo_Copy/profile?language=$language");

<?php

require_once __DIR__.'/dictionary.php';

    // You must have this
    session_start();

    // killing the session
    session_destroy();

    // Takes the user to the home page
    header("Location: /kea/Momondo_Copy/?language=$language");
    exit();
?>
<?php

    require_once __DIR__.'/_x.php';

    // ----------------------------------------------------------------------------

    $email_already_in_system = 'a@a.com';

    if( $email_already_in_system == $_POST['email'] ){
        
        _respond('email allready in system', 400);
        exit;
    };

    // ----------------------------------------------------------------------------

    _validate_user_name();
    _validate_user_last_name();
    _validate_email();

    $user = [
        'user_id'=> uniqid(),
        'user_name'=> $_POST['user_name'],
        'user_last_name'=> $_POST['user_last_name'],
        'user_email'=> $_POST['email']
    ];
    
    // Success
    _respond($user);

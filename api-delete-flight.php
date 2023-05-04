<?php

// validate the flight id
if( ! isset($_POST['flight_id']) ){
    http_response_code(400);
    echo json_encode(['info'=>'flight_id missing']);
    // echo 'flight_id missing';
    exit();
}

if( ! ctype_digit($_POST['flight_id']) ){
    http_response_code(400);
    echo json_encode(['info'=>'flight_id must be a digit']);
    // echo 'flight_id must be a digit';
    exit();
}

//TODO: Delete the flight from the database
try{
    // Connect to the database
    $db = new PDO('sqlite:'.__DIR__.'/DeleteDatabase/Deletemomondo.db');

    // Says that it allows excption
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Delete for flights in the database
    $q = $db->prepare('DELETE FROM flights WHERE id = :id');
    $q->bindValue(':id', $_POST['flight_id']);

    // Says to run the code above
    $q->execute();

    // Success
    echo json_encode(['info'=>'flight delete', 'flight_id'=>$_POST['flight_id']]);
    exit();

}catch(Exception $ex){
    http_response_code(500);
    echo json_encode(['info'=>'System under maintainance']);
    exit();
}


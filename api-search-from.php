<?php
   // mac computeres only
   ini_set('display_errors', 1);

 try{
   $from_city = $_GET['from_city'] ?? 0;

    // Connect to the database
    $db = new PDO('sqlite:'.__DIR__.'/Database/momondo.db');

    // Says that it allows excption
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Search for flights in the database
    $q = $db->prepare('SELECT * FROM flights WHERE from_city_name LIKE :from_city');
    $q->bindValue(':from_city', '%'.$from_city.'%');

    // Says to run the code above
    $q->execute();

    // Get all the data -------- says to get the data as an assosiative array
    //                           FETCH_OBJ
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($flights);

 }catch(Exception $ex){
    //echo $ex;
    http_response_code(400);
    echo json_encode(['info'=>'upppsss... sorry']);
 }

















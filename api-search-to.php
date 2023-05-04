<?php
   // mac computeres only
   ini_set('display_errors', 1);

 try{
   $to_city = $_GET['to_city'] ?? 0;

    // Connect to the database
    $db = new PDO('sqlite:'.__DIR__.'/Database/momondo.db');

    // Says that it allows excption
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Search for flights in the database
    $q = $db->prepare('SELECT * FROM flights WHERE to_city_name LIKE :to_city');
    $q->bindValue(':to_city', '%'.$to_city.'%');

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

















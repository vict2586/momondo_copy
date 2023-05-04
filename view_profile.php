<?php
    $_title = 'Wellcome Victoria';
    
    require_once __DIR__ .'/comp_header.php';
    require_once __DIR__.'/dictionary.php';
    // echo $language;

    try{
        // Connect to the database
        $db = new PDO('sqlite:'.__DIR__.'/DeleteDatabase/Deletemomondo.db');
    
        // Says that it allows excption
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Search for flights in the database
        $q = $db->prepare('SELECT * FROM flights');
       
        // Says to run the code above
        $q->execute();
    
        // Get all the data -------- says to get the data as an assosiative array
        //                           FETCH_OBJ
        $flights = $q->fetchAll(PDO::FETCH_ASSOC);
        // echo json_encode($flights);
    
    }catch(Exception $ex){
        echo "Sorry something went terribly worng";
        exit();
    }
?>

    <h1 class="tx mt4"><?= $Profile_dictionary[$language.'_wellcome'] ?> <?= $_SESSION['user_name'] ?> </h1>
    <h2 class="tx mt2"><?= $Profile_dictionary[$language.'_flights'] ?></h2>
    
    <div>
        <?php 
            foreach($flights as $flight){
                ?>

                    <form id="deleteFlight" onsubmit="return false">
                        <div>
                            <img src="/Momondo_Copy/images/min_card/berlin.jpg" alt="the image">

                            <div class="deleteFlightText">
                                <p> <b class="fs09"> From: </b> <?= $flight['from_city'] ?> </p>
                                <p> <b class="fs09"> To: </b> <?= $flight['to_city'] ?> </p>
                                <!-- <p> <b class="fs09"> From airport: </b> <?= $flight['from_city_airport_name'] ?> </p>
                                <p> <b class="fs09"> To airport: </b> <?= $flight['to_city_airport_name'] ?> </p>
                                <p> <b class="fs09"> Departure: </b> <?= $flight['departure_time'] ?> </p>
                                <p> <b class="fs09"> Arrival: </b> <?= $flight['arrival_time'] ?> </p> -->
                            </div>

                            <input style="display:none" 
                                    name="flight_id" 
                                    value="<?= $flight['id'] ?>" 
                                    type="text"
                                >

                            <button onclick="delete_flight()">🗑️ <?= $Global_dictionary[$language.'_delete'] ?></button>
                        </div>
                    </form>

                <?php
            }
        ?>
    </div>

<?php
    require_once __DIR__ .'/comp_footer.php';
?>
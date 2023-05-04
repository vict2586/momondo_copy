function get_flights(){

    const form = document.querySelector(".search_flight_from").value;
    const to = document.querySelector(".search_flight_to").value;

    if( form.length > 0 && to.length > 0 ){
        get_flights_from();

    }else{

        if( form.length > 0 ){
            get_flights_from();
        };

        if( to.length > 0 ){
            get_flights_to();
        };
    }

    if( form.length == 0 && to.length == 0 ){
        get_flights_from();
    }
    

}

// ---------------------------------------------------------------------------------------------------- //

async function get_flights_from(){
    // console.log("from")
    //Clean the flights div, so we only show fresh/one result
    document.querySelector("#flights").innerHTML = "";

    // Get the data from the input field
    const search_form = document.querySelector(".search_flight_from").value;
    
    // Says make the tunnel to get all the data
    const conn_from = await fetch('/Momondo_Copy/api-search-from.php?from_city='+search_form);
        
    // Says wait for the data to come to us
    const flights_data_from = await conn_from.json();
    //console.log(flights_data_from)
    
    const orginal_flight_from_blueprint = `        
                        <div class="flight">
                            <div class="flightInbut">
                                <input type="checkbox">
                            </div>
                            <div class="flightContainer">
                                <p> <b> From: </b> #From_City# - <b> To: </b> #To_City#</p>
                                <p style="padding: 0;" > <b> Departure: </b> #Departure_Time# - <b> Arrival: </b> #Arrival_Time#</p>
                            </div>
                            <div class="flightPrice">
                                <p> <b> 800 </b> $ </p>
                                <button> View Deal </button>
                            </div>
                        </div>`
        
    let all_filghts_from = ""
    
    flights_data_from.forEach( flight_from => {
        //console.log(flight_from);
    
        // Makes a copy
        let div_flight_from = orginal_flight_from_blueprint;
    
        div_flight_from = div_flight_from.replace("#From_City#", flight_from.from_city_name);
        div_flight_from = div_flight_from.replace("#Departure_Time#", flight_from.departure_time);
        div_flight_from = div_flight_from.replace("#To_City#", flight_from.to_city_name);
        div_flight_from = div_flight_from.replace("#Arrival_Time#", flight_from.arrival_time);
    
    
        // Sets the copy into all_filghts
        all_filghts_from += div_flight_from;
    
    });
    
    document.querySelector("#flights").insertAdjacentHTML("afterbegin", all_filghts_from);
}

async function get_flights_to(){
    // console.log("to")
    //Clean the flights div, so we only show fresh/one result
    document.querySelector("#flights").innerHTML = "";

    // Get the data from the input field
    const search_to = document.querySelector(".search_flight_to").value;
    
    // Says make the tunnel to get all the data
    const conn_to = await fetch('/api-search-to.php?to_city='+search_to);
        
    // Says wait for the data to come to us
    const flights_data_to = await conn_to.json();
    //console.log(flights_data_from)
    
    const orginal_flight_to_blueprint = `        
                        <div class="flight">
                            <div class="flightInbut">
                                <input type="checkbox">
                            </div>
                            <div class="flightContainer">
                                <p> <b> From: </b> #From_City# - <b> To: </b> #To_City#</p>
                                <p style="padding: 0;" > <b> Departure: </b> #Departure_Time# - <b> Arrival: </b> #Arrival_Time#</p>
                            </div>
                            <div class="flightPrice">
                                <p> <b> 800 </b> $ </p>
                                <button> View Deal </button>
                            </div>
                        </div>`
        
    let all_filghts_to = ""
    
    flights_data_to.forEach( flight_to => {
        //console.log(flight_from);
    
        // Makes a copy
        let div_flight_to = orginal_flight_to_blueprint;
    
        div_flight_to = div_flight_to.replace("#From_City#", flight_to.from_city_name);
        div_flight_to = div_flight_to.replace("#Departure_Time#", flight_to.departure_time);
        div_flight_to = div_flight_to.replace("#To_City#", flight_to.to_city_name);
        div_flight_to = div_flight_to.replace("#Arrival_Time#", flight_to.arrival_time);
    
    
        // Sets the copy into all_filghts
        all_filghts_to += div_flight_to;
    
    });
    
    document.querySelector("#flights").insertAdjacentHTML("afterbegin", all_filghts_to);
}
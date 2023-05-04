function toggle_menu() {
    console.log("Clicked Menu")
    const domMenu = document.getElementById("menu");

    if(domMenu.classList.contains("active")){
        domMenu.classList.remove("active")
    }else{
        domMenu.classList.add("active")
    }
}

// -------------------------------------------------------------

function toggle_login() {
    console.log("Clicked Login")
    const domlogin = document.getElementById("loginOverlay");

    if(domlogin.classList.contains("hide")){
        domlogin.classList.remove("hide")
    }else{
        domlogin.classList.add("hide")
    }
}

// -------------------------------

function toggle_signup() {
    console.log("Clicked Signup")
    const domsignup = document.getElementById("signupOverlay");

    if(domsignup.classList.contains("hide")){
        domsignup.classList.remove("hide")
    }else{
        domsignup.classList.add("hide")
    }
}

// -------------------------------------------------------------

async function is_email_available(){

    //console.log("x");
    const frm = document.querySelector("#signupForm");

    const conn = await fetch('api-signup', {
        method : "POST",
        body : new FormData(frm)
    });

    if( ! conn.ok ){
        //console.log("NNNOOOOOO....");
        document.querySelector("#email").classList.remove("hide");
    };

};

function clean_email(){
    event.target.value = "";
    document.querySelector("#email").classList.add("hide");
}

/* function is_email_available(){
    const form = document.querySelector("#signupForm");

    const validate_error = "rgba(240, 130, 240, 0.2)"
    const EmailInput = form.querySelector(".SingupEmail");
    const EmailValue = form.querySelector(".SingupEmail").value;
    const EmailErrorText = form.querySelector(".EmailError");

    if( EmailValue == "a@a.com" ){
        EmailInput.classList.add("validate_error")
        EmailErrorText.classList.add("validate_errors")
        EmailErrorText.classList.remove("hide")
        EmailInput.style.backgroundColor = validate_error
    }

};

function clean_email(){
    const form = document.querySelector("#signupForm");

    const EmailInput = form.querySelector(".SingupEmail");
    const EmailValue = form.querySelector(".SingupEmail").value;
    const EmailErrorText = form.querySelector(".EmailError");

    event.target.value = "";
    EmailInput.classList.remove("validate_error")
    EmailErrorText.classList.remove("validate_errors")
    EmailErrorText.classList.add("hide")
    EmailInput.style.backgroundColor = "white"
} */

// -------------------------------------------------------------

async function signup(){
    //alert();
    const the_form = document.querySelector("#signupForm");
    //console.log(the_form)
  
    const conn = await fetch('api-signup', {
        method : "POST",
        body : new FormData(the_form)
    });
  
    if( ! conn.ok ){
            Swal.fire({
                icon: 'error',
                text: 'Something went wrong!',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:'Ok'
            })
            //console.log("NNNOOOOOO......");
            return;
        };
  
        const data = await conn.json() // Convert text to JSON
        // Success
        //console.log("YESSSSSS......");
        //console.log(data.response);
        Swal.fire({
            icon: 'success',
            showCloseButton: true,
            focusConfirm: false,
            confirmButtonText:'Go to login'
  
        }).then(function(confirmed) {
            if(confirmed) {
                toggle_signup();
                toggle_login();
              }
        });
  };

// -------------------------------------------------------------

async function delete_flight(){
    //console.log(flight_id);
    const frm = event.target.form

    const conn = await fetch("api-delete-flight.php", {
        method : "POST",
        body : new FormData(frm)
    });

    const data = await conn.json()
    if( ! conn.ok ){
        // Swal.fire({
        //     icon: 'error',
        //     title: 'Oops...',
        //     text: 'Something went wrong!',
        // })
        console.log(data);
        return;
    };
    // Success
    console.log(data);
    frm.remove();
};

// -------------------------------------------------------------

function ShowDropDownFrom() {
    const domDropFrom = document.getElementById("SearchFromDropDown");

    domDropFrom.classList.remove("hide");
}

function select_from_city(){
    // console.log("X")
    // console.log(event.target)
    
    const city_name = event.target.querySelector(".city-name").innerText;
    console.log(city_name)

    document.querySelector("#from_city").value = city_name;

    // document.querySelector("#SearchFromDropDown").style.display = "none";
    document.querySelector("#SearchFromDropDown").classList.add('hide');
    
    document.querySelector(".from_results").innerHTML = "";
}

// -------------------------------

function ShowDropDownTo() {
    const domDropTo = document.getElementById("SearchToDropDown");

    domDropTo.classList.remove("hide")
}

function select_to_city(){
    // console.log("X")
    // console.log(event.target)
    
    const city_name = event.target.querySelector(".city-name").innerText;
    console.log(city_name)

    document.querySelector("#to_city").value = city_name;

    // document.querySelector("#SearchToDropDown").style.display = "none";
    document.querySelector("#SearchToDropDown").classList.add('hide');
    
    document.querySelector(".to_results").innerHTML = "";

}

// -------------------------------------------------------------

function NiceURL() {
    const from = document.getElementById("from_city");
    const fromvalue = from.value;
    //console.log(fromvalue)

    const to = document.getElementById("to_city");
    const tovalue = to.value;
    //console.log(tovalue)

    if( fromvalue.length > 0 && tovalue.length > 0 ){
        window.location.href = "/Momondo_Copy/flight_result/" + fromvalue + "/" + tovalue;

    }else{

        if( fromvalue.length > 0 ){
            window.location.href = "/Momondo_Copy/flight_result/" + fromvalue;
        };

    }

    if( fromvalue.length == 0 && tovalue.length == 0 ){
        window.location.href = "/Momondo_Copy/";
    }

}
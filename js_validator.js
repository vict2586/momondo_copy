
// ##############################
function validate(callback){
    const form = event.target;
    const validate_error = "rgba(240, 130, 240, 0.2)"
    const UserErrorText = form.querySelector(".UserNameError");
    const LastErrorText = form.querySelector(".LastUserNameError");
    const EmailErrorText = form.querySelector(".EmailError");
    const PassErrorText = form.querySelector(".PasswordError");
    const errorText = form.querySelector(".error");
    // form the document select every element with data-validate in the form, and loop throug them
    form.querySelectorAll("[data-validate]").forEach(function(element){ 
      element.classList.remove("validate_error")
      element.classList.remove("validate_errors")
      UserErrorText.classList.add("hide")
      LastErrorText.classList.add("hide")
      EmailErrorText.classList.add("hide")
      PassErrorText.classList.add("hide")
      errorText.classList.add("hide")
      element.style.backgroundColor = "white"
    })
    form.querySelectorAll("[data-validate]").forEach( function(element){
      // look for "str", "int", "email", "regex" or "match" in the input and validate them 
      switch(element.getAttribute("data-validate")){ 
        case "str":
          if( element.value.length < parseInt(element.getAttribute("data-min")) || 
              element.value.length > parseInt(element.getAttribute("data-max")) 
          ){
            element.classList.add("validate_error")
            element.classList.add("validate_errors")
            UserErrorText.classList.remove("hide")
            element.style.backgroundColor = validate_error
          }
        break;
        case "str-user-name":
          if( element.value.length < parseInt(element.getAttribute("data-min")) || 
              element.value.length > parseInt(element.getAttribute("data-max")) 
          ){
            element.classList.add("validate_error")
            element.classList.add("validate_errors")
            UserErrorText.classList.remove("hide")
            element.style.backgroundColor = validate_error
          }
        break;
        case "str-user-last-name":
          if( element.value.length < parseInt(element.getAttribute("data-min")) || 
              element.value.length > parseInt(element.getAttribute("data-max")) 
          ){
            element.classList.add("validate_error")
            element.classList.add("validate_errors")
            LastErrorText.classList.remove("hide")
            element.style.backgroundColor = validate_error
          }
        break;
        case "str-password":
          if( element.value.length < parseInt(element.getAttribute("data-min")) || 
              element.value.length > parseInt(element.getAttribute("data-max")) 
          ){
            element.classList.add("validate_error")
            element.classList.add("validate_errors")
            PassErrorText.classList.remove("hide")
            element.style.backgroundColor = validate_error
          }
        break;
        case "int":
          if( ! /^\d+$/.test(element.value)  ||
              parseInt(element.value) < parseInt(element.getAttribute("data-min")) || 
              parseInt(element.value) > parseInt(element.getAttribute("data-max"))
          ){
            element.classList.add("validate_error")
            element.classList.add("validate_errors")
            errorText.classList.remove("hide")
            element.style.backgroundColor = validate_error
          }
        break;      
        case "email":
          let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if( ! re.test(element.value.toLowerCase()) ){
            element.classList.add("validate_error")
            element.classList.add("validate_errors")
            EmailErrorText.classList.remove("hide")
            element.style.backgroundColor = validate_error
          }
        break;
        case "regex":       
          var regex = new RegExp(element.getAttribute("data-regex"))
          // var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
          if( ! regex.test(element.value) ){
            console.log(element.value)
            console.log("regex error")
            element.classList.add("validate_error")
            element.classList.add("validate_errors")
            errorText.classList.remove("hide")
            element.style.backgroundColor = validate_error
          }
        break;
        case "match":
          if( element.value != form.querySelector(`[name='${element.getAttribute("data-match-name")}']`).value ){
            element.classList.add("validate_error")
            element.classList.add("validate_errors")
            errorText.classList.remove("hide")
            element.style.backgroundColor = validate_error
          }
        break;
      }
    })
    if( ! form.querySelector(".validate_error") ){ callback(); return; }
    form.querySelector(".validate_error").focus()
  }
  
  // ##############################
  function clear_validate_error(){
    // event.target.classList.remove("validate_error")
    // event.target.value = ""
}

// -------------------------------------------------------------

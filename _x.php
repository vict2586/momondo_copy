<?php

require_once __DIR__.'/dictionary.php';

    define('_USER_NAME_MIN_LEN', 2);
    define('_USER_NAME_MAX_LEN', 20);

    define('_USER_LAST_NAME_MIN_LEN', 2);
    define('_USER_LAST_NAME_MAX_LEN', 20);

    define('_ITEM_NAME_MIN_LEN', 2);
    define('_ITEM_NAME_MAX_LEN', 10);

    // must start with / and end with /
    // the first set of numbers can't be under 1, but between 1-9 
    // there can be manny * numbers between 0 - 9 after the first number 
    // there can be a . but it does not have to be there 
    // after the . there can only be 2 numberes between 0 - 9
    define('_ITEM_PRICE_REGEX', '/^[1-9][0-9]*\.[0-9]{2}$/');

    define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');

// ----------------------------------------------------------------------------

function _validate_user_name(){
    $error_message = 'user_name min '._USER_NAME_MIN_LEN.' max '._USER_NAME_MAX_LEN.' characters';

    // if the user forgot to enter the user name // call the function and display the error message
    if( ! isset($_POST['user_name']) ) { _respond($error_message, 400); }

    // trim so threr is no side spaces
    $_POST['user_name'] = trim($_POST['user_name']);
    if( strlen( $_POST['user_name'] ) < _USER_NAME_MIN_LEN ) { _respond($error_message, 400); }
    if( strlen( $_POST['user_name'] ) > _USER_NAME_MAX_LEN ) { _respond($error_message, 400); }

    return $_POST['user_name'];
}

function _validate_user_last_name(){
    $error_message = 'user_last_name min '._USER_LAST_NAME_MIN_LEN.' max '._USER_LAST_NAME_MAX_LEN.' characters';

    // if the user forgot to enter the user name // call the function and display the error message
    if( ! isset($_POST['user_last_name']) ) { _respond($error_message, 400); }

    // trim so threr is no side spaces
    $_POST['user_last_name'] = trim($_POST['user_last_name']);
    if( strlen( $_POST['user_last_name'] ) < _USER_LAST_NAME_MIN_LEN ) { _respond($error_message, 400); }
    if( strlen( $_POST['user_last_name'] ) > _USER_LAST_NAME_MAX_LEN ) { _respond($error_message, 400); }

    return $_POST['user_last_name'];
}

// ----------------------------------------------------------------------------

function _validate_item_price(){
    $error_message = 'item_price must be a whole number or have to decimals';

    // if the user forgot to enter the item name // call the function and display the error message
    if( ! isset($_POST['item_price']) ) { _respond($error_message, 400); }

    // trim so threr is no side spaces
    $_POST['item_price'] = trim($_POST['item_price']);

    //if the item price contains only digits, then add a .00 after the number
    if( ctype_digit($_POST['item_price']) ){ $_POST['item_price'] = $_POST['item_price'].'.00';}

    // if the item price has a , change or replace it with a .
    $_POST['item_price'] = str_replace(',', '.', $_POST['item_price']);

    // if the item price the user enters does not match the requrements display the error message
    if( ! preg_match(_ITEM_PRICE_REGEX, $_POST['item_price']) ){ _respond($error_message, 400); }

    return $_POST['item_price'];
}

// ----------------------------------------------------------------------------

function _validate_item_name(){
    $error_message = 'item_name min '._ITEM_NAME_MIN_LEN.' max '._ITEM_NAME_MAX_LEN.' characters';

    // if the user forgot to enter the item name // call the function and display the error message
    if( ! isset($_POST['item_name']) ) { _respond($error_message, 400); }

    // trim so threr is no side spaces
    $_POST['item_name'] = trim($_POST['item_name']);
    if( strlen( $_POST['item_name'] ) < _ITEM_NAME_MIN_LEN ) { _respond($error_message, 400); }
    if( strlen( $_POST['item_name'] ) > _ITEM_NAME_MAX_LEN ) { _respond($error_message, 400); }

    return $_POST['item_name'];
}

// ----------------------------------------------------------------------------

function _validate_email(){
    $error_message = 'email missing or invalid';

    // if the user forgot to enter the email // call the function and display the error message
    if( ! isset($_POST['email']) ) { _respond($error_message, 400); }

    // trim so threr is no side spaces
    $_POST['email'] = trim($_POST['email']);

    // if the email the user enters does not match the requrements display the error message
    if( ! preg_match(_REGEX_EMAIL, $_POST['email']) ){ _respond($error_message, 400); }

    return $_POST['email'];
}

// ----------------------------------------------------------------------------

function _respond( $message = '', $http_response_code = 200 ){

    header('Content-Type: application/json');

    http_response_code($http_response_code);
    // if the message is an array // ? = true then leve it be // : = false change it to text
    $response = is_array($message) ? $message : ['info'=>$message] ;
    echo json_encode($response);
    exit();
}
  
// ----------------------------------------------------------------------------

function _validate_item_image(){

    if($_FILES['fileToUpload']['error'] === UPLOAD_ERR_INI_SIZE) {
        _respond('fileToUpload too large', 400);
      }
      
      $item_image_temp_name = $_FILES["fileToUpload"]["tmp_name"]; // C:\xampp\tmp\php791.tmp || C:\xampp\tmp\php5245.tmp
    
      $target_dir = "images/uploadeImage/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // images/0.jpg
    
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // just reads the extension of the file
    
      $image_mime = mime_content_type($_FILES["fileToUpload"]["tmp_name"]); // reads the mime inside the file
    
      $accepted_image_formats = ['image/png', 'image/jpeg'];
    
      // if the image is not a png/jpg/jpeg give an error
      if( ! in_array($image_mime, $accepted_image_formats) ){
        http_response_code(400);
        echo 'image not allowed';
        exit();
      }
      
      $random_image_name = bin2hex(random_bytes(16));
    
      switch($image_mime){
        case 'image/png':
          $random_image_name .= '.png';
        break;
        case 'image/jpeg':
          $random_image_name .= '.jpeg';
        break;
      }
    
      if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "images/uploadeImage/$random_image_name")){
        echo 'ok';
        header("Location: image?language=$language");
        exit();
    }     

}


<?php
    require_once __DIR__.'/_x.php';
    require_once __DIR__.'/dictionary.php';
    //echo $language;

    session_start();
    //echo $_SESSION['user_name'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/Momondo_Copy/app.css">
    <link rel="stylesheet" href="/Momondo_Copy/600.css">

    <title>
        <?php echo $_title ?? 'Momondo' ?>
    </title>
</head>
<body oncontextmenu="toggle_menu(); return false">

    <!-- --------------------------------- -->
    <!-- Login popup -->

    <div id="loginOverlay" class="hide">

        <div id="login">

            <div class="closeLogin">
                <a class="comp_logo hide" href="/Momondo_Copy/">
                    <img id="logo" src="/Momondo_Copy/images/momondo.png" alt="momondo logo">
                </a>
                <button onclick="toggle_login()">X</button>
            </div>

            <img src="/Momondo_Copy/images/login.JPG" alt="">
            <div class="loginText">
                <h2>Log in, eller opret en konto</h2>
                <p>Følg priser, organiser rejseplaner, og få adgang til medlemstilbud med din momondo-konto.</p>
            </div>

            <form action="login" method="POST" class="loginForm">

                <label>E-mail</label>
                <p class="error"></p>
                <input  type="text" 
                        placeholder="email" 
                        name="email"
                        data-min="<?=_USER_NAME_MIN_LEN?>"
                        data-max="<?=_USER_NAME_MAX_LEN?>"
                        maxlength="<?=_USER_NAME_MAX_LEN?>">

                <label>Password</label>
                <p class="error"></p>
                <input  type="password" 
                        placeholder="password" 
                        name="password"
                        data-min="<?=_USER_NAME_MIN_LEN?>"
                        data-max="<?=_USER_NAME_MAX_LEN?>"
                        maxlength="<?=_USER_NAME_MAX_LEN?>">

                <button>Log ind</button>
            </form>

            <button class="singupbutton" onclick="toggle_login(); toggle_signup()">Opret konto</button>
        </div>

        <div class="emty"></div>
    </div>

    <!-- --------------------------------- -->
    <!-- Signup popup -->

    <div id="signupOverlay" class="hide">

        <div id="signup">

            <div class="closeSignup">
                <a class="comp_logo hide" href="/Momondo_Copy/">
                    <img id="logo" src="/Momondo_Copy/images/momondo.png" alt="momondo logo">
                </a>
                <button onclick="toggle_signup()">X</button>
            </div>

            <p class="signupBack" onclick="toggle_signup(); toggle_login()"><- Tilbage</p>

            <form id="signupForm" class="signupForm" onsubmit="validate(signup); return false">

                <label>User name (min <?= _USER_NAME_MIN_LEN ?> - max <?= _USER_NAME_MAX_LEN ?> characters)</label>
                <input  type="text" 
                        placeholder="user name" 
                        data-validate="str-user-name"
                        name="user_name"
                        data-min="<?=_USER_NAME_MIN_LEN?>"
                        data-max="<?=_USER_NAME_MAX_LEN?>"
                        maxlength="<?=_USER_NAME_MAX_LEN?>">
                <p class="UserNameError validate_errors hide">Must be between <?= _USER_NAME_MIN_LEN ?> - <?= _USER_NAME_MAX_LEN ?> characters</p>

                <label>Last name (min <?= _USER_LAST_NAME_MIN_LEN ?> - max <?= _USER_LAST_NAME_MAX_LEN ?> characters)</label>
                <input  type="text"
                        placeholder="last name"
                        data-validate="str-user-last-name"
                        data-min="<?=_USER_LAST_NAME_MIN_LEN?>"
                        data-max="<?=_USER_LAST_NAME_MAX_LEN?>"
                        maxlength="<?=_USER_LAST_NAME_MAX_LEN?>"
                        name="user_last_name">
                <p class="LastUserNameError validate_errors hide">Must be between <?= _USER_NAME_MIN_LEN ?> - <?= _USER_NAME_MAX_LEN ?> characters</p>

                <label>E-mail</label>
                <input  type="text" 
                        placeholder="email"
                        data-validate="email" 
                        name="email" 
                        onblur="is_email_available()"
                        onfocus="clean_email()"
                        class="SingupEmail">
                <p id="email" class="EmailError validate_errors hide">Email invalied or email allready taken</p>

                <label>Password (min 5 - max 20)</label>
                <input  type="password" 
                        placeholder="password"
                        data-validate="str-password" 
                        name="password"
                        data-min="5"
                        data-max="20"
                        maxlength="20">
                <p class="PasswordError validate_errors hide">Must be between 5 - 20 characters</p>
                
                <label>Confirm password</label>
                <input  type="password" 
                        placeholder="password"
                        data-validate="match"
                        data-match-name="password"
                        data-max="20"
                        maxlength="20">
                <p class="error validate_errors hide">Wrong password</p>

                <button>Signup</button>
            </form>
        </div>

        <div class="emty"></div>
    </div>

    <!-- --------------------------------- -->
    <!-- Nav -->

    <nav>
        <div>
            <button onclick="toggle_menu()">☰</button>
            <a class="mobile_logo hide" href= <?= "/Momondo_Copy/?language=".$language ?> >
                <img id="logo" src="/Momondo_Copy/images/favicon.png" alt="momondo logo">
            </a>
            <a class="comp_logo hide" href= <?= "/Momondo_Copy/?language=".$language ?> >
                <img id="logo" src="/Momondo_Copy/images/momondo.png" alt="momondo logo">
            </a>
        </div>

        <div>
            <a href="/Momondo_Copy/" style="top: 0.2rem;">Trips</a>

            <?php 
                ini_set('display_errors', 0);
                
                // if the user is login show the profile link
                if( $_SESSION['user_name'] ){
                    echo '
                        <a class="profileLink" href="/Momondo_Copy/profile?language='.$language.'">Profile</a> 
                    ';
                };

                // if the user is NOT login show login link
                if( ! $_SESSION['user_name'] ){
                    echo '
                        <a class="loginLink" onclick="toggle_login()">
                            <button class="loginbut" onclick="toggle_login()">
                                <svg class="auth-account-icon" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                    <path d="M180 100c0-44.1-35.9-80-80-80s-80 35.9-80 80s35.9 80 80 80s80-35.9 80-80zm-80-70c38.6 0 70 31.4 70 70c0 16.3-5.6 31.3-15 43.2c-.5-.7-1-1.4-1.7-2c-3.2-3.1-17.3-7.1-27.3-9.6c9.5-10.2 13.9-25.5 13.9-38.3c0-28.7-13.5-43.3-40-43.3s-40 14.6-40.1 43.3c0 12.8 4.4 28.1 13.9 38.3c-9.9 2.5-24 6.5-27.2 9.5c-.6.6-1.2 1.2-1.7 2C35.6 131.2 30 116.2 30 100c0-38.6 31.4-70 70-70zM52 150.9c.6-1.4 1.1-2.1 1.3-2.4c3.4-2.2 25.1-8 32.5-9.5c4.5-.9 5.5-7 1.4-9.3c-10.4-5.8-17.4-20.5-17.4-36.4C70 70 79 60 100 60c20.7 0 30 10.3 30 33.3c0 15.7-7.2 30.7-17.4 36.4c-4 2.2-3.1 8.3 1.4 9.2c9.6 2.1 29.4 7.4 32.6 9.5c.3.3.8 1.1 1.4 2.4c-27.1 25.5-69 25.6-96 .1z"></path>
                                </svg>
                            </button>
                        login </a>
                    ';
                };

                // if the user is login show the logout link
                if( $_SESSION['user_name']){
                    echo '
                        <a class="loginLink" href="logout?language='.$language.'" onclick="">
                            <button class="loginbut" onclick="">
                                <svg class="auth-account-icon" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                    <path d="M180 100c0-44.1-35.9-80-80-80s-80 35.9-80 80s35.9 80 80 80s80-35.9 80-80zm-80-70c38.6 0 70 31.4 70 70c0 16.3-5.6 31.3-15 43.2c-.5-.7-1-1.4-1.7-2c-3.2-3.1-17.3-7.1-27.3-9.6c9.5-10.2 13.9-25.5 13.9-38.3c0-28.7-13.5-43.3-40-43.3s-40 14.6-40.1 43.3c0 12.8 4.4 28.1 13.9 38.3c-9.9 2.5-24 6.5-27.2 9.5c-.6.6-1.2 1.2-1.7 2C35.6 131.2 30 116.2 30 100c0-38.6 31.4-70 70-70zM52 150.9c.6-1.4 1.1-2.1 1.3-2.4c3.4-2.2 25.1-8 32.5-9.5c4.5-.9 5.5-7 1.4-9.3c-10.4-5.8-17.4-20.5-17.4-36.4C70 70 79 60 100 60c20.7 0 30 10.3 30 33.3c0 15.7-7.2 30.7-17.4 36.4c-4 2.2-3.1 8.3 1.4 9.2c9.6 2.1 29.4 7.4 32.6 9.5c.3.3.8 1.1 1.4 2.4c-27.1 25.5-69 25.6-96 .1z"></path>
                                </svg>
                            </button>
                        logout </a> 
                    ';
                };
            ?>

            <?php
                if( $_GET['language'] == '' ){
                    echo '<a href="?language=dk" style="padding-left: 0.5rem; top: 0.2rem;">🇩🇰 kr.</a> ';
                };
                if( $_GET['language'] == 'dk' ){
                    echo '<a href="?language=en" style="padding-left: 0.5rem; top: 0.2rem;">🇺🇸 $</a> ';
                };
                if( $_GET['language'] == 'en' ){
                    echo '<a href="?language=dk" style="padding-left: 0.5rem; top: 0.2rem;">🇩🇰 kr.</a> ';
                };
            ?>

        </div>
    </nav>

    <!-- --------------------------------- -->
    <!-- Menu -->

    <div id="menu" class="mt4" onclick="toggle_menu()">
        <div class="left">
            <div class="mb1">
                <?php 

                    // if the user is NOT login show login link
                    if( ! $_SESSION['user_name'] ){
                        echo '
                            <button onclick="toggle_login()" class="loginbut" style="width: 1.5rem; height: 1.5rem; position: relative; top: 0.2rem;">
                                <svg class="auth-account-icon" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                    <path d="M180 100c0-44.1-35.9-80-80-80s-80 35.9-80 80s35.9 80 80 80s80-35.9 80-80zm-80-70c38.6 0 70 31.4 70 70c0 16.3-5.6 31.3-15 43.2c-.5-.7-1-1.4-1.7-2c-3.2-3.1-17.3-7.1-27.3-9.6c9.5-10.2 13.9-25.5 13.9-38.3c0-28.7-13.5-43.3-40-43.3s-40 14.6-40.1 43.3c0 12.8 4.4 28.1 13.9 38.3c-9.9 2.5-24 6.5-27.2 9.5c-.6.6-1.2 1.2-1.7 2C35.6 131.2 30 116.2 30 100c0-38.6 31.4-70 70-70zM52 150.9c.6-1.4 1.1-2.1 1.3-2.4c3.4-2.2 25.1-8 32.5-9.5c4.5-.9 5.5-7 1.4-9.3c-10.4-5.8-17.4-20.5-17.4-36.4C70 70 79 60 100 60c20.7 0 30 10.3 30 33.3c0 15.7-7.2 30.7-17.4 36.4c-4 2.2-3.1 8.3 1.4 9.2c9.6 2.1 29.4 7.4 32.6 9.5c.3.3.8 1.1 1.4 2.4c-27.1 25.5-69 25.6-96 .1z"></path>
                                </svg>
                            </button>
                            <button class="logind" onclick="toggle_login()">Log ind</button>
                        ';
                    };
                    
                    // if the user is login show the logout link
                    if( $_SESSION['user_name']){
                        echo '
                            <button onclick="" class="loginbut" href="logout?language='.$language.'" style="width: 1.5rem; height: 1.5rem; position: relative; top: 0.2rem;">
                                <svg class="auth-account-icon" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                    <path d="M180 100c0-44.1-35.9-80-80-80s-80 35.9-80 80s35.9 80 80 80s80-35.9 80-80zm-80-70c38.6 0 70 31.4 70 70c0 16.3-5.6 31.3-15 43.2c-.5-.7-1-1.4-1.7-2c-3.2-3.1-17.3-7.1-27.3-9.6c9.5-10.2 13.9-25.5 13.9-38.3c0-28.7-13.5-43.3-40-43.3s-40 14.6-40.1 43.3c0 12.8 4.4 28.1 13.9 38.3c-9.9 2.5-24 6.5-27.2 9.5c-.6.6-1.2 1.2-1.7 2C35.6 131.2 30 116.2 30 100c0-38.6 31.4-70 70-70zM52 150.9c.6-1.4 1.1-2.1 1.3-2.4c3.4-2.2 25.1-8 32.5-9.5c4.5-.9 5.5-7 1.4-9.3c-10.4-5.8-17.4-20.5-17.4-36.4C70 70 79 60 100 60c20.7 0 30 10.3 30 33.3c0 15.7-7.2 30.7-17.4 36.4c-4 2.2-3.1 8.3 1.4 9.2c9.6 2.1 29.4 7.4 32.6 9.5c.3.3.8 1.1 1.4 2.4c-27.1 25.5-69 25.6-96 .1z"></path>
                                </svg>
                            </button>
                            <button class="logind" onclick="" href="logout?language='.$language.'">Logout</button>
                        ';
                    };

                ?>    
            </div>

            <div class="links bt11 bb11">
                <div class="flex mt1">
                    <a href= <?= "/Momondo_Copy/?language=".$language ?>>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="ui-layout-VerticalIcon hsCY-menu-item-icon hsCY-flights hsCY-icon-active" role="presentation" aria-hidden="true" aria-label="Fly-ikon" cleanup="">
                            <path d="M140.448 177.069l-19.846-43.661c-2.877-6.328-7.998-11.612-12.447-14.676a1029.409 1029.409 0 0 1-14.935 12.983c-4.045 3.618-5.452 9.494-3.67 15.347l2.733 8.981a4.997 4.997 0 0 1-1.248 4.991l-10 10c-2.267 2.268-6.043 1.838-7.754-.851l-14.154-22.241l-10.592 10.592a5 5 0 1 1-7.071-7.07l10.593-10.593l-22.242-14.153c-2.695-1.716-3.112-5.493-.851-7.754l10-10a5 5 0 0 1 4.992-1.248l8.981 2.733c5.85 1.777 11.728.375 15.348-3.671c4.269-5.007 8.599-9.988 12.983-14.935c-3.063-4.449-8.349-9.571-14.676-12.447L22.931 59.552c-3.563-1.619-3.965-6.539-.705-8.712l11.53-7.687a15.083 15.083 0 0 1 11.333-2.213l60.319 12.364c6.006 1.33 14.836-3.512 20.984-9.246c6.775-6.625 13.831-12.567 25.684-17.738c5.899-2.573 12.876-1.07 17.773 3.828l.003.002c4.898 4.897 6.401 11.874 3.828 17.773c-5.171 11.853-11.111 18.909-17.735 25.682c-5.736 6.148-10.583 14.976-9.266 20.906l12.382 60.4a15.1 15.1 0 0 1-2.215 11.332l-7.687 11.53c-2.182 3.276-7.096 2.849-8.711-.704zm-24.66-65.169c5.789 4.467 10.925 10.784 13.918 17.369l16.123 35.472l2.697-4.045a5.034 5.034 0 0 0 .738-3.778L136.9 96.6a19.235 19.235 0 0 1-.445-3.891a1041.686 1041.686 0 0 1-20.667 19.191zm-49.416 28.799l12 18.857l3.471-3.471l-1.86-6.111c-2.938-9.652-.396-19.525 6.631-25.767l.077-.066c23.665-20.174 47.419-42.531 62.016-57.438c6.149-6.558 10.969-11.688 15.808-22.779c1.113-2.552-.165-5.136-1.733-6.703l-.003-.002c-1.567-1.568-4.151-2.846-6.704-1.734c-10.394 4.535-15.439 8.933-22.782 15.811c-15.335 15.027-37.539 38.676-57.433 62.013l-.067.076c-6.242 7.028-16.115 9.567-25.767 6.631l-6.111-1.859l-3.471 3.471l18.858 12l7.164-7.163a5 5 0 1 1 7.071 7.07l-7.165 7.164zM35.258 54.17l35.471 16.124c6.585 2.993 12.903 8.128 17.37 13.918a1045.845 1045.845 0 0 1 19.202-20.678a19.358 19.358 0 0 1-3.982-.452L43.081 50.735a5.039 5.039 0 0 0-3.778.738l-4.045 2.697z"></path>
                        </svg>
                    </a>
                    <a href= <?= "/Momondo_Copy/?language=".$language ?>>Fly</a>
                </div>
                <!-- ------------------- -->
                <div class="flex mt1">
                    <a href= "/Momondo_Copy/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="ui-layout-VerticalIcon hsCY-menu-item-icon hsCY-cars" role="presentation" aria-hidden="true" aria-label="Billeje-ikon" cleanup="">
                            <path d="M165 160h-10c-7.2 0-13.2-5.1-14.7-11.9c-26.8 2.5-53.9 2.5-80.6 0c-1.5 6.8-7.5 11.9-14.7 11.9H35c-8.3 0-15-6.7-15-15v-43.7c-2.1-.5-4.2-1-6.2-1.5c-2.7-.7-4.3-3.4-3.6-6.1c.7-2.7 3.4-4.3 6.1-3.6c1.6.4 3.2.8 4.7 1.1l12.4-37.7C34.9 49 39.2 45 44.7 44c30-5.3 80.7-5.3 110.6 0c5.5 1 9.8 4.9 11.4 9.7L179 91.4c1.6-.4 3.1-.8 4.7-1.2c2.7-.7 5.4.9 6.1 3.6c.7 2.7-.9 5.4-3.6 6.1c-2.1.5-4.2 1.1-6.3 1.6v43.6c.1 8.2-6.6 14.9-14.9 14.9zm-15-17.4v2.4c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5v-19.2c-11 1.6-26.2 3.5-34.6 4.2c-2.8.2-5.2-1.8-5.4-4.6c-.2-2.8 1.8-5.2 4.6-5.4c8.4-.7 24.6-2.8 35.4-4.3v-12.1c-43.8 8.7-94.9 8.7-140-.1v12.2c10.8 1.6 27 3.7 35.4 4.3c2.8.2 4.8 2.6 4.6 5.4c-.2 2.8-2.6 4.8-5.4 4.6c-8.4-.7-23.6-2.6-34.6-4.2V145c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5v-2.4c0-2.9 2.5-5.3 5.5-5c29.5 3.2 59.4 3.2 88.9 0c3.1-.3 5.6 2.1 5.6 5zM30.8 93.4c44.6 8.9 95.3 8.9 138.5.1l-12-36.7c-.6-1.6-2-2.7-3.6-3c-29-5.1-78.1-5.1-107.2 0c-1.7.3-3.1 1.4-3.6 3L30.8 93.4zm74.4-4c-2.4-1.4-3.2-4.4-1.9-6.8C107.7 74.8 116 70 125 70s17.1 4.7 21.6 12.5c1.4 2.4.6 5.4-1.8 6.8c-2.4 1.4-5.4.6-6.8-1.8c-2.7-4.7-7.6-7.5-13-7.5s-10.3 2.9-12.9 7.5c-1.4 2.4-4.5 3.2-6.9 1.9z"></path>
                        </svg>
                    </a>
                    <a href= "/Momondo_Copy/">Bil</a>
                </div>
                <!-- ------------------- -->
                <div class="flex mt1">
                    <a href= <?= "/Momondo_Copy/overnatning?language=".$language ?>>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="ui-layout-VerticalIcon hsCY-menu-item-icon hsCY-hotels" role="presentation" aria-hidden="true" aria-label="Hoteller-ikon" cleanup="">
                            <path d="M175 170a5 5 0 0 1-5-5v-5H30v5a5 5 0 1 1-10 0v-43.092c0-8.176 3.859-15.462 10-20.027V65c0-13.785 11.215-25 25-25h90c13.785 0 25 11.215 25 25v36.98c6.093 4.613 10 11.922 10 19.928V165a5 5 0 0 1-5 5zM30 150h140v-10H30v10zm0-20h140v-8.092c0-7.342-5.486-13.707-12.762-14.806c-40.216-6.077-73.399-6.207-114.477 0C35.415 108.21 30 114.4 30 121.908V130zm120-34.027c2.877.382 9.581 1.381 10 1.467V65c0-8.271-6.729-15-15-15H55c-8.271 0-15 6.729-15 15v32.438c.418-.084 7.123-1.083 10-1.465V85c0-8.271 6.729-15 15-15h25a14.94 14.94 0 0 1 10 3.829A14.943 14.943 0 0 1 110 70h25c8.271 0 15 6.729 15 15v10.973zm-45-3.45c11.463.167 22.988.912 35 2.233V85c0-2.757-2.243-5-5-5h-25c-2.757 0-5 2.243-5 5v7.523zM65 80c-2.757 0-5 2.243-5 5v9.756c12.012-1.321 23.537-2.065 35-2.232V85c0-2.757-2.243-5-5-5H65z"></path>
                        </svg>
                    </a>
                    <a href= <?= "/Momondo_Copy/overnatning?language=".$language ?>>Overnatning</a>
                </div>
                <!-- ------------------- -->
                <div class="flex mt1">
                    <a href= <?= "/Momondo_Copy/fearger?language=".$language ?>>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="ui-layout-VerticalIcon hsCY-menu-item-icon hsCY-ferries" role="presentation" aria-hidden="true" aria-label="Ferries-ikon" cleanup="">
                            <path d="M100 184.55h0a5 5 0 01-3.24-1.22c-29.46-25.18-56-23-68.12-10.32a5 5 0 11-7.22-6.92a38.81 38.81 0 0114.8-9.51c-4.63-14-10.38-27-15.38-34.62a5 5 0 013-7.59A229 229 0 0149 109.94l-8.8-39.3a5 5 0 014.88-6.09h25v-25a5 5 0 015-5h20v-15a5 5 0 1110 0v15h20a5 5 0 015 5v25h25a5 5 0 014.92 6.09L151.21 110a227.19 227.19 0 0125 4.41a5 5 0 013 7.59c-5 7.66-10.75 20.64-15.38 34.62a38.73 38.73 0 0114.8 9.51a5 5 0 01-7.22 6.92c-12.15-12.68-38.66-14.86-68.13 10.33a5 5 0 01-3.25 1.21h0zm-47.62-30.72c12.61 0 27.27 4.5 42.64 15.47l.1-52.32c-22.49.24-44.67 2.12-62.31 5.65a199.08 199.08 0 0113.13 31.6a51.91 51.91 0 016.44-.4zM105.12 117l-.1 52.29c18-12.86 35.13-16.83 49-15a199.22 199.22 0 0113.13-31.61c-6.76-1.35-14.21-2.47-22.09-3.34a5.05 5.05 0 01-1-.11c-12.25-1.38-25.54-2.11-38.94-2.23zm-5-10c14 0 28.06.62 41.12 1.86l7.67-34.31H51.36l7.64 34.3c13.09-1.23 27.09-1.85 41.09-1.85zm-20-42.45h40v-20h-40zm55 30h-10a5 5 0 010-10h10a5 5 0 010 10zm-30 0h-10a5 5 0 010-10h10a5 5 0 010 10zm-30 0h-10a5 5 0 010-10h10a5 5 0 010 10z"></path>
                        </svg>
                    </a>
                    <a href= <?= "/Momondo_Copy/fearger?language=".$language ?>>Færger</a>
                </div>
                <!-- ------------------- -->
                <div class="flex mt1">
                    <a href="/Momondo_Copy/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="ui-layout-VerticalIcon hsCY-menu-item-icon hsCY-activities" role="presentation" aria-hidden="true" aria-label="Find aktiviteter-ikon" cleanup="">
                            <path d="M175 180a5 5 0 01-1.77-.32c-.5-.19-26.59-9.68-73.25-9.68c-46.84 0-73 9.58-73.22 9.68a5 5 0 01-3.53-9.36c1.08-.4 26.07-9.65 71.77-10.29V120H55a5 5 0 01-3-1l-20-15a5 5 0 010-8l20-15a5 5 0 013-1h40V70H45a5 5 0 01-5-5V35a5 5 0 015-5h50v-5a5 5 0 0110 0v5h40a5 5 0 013 1l20 15a5 5 0 010 8l-20 15a5 5 0 01-3 1h-40v10h50a5 5 0 015 5v30a5 5 0 01-5 5h-50v40c45.71.64 70.69 9.88 71.77 10.28A5 5 0 01175 180zm-75-70h50V90H56.67l-13.34 10l13.34 10zm0-50h43.33l13.34-10l-13.34-10H50v20z"></path>
                        </svg>
                    </a>
                    <a href="/Momondo_Copy/">Oplevelser</a>
                </div>
                <!-- ------------------- -->
                <div class="flex mt1">
                    <a href= <?= "/Momondo_Copy/pakkerejser?language=".$language ?>>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="ui-layout-VerticalIcon hsCY-menu-item-icon hsCY-packages" role="presentation" aria-hidden="true" aria-label="Find pakkerejser-ikon" cleanup="">
                            <path d="M94.3 179.8c-24-3.6-46.7-7-67.7 0c-2.6.9-5.5-.5-6.3-3.2c-.9-2.6.5-5.5 3.2-6.3c15.4-5.1 31-5.3 47.1-3.7l27-74.3c-4.2-.9-8.4-.9-12.1.1c-6 1.5-12.4-.6-16.2-5.8c-5.6-8-18.1-13.2-28.4-11.7c-8.2 1.2-14.2-7.7-10-15c18.4-31.7 57.2-42 90.3-32.3l1.8-4.8c.9-2.6 3.8-3.9 6.4-3c2.6.9 3.9 3.8 3 6.4l-1.8 4.9c31.6 13.8 54.6 46.7 48.5 82.9c-1.4 8.2-11.6 11.2-17.2 5c-7-7.7-19.8-11.8-29.3-9.3c-6 1.5-12.5-.6-16.2-5.9c-2.2-3.2-5.5-5.9-9.4-7.9l-26.2 72c10.5 1.4 21.1 3.2 31.9 4.6c-9-19.8 5.7-42.3 27.3-42.3c21.3 0 36 21.7 27.7 41.6c2-.4 4-.9 6-1.5c2.7-.7 5.4.8 6.1 3.5s-.8 5.4-3.5 6.1c-28 7.6-53.6 4.1-82-.1zm31.1-6.1c3.8.3 7.6.5 11.4.6c6.2-11.7 2.7-28.3-3.6-33.1c-13.3 4.8-17.7 21.7-7.8 32.5zm20.1-32.9c4.9 9.1 6.1 22.2 2.2 33.4c2.3-.1 4.6-.3 7-.5c10.1-11 5.2-28.8-9.2-32.9zm23.7-28.7c5.8-34.7-19.7-63.8-46.7-73.7c-27.1-9.8-65.3-3.9-83 26.4c12.5-1.8 27 3.6 35.4 12.7c2.2-9 5.8-17 10.7-23.9c1.6-2.3 4.7-2.8 7-1.2c2.3 1.6 2.8 4.7 1.2 7c-4.6 6.5-7.9 14.2-9.7 23c13.7-3.1 31 3.2 39.6 14.3c4.2-7.9 6.7-15.9 7.3-23.8c.2-2.8 2.7-4.8 5.4-4.5c2.8.2 4.8 2.7 4.5 5.4c-.7 8.4-3.2 16.8-7.2 25.2c12.3-1.6 27 3.6 35.5 13.1z"></path>
                        </svg>
                    </a>
                    <a href= <?= "/Momondo_Copy/pakkerejser?language=".$language ?>>Pakkerejser</a>
                </div>
            </div>

            <div class="links bb11 mb1">
                <div class="flex mt1">
                    <a href="/Momondo_Copy/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="ui-layout-VerticalIcon hsCY-menu-item-icon hsCY-explore" role="presentation" aria-hidden="true" aria-label="Explore-ikon" cleanup="">
                            <path d="M180 100c0-44.1-35.9-80-80-80s-80 35.9-80 80s35.9 80 80 80s80-35.9 80-80zm-50-17.9c11.6-2.3 22.9-5.8 33.8-10.7c8.1 18 8.3 38.9 0 57.3c-10.9-4.9-22.2-8.5-33.8-10.7c1.7-11.9 1.7-24.1 0-35.9zm29.1-19.6c-9.9 4.4-20.2 7.7-30.8 9.7C125 57 119 42.8 110.8 30.8c20.3 3.2 37.7 15.1 48.3 31.7zm-77.6 63.7c12.3-1.6 24.7-1.6 37 0c-3.3 15-9.5 29.1-18.5 40.9c-9-11.8-15.2-26-18.5-40.9zm-1.7-9.9c-1.4-10.8-1.4-21.9 0-32.7c13.4 1.7 27 1.7 40.4 0c1.4 10.8 1.4 21.9 0 32.7c-13.4-1.7-27-1.7-40.4 0zm38.7-42.5c-12.3 1.6-24.7 1.6-37 0c3.3-15 9.5-29.1 18.5-40.9c9 11.8 15.2 26 18.5 40.9zm-29.3-43C81 42.8 75 57 71.7 72.2c-10.5-2.1-20.9-5.3-30.7-9.8C51.5 45.9 68.9 34 89.2 30.8zm-53 40.5C47 76.2 58.4 79.8 70 82.1c-1.6 11.9-1.6 24 0 35.9c-11.6 2.3-22.9 5.9-33.8 10.8c-8.2-18.2-8.3-39.1 0-57.5zm4.8 66.2c9.9-4.4 20.2-7.7 30.7-9.7C75 143 81 157.2 89.2 169.2C68.9 166 51.5 154.1 41 137.5zm69.8 31.7c8.2-12 14.2-26.2 17.5-41.4c10.5 2.1 20.9 5.3 30.8 9.7c-10.6 16.6-28 28.5-48.3 31.7z"></path>
                        </svg>
                    </a>
                    <a href="/Momondo_Copy/">Explore</a>
                </div>
                <!-- ------------------- -->
                <div class="flex mt1">
                    <a href="/Momondo_Copy/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="ui-layout-VerticalIcon hsCY-menu-item-icon hsCY-travelRestrictions" role="presentation" aria-hidden="true" aria-label="Rejserestriktioner-ikon" cleanup="">
                            <path d="M102.13 190a5 5 0 01-2.57-.72A136.67 136.67 0 0134 84.85L28.59 37a5 5 0 016.55-5.31c.31.1 32.5 10.3 64.22-10.84a5 5 0 015.54 0c31.88 21.25 63.9 11 64.22 10.84a5 5 0 016.55 5.31l-5.39 47.86a136.67 136.67 0 01-65.58 104.42a5 5 0 01-2.57.72zM39.32 42.94l4.6 40.85a.34.34 0 010 .1a126.7 126.7 0 0058.2 95.23a126.7 126.7 0 0058.2-95.23a.34.34 0 010-.1l4.6-40.85a89.4 89.4 0 01-62.81-12a89.4 89.4 0 01-62.79 12zm85.78 21.77c-11.91-.52-19.47 7.7-23 12.76c-3.5-5.06-11-13.28-23-12.76a23.56 23.56 0 00-22.41 23.2c0 9.67 5.58 20.69 16.6 32.74a206.14 206.14 0 0024.11 23a7.52 7.52 0 009.35 0c7.31-5.74 15.19-13.28 24.12-23c11-12.05 16.6-23.07 16.6-32.74a23.56 23.56 0 00-22.37-23.2z"></path>
                        </svg>
                    </a>
                    <a href="/Momondo_Copy/">Rejserestriktioner</a>
                </div>
            </div>

            <div class="flex mt1 mb3">
                <a href="/Momondo_Copy/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="ui-layout-VerticalIcon hsCY-menu-item-icon hsCY-trips" role="presentation" aria-hidden="true" aria-label="Trips-ikon" cleanup="">
                        <path d="M144.416 168.114c-6.09-4.657-12.645-10.746-20.042-18.614C114.836 139.357 110 129.914 110 121.433c0-11.31 9.475-20.914 21.12-21.412c8.843-.379 15.087 4.25 18.88 8.432c3.794-4.183 10.025-8.815 18.881-8.432c11.644.498 21.119 10.102 21.119 21.412c0 8.481-4.836 17.925-14.373 28.067c-7.395 7.866-13.952 13.955-20.046 18.617a9.205 9.205 0 0 1-11.165-.003zm-12.869-58.102c-6.367.272-11.547 5.395-11.547 11.421c0 5.77 4.031 13.106 11.658 21.218c6.818 7.251 12.824 12.865 18.342 17.143c5.521-4.281 11.528-9.896 18.342-17.143C175.969 134.54 180 127.203 180 121.433c0-6.025-5.18-11.148-11.546-11.421c-9.02-.379-13.781 8.855-13.98 9.249c-1.878 3.714-7.158 3.636-8.959-.023c-2.52-4.986-7.894-9.485-13.968-9.226zM105 160H45c-8.271 0-15-6.729-15-15v-15h-5a5 5 0 1 1 0-10h5v-20h-5a5 5 0 0 1 0-10h5V70h-5a5 5 0 0 1 0-10h5V45c0-8.271 6.729-15 15-15h110c8.271 0 15 6.729 15 15v40a5 5 0 1 1-10 0V45c0-2.757-2.243-5-5-5H80v110h25c2.762 0 5 2.238 5 5s-2.238 5-5 5zm-65-30v15c0 2.757 2.243 5 5 5h25V40H45c-2.757 0-5 2.243-5 5v15h5a5 5 0 0 1 0 10h-5v20h5a5 5 0 0 1 0 10h-5v20h5a5 5 0 1 1 0 10h-5z"></path>
                    </svg>
                </a>
                <a href="/Momondo_Copy/">Trips</a>
            </div>
        </div>
    </div>

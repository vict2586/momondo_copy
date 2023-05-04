<?php
    $_title = 'Momondo';
    require_once __DIR__ .'/comp_header.php';
?>

<main id="index">

   <h1 class="mt4"><?= $FrontPage_dictionary[$language.'_wellcome'] ?></h1>

    <form class="mt1" onsubmit="get_flights(); return false">
        <div>
            <div class="formContainer">
                <div class="formSVG hide">
                    <svg style="width: 70%;" class="Tn7z-icon" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                        <path d="M140.448 177.069l-19.846-43.661c-2.877-6.328-7.998-11.612-12.447-14.676a1029.409 1029.409 0 0 1-14.935 12.983c-4.045 3.618-5.452 9.494-3.67 15.347l2.733 8.981a4.997 4.997 0 0 1-1.248 4.991l-10 10c-2.267 2.268-6.043 1.838-7.754-.851l-14.154-22.241l-10.592 10.592a5 5 0 1 1-7.071-7.07l10.593-10.593l-22.242-14.153c-2.695-1.716-3.112-5.493-.851-7.754l10-10a5 5 0 0 1 4.992-1.248l8.981 2.733c5.85 1.777 11.728.375 15.348-3.671c4.269-5.007 8.599-9.988 12.983-14.935c-3.063-4.449-8.349-9.571-14.676-12.447L22.931 59.552c-3.563-1.619-3.965-6.539-.705-8.712l11.53-7.687a15.083 15.083 0 0 1 11.333-2.213l60.319 12.364c6.006 1.33 14.836-3.512 20.984-9.246c6.775-6.625 13.831-12.567 25.684-17.738c5.899-2.573 12.876-1.07 17.773 3.828l.003.002c4.898 4.897 6.401 11.874 3.828 17.773c-5.171 11.853-11.111 18.909-17.735 25.682c-5.736 6.148-10.583 14.976-9.266 20.906l12.382 60.4a15.1 15.1 0 0 1-2.215 11.332l-7.687 11.53c-2.182 3.276-7.096 2.849-8.711-.704zm-24.66-65.169c5.789 4.467 10.925 10.784 13.918 17.369l16.123 35.472l2.697-4.045a5.034 5.034 0 0 0 .738-3.778L136.9 96.6a19.235 19.235 0 0 1-.445-3.891a1041.686 1041.686 0 0 1-20.667 19.191zm-49.416 28.799l12 18.857l3.471-3.471l-1.86-6.111c-2.938-9.652-.396-19.525 6.631-25.767l.077-.066c23.665-20.174 47.419-42.531 62.016-57.438c6.149-6.558 10.969-11.688 15.808-22.779c1.113-2.552-.165-5.136-1.733-6.703l-.003-.002c-1.567-1.568-4.151-2.846-6.704-1.734c-10.394 4.535-15.439 8.933-22.782 15.811c-15.335 15.027-37.539 38.676-57.433 62.013l-.067.076c-6.242 7.028-16.115 9.567-25.767 6.631l-6.111-1.859l-3.471 3.471l18.858 12l7.164-7.163a5 5 0 1 1 7.071 7.07l-7.165 7.164zM35.258 54.17l35.471 16.124c6.585 2.993 12.903 8.128 17.37 13.918a1045.845 1045.845 0 0 1 19.202-20.678a19.358 19.358 0 0 1-3.982-.452L43.081 50.735a5.039 5.039 0 0 0-3.778.738l-4.045 2.697z"></path>
                    </svg>
                </div>
                <input  oninput="ShowDropDownFrom()" 
                        value="<?= $_GET['fromCity'] ?>" 
                        id="from_city" 
                        class="search_flight_from" 
                        type="text" 
                        placeholder="<?= $Global_dictionary[$language.'_indexFormF'] ?>">
            </div>

            <button class="switch">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="c-P_--icon c-P_--mod-responsive" role="img" cleanup="">
                    <path d="M71.465 101.465a4.998 4.998 0 0 1 7.07 0a4.998 4.998 0 0 1 0 7.07L57.071 130H155a5 5 0 1 1 0 10H57.071l21.464 21.465a4.998 4.998 0 0 1 0 7.07a4.998 4.998 0 0 1-7.07 0l-30-30a4.998 4.998 0 0 1 0-7.07l30-30zm87.071-32.929a5 5 0 0 0 0-7.071l-30-30a5.001 5.001 0 0 0-7.071 7.071L142.929 60H45a5 5 0 1 0 0 10h97.929l-21.464 21.464a5 5 0 1 0 7.071 7.071l30-29.999z"></path>
                </svg>
            </button>

            <div class="formContainer">
                <div class="formSVG hide">
                    <svg style="width: 70%;" class="Tn7z-icon" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                        <path d="M140.448 177.069l-19.846-43.661c-2.877-6.328-7.998-11.612-12.447-14.676a1029.409 1029.409 0 0 1-14.935 12.983c-4.045 3.618-5.452 9.494-3.67 15.347l2.733 8.981a4.997 4.997 0 0 1-1.248 4.991l-10 10c-2.267 2.268-6.043 1.838-7.754-.851l-14.154-22.241l-10.592 10.592a5 5 0 1 1-7.071-7.07l10.593-10.593l-22.242-14.153c-2.695-1.716-3.112-5.493-.851-7.754l10-10a5 5 0 0 1 4.992-1.248l8.981 2.733c5.85 1.777 11.728.375 15.348-3.671c4.269-5.007 8.599-9.988 12.983-14.935c-3.063-4.449-8.349-9.571-14.676-12.447L22.931 59.552c-3.563-1.619-3.965-6.539-.705-8.712l11.53-7.687a15.083 15.083 0 0 1 11.333-2.213l60.319 12.364c6.006 1.33 14.836-3.512 20.984-9.246c6.775-6.625 13.831-12.567 25.684-17.738c5.899-2.573 12.876-1.07 17.773 3.828l.003.002c4.898 4.897 6.401 11.874 3.828 17.773c-5.171 11.853-11.111 18.909-17.735 25.682c-5.736 6.148-10.583 14.976-9.266 20.906l12.382 60.4a15.1 15.1 0 0 1-2.215 11.332l-7.687 11.53c-2.182 3.276-7.096 2.849-8.711-.704zm-24.66-65.169c5.789 4.467 10.925 10.784 13.918 17.369l16.123 35.472l2.697-4.045a5.034 5.034 0 0 0 .738-3.778L136.9 96.6a19.235 19.235 0 0 1-.445-3.891a1041.686 1041.686 0 0 1-20.667 19.191zm-49.416 28.799l12 18.857l3.471-3.471l-1.86-6.111c-2.938-9.652-.396-19.525 6.631-25.767l.077-.066c23.665-20.174 47.419-42.531 62.016-57.438c6.149-6.558 10.969-11.688 15.808-22.779c1.113-2.552-.165-5.136-1.733-6.703l-.003-.002c-1.567-1.568-4.151-2.846-6.704-1.734c-10.394 4.535-15.439 8.933-22.782 15.811c-15.335 15.027-37.539 38.676-57.433 62.013l-.067.076c-6.242 7.028-16.115 9.567-25.767 6.631l-6.111-1.859l-3.471 3.471l18.858 12l7.164-7.163a5 5 0 1 1 7.071 7.07l-7.165 7.164zM35.258 54.17l35.471 16.124c6.585 2.993 12.903 8.128 17.37 13.918a1045.845 1045.845 0 0 1 19.202-20.678a19.358 19.358 0 0 1-3.982-.452L43.081 50.735a5.039 5.039 0 0 0-3.778.738l-4.045 2.697z"></path>
                    </svg>
                </div>
                <input  oninput="ShowDropDownTo()" 
                        value="<?= $_GET['toCity'] ?>" 
                        id="to_city" 
                        class="search_flight_to" 
                        type="text" 
                        placeholder="<?= $Global_dictionary[$language.'_indexFormT'] ?>">
            </div>

            <div class="formContainer">
                    <div class="formSVG hide">
                        <svg style="width: 70%;" class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M165 180H35c-8.3 0-15-6.7-15-15V35c0-8.3 6.7-15 15-15h25v-5c0-2.8 2.2-5 5-5s5 2.2 5 5v5h60v-5c0-2.8 2.2-5 5-5s5 2.2 5 5v5h25c8.3 0 15 6.7 15 15v130c0 8.3-6.7 15-15 15zM30 60v105c0 2.8 2.2 5 5 5h130c2.8 0 5-2.2 5-5V60H30zm0-10h140V35c0-2.8-2.2-5-5-5h-25v5c0 2.8-2.2 5-5 5s-5-2.2-5-5v-5H70v5c0 2.8-2.2 5-5 5s-5-2.2-5-5v-5H35c-2.8 0-5 2.2-5 5v15zm75 100c-2.8 0-5-2.2-5-5V97.1l-11.5 11.5c-2 2-5.1 2-7.1 0s-2-5.1 0-7.1l20-20c1.4-1.4 3.6-1.9 5.4-1.1c1.9.8 3.1 2.6 3.1 4.6v60c.1 2.8-2.1 5-4.9 5z"></path>
                        </svg>
                    </div>
                    <input type="date">
            </div>

            <div class="formContainer">
                    <div class="formSVG hide">
                        <svg style="width: 70%;" class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M165 180H35c-8.3 0-15-6.7-15-15V35c0-8.3 6.7-15 15-15h25v-5c0-2.8 2.2-5 5-5s5 2.2 5 5v5h60v-5c0-2.8 2.2-5 5-5s5 2.2 5 5v5h25c8.3 0 15 6.7 15 15v130c0 8.3-6.7 15-15 15zM30 60v105c0 2.8 2.2 5 5 5h130c2.8 0 5-2.2 5-5V60H30zm0-10h140V35c0-2.8-2.2-5-5-5h-25v5c0 2.8-2.2 5-5 5s-5-2.2-5-5v-5H70v5c0 2.8-2.2 5-5 5s-5-2.2-5-5v-5H35c-2.8 0-5 2.2-5 5v15zm75 100c-2.8 0-5-2.2-5-5V97.1l-11.5 11.5c-2 2-5.1 2-7.1 0s-2-5.1 0-7.1l20-20c1.4-1.4 3.6-1.9 5.4-1.1c1.9.8 3.1 2.6 3.1 4.6v60c.1 2.8-2.1 5-4.9 5z"></path>
                        </svg>
                    </div>
                    <input type="date">
            </div>
        </div>
        <button class="search mt1"><?= $Global_dictionary[$language.'_search'] ?></button>
    </form>

    <div id="SearchFromDropDown" class="hide">
        <div class="container from_result" onclick="select_from_city()">
            <img src="/Momondo_Copy/images/bangkok.jpg" alt="Image">
            <div>
                <div>
                    <p class="city-name" > <b> Bangkok </b> </p>
                    <p>Thailand</p>
                    <p class="cg">BKK</p>
                </div>
                <p class="cg">Bangkok</p>
            </div>
            <input type="checkbox">
        </div>

        <div class="container from_result" onclick="select_from_city()">
            <img src="/Momondo_Copy/images/copenhagen.jpg" alt="Image">
            <div>
                <div>
                    <p class="city-name" > <b> Copenhagen </b> </p>
                    <p>Kastrup</p>
                    <p class="cg">CPH</p>
                </div>
                <p class="cg">Copenhagen</p>
            </div>
            <input type="checkbox">
        </div>

        <div class="container from_result" onclick="select_from_city()">
            <img src="/Momondo_Copy/images/min_card/frankrig.jpg" alt="Image">
            <div>
                <div>
                    <p class="city-name" > <b> Paris </b> </p>
                    <p>Frankrig</p>
                    <p class="cg">PAR</p>
                </div>
                <p class="cg">Paris</p>
            </div>
            <input type="checkbox">
        </div>

    </div>

    <div id="SearchToDropDown" class="hide">
        <div class="container to_results" onclick="select_to_city()">
            <img src="/Momondo_Copy/images/min_card/athen.jpg" alt="Image">
            <div>
                <div>
                    <p class="city-name" > <b> Athen </b> </p>
                    <p>Grækenland</p>
                    <p class="cg">ATH</p>
                </div>
                <p class="cg">Athen</p>
            </div>
            <input type="checkbox">
        </div>

        <div class="container to_results" onclick="select_to_city()">
            <img src="/Momondo_Copy/images/min_card/tyskland.jpg" alt="Image">
            <div>
                <div>
                    <p class="city-name" > <b> Berlin </b> </p>
                    <p>Tyskland</p>
                    <p class="cg">BER</p>
                </div>
                <p class="cg">Berlin Brandenburg</p>
            </div>
            <input type="checkbox">
        </div>

        <div class="container to_results" onclick="select_to_city()">
            <img src="/Momondo_Copy/images/min_card/storbritannien.jpg" alt="Image">
            <div>
                <div>
                    <p class="city-name" > <b> London </b> </p>
                    <p>England, Storbritannien</p>
                    <p class="cg">LON</p>
                </div>
                <p class="cg">London</p>
            </div>
            <input type="checkbox">
        </div>
    </div>

</main>

<div id="searchFlight">
    <div id="settings" class="hide">

        <div id="PriceAlert">
            <p><?= $flight_result_dictionary[$language.'_advice'] ?></p>
            <div class="ptb fw"> ¯\_(ツ)_/¯ </div>
            <p><?= $flight_result_dictionary[$language.'_data'] ?></p>
            <div class="slider">
                <p><?= $flight_result_dictionary[$language.'_price'] ?></p>
                <img src="/Momondo_Copy/images/slider.jpg" alt="off">
            </div>
        </div>

        <div class="DropDown">
            <p>Recommended filters</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Stops</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>
        
        <div class="FareAssistant DropDown">
            <p class="mb2">Fare assistant</p>
            <div class="flex">
                <div class="svg">
                    <svg id="-images-kameleon-icons-utilities-bag-carryon_iae_ieB_iWM" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                        <path d="M130 185a15 15 0 01-14.14-10H84.14a15 15 0 01-28.28 0H55a15 15 0 01-15-15v-60a15 15 0 0115-15h15V27.12C70 22.6 73.9 15 100 15c11.2 0 30 1.58 30 12.12V85h15a15 15 0 0115 15v60a15 15 0 01-15 15h-.86A15 15 0 01130 185zm-50-20h40a5 5 0 015 5a5 5 0 0010 0a5 5 0 015-5h5a5 5 0 005-5v-60a5 5 0 00-5-5H55a5 5 0 00-5 5v60a5 5 0 005 5h5a5 5 0 015 5a5 5 0 0010 0a5 5 0 015-5zm0-80h40V28.1c-2-1.23-8.93-3.1-20-3.1s-18 1.87-20 3.1zm45 60a5 5 0 01-5-5v-20a5 5 0 0110 0v20a5 5 0 01-5 5zm-50 0a5 5 0 01-5-5v-20a5 5 0 0110 0v20a5 5 0 01-5 5z"></path>
                    </svg>
                </div>
                <p>Cabin bag</p>
                <div class="GrayOutButton"> 
                    <p> - </p>
                </div>
                <p> 0 </p>
                <div class="FareAssistantButton">
                    <p> + </p>
                </div>
            </div>
            <div class="flex">
                <div class="svg">
                    <svg id="-images-kameleon-icons-utilities-bag-checked_iae_iam_iWM" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                        <path d="M130 185a15 15 0 01-14.14-10H84.14a15 15 0 01-28.28 0H55a15 15 0 01-15-15V60a15 15 0 0115-15h15V27.12C70 22.6 73.9 15 100 15c11.2 0 30 1.58 30 12.12V45h15a15 15 0 0115 15v100a15 15 0 01-15 15h-.86A15 15 0 01130 185zm-50-20h40a5 5 0 015 5a5 5 0 0010 0a5 5 0 015-5h5a5 5 0 005-5V60a5 5 0 00-5-5H80v12.93l8.54 8.53A5 5 0 0190 80v30a5 5 0 01-5 5h-5v25a5 5 0 01-10 0v-25h-5a5 5 0 01-5-5V80a5 5 0 011.46-3.54L70 67.93V55H55a5 5 0 00-5 5v100a5 5 0 005 5h5a5 5 0 015 5a5 5 0 0010 0a5 5 0 015-5zm-10-60h10V82.07l-5-5l-5 5zm10-60h40V28.1c-2-1.23-8.93-3.1-20-3.1s-18 1.87-20 3.1zm45 100a5 5 0 01-5-5V80a5 5 0 0110 0v60a5 5 0 01-5 5z"></path>
                    </svg>
                </div>
                <p>Checked bag</p>
                <div class="GrayOutButton"> 
                    <p> - </p>
                </div>
                <p> 0 </p>
                <div class="FareAssistantButton">
                    <p> + </p>
                </div>
            </div>
            <div class="flex">
                <div class="svg">
                    <svg class="_iae _iam _iWM" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                        <path d="M50 90h20c5.6 0 10-4.4 10-10V70c0-5.6-4.4-10-10-10H50c-5.6 0-10 4.4-10 10v10c0 5.6 4.4 10 10 10zm0-20h20v10H50V70zm10 55c0 2.8-2.2 5-5 5H45c-2.8 0-5-2.2-5-5s2.2-5 5-5h10c2.8 0 5 2.2 5 5zm105-85H35c-8.3 0-15 6.7-15 15v90c0 8.3 6.7 15 15 15h130c8.3 0 15-6.7 15-15V55c0-8.3-6.7-15-15-15zm5 105c0 2.8-2.2 5-5 5H35c-2.8 0-5-2.2-5-5V55c0-2.8 2.2-5 5-5h130c2.8 0 5 2.2 5 5v90zm-50-20c0 2.8-2.2 5-5 5h-10c-2.8 0-5-2.2-5-5s2.2-5 5-5h10c2.8 0 5 2.2 5 5zm30 0c0 2.8-2.2 5-5 5h-10c-2.8 0-5-2.2-5-5s2.2-5 5-5h10c2.8 0 5 2.2 5 5zm-60 0c0 2.8-2.2 5-5 5H75c-2.8 0-5-2.2-5-5s2.2-5 5-5h10c2.8 0 5 2.2 5 5zm55-65c-3.8 0-7.3 1.5-10 3.9c-2.7-2.4-6.2-3.9-10-3.9c-8.3 0-15 6.7-15 15s6.7 15 15 15c3.8 0 7.3-1.5 10-3.9c2.7 2.4 6.2 3.9 10 3.9c8.3 0 15-6.7 15-15s-6.7-15-15-15zm-20 20c-2.8 0-5-2.2-5-5s2.2-5 5-5s5 2.2 5 5s-2.2 5-5 5zm20 0c-2.8 0-5-2.2-5-5s2.2-5 5-5s5 2.2 5 5s-2.2 5-5 5z"></path>
                    </svg>
                </div>
                <p>Payment method</p>
            </div>
            <div class="FareAssistantDropDown">
                <p>Choose payment method</p>
                <div class="svg">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                        <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                    </svg>
                </div>
            </div>
        </div>

        <div class="DropDown">
            <p>Flexible flight tickets</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Times</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Airlines</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Airports</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Transportation type</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Duration</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Price</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Cabin</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Stopover airports</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Flight quality</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Aircraft</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

        <div class="DropDown">
            <p>Booking sites</p>
            <div class="svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                </svg>
            </div>
        </div>

    </div>
    <div id="flights">
        <!-- sets copy in though app.js -->
    </div>
</div>

<?php
    require_once __DIR__ .'/comp_footer.php';
?>
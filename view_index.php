<?php
    $_title = 'Momondo';
    require_once __DIR__ .'/comp_header.php';

?>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Search flights form -->

    <main id="index">

        <h1 class="mt4"><?= $FrontPage_dictionary[$language.'_wellcome'] ?></h1>

        <form class="mt1" onsubmit="return false">
            <div>
                <div class="formContainer">
                    <div class="formSVG hide">
                        <svg style="width: 70%;" class="Tn7z-icon" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M140.448 177.069l-19.846-43.661c-2.877-6.328-7.998-11.612-12.447-14.676a1029.409 1029.409 0 0 1-14.935 12.983c-4.045 3.618-5.452 9.494-3.67 15.347l2.733 8.981a4.997 4.997 0 0 1-1.248 4.991l-10 10c-2.267 2.268-6.043 1.838-7.754-.851l-14.154-22.241l-10.592 10.592a5 5 0 1 1-7.071-7.07l10.593-10.593l-22.242-14.153c-2.695-1.716-3.112-5.493-.851-7.754l10-10a5 5 0 0 1 4.992-1.248l8.981 2.733c5.85 1.777 11.728.375 15.348-3.671c4.269-5.007 8.599-9.988 12.983-14.935c-3.063-4.449-8.349-9.571-14.676-12.447L22.931 59.552c-3.563-1.619-3.965-6.539-.705-8.712l11.53-7.687a15.083 15.083 0 0 1 11.333-2.213l60.319 12.364c6.006 1.33 14.836-3.512 20.984-9.246c6.775-6.625 13.831-12.567 25.684-17.738c5.899-2.573 12.876-1.07 17.773 3.828l.003.002c4.898 4.897 6.401 11.874 3.828 17.773c-5.171 11.853-11.111 18.909-17.735 25.682c-5.736 6.148-10.583 14.976-9.266 20.906l12.382 60.4a15.1 15.1 0 0 1-2.215 11.332l-7.687 11.53c-2.182 3.276-7.096 2.849-8.711-.704zm-24.66-65.169c5.789 4.467 10.925 10.784 13.918 17.369l16.123 35.472l2.697-4.045a5.034 5.034 0 0 0 .738-3.778L136.9 96.6a19.235 19.235 0 0 1-.445-3.891a1041.686 1041.686 0 0 1-20.667 19.191zm-49.416 28.799l12 18.857l3.471-3.471l-1.86-6.111c-2.938-9.652-.396-19.525 6.631-25.767l.077-.066c23.665-20.174 47.419-42.531 62.016-57.438c6.149-6.558 10.969-11.688 15.808-22.779c1.113-2.552-.165-5.136-1.733-6.703l-.003-.002c-1.567-1.568-4.151-2.846-6.704-1.734c-10.394 4.535-15.439 8.933-22.782 15.811c-15.335 15.027-37.539 38.676-57.433 62.013l-.067.076c-6.242 7.028-16.115 9.567-25.767 6.631l-6.111-1.859l-3.471 3.471l18.858 12l7.164-7.163a5 5 0 1 1 7.071 7.07l-7.165 7.164zM35.258 54.17l35.471 16.124c6.585 2.993 12.903 8.128 17.37 13.918a1045.845 1045.845 0 0 1 19.202-20.678a19.358 19.358 0 0 1-3.982-.452L43.081 50.735a5.039 5.039 0 0 0-3.778.738l-4.045 2.697z"></path>
                        </svg>
                    </div>
                    <input oninput="ShowDropDownFrom()" id="from_city" name="fromCity" type="text" placeholder="<?= $Global_dictionary[$language.'_indexFormF'] ?>">
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
                    <input oninput="ShowDropDownTo()" id="to_city" name="toCity" type="text" placeholder="<?= $Global_dictionary[$language.'_indexFormT'] ?>">
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
            <button onclick="NiceURL()" class="search mt1"><?= $Global_dictionary[$language.'_search'] ?></button>
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

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Boxes with icons -->
    
    <h2 class="optionsText mt1 mb1"><?= $FrontPage_dictionary[$language.'_why'] ?></h2>

    <div id="options" class="mt1">

        <div class="option">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup="">
                    <path d="M135 80c-8.271 0-15-6.729-15-15s6.729-15 15-15s15 6.729 15 15s-6.729 15-15 15zm0-20c-2.757 0-5 2.243-5 5s2.243 5 5 5s5-2.243 5-5s-2.243-5-5-5zm0 120c-24.813 0-45-20.187-45-45s20.187-45 45-45s45 20.187 45 45s-20.187 45-45 45zm0-80c-19.299 0-35 15.701-35 35s15.701 35 35 35s35-15.701 35-35s-15.701-35-35-35zm-67.021 75.05L24.95 132.021c-6.643-6.643-6.645-17.396 0-24.041l70.657-70.657C100.328 32.601 106.605 30 113.284 30H155c8.271 0 15 6.729 15 15v38.027a5 5 0 1 1-10 0V45c0-2.757-2.243-5-5-5h-41.716a14.9 14.9 0 0 0-10.606 4.393L32.021 115.05a6.997 6.997 0 0 0 0 9.9l43.029 43.029c2.583 2.582 6.768 2.738 9.524.35a4.998 4.998 0 0 1 7.053.506a5 5 0 0 1-.506 7.053c-6.706 5.808-16.872 5.432-23.142-.838zm64.191-15.927l-14.943-9.963a5 5 0 0 1-1.387-6.934a4.999 4.999 0 0 1 6.934-1.387l7.227 4.817V115c0-2.762 2.238-5 5-5s5 2.238 5 5v30.657l7.227-4.817c2.299-1.534 5.401-.911 6.934 1.387s.911 5.402-1.387 6.934l-14.943 9.963a5.009 5.009 0 0 1-5.662-.001z"></path>
                </svg>
            </div>
            <div class="right">
                <div class="top">
                    <?= $FrontPage_dictionary[$language.'_whyBox1'] ?>
                </div>
                <div class="bottom">
                    <?= $FrontPage_dictionary[$language.'_whyBox11'] ?>
                </div>
            </div>
        </div>

        <div class="option">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup="">
                    <path d="M87.1 168.8c-35-6.5-59.5-38.2-57-73.7c.2-2.8 2.6-4.8 5.3-4.6c2.8.2 4.8 2.6 4.6 5.3c-2.2 30.4 18.8 57.5 48.8 63.1c2.7.5 4.5 3.1 4 5.8c-.4 2.8-3 4.6-5.7 4.1zm54.4-5.3l-15-15c-2-2-2-5.1 0-7.1s5.1-2 7.1 0l10.1 10.1l11.9-23.8c1.2-2.5 4.2-3.5 6.7-2.2c2.5 1.2 3.5 4.2 2.2 6.7l-15 30c-1.6 3.1-5.6 3.7-8 1.3zM159 89c-4.5-24.5-24-43.8-48.5-48.1c-21-3.7-41.8 3.7-55.5 19.1h30c2.8 0 5 2.2 5 5s-2.2 5-5 5H45c-2.8 0-5-2.2-5-5V25c0-2.8 2.2-5 5-5s5 2.2 5 5v25.7C65.9 34.6 89 27 112.2 31.1c28.6 5 51.4 27.6 56.6 56.1c.5 2.7-1.3 5.3-4 5.8s-5.3-1.3-5.8-4zm-14 101c-24.8 0-45-20.2-45-45s20.2-45 45-45s45 20.2 45 45s-20.2 45-45 45zm0-80c-19.3 0-35 15.7-35 35s15.7 35 35 35s35-15.7 35-35s-15.7-35-35-35z"></path>
                </svg>
            </div>
            <div class="right">
                <div class="top">
                    <?= $FrontPage_dictionary[$language.'_whyBox2'] ?>
                </div>
                <div class="bottom">
                    <?= $FrontPage_dictionary[$language.'_whyBox22'] ?>
                </div>
            </div>
        </div>

        <div class="option">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup="">
                    <path d="M33.389 179.733c-2.614-0.89-4.012-3.73-3.122-6.345c2.59-7.607 5.371-14.857 8.365-21.785 C32.903 135.298 30 120.406 30 107.312c0-31.385 13.929-54.718 41.399-69.351C93.774 26.043 125.266 20 165 20 c5.257 0 6.938 7.121 2.236 9.472c-17.541 8.77-18.18 28.942-18.919 52.3c-0.366 11.581-0.745 23.556-3.467 34.441 c-8.634 34.536-52.98 41.838-71.646 43.375c-2.757 0.208-5.167-1.822-5.393-4.573c-0.227-2.752 1.821-5.167 4.573-5.394 c16.518-1.359 55.699-7.573 62.765-35.834c2.461-9.846 2.823-21.276 3.173-32.332c0.596-18.798 1.207-38.09 12.002-51.167 C77.096 33.256 40 59.13 40 107.312c0 9.281 1.632 19.652 4.863 30.949c11.059-21.933 24.686-40.457 41.665-56.857 c1.985-1.918 5.151-1.864 7.07 0.123s1.864 5.151-0.123 7.07c-25.968 25.082-42.226 54.18-53.742 88.015 C38.843 179.227 36.002 180.622 33.389 179.733z"></path>
                </svg>
            </div>
            <div class="right">
                <div class="top">
                    <?= $FrontPage_dictionary[$language.'_whyBox3'] ?>
                </div>
                <div class="bottom">
                    <?= $FrontPage_dictionary[$language.'_whyBox33'] ?>
                </div>
            </div>
        </div>

        <div class="option bb11 mb3">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup="">
                    <path d="M135 180H65c-8.3 0-15-6.7-15-15V35c0-8.3 6.7-15 15-15h70c8.3 0 15 6.7 15 15v130c0 8.3-6.7 15-15 15zm-75-30v15c0 2.8 2.2 5 5 5h70c2.8 0 5-2.2 5-5v-15H60zm0-10h80V60H60v80zm0-90h80V35c0-2.8-2.2-5-5-5H65c-2.8 0-5 2.2-5 5v15zm45 115H95c-2.8 0-5-2.2-5-5s2.2-5 5-5h10c2.8 0 5 2.2 5 5s-2.2 5-5 5z"></path>
                </svg>
            </div>
            <div class="right">
                <div class="top">
                    <?= $FrontPage_dictionary[$language.'_whyBox4'] ?>
                </div>
                <div class="bottom">
                    <?= $FrontPage_dictionary[$language.'_whyBox44'] ?>
                </div>
            </div>
        </div>
    
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Big image -->

    <div id="cards">
        <div class="card">
            <img src="/Momondo_Copy/images/frontPage/DEST_MILOS_GREECE_GREEK-ISLANDS.jpeg" alt="">
            <div>
                <h2><?= $FrontPage_dictionary[$language.'_card'] ?></h2>
                <p class="mt1"><?= $FrontPage_dictionary[$language.'_cardT'] ?></p>
                <button class="mt1"><?= $FrontPage_dictionary[$language.'_cardB'] ?></button>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Carrusel -->

    <div class="carrusel_comp_text hide">
        <div>
            <h2><?= $FrontPage_dictionary[$language.'_carrusel1T'] ?></h2>
            <p><?= $FrontPage_dictionary[$language.'_carrusel1t'] ?></p>
        </div>
        <button class="vis_alle" ><?= $FrontPage_dictionary[$language.'_carrusel1B'] ?></button>
    </div>

    <div id="carrusel1">

        <div>

            <div class="flex">

                <div class="carrusel_mobil_text">
                    <h2 class="mt2 ts hide">Destinationer, du kan</h2>
                    <h2 class="ts hide">rejse til nu</h2>
                    <p class="hide"><?= $FrontPage_dictionary[$language.'_carrusel1t'] ?></p>
                </div>

                <button class="vis_alle mt1 hide"><?= $FrontPage_dictionary[$language.'_carrusel1B'] ?></button>

            </div>
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/Mexico.jpg" alt="">

                <button class="img_button hide">></button>

                <div class="img_text">
                    <p><?= $Global_dictionary[$language.'_carruselOpen'] ?></p>
                </div>

            </div>

            <p class="mt1 fs09 fw">Mexico</p>
            <p class="fs09"><?= $FrontPage_dictionary[$language.'_carrusel11'] ?></p>
            <p class="fs09"><?= $FrontPage_dictionary[$language.'_carrusel12'] ?></p>
        </div>

        <div>
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/Australien.jpg" alt="">

                <button class="img_button hide">></button>

                <div class="img_text">
                    <p>Åbent</p>
                </div>

            </div>

            <p class="mt1 fs09 fw">Australien</p>
            <p class="fs09">Vaccinerede rejsende kan komme på besøg</p>
            <p class="fs09">Mundbind er ikke påkrævet</p>
        </div>

        <div>
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/Storbritannien.jpg" alt="">

                <button class="img_button hide">></button>

                <div class="img_text">
                    <p>Åbent</p>
                </div>

            </div>

            <p class="mt1 fs09 fw">Storbritannien</p>
            <p class="fs09">Vaccinerede rejsende kan komme på besøg</p>
            <p class="fs09">Mundbind anbefales</p>

        </div>

        <div>
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/Thailand.jpg" alt="">

                <button class="img_button">></button>

                <div class="img_text">
                    <p>Åbent</p>
                </div>

            </div>

            <p class="mt1 fs09 fw">Thailand</p>
            <p class="fs09">COVID-19 test påkrævet</p>
            <p class="fs09">Vaccinerede rejsende kan komme på besøg</p>

        </div>   
    </div>

    <!-- --------------------------------- -->
    <!-- Carrusel -->

    <div class="carrusel_comp_text hide">
        <div>
            <h2><?= $FrontPage_dictionary[$language.'_carrusel2T'] ?></h2>
            <p><?= $FrontPage_dictionary[$language.'_carrusel2t'] ?></p>
        </div>
    </div>

    <div class="he17" id="carrusel2">

        <div class="container">

            <div class="flex">

                <div class="carrusel_mobil_text">
                    <h2 class="mt2 ts hide"><?= $FrontPage_dictionary[$language.'_carrusel2T'] ?></h2>
                    <p class="hide"><?= $FrontPage_dictionary[$language.'_carrusel2t'] ?></p>
                </div>
            </div>
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/DEST_CANADA_Spirit-Island-in-Jasper-National-Park.jpeg" alt="">

                <button class="img_button hide">></button>

            </div>

            <p class="mt1 fs09 fw"><?= $FrontPage_dictionary[$language.'_carrusel21'] ?></p>
            <p class="fs09"><?= $FrontPage_dictionary[$language.'_carrusel22'] ?></p>
        </div>

        <div class="container">
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/dest_france_calvi_theme_people_family_beach_ocean_swim_activity_fun_vacation.jpg" alt="">

                <button class="img_button hide">></button>

            </div>

            <p class="mt1 fs09 fw">Book nu eller vent?</p>
            <p class="fs09">Vi forudser, om prisen snart kan falde, eller om du skal booke nu</p>
        </div>

        <div class="container">
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/mm_theme_flight.jpg" alt="">

                <button class="img_button hide">></button>

            </div>

            <p class="mt1 fs09 fw">Har du prøvet Trips endnu?</p>
            <p class="fs09">Skab og gem din rejseplan på ét sted og del med dine rejsekammerater</p>

        </div>

        <div class="container">
            <div class="pr mt1">
                
                <button class="img_button">></button>
                
                <img src="/Momondo_Copy/images/frontPage/theme_person_man_hotel_pool_vacation.jpg" alt="">

            </div>

            <p class="mt1 fs09 fw">Bestilling af fly i usikre tider</p>
            <p class="fs09">Se, hvad dine rettigheder er, hvis et fly bliver aflyst</p>

        </div>   
    </div>

    <!-- --------------------------------- -->
    <!-- Carrusel -->

    <div class="carrusel_comp_text hide">
        <div>
            <h2><?= $FrontPage_dictionary[$language.'_carrusel3T'] ?></h2>
            <p><?= $FrontPage_dictionary[$language.'_carrusel3t'] ?></p>
        </div>
        <button class="vis_alle" ><?= $FrontPage_dictionary[$language.'_carrusel3B'] ?></button>
    </div>

    <div id="carrusel3">

        <div class="container">
            <div class="flex">

                <div class="carrusel_mobil_text">
                    <h2 class="mt2 ts hide"><?= $FrontPage_dictionary[$language.'_carrusel3T'] ?></h2>
                    <p class="hide"><?= $FrontPage_dictionary[$language.'_carrusel3t'] ?></p>
                </div>

                <button class="vis_alle mt1 hide"><?= $FrontPage_dictionary[$language.'_carrusel3B'] ?></button>

            </div>
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/theme_pets_car_labrador.jpg" alt="">

                <button class="img_button hide">></button>

            </div>

            <p class="mt1 fs09 fw"><?= $FrontPage_dictionary[$language.'_carrusel31'] ?></p>
            <p class="fs09"><?= $FrontPage_dictionary[$language.'_carrusel32'] ?></p>

        </div>

        <div class="container">
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/theme_bech_pets_dog_people.jpg" alt="">

                <button class="img_button hide">></button>

            </div>

            <p class="mt1 fs09 fw">Sådan tager du på strandferie</p>
            <p class="fs09 fw">med dit kæledyr</p>
            <p class="fs09">sep. 13, 2022 - 7 min.</p>

        </div>

        <div class="container">
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/theme_people_person_couple_pet_dog_outdoors_travel_adventure.jpg" alt="">

                <button class="img_button hide">></button>

            </div>

            <p class="mt1 fs09 fw">Tips til at bo på hotel eller i feriebolig med dit kæledyr</p>
            <p class="fs09">sep. 13, 2022 - 7 min.</p>

        </div>

        <div class="container">
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/frontPage/dest_uk_scotland_glasgow.jpg" alt="">

                <button class="img_button">></button>

            </div>

            <p class="mt1 fs09 fw">Ferie i november</p>
            <p class="fs09">aug. 9, 2022 - 12 min.</p>

        </div>   
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Small box with image -->

    <h2 class="mt4 mb1"><?= $Global_dictionary[$language.'_minCards1'] ?></h2>

    <div id="min-cards">
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/nice.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Nice</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/alicante.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Alicante</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/berlin.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Berlin</p>
                </div>
            </div>
    
        </div>
        
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/athen.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Athen</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/milano.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Milano</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/lissabon.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Lissabon</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/budapest.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Budapest</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/prag.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Prag</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/stockholm.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Stockholm</p>
                </div>
            </div>
    
        </div>

    </div>

    <!-- --------------------------------- -->
    <!-- Small box with image -->

    <h2 class="mt4 mb1"><?= $Global_dictionary[$language.'_minCards2'] ?></h2>

    <div id="min-cards">
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/spanien.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Spanien</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/tyrkiet.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Tyrkiet</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/italien.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Italien</p>
                </div>
            </div>
    
        </div>
        
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/usa.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">USA</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/frankrig.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Frankrig</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/storbritannien.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Storbritannien</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/thailand.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Thailand</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/greakenland.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Grækenland</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/tyskland.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Tyskland</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/portugal.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Portugal</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/holland.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Holland</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/kroatien.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Kroatien</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/norge.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Norge</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/marokko.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Marokko</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/libanon.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Libanon</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/polen.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Polen</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/sverige.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Sverige</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/ungarn.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Ungarn</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/indonesien.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Indonesien</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/tjekkiet.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Tjekkiet</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/filippinerne.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Filippinerne</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/vietnam.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Vietnam</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/forenede_arabiske_emirater.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Forenede Arabiske Emirater</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/canada.jpg" alt="">
                <div>
                    <p><?= $FrontPage_dictionary[$language.'_flyTo'] ?></p>
                    <p class="fw">Canada</p>
                </div>
            </div>
    
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- List with famus city names (has blue lines under them) -->

    <div id="flytilbud">
        <h3 class="mt4 mb1"><?= $FrontPage_dictionary[$language.'_flytilbudT'] ?></h3>
    
        <p class="tx op fs08 mb1"><?= $FrontPage_dictionary[$language.'_flytilbudt'] ?></p>
    
        <p class="tx fs09 mb3"><?= $FrontPage_dictionary[$language.'_flytilbudtt'] ?></p>
    </div>

    <div id="destination">
        <div class="bn">
            <div>
                <p class="mb1 fw">
                    <a class="fs08" href="">København</a>
                </p>
            </div>
    
            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Paris</a>
                </p>
            </div>
    
            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Barcelona</a>
                </p>
            </div>
    
            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Antalya</a>
                </p>
            </div>

            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Amsterdam</a>
                </p>
            </div>
        </div>
        
        <div class="bn">
            <div>
                <p class="mb1 fw">
                    <a class="fs08" href="">Malaga</a>
                </p>
            </div>
    
            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Bangkok</a>
                </p>
            </div>
    
            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Palma de Mallorca</a>
                </p>
            </div>
    
            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">New York</a>
                </p>
            </div>

            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Aalborg</a>
                </p>
            </div>
        </div>

        <div class="bn">
            <div>
                <p class="mb1 fw">
                    <a class="fs08" href="">London</a>
                </p>
            </div>
    
            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Istanbul</a>
                </p>
            </div>
    
            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Rom</a>
                </p>
            </div>
    
            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Billund</a>
                </p>
            </div>

            <div>
                <p class="mb1 fw mt1">
                    <a class="fs08" href="">Dubai</a>
                </p>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Drop down -->

    <div id="flybilletter">
        <h3 class="mt4 mb1"><?= $FrontPage_dictionary[$language.'_flybilletterT'] ?></h3>
    </div>

    <div id="dropDowns">
        <div class="w100">

            <div class="dropDown">
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser?</h4>
                <button>
                    <svg class="FrontDoorFaqs__chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                        <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                    </svg>
                </button>
                <div>
                    <!-- Drop down -->
                </div>
            </div>
    
            <div class="dropDown">
                <h4 class="extraMargin mt1 mb1 fs09">Hvordan sparer jeg penge med Mix & Match?</h4>
                <button>
                    <svg class="FrontDoorFaqs__chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                        <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                    </svg>
                </button>
                <div>
                    <!-- Drop down -->
                </div>
            </div>

        </div>

        <div class="w100">
            <div class="dropDown">
                <h4 class="mt1 mb1 fs09">Hvordan finder jeg den bedste pris på flybilletter?</h4>
                <button>
                    <svg class="FrontDoorFaqs__chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                        <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                    </svg>
                </button>
                <div>
                    <!-- Drop down -->
                </div>
            </div>
    
            <div class="dropDown">
                <h4 class="mt1 mb1 fs09">Hvordan sikrer jeg, at jeg ikke går glip af et godt tilbud på flybilletter?</h4>
                <button class="lastDropButton">
                    <svg class="FrontDoorFaqs__chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"> 
                        <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M45 80l55 50 55-50"></path> 
                    </svg>
                </button>
                <div>
                    <!-- Drop down -->
                </div>
            </div>
        </div>
    </div>

<?php

require_once __DIR__ .'/comp_footer.php';

?>
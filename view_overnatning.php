<?php
    $_title = 'Overnatninger';
    require_once __DIR__ .'/comp_header.php';

?>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Search form -->

    <main id="index">

        <h1 class="mt4 mb2"><?= $Overnatning_dictionary[$language.'_wellcome'] ?></h1>

        <form class="mt1">
            <div>
                <div class="formContainer">
                        <div class="formSVG hide">
                            <svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                <path d="M175 170a5 5 0 0 1-5-5v-5H30v5a5 5 0 1 1-10 0v-43.092c0-8.176 3.859-15.462 10-20.027V65c0-13.785 11.215-25 25-25h90c13.785 0 25 11.215 25 25v36.98c6.093 4.613 10 11.922 10 19.928V165a5 5 0 0 1-5 5zM30 150h140v-10H30v10zm0-20h140v-8.092c0-7.342-5.486-13.707-12.762-14.806c-40.216-6.077-73.399-6.207-114.477 0C35.415 108.21 30 114.4 30 121.908V130zm120-34.027c2.877.382 9.581 1.381 10 1.467V65c0-8.271-6.729-15-15-15H55c-8.271 0-15 6.729-15 15v32.438c.418-.084 7.123-1.083 10-1.465V85c0-8.271 6.729-15 15-15h25a14.94 14.94 0 0 1 10 3.829A14.943 14.943 0 0 1 110 70h25c8.271 0 15 6.729 15 15v10.973zm-45-3.45c11.463.167 22.988.912 35 2.233V85c0-2.757-2.243-5-5-5h-25c-2.757 0-5 2.243-5 5v7.523zM65 80c-2.757 0-5 2.243-5 5v9.756c12.012-1.321 23.537-2.065 35-2.232V85c0-2.757-2.243-5-5-5H65z"></path>
                            </svg>
                        </div>
                        <input type="text" placeholder="Indtast by, hotel, lufthavn, adresse eller seværdighed">
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
                    De bedste hoteltilbud
                </div>
                <div class="bottom">
                    Se tilbud fra tusindvis af hoteller og overnatningssteder på ét sted.
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
                    Gratis afbestilling
                </div>
                <div class="bottom">
                    Brug vores filter til at finde overnatningssteder med gratis afbestilling.
                </div>
            </div>
        </div>

        <div class="option">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup=""><path d="M25 169.6a5 5 0 01-5-5v-120h0a15 15 0 0115-15h130a15 15 0 0115 15v80a15 15 0 01-15 15H75c-22.92 0-34.15 13.63-44.06 25.66l-2.1 2.54a5 5 0 01-3.84 1.8zm5-125v106.33c9.83-10.87 22.83-21.33 45-21.33h90a5 5 0 005-5v-80a5 5 0 00-5-5H35a5 5 0 00-5 5zm68.94 75.16c-17 0-26.9-2.56-32.87-8.5C62 107.21 60 101.76 60 94.6a5 5 0 0110 0c0 5.8 1.78 8.24 3.12 9.57c3.92 3.9 12.46 5.7 26.85 5.58c27.82-.17 30-6.67 30-15.15a5 5 0 0110 0c0 21.89-19.21 25-40 25.15zM120 79.6a10 10 0 1110-10a10 10 0 01-10 10zm-40 0a10 10 0 1110-10a10 10 0 01-10 10z"></path></svg>
            </div>
            <div class="right">
                <div class="top">
                    Millioner af anmeldelser
                </div>
                <div class="bottom">
                    Tjek vurderinger fra millioner af ægte gæstevurderinger.
                </div>
            </div>
        </div>

        <div class="option bb11 mb3">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px" cleanup=""><path d="M177.5 179.6a5 5 0 01-1.77-.32c-.5-.19-26.59-9.68-73.25-9.68c-46.84 0-73 9.58-73.22 9.68a5 5 0 01-3.53-9.36c.31-.12 2.59-1 6.77-2.12v-18.86l-7.23 4.82a5 5 0 11-5.54-8.32l12.77-8.52v-8l-7.23 4.82a5 5 0 11-5.54-8.32l12.77-8.52v-8l-7.23 4.82a5 5 0 01-5.54-8.32l14.94-10a5 5 0 015.66 0l14.94 10a5 5 0 11-5.54 8.32l-7.23-4.82v8l12.77 8.52a5 5 0 11-5.54 8.32l-7.23-4.82v8l12.77 8.52a5 5 0 11-5.54 8.32l-7.23-4.82v16.42c3.06-.66 6.54-1.33 10.42-2l27.87-51.06l.09-.18l27.18-49.83a4.6 4.6 0 01.61-.9a5.73 5.73 0 01.54-.56a5 5 0 013.27-1.23h0a5 5 0 013.27 1.23a5.73 5.73 0 01.54.56a4.6 4.6 0 01.61.9L137.5 100V74.6a5 5 0 0110 0v43.72l27.36 50.16c2.68.8 4.16 1.35 4.41 1.44a5 5 0 01-1.77 9.68zm-45-18.68a256.36 256.36 0 0129.17 4.26l-23.52-43.11l-.09-.16l-1.26-2.31H88.2l-23 42.07c7.94-.93 17-1.64 27.25-1.93V144.6a15 15 0 0115-15h10a15 15 0 0115 15zm-30-1.32c7.14 0 13.81.21 20 .57V144.6a5 5 0 00-5-5h-10a5 5 0 00-5 5zm15-50h13.85L117.5 84.21zm-23.85 0h13.85V84.21zm48.85-50a5 5 0 01-1.43-9.79c4.12-1.24 5.8-2.28 6.45-2.79a29.34 29.34 0 00-3.5-4c-3.42-3.5-7.68-7.86-6.25-13.39s7.87-8.17 13.3-9.8a5 5 0 112.87 9.58c-3.92 1.17-5.57 2.17-6.23 2.68a31.52 31.52 0 003.46 4c3.43 3.52 7.7 7.89 6.27 13.45s-8 8.26-13.5 9.92a5.12 5.12 0 01-1.44.14z"></path></svg>
            </div>
            <div class="right">
                <div class="top">
                    Overnatning til ethvert behov
                </div>
                <div class="bottom">
                    Find den ideelle overnatning blandt de mange forskellige overnatningssteder.
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
            <h2><?= $Overnatning_dictionary[$language.'_carrusel1T'] ?></h2>
            <p><?= $Overnatning_dictionary[$language.'_carrusel1t'] ?></p>
        </div>
        <button class="vis_alle" ><?= $FrontPage_dictionary[$language.'_carrusel1B'] ?></button>
    </div>

    <div id="carrusel1">

        <div class="w100">

            <div class="flex">

                <div class="carrusel_mobil_text">
                    <h2 class="mt2 ts hide"><?= $Overnatning_dictionary[$language.'_carrusel1T'] ?></h2>
                    <p class="hide"><?= $Overnatning_dictionary[$language.'_carrusel1t'] ?></p>
                </div>

                <button class="vis_alle mt1 hide"><?= $FrontPage_dictionary[$language.'_carrusel1B'] ?></button>

            </div>

            <div class="pr mt1">
                <img src="/Momondo_Copy/images/slepover/hotelsdotcom.jpg" alt="">

                <button class="img_button hide">></button>
            </div>

            <p class="mt1 fs09 fw">Danhostel Aarhus</p>
            <div class="flex gab">
                <div>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                </div>
                <p class="fs09 mt04">God 7,7 </p>
            </div>
            <p class="fs09">Risskov</p>
            <p class="fs09 fw mt1">590 kr.</p>
        </div>

        <div class="w100">
            <div class="pr mt1">
                <img src="/Momondo_Copy/images/slepover/expediav.jpg" alt="">
            </div>

            <p class="mt1 fs09 fw">Hotel Ferdinand</p>
            <div class="flex gab">
                <div>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                </div>
                <p class="fs09 mt04">God 7,7</p>
            </div>
            <p class="fs09">Midtbyen</p>
            <p class="fs09 fw mt1">1.530 kr.</p>
        </div>

        <div class="w100">
            <div class="pr mt1">
                <img src="/Momondo_Copy/images/slepover/expediav2.jpg" alt="">
            </div>

            <p class="mt1 fs09 fw">Montra Hotel Sabro Kro</p>
            <div class="flex gab">
                <div>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                </div>
                <p class="fs09 mt04">Meget god 8,6 </p>
            </div>
            <p class="fs09 fw mt1">1.410 kr.</p>

        </div>

        <div class="w100">
            <div class="pr mt1">
                <img src="/Momondo_Copy/images/slepover/ice.jpg" alt="">

                <button class="img_button">></button>
            </div>

            <p class="mt1 fs09 fw">Comwell Aarhus</p>
            <div class="flex gab">
                <div>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                </div>
                <p class="fs09 mt04">Meget god 8,0</p>
            </div>
            <p class="fs09">København</p>
            <p class="fs09 fw mt1">1.700 kr.</p>

        </div>   
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Carrusel -->

    <div class="carrusel_comp_text hide">
        <div>
            <h2><?= $Overnatning_dictionary[$language.'_carrusel2T'] ?></h2>
            <p><?= $Overnatning_dictionary[$language.'_carrusel2t'] ?></p>
        </div>
    </div>

    <div id="carrusel2">

        <div class="container">

            <div class="flex">

                <div class="carrusel_mobil_text">
                    <h2 class="mt2 ts hide"><?= $Overnatning_dictionary[$language.'_carrusel2T'] ?></h2>
                    <p class="hide"><?= $Overnatning_dictionary[$language.'_carrusel2t'] ?></p>
                </div>
            </div>
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/slepover/HOSTEL.jpg" alt="">

                <button class="img_button hide">></button>

            </div>

            <p class="mt1 fs09 fw">Hostel</p>
            <p class="fs09">fra 492 kr.</p>
        </div>

        <div class="container">
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/slepover/HOTEL2.jpg" alt="">

            </div>

            <p class="mt1 fs09 fw">Hotel</p>
            <p class="fs09">fra 841 kr.</p>
        </div>

        <div class="container">
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/slepover/GUEST-HOUSE.jpg" alt="">

            </div>

            <p class="mt1 fs09 fw">Gæstehus</p>
            <p class="fs09">fra 540 kr.</p>

        </div>

        <div class="container">
            <div class="pr mt1">
                
                <button class="img_button hide">></button>
                
                <img src="/Momondo_Copy/images/slepover/APARTMENT.jpg" alt="">

            </div>

            <p class="mt1 fs09 fw">Feriebolig</p>
            <p class="fs09">fra 1.089 kr.</p>

        </div>   
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Carrusel -->

    <div class="carrusel_comp_text hide">
        <div>
            <h2><?= $Overnatning_dictionary[$language.'_carrusel4T'] ?></h2>
            <p><?= $Overnatning_dictionary[$language.'_carrusel4t'] ?></p>
        </div>
    </div>

    <div class="he19" id="carrusel2">

        <div class="container">

            <div class="flex">

                <div class="carrusel_mobil_text">
                    <h2 class="mt2 ts hide"><?= $Overnatning_dictionary[$language.'_carrusel4T'] ?></h2>
                    <p class="hide"><?= $Overnatning_dictionary[$language.'_carrusel4t'] ?></p>
                </div>
            </div>
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/slepover/376-1663082884-DEST_UK_ENGLAND_BRISTOL_GettyImages-905699306.jpeg" alt="">

                <button class="img_button hide">></button>

            </div>

            <p class="mt1 fs09 fw"><?= $Overnatning_dictionary[$language.'_carrusel41'] ?></p>
            <p class="fs09"><?= $Overnatning_dictionary[$language.'_carrusel411'] ?></p>
        </div>

        <div class="container">
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/slepover/376-1663082176-DEST_CANADA_Spirit-Island-in-Jasper-National-Park_GettyImages-961447464.jpeg" alt="">

            </div>

            <p class="mt1 fs09 fw">Kom i gang med at planlægge din efterårsferie</p>
            <p class="fs09">Find inspiration til familievenlige destinationer i vores guide</p>
        </div>

        <div class="container">
            <div class="pr mt1">

                <img src="/Momondo_Copy/images/slepover/376-1652710695-mm_dest_mexico_quintana-roo_beach_family_gettyimages-1363840841_universal_within-usage-period_81715-1.jpg" alt="">

            </div>

            <p class="mt1 fs09 fw">Brug Trips til dine overnatninger</p>
            <p class="fs09">Gem dine bookinger og rejseplaner på ét sted, lav noter og del rejseoplysninger</p>

        </div>

        <div class="container">
            <div class="pr mt1">
                
                <button class="img_button hide">></button>
                
                <img src="/Momondo_Copy/images/slepover/376-1621347117-Family-vacation.jpg" alt="">

            </div>

            <p class="mt1 fs09 fw">Book et fleksibelt ophold</p>
            <p class="fs09">Sådan bruger du vores filtre til at finde ophold med gratis afbestilling</p>

        </div>   
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Carrusel -->

    <div class="carrusel_comp_text hide">
        <div>
            <h2><?= $Overnatning_dictionary[$language.'_carrusel5T'] ?></h2>
            <p><?= $Overnatning_dictionary[$language.'_carrusel5t'] ?></p>
        </div>
        <button class="vis_alle" ><?= $FrontPage_dictionary[$language.'_carrusel1B'] ?></button>
    </div>

    <div id="carrusel1">

        <div class="w100">

            <div class="flex">

                <div class="carrusel_mobil_text">
                    <h2 class="mt2 ts hide"><?= $Overnatning_dictionary[$language.'_carrusel5T'] ?></h2>
                    <p class="hide"><?= $Overnatning_dictionary[$language.'_carrusel5t'] ?></p>
                </div>

                <button class="vis_alle mt1 hide"><?= $FrontPage_dictionary[$language.'_carrusel1B'] ?></button>

            </div>

            <div class="pr mt1">
                <img src="/Momondo_Copy/images/slepover/expediav2-417457-6882a3-222358.jpg" alt="">

                <button class="img_button hide">></button>
            </div>

            <p class="mt1 fs09 fw">Scandic Aarhus City</p>
            <div class="flex gab">
                <div>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                </div>
                <p class="fs09 mt04">God 7,8 </p>
            </div>
            <p class="fs09">Aarhus, Danmark</p>
        </div>

        <div class="w100">
            <div class="pr mt1">
                <img src="/Momondo_Copy/images/slepover/ice-53031-photo.aspx_did=2692_brochureid=53031_publicid=62764446_instanceid=5_resizing=4K-196071.jpg" alt="">
            </div>

            <p class="mt1 fs09 fw">Comwell Kolding</p>
            <div class="flex gab">
                <div>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                </div>
                <p class="fs09 mt04">Meget god 8,0 </p>
            </div>
            <p class="fs09">Kolding, Danmark</p>
        </div>

        <div class="w100">
            <div class="pr mt1">
                <img src="/Momondo_Copy/images/slepover/expediav2-202187-8969cf-664863.jpg" alt="">
            </div>

            <p class="mt1 fs09 fw">Scandic Jacob Gade</p>
            <div class="flex gab">
                <div>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                </div>
                <p class="fs09 mt04">God 7,8 </p>
            </div>
            <p class="fs09">Vejle, Danmark</p>

        </div>

        <div class="w100">
            <div class="pr mt1">
                <img src="/Momondo_Copy/images/slepover/ice-49447-64773554_3XL-513058.jpg" alt="">

                <button class="img_button">></button>
            </div>

            <p class="mt1 fs09 fw">Scandic Roskilde Park</p>
            <div class="flex gab">
                <div>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #fff;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                    <span height="12" cleanup="" class="svg" style="transform: translate3d(0px, 0px, 0px); vertical-align: middle; height: 12px; width: 12px; fill: #9684a4;"><svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M185.2 71.8l-59.7-2.6l-20.8-56c-1.6-4.3-7.8-4.3-9.4 0l-20.8 56l-59.7 2.6c-4.6.2-6.5 6-2.9 8.9l46.8 37.1l-16 57.5c-1.2 4.4 3.7 8.1 7.6 5.5l49.7-33l49.7 33c3.8 2.5 8.8-1 7.6-5.5l-16-57.5l46.8-37.1c3.6-2.9 1.7-8.7-2.9-8.9z"></path></svg></span>
                </div>
                <p class="fs09 mt04">God 7,9 </p>
            </div>
            <p class="fs09">Roskilde, Danmark</p>

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

    <h2 class="mt4"><?= $Global_dictionary[$language.'_minCards1'] ?></h2>
    <p class="tx mb2"><?= $Global_dictionary[$language.'_minCards1t'] ?></p>

    <div id="min-cards">
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/nice.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Nice</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/alicante.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Alicante</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/berlin.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Berlin</p>
                </div>
            </div>
    
        </div>
        
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/athen.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Athen</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/milano.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Milano</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/lissabon.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Lissabon</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/budapest.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Budapest</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/prag.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Prag</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/stockholm.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Stockholm</p>
                </div>
            </div>
    
        </div>

    </div>

    <!-- --------------------------------- -->
    <!-- Small box with image -->

    <h2 class="mt4"><?= $Global_dictionary[$language.'_minCards2'] ?></h2>
    <p class="tx mb2"><?= $Global_dictionary[$language.'_minCards2t'] ?></p>

    <div id="min-cards">
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/spanien.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Spanien</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/tyrkiet.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Tyrkiet</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/italien.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Italien</p>
                </div>
            </div>
    
        </div>
        
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/usa.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">USA</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/frankrig.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Frankrig</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/storbritannien.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Storbritannien</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/thailand.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Thailand</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/greakenland.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Grækenland</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/tyskland.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Tyskland</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/portugal.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Portugal</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/holland.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Holland</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/kroatien.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Kroatien</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/norge.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Norge</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/marokko.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Marokko</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/libanon.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Libanon</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/polen.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Polen</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/sverige.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Sverige</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/ungarn.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Ungarn</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/indonesien.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Indonesien</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/tjekkiet.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Tjekkiet</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/filippinerne.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Filippinerne</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/vietnam.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Vietnam</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/forenede_arabiske_emirater.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Forenede Arabiske Emirater</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/canada.jpg" alt="">
                <div>
                    <p><?= $Overnatning_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Canada</p>
                </div>
            </div>
    
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Drop down -->

    <div id="flybilletter">
        <h3 class="mt4 mb1"><?= $Overnatning_dictionary[$language.'_dropDownT'] ?></h3>
        <p class="mb1 tx fs09"><?= $Overnatning_dictionary[$language.'_dropDownt'] ?></p>
        <p class="mb2 tx fs09"><?= $Overnatning_dictionary[$language.'_dropDowntt'] ?></p>
    </div>

    <div id="dropDowns">
        <div>
            <div class="dropDown">
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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

        <div>
            <div class="dropDown">
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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

        <div>
            <div class="dropDown">
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
                <h4 class="mt1 mb1 fs09">Hvordan finder momondo så billige flypriser? </h4>
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
    </div>

<?php

require_once __DIR__ .'/comp_footer.php';

?>
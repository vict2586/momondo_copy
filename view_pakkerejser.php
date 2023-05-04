<?php
    $_title = 'Fly, hotel og pakkerejser';
    require_once __DIR__ .'/comp_header.php';
?>

    <main id="index">

        <h1 class="mt4 mb2"><?= $Pakkerejser_dictionary[$language.'_wellcome'] ?></h1>

        <form class="mt1">
            <div>
                <div class="formContainer">
                    <div class="formSVG hide">
                        <svg style="width: 70%;" class="Tn7z-icon" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M140.448 177.069l-19.846-43.661c-2.877-6.328-7.998-11.612-12.447-14.676a1029.409 1029.409 0 0 1-14.935 12.983c-4.045 3.618-5.452 9.494-3.67 15.347l2.733 8.981a4.997 4.997 0 0 1-1.248 4.991l-10 10c-2.267 2.268-6.043 1.838-7.754-.851l-14.154-22.241l-10.592 10.592a5 5 0 1 1-7.071-7.07l10.593-10.593l-22.242-14.153c-2.695-1.716-3.112-5.493-.851-7.754l10-10a5 5 0 0 1 4.992-1.248l8.981 2.733c5.85 1.777 11.728.375 15.348-3.671c4.269-5.007 8.599-9.988 12.983-14.935c-3.063-4.449-8.349-9.571-14.676-12.447L22.931 59.552c-3.563-1.619-3.965-6.539-.705-8.712l11.53-7.687a15.083 15.083 0 0 1 11.333-2.213l60.319 12.364c6.006 1.33 14.836-3.512 20.984-9.246c6.775-6.625 13.831-12.567 25.684-17.738c5.899-2.573 12.876-1.07 17.773 3.828l.003.002c4.898 4.897 6.401 11.874 3.828 17.773c-5.171 11.853-11.111 18.909-17.735 25.682c-5.736 6.148-10.583 14.976-9.266 20.906l12.382 60.4a15.1 15.1 0 0 1-2.215 11.332l-7.687 11.53c-2.182 3.276-7.096 2.849-8.711-.704zm-24.66-65.169c5.789 4.467 10.925 10.784 13.918 17.369l16.123 35.472l2.697-4.045a5.034 5.034 0 0 0 .738-3.778L136.9 96.6a19.235 19.235 0 0 1-.445-3.891a1041.686 1041.686 0 0 1-20.667 19.191zm-49.416 28.799l12 18.857l3.471-3.471l-1.86-6.111c-2.938-9.652-.396-19.525 6.631-25.767l.077-.066c23.665-20.174 47.419-42.531 62.016-57.438c6.149-6.558 10.969-11.688 15.808-22.779c1.113-2.552-.165-5.136-1.733-6.703l-.003-.002c-1.567-1.568-4.151-2.846-6.704-1.734c-10.394 4.535-15.439 8.933-22.782 15.811c-15.335 15.027-37.539 38.676-57.433 62.013l-.067.076c-6.242 7.028-16.115 9.567-25.767 6.631l-6.111-1.859l-3.471 3.471l18.858 12l7.164-7.163a5 5 0 1 1 7.071 7.07l-7.165 7.164zM35.258 54.17l35.471 16.124c6.585 2.993 12.903 8.128 17.37 13.918a1045.845 1045.845 0 0 1 19.202-20.678a19.358 19.358 0 0 1-3.982-.452L43.081 50.735a5.039 5.039 0 0 0-3.778.738l-4.045 2.697z"></path>
                        </svg>
                    </div>
                    <input type="text" placeholder="<?= $Global_dictionary[$language.'_indexFormF'] ?>">
                </div>
                <div class="formContainer">
                    <div class="formSVG hide">
                        <svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M94.3 179.8c-24-3.6-46.7-7-67.7 0c-2.6.9-5.5-.5-6.3-3.2c-.9-2.6.5-5.5 3.2-6.3c15.4-5.1 31-5.3 47.1-3.7l27-74.3c-4.2-.9-8.4-.9-12.1.1c-6 1.5-12.4-.6-16.2-5.8c-5.6-8-18.1-13.2-28.4-11.7c-8.2 1.2-14.2-7.7-10-15c18.4-31.7 57.2-42 90.3-32.3l1.8-4.8c.9-2.6 3.8-3.9 6.4-3c2.6.9 3.9 3.8 3 6.4l-1.8 4.9c31.6 13.8 54.6 46.7 48.5 82.9c-1.4 8.2-11.6 11.2-17.2 5c-7-7.7-19.8-11.8-29.3-9.3c-6 1.5-12.5-.6-16.2-5.9c-2.2-3.2-5.5-5.9-9.4-7.9l-26.2 72c10.5 1.4 21.1 3.2 31.9 4.6c-9-19.8 5.7-42.3 27.3-42.3c21.3 0 36 21.7 27.7 41.6c2-.4 4-.9 6-1.5c2.7-.7 5.4.8 6.1 3.5s-.8 5.4-3.5 6.1c-28 7.6-53.6 4.1-82-.1zm31.1-6.1c3.8.3 7.6.5 11.4.6c6.2-11.7 2.7-28.3-3.6-33.1c-13.3 4.8-17.7 21.7-7.8 32.5zm20.1-32.9c4.9 9.1 6.1 22.2 2.2 33.4c2.3-.1 4.6-.3 7-.5c10.1-11 5.2-28.8-9.2-32.9zm23.7-28.7c5.8-34.7-19.7-63.8-46.7-73.7c-27.1-9.8-65.3-3.9-83 26.4c12.5-1.8 27 3.6 35.4 12.7c2.2-9 5.8-17 10.7-23.9c1.6-2.3 4.7-2.8 7-1.2c2.3 1.6 2.8 4.7 1.2 7c-4.6 6.5-7.9 14.2-9.7 23c13.7-3.1 31 3.2 39.6 14.3c4.2-7.9 6.7-15.9 7.3-23.8c.2-2.8 2.7-4.8 5.4-4.5c2.8.2 4.8 2.7 4.5 5.4c-.7 8.4-3.2 16.8-7.2 25.2c12.3-1.6 27 3.6 35.5 13.1z"></path>
                        </svg>
                    </div>
                    <input type="text" placeholder="Indtast destination eller lufthavn">
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

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Big image -->

    <div id="cards" class="mt4I">
        <div class="card">
            <img src="/Momondo_Copy/images/pakkerejser/dest_bahamas_waderick-wells.jpg" alt="">
            <div>
                <h2><?= $Pakkerejser_dictionary[$language.'_card'] ?></h2>
                <p class="mt1"><?= $Pakkerejser_dictionary[$language.'_cardT'] ?></p>
                <button class="mt1"><?= $Pakkerejser_dictionary[$language.'_cardB'] ?></button>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Text box -->

    <section id="Box">
        <h2><?= $Pakkerejser_dictionary[$language.'_Box1T'] ?></h2>
        <p><?= $Pakkerejser_dictionary[$language.'_Box1t'] ?></p>
    </section>

    <!-- --------------------------------------------------------------------------------- -->
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
    <!-- Text box -->

    <section id="Box">
        <h2><?= $Pakkerejser_dictionary[$language.'_Box2T'] ?></h2>
        <p><?= $Pakkerejser_dictionary[$language.'_Box2t'] ?></p>
    </section>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Text box -->
    
    <section id="Box">
        <h2><?= $Pakkerejser_dictionary[$language.'_Box3T'] ?></h2>
        <p><?= $Pakkerejser_dictionary[$language.'_Box3t'] ?></p>
    </section>
    
    <!-- --------------------------------------------------------------------------------- -->
    <!-- Text box -->
    
    <section id="Box">
        <h2><?= $Pakkerejser_dictionary[$language.'_Box4T'] ?></h2>
        <p><?= $Pakkerejser_dictionary[$language.'_Box4t'] ?></p>
    </section>
    
    <!-- --------------------------------------------------------------------------------- -->
    <!-- Text box -->

    <section id="Box">
        <h2><?= $Pakkerejser_dictionary[$language.'_Box5T'] ?></h2>
        <p><?= $Pakkerejser_dictionary[$language.'_Box5t'] ?></p>
    </section>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Small box with image -->

    <h2 class="mt4 mb2"><?= $Global_dictionary[$language.'_minCards2'] ?></h2>

    <div id="min-cards">
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/spanien.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Spanien</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/tyrkiet.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Tyrkiet</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/italien.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Italien</p>
                </div>
            </div>
    
        </div>
        
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/usa.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">USA</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/frankrig.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Frankrig</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/storbritannien.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Storbritannien</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/thailand.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Thailand</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/greakenland.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Grækenland</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/tyskland.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Tyskland</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/portugal.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Portugal</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/holland.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Holland</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/kroatien.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Kroatien</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/norge.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Norge</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/marokko.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Marokko</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/libanon.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Libanon</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/polen.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Polen</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/sverige.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Sverige</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/ungarn.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Ungarn</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/indonesien.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Indonesien</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/tjekkiet.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Tjekkiet</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/filippinerne.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Filippinerne</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/vietnam.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Vietnam</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/forenede_arabiske_emirater.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Forenede Arabiske Emirater</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/canada.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Canada</p>
                </div>
            </div>
    
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Small box with image -->

    <h2 class="mt4 mb1"><?= $Pakkerejser_dictionary[$language.'_TipT'] ?></h2>

    <div id="min-cards">
        <div class="gab">
            <div class="min-cards">
                <img src="images/pakkerejser/all.jpg" alt="">
                <div>
                    <p><?= $Pakkerejser_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">All inclusive</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/pakkerejser/august.jpg" alt="">
                <div>
                    <p><?= $Pakkerejser_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">August</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/pakkerejser/juli.jpg" alt="">
                <div>
                    <p><?= $Pakkerejser_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Juli</p>
                </div>
            </div>
    
        </div>
        
        <div class="gab">
            <div class="min-cards">
                <img src="images/pakkerejser/28.jpg" alt="">
                <div>
                    <p><?= $Pakkerejser_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Uge 28</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/pakkerejser/29.jpg" alt="">
                <div>
                    <p><?= $Pakkerejser_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Uge 29</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/pakkerejser/30.jpg" alt="">
                <div>
                    <p><?= $Pakkerejser_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Uge 30</p>
                </div>
            </div>
    
        </div>

    </div>

<?php
    require_once __DIR__ .'/comp_footer.php';
?>

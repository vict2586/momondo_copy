<?php
    $_title = 'Billige færgebilletter';
    require_once __DIR__ .'/comp_header.php';
?>

    <main id="index">

        <h1 class="mt4 mb2"><?= $Fearger_dictionary[$language.'_wellcome'] ?></h1>

        <form class="mt1">
            <div>
                <div class="formContainer">
                        <div class="formSVG hide">
                            <svg class="svg-image" role="img" style="width:inherit;height:inherit;line-height:inherit;color:inherit;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                <path d="M100 184.55h0a5 5 0 01-3.24-1.22c-29.46-25.18-56-23-68.12-10.32a5 5 0 11-7.22-6.92a38.81 38.81 0 0114.8-9.51c-4.63-14-10.38-27-15.38-34.62a5 5 0 013-7.59A229 229 0 0149 109.94l-8.8-39.3a5 5 0 014.88-6.09h25v-25a5 5 0 015-5h20v-15a5 5 0 1110 0v15h20a5 5 0 015 5v25h25a5 5 0 014.92 6.09L151.21 110a227.19 227.19 0 0125 4.41a5 5 0 013 7.59c-5 7.66-10.75 20.64-15.38 34.62a38.73 38.73 0 0114.8 9.51a5 5 0 01-7.22 6.92c-12.15-12.68-38.66-14.86-68.13 10.33a5 5 0 01-3.25 1.21h0zm-47.62-30.72c12.61 0 27.27 4.5 42.64 15.47l.1-52.32c-22.49.24-44.67 2.12-62.31 5.65a199.08 199.08 0 0113.13 31.6a51.91 51.91 0 016.44-.4zM105.12 117l-.1 52.29c18-12.86 35.13-16.83 49-15a199.22 199.22 0 0113.13-31.61c-6.76-1.35-14.21-2.47-22.09-3.34a5.05 5.05 0 01-1-.11c-12.25-1.38-25.54-2.11-38.94-2.23zm-5-10c14 0 28.06.62 41.12 1.86l7.67-34.31H51.36l7.64 34.3c13.09-1.23 27.09-1.85 41.09-1.85zm-20-42.45h40v-20h-40zm55 30h-10a5 5 0 010-10h10a5 5 0 010 10zm-30 0h-10a5 5 0 010-10h10a5 5 0 010 10zm-30 0h-10a5 5 0 010-10h10a5 5 0 010 10z"></path>
                            </svg>
                        </div>
                        <input type="text" placeholder="Indtast en havn eller et land">
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
    <!-- Big image -->

    <div id="cards">
        <div class="card">
            <img src="/Momondo_Copy/images/fearge.jpeg" alt="">
            <div class="feargeCard">
                <h2 class="ts pl"><?= $Fearger_dictionary[$language.'_card'] ?></h2>
                <p><?= $Fearger_dictionary[$language.'_cardT'] ?></p>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- Small box with image -->

    <h2 class="mt4 mb2"><?= $Global_dictionary[$language.'_minCards1'] ?></h2>

    <div id="min-cards">
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/nice.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Nice</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/alicante.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Alicante</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/berlin.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Berlin</p>
                </div>
            </div>
    
        </div>
        
        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/athen.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Athen</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/milano.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Milano</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/lissabon.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Lissabon</p>
                </div>
            </div>
    
        </div>

        <div class="gab">
            <div class="min-cards">
                <img src="images/min_card/budapest.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Budapest</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/prag.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Prag</p>
                </div>
            </div>
    
            <div class="min-cards">
                <img src="images/min_card/stockholm.jpg" alt="">
                <div>
                    <p><?= $Fearger_dictionary[$language.'_hotelsIn'] ?></p>
                    <p class="fw">Stockholm</p>
                </div>
            </div>
    
        </div>

    </div>

    <!-- --------------------------------- -->
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



<?php
    require_once __DIR__ .'/comp_footer.php';
?>

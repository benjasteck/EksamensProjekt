<?php get_header(); ?>

<?php
$erhvervinstagram = get_field("erhverv_instagram");
$erhvervfacebook = get_field("erhverv_facebook");
$erhvervlinkedin = get_field("erhverv_linkedin");
$erhvervfindos = get_field("erhverv_find_os");
$erhvervnyhedsbrev = get_field("erhverv_nyhedsbrev");
$erhvervkontaktos = get_field("erhverv_kontakt_os");
$erhvervomos = get_field("erhverv_om_os");
$dinefordelesomerhvervskundetitel= get_field("dine_fordele_som_erhvervskunde_titel");
$tilmelddigtekst = get_field("tilmeld_dig_tekst");
$logindtekst = get_field("log_ind_tekst");
$maengderabattitel = get_field("maengde_rabat_titel");
$maengerabatbrodtekst = get_field("maenge_rabat_brodtekst");
$skraeddersyetlosningertitel = get_field("skraeddersyet_losninger_titel");
$skraeddersyetlosningerbrodtekst = get_field("skraeddersyet_losninger_brodtekst");
$firmabeklaedningmedlogotitel = get_field("firmabeklaedning_med_logo_titel");
$firmabeklaedningmedlogobrodtekst= get_field("firmabeklaedning_med_logo_brodtekst");
$personaliseredeshopsidertitel = get_field("personaliserede_shop_sider_titel");
$personaliseredeshopsiderbrodtekst = get_field("personaliserede_shop_sider_brodtekst");
$professionelradgivningtitel = get_field("professionel_radgivning_titel");
$professionelradgivningbrodtekst= get_field("professionel_radgivning_brodtekst");
$maengderabattitel = get_field("maengde_rabat_titel");
$logindtekst = get_field("log_ind_tekst");
$logindtekst = get_field("log_ind_tekst");
$logindtekst = get_field("log_ind_tekst");
$logindtekst = get_field("log_ind_tekst");
$logindtekst = get_field("log_ind_tekst");
$logindtekst = get_field("log_ind_tekst");


?>

<section class="logoGridSection">
    <div class="logoGrid" id="logoGrid"></div>
    <div class="logoGridFog" id="logoGridFog"></div>
    <div class="logoGridContent">
        <h2><?php echo($dinefordelesomerhvervskundetitel); ?></h2>
    </div>     

</section>
<section class="erhvervHerosection">
    <div class="erhvervHero">
        <div class="erhvervHeroBg"></div>
        <div class="top1Wrapper">
            <div class="erhvervsHeroTop" id="top0">
                <h2><?php echo($dinefordelesomerhvervskundetitel); ?></h2>
                <div class="erhvervsHeroTopLinks">
                    <a href=""><?php echo($tilmelddigtekst); ?></a>
                    <span>|</span>
                    <a href=""><?php echo($logindtekst); ?></a>
                </div>
            </div>     

            <div class="erhvervsHeroTop1" id="top1">
                <h2><?php echo($maengderabattitel); ?></h2>
                <p><?php echo($maengerabatbrodtekst);?></p>
            </div>
            <div class="erhvervsHeroTop1" id="top2">
                <h2><?php echo($skraeddersyetlosningertitel);?></h2>   
                <p><?php echo($skraeddersyetlosningerbrodtekst);?></p>
            </div>
            <div class="erhvervsHeroTop1" id="top3">
                <h2><?php echo($firmabeklaedningmedlogotitel);?></h2>  
                <p><?php echo($firmabeklaedningmedlogobrodtekst);?></p>
            </div>
            <div class="erhvervsHeroTop1" id="top4">
                <h2><?php echo($personaliseredeshopsidertitel);?></h2>
                <p><?php echo($personaliseredeshopsiderbrodtekst);?></p>
            </div>
            <div class="erhvervsHeroTop1" id="top5">
                <h2><?php echo($professionelradgivningtitel);?></h2>  
                <p><?php echo($professionelradgivningbrodtekst);?></p>
            </div>
        </div>
        <div class="ervhervsHeroBottom">
            <div class="erhvervHeroItem">  maengderabattitel
                <p>Mængde rabat</p>
                <img src="img/skaArrow.svg" alt="">
            </div>
            <div class="erhvervHeroItem">
                <p>Skræddersyet løsninger</p>
                <img src="img/skaArrow.svg" alt="">
            </div>
            <div class="erhvervHeroItem">
                <p>Firmabeklædning med logo</p>
                <img src="img/skaArrow.svg" alt="">
            </div>
            <div class="erhvervHeroItem">
                <p>Personliserede shop sider</p>
                <img src="img/skaArrow.svg" alt="">
            </div>
            <div class="erhvervHeroItem">
                <p>x</p>
                <img src="img/skaArrow.svg" alt="">
            </div>
        </div>
    </div>
</section>
<section id="booking">
    <div class="bookingContent">
        <div class="bookingLeft">
            <h2 class="bookingTitle">Send os en mail! Få et svar hurtigst muligt!</h2>
            <h3 class="bookingSubTitle">Udfyld formularen eller ring til os på 75 13 45 10</h3>
            <div class="bookingLine"></div>
            <div class="bookingText">
                <div class="bookingText1">
                    <div class="bookingTextLeft">
                        <h1>1</h1>
                    </div>
                    <div class="bookingTextRight">
                        <h4>Benyt kontaktformularen og beskriv jeres arrangement. Skriv dine tanker til os, samt
                            information om antal af gæster til selskabet, menuen, ønsker og de andre vigtige detaljer
                        </h4>
                    </div>
                </div>
                <div class="bookingText2">
                    <div class="bookingTextLeft">
                        <h1>2</h1>
                    </div>
                    <div class="bookingTextRight">
                        <h4>Efter vi har modtaget din henvendelse over mail eller telefon får du tilsendt et skriftligt
                            tilbud til gennemlæsning. Heri er beskrevet alt du skal vide når du booker, som ledige dage
                            m.m Bekræft den eventuelle dato, forbered særlige ønsker og planer og lad os klare resten af
                            forberedelserne.</h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="bookingRight">
            <div class="formularContainer">
                <div class="inputContainer">
                    <label for="name">Navn</label>
                    <input type="text" class="nameInput" placeholder="Skriv Dit Navn">
                </div>

                <div class="inputContainer">
                    <label for="name">Email</label>
                    <input type="text" class="nameInput" placeholder="Skriv Din Email">
                </div>

                <div class="inputContainer">
                    <label for="name">TLF</label>
                    <input type="text" class="nameInput" placeholder="Skriv Dit Telefon Nummer">
                </div>

                <div class="inputContainer" id="inputStor">
                    <label for="name">Beskrivelse</label>
                    <input type="text" class="bigInput"
                        placeholder="Beskriv selskab, cirka dato for selskabet samt ekstra tanker og ønsker">
                </div>
                <div class="inputBtn">
                    <p>Send forespørgsel</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="socialSektion">
    <h3 class="socialTitel">Følg Sikkerhedsgiganten</h3>
    <div class="someContainer">
        <a href="" target="_blank"><img src="<?php echo esc_url($erhvervinstagram["url"]); ?>" alt="<?php echo $erhvervinstagram ["alt"]?>"></a>
        <a href="" target="_blank"><img src="<?php echo esc_url($erhvervfacebook["url"]); ?>" alt="<?php echo $erhvervfacebook ["alt"]?>"></a>
        <a href="" target="_blank"><img src="<?php echo esc_url($erhvervlinkedin["url"]); ?>" alt="<?php echo $erhvervlinkedin ["alt"]?>"></a>
    </div>
</section>
<section id="bottomLinks">
    <div class="bottomLinksContainer">
        <a href=""><img src="<?php echo esc_url($erhvervfindos["url"]); ?>" alt="<?php echo $erhvervfindos ["alt"]?>">Find os her</a>
        <a href=""><img src="<?php echo esc_url($erhvervnyhedsbrev["url"]); ?>" alt="<?php echo $erhvervnyhedsbrev ["alt"]?>">Tilmeld nyhedsbrev</a>
        <a href=""><img src="<?php echo esc_url($erhvervkontaktos["url"]); ?>" alt="<?php echo $erhvervkontaktos ["alt"]?>">Kontakt os</a>
        <a href=""><img src="<?php echo esc_url($erhvervomos["url"]); ?>" alt="<?php echo $erhvervomos ["alt"]?>">Om os</a>
    </div>
</section>
<?php get_footer(); ?>
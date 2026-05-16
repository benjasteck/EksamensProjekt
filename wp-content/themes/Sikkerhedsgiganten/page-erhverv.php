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
$maengderabatlilletekst = get_field("maengde_rabat_lille_tekst");
$skraeddersyetlosningerlilletekst = get_field("skraeddersyet_losninger_lille_tekst");
$firmabeklaedningmedlogolilletekst = get_field("firmabeklaedning_med_logo_lille_tekst");
$personaliseredeshopsiderlilletekst = get_field("personaliserede_shop_sider_lille_tekst");
$professionelradgivninglilletekst = get_field("professionel_radgivning_lille_tekst");
$sendosenmailogvikontakterdigtitel = get_field("send_os_en_mail_og_vi_kontakter_dig_titel");
$sendosenmailfaetsvarhurtigstmuligt = get_field("send_os_en_mail_fa_et_svar_hurtigst_muligt");
$udfyldformularenellerringtitel = get_field("udfyld_formularen_eller_ring_titel");
$etbenytkontaktformularentekst = get_field("et_benyt_kontaktformularen_tekst");
$tonarviharmodtagetdinhenvendelsetekst = get_field("to_nar_vi_har_modtaget_din_henvendelse_tekst");
$navntitel = get_field("navn_titel");
$emailtitel= get_field("e-mail_titel");
$tlftitel = get_field("tlf_titel");
$skrivdinemail = get_field("skriv_din_email");
$sendforesporgseltitel = get_field("send_foresporgsel_titel");
$folgsikkerhedsgigantentitel = get_field("folg_sikkerhedsgiganten_titel");
$logindtekst = get_field("log_ind_tekst");
$findoshertitel = get_field("find_os_her_titel");
$tilmeldnyhedsbrevtitel = get_field("tilmeld_nyhedsbrev_titel");
$kontaktostitel = get_field("kontakt_os_titel");
$omostitel = get_field("om_os_titel");


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
            <div class="erhvervHeroItem">  
                <p><?php echo($maengderabatlilletekst);?></p>
                <img src="img/skaArrow.svg" alt="">
            </div>
            <div class="erhvervHeroItem">
                <p><?php echo($skraeddersyetlosningerlilletekst);?></p>
                <img src="img/skaArrow.svg" alt="">
            </div>
            <div class="erhvervHeroItem">
                <p><?php echo($firmabeklaedningmedlogolilletekst);?></p>
                <img src="img/skaArrow.svg" alt="">
            </div>
            <div class="erhvervHeroItem">
                <p><?php echo($personaliseredeshopsiderlilletekst);?></p>
                <img src="img/skaArrow.svg" alt="">
            </div>
            <div class="erhvervHeroItem">
                <p><?php echo($professionelradgivninglilletekst);?></p>
                <img src="img/skaArrow.svg" alt="">
            </div>
        </div>
    </div>
</section>
<section id="booking">
    <div class="bookingContent">
        <div class="bookingLeft">   <?php echo($sendosenmailogvikontakterdigtitel);?>
            <h2 class="bookingTitle"><?php echo($sendosenmailfaetsvarhurtigstmuligt);?></h2>
            <h3 class="bookingSubTitle"><?php echo($udfyldformularenellerringtitel);?></h3>
            <div class="bookingLine"></div>
            <div class="bookingText">
                <div class="bookingText1">
                    <div class="bookingTextLeft">
                        <h1>1</h1>
                    </div>
                    <div class="bookingTextRight">  
                        <h4><?php echo($etbenytkontaktformularentekst);?></h4>
                    </div>
                </div>
                <div class="bookingText2">
                    <div class="bookingTextLeft">
                        <h1>2</h1>
                    </div>
                    <div class="bookingTextRight">
                        <h4><?php echo($tonarviharmodtagetdinhenvendelsetekst);?></h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="bookingRight">
            <div class="formularContainer">
                <div class="inputContainer">  
                    <label for="name"><?php echo($navntitel);?></label>
                    <input type="text" class="nameInput" placeholder="Skriv Dit Navn">
                </div>

                <div class="inputContainer">  
                    <label for="name"><?php echo($emailtitel);?></label>
                    <input type="text" class="nameInput" placeholder="Skriv Din Email">
                </div>

                <div class="inputContainer">
                    <label for="name"><?php echo($tlftitel);?></label>
                    <input type="text" class="nameInput" placeholder="Skriv Dit Telefon Nummer">
                </div>

                <div class="inputContainer" id="inputStor">
                    <label for="name"><?php echo($skrivdinemail);?></label>
                    <input type="text" class="bigInput"
                        placeholder="Beskriv selskab, cirka dato for selskabet samt ekstra tanker og ønsker">
                </div>
                <div class="inputBtn">
                    <p><?php echo($sendforesporgseltitel);?></p>
                </div>
            </div>   
        </div>
    </div>
</section>
<section id="socialSektion">
    <h3 class="socialTitel"><?php echo($folgsikkerhedsgigantentitel);?></h3>
    <div class="someContainer">
        <a href="" target="_blank"><img src="<?php echo esc_url($erhvervinstagram["url"]); ?>" alt="<?php echo $erhvervinstagram ["alt"]?>"></a>
        <a href="" target="_blank"><img src="<?php echo esc_url($erhvervfacebook["url"]); ?>" alt="<?php echo $erhvervfacebook ["alt"]?>"></a>
        <a href="" target="_blank"><img src="<?php echo esc_url($erhvervlinkedin["url"]); ?>" alt="<?php echo $erhvervlinkedin ["alt"]?>"></a>
    </div>
</section>
<section id="bottomLinks">
    <div class="bottomLinksContainer">
        <a href=""><img src="<?php echo esc_url($erhvervfindos["url"]); ?>" alt="<?php echo $erhvervfindos ["alt"]?>"><?php echo($findoshertitel);?></a>  
        <a href=""><img src="<?php echo esc_url($erhvervnyhedsbrev["url"]); ?>" alt="<?php echo $erhvervnyhedsbrev ["alt"]?>"><?php echo($tilmeldnyhedsbrevtitel);?></a>
        <a href=""><img src="<?php echo esc_url($erhvervkontaktos["url"]); ?>" alt="<?php echo $erhvervkontaktos ["alt"]?>"><?php echo($kontaktostitel);?></a>
        <a href=""><img src="<?php echo esc_url($erhvervomos["url"]); ?>" alt="<?php echo $erhvervomos ["alt"]?>"><?php echo($omostitel);?></a>
    </div>
</section>
<?php get_footer(); ?>
<?php get_header(); ?>

<?php
$kontaktinstagram = get_field("kontakt_instagram");
$kontaktfacebook = get_field("kontakt_facebook");
$kontaktlinkedin = get_field("kontakt_linkedin");
$kontaktfindos = get_field("kontakt_find_os");
$kontaktnyhedsbrev = get_field("kontakt_nyhedsbrev");
$kontaktkontaktos = get_field("kontakt_kontakt_os");
$kontaktkontaktostitel = get_field("kontakt_os_titel");
$kontaktsikkerhedsgigantentitel = get_field("kontakt_sikkerhedsgiganten_titel");
$kontaktfindoshertitel = get_field("find_os_her_titel");
$kontakttilmeldnyhedsbrevtitel = get_field("tilmeld_nyhedsbrev_titel");
$kontakttlfnrtitel = get_field("tlf_nr_titel");
$kontaktemailtitel = get_field("email_titel");



?>
</header>
<section id="kontaktSide">
    <div class="kontaktLeft">
        <img src="img/kort.jpg" alt="">
    </div>
    <div class="kontaktRight">
        <div class="kontaktRightTop">
            <h2><?php echo($kontaktsikkerhedsgigantentitel); ?></h2> 
            <p><?php echo($kontaktadressetitel); ?></p>
            <p><?php echo($kontakttlfnrtitel); ?></p>
            <p><?php echo($kontaktemailtitel); ?></p>
        </div>
        <div class="kontaktRightBottom">
            <h2>Åbningstider</h2>
            <div class="kontaktBottom">
                <div class="kontaktBottomContainer">
                    <p class="kontaktBottomTitel">Mandag til torsdag</p>
                    <p class="kontaktBottomTekst"> 8:00 - 16:00</p>
                </div>
                <div class="kontaktBottomContainer">
                    <p class="kontaktBottomTitel">Fredag:</p>
                    <p class="kontaktBottomTekst">8:00 - 15.30</p>
                </div>
            </div>
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
    <a href="" target="_blank"><img src="<?php echo esc_url($kontaktinstagram["url"]); ?>" alt="<?php echo $kontaktinstagram ["alt"]?>"></a>
            <a href="" target="_blank"><img src="<?php echo esc_url($kontaktfacebook["url"]); ?>" alt="<?php echo $kontaktfacebook ["alt"]?>"></a>
            <a href="" target="_blank"><img src="<?php echo esc_url($kontaktlinkedin["url"]); ?>" alt="<?php echo $kontaktlinkedin ["alt"]?>"></a>
    </div>
</section>
<section id="bottomLinks">
    <div class="bottomLinksContainer">
    <a href=""><img src="<?php echo esc_url($kontaktfindos["url"]); ?>" alt="<?php echo $kontaktfindos ["alt"]?>"><?php echo($kontaktfindoshertitel); ?></a>
            <a href=""><img src="<?php echo esc_url($kontaktnyhedsbrev["url"]); ?>" alt="<?php echo $kontaktnyhedsbrev ["alt"]?>"><?php echo($kontakttilmeldnyhedsbrevtitel); ?></a>
            <a href=""><img src="<?php echo esc_url($kontaktkontaktos["url"]); ?>" alt="<?php echo $kontaktkontaktos ["alt"]?>"><?php echo($kontaktkontaktostitel); ?></a>
            <a href=""><img src="<?php echo esc_url($kontaktomos["url"]); ?>" alt="<?php echo $kontaktomos ["alt"]?>"><?php echo($kontaktomostitel); ?></a>
    </div>
</section>
<?php get_footer(); ?>
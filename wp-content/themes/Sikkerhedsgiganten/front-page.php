<?php get_header(); ?>


<?php
$toiletpapir = get_field("toiletpapir_tilbud_billede");
$faldsikring = get_field("faldsikring_tilbud_billede");
$andedraetsvaern = get_field("andedraetsvaern_tilbud_billede");
$snickerslogo = get_field("snickers_logo");
$torklogo = get_field("tork_logo");
$kasklogo = get_field("kask_logo");
$hellberglogo = get_field("hellberg_logo");
$petzllogo = get_field("petzl_logo");
$elkalogo = get_field("elka_logo");
$blakladerlogo = get_field("blaklader_logo");
$horevaern = get_field("horevaerns_billede");
$arbejdshandsker = get_field("arbejdshandsker_billede");
$sikkerhedssko = get_field("sikkerhedssko_billede");
$arbejdsjakke = get_field("arbejdsjakke_billede");
$andedraetsvaernbillede = get_field("andedraetsvaern_billede");
$faldsikringbillede = get_field("faldsikring_billede");
$ojenskylbillede = get_field("ojenskyl_billede");
$sikkerhedshjelmbillede = get_field("sikkerhedshjelm_billede");
$arbejdskvindebillede = get_field("arbejds_kvinde_billede");
$erhvervHero1 = get_field("erhverv_hero");
$erhvervHero2 = get_field("erhverv_hero_2");
$erhvervHero3 = get_field("erhverv_hero_3");
$erhvervHero4 = get_field("erhverv_hero_4");
$erhvervHero5 = get_field("erhverv_hero_5");
$erhvervHero6 = get_field("erhverv_hero_6");
$instagramikon = get_field("instagram_ikon");
$facebookikon = get_field("facebook_ikon");
$linkedinikon = get_field("linkedin_ikon");
$blogsikkerhedsskobillede = get_field("blog_sikkerhedssko_billede");
$blogarbejdstoejbillede = get_field("blog_arbejdstoj_billede");
$blogandedraetsvaernbillede = get_field("blog_andedraetsvaern_billede");
$blogsikkerhedshjelmbillede = get_field("blog_sikkerhedshjelm_billede");
$findosikon = get_field("find_os_ikon");
$nyhedsbrevikon = get_field("nyhedsbrev_ikon");
$mailikon = get_field("mail_ikon");
$omosikon = get_field("om_os_ikon");
$tilbudtitelhero= get_field("tilbud_titel_hero");
$toiletpapirtitel= get_field("toiletpapir_titel");
$toiletpapirnypris= get_field("toiletpapir_ny_pris");
$toiletpapirgammelpris= get_field("toiletpapir_gammel_pris");
$toiletpapirsemeretekst= get_field("toiletpapir_se_mere_tekst");
$toiletpapirrabat= get_field("toiletpapir_rabat");
$faldsikringtitel= get_field("faldsikring_titel");
$faldsikringnypris= get_field("faldsikring_ny_pris");
$faldsikringgammelpris= get_field("faldsikring_gammel_pris");
$faldsikringsemeretekst= get_field("faldsikring_se_mere_tekst");
$faldsikringrabat= get_field("faldsikring_rabat");
$andedraetsvaerntitel= get_field("andedraetsvaern_titel");
$andedraetsvaernnypris= get_field("andedraetsvaern_ny_pris");
$andedraetsvaerngammelpris= get_field("andedraetsvaern_gammel_pris");
$andedraetsvaernsemeretekst= get_field("andedraetsvaern_se_mere_tekst");
$andedraetsvaernrabat= get_field("andedraetsvaern_rabat");
$sikkerhedsudstyrtilalleopgavertitel= get_field("sikkerhedsudstyr_til_alle_opgaver_titel");
$sikkerhedsudstyrtilalleopgaverbrodtekst= get_field("sikkerhedsudstyr_til_alle_opgaver_brodtekst");
$horevaernogearplugstitel= get_field("horevaern_og_earplugs_titel");
$horevaernogearplugsbrodtekst= get_field("horevaern_og_earplugs_brodtekst");
$horevaernogearplugssemeretekst= get_field("horevaern_og_earplugs_se_mere_tekst");
$arbejdshandskertitel= get_field("arbejdshandsker_titel");
$arbejdshandskerbrodtekst= get_field("arbejdshandsker_brodtekst");
$arbejdshandskersemeretekst= get_field("arbejdshandsker_se_mere_tekst");
$sikkerhedsskotitel= get_field("sikkerhedssko_titel");
$sikkerhedsskosemeretekst= get_field("sikkerhedssko_se_mere_tekst");
$sikkerhedsskobrodtekst= get_field("sikkerhedssko_brodtekst");
$arbejdsjakkertitel= get_field("arbejdsjakker_titel");
$arbejdsjakkersemeretekst= get_field("arbejdsjakker_se_mere_tekst");
$arbejdshandskerbrodtekst= get_field("arbejdshandsker_brodtekst");
$andedraetsvaerntitel= get_field("andedraetsvaern_titel");
$andedraetsvaernbrodtekst= get_field("andedraetsvaern_brodtekst");
$andedraetsvaernsemeretekst= get_field("andedraetsvaern_se_mere_tekst");
$faldsikringtitel= get_field("faldsikring_titel");
$faldsikringbrodtekst= get_field("faldsikring_brodtekst");
$faldsikringsemeretekst= get_field("faldsikring_se_mere_tekst");
$ojenskyltitel= get_field("ojenskyl_titel");
$ojenskylbrodtekst= get_field("ojenskyl_brodtekst");
$ojenskylsemeretekst= get_field("ojenskyl_se_mere_tekst");
$sikkerhedshjelmtitel= get_field("sikkerhedshjelm_titel");
$sikkerhedshjelmbrodtekst= get_field("sikkerhedshjelm_brodtekst");
$sikkerhedshjelmsemeretekst= get_field("sikkerhedshjelm_se_mere_tekst");
$folgsgpasometitel= get_field("folg_sg_pa_some_titel");
$holddigopdateretnyhedsmailtitel= get_field("hold_dig_opdateret_nyhedsmail_titel");
$holddigopdateretnyhedsmailunderteksttilmelddig= get_field("hold_dig_opdateret_nyhedsmail_undertekst_tilmeld_dig");
$dinefordelesomerhvervskunde= get_field("dine_fordele_som_erhvervskunde");
$dinefordelesomerhvervskunde= get_field("dine_fordele_som_erhvervskunde");
$tilmelddiglilletekst= get_field("tilmeld_dig_lille_tekst");
$logindlilletekst= get_field("log_ind_lille_tekst");
$maengderabattitel= get_field("maengderabat_titel");
$maengderabatbrodtekst= get_field("maengderabat_brodtekst");
$skraeddersyetlosningertitel= get_field("skraeddersyet_losninger_titel");
$skraeddersyetlosningerbrodtekst= get_field("skraeddersyet_losninger_brodtekst");
$personaliseredeshopsidertitel= get_field("personaliserede_shop_sider_titel");
$personaliseredeshopsiderbrodtekst= get_field("personaliserede_shop_sider_brodtekst");
$firmabeklaedningmedlogotitel= get_field("firmabeklaedning_med_logo_titel");
$firmabeklaedningmedlogobrodtekst= get_field("firmabeklaedning_med_logo_brodtekst");
$professionelradgivningtitel= get_field("professionel_radgivning_titel");
$professionelradgivningbrodtekst= get_field("professionel_radgivning_brodtekst");
?>




<main>
    <main>
        <section id="bedsteTilbud">
            <h2><?php echo($tilbudtitelhero); ?></h2>
            <div class="tilbudsContainer">
                <div class="tilbud">
                    <img src="<?php echo esc_url($toiletpapir["url"]); ?>" alt="<?php echo $toiletpapir ["alt"]?>">
                    <div class="tilbudContent">
                        <h3><?php echo($toiletpapirtitel); ?></h3>
                        <p><strike><?php echo($toiletpapirgammelpris); ?></strike><span> <?php echo($toiletpapirnypris); ?></span></p>
                        <a class="blueCta" href=""><?php echo($toiletpapirsemeretekst); ?></a>
                        <div class="tilbudsMerke">
                            <p><?php echo($toiletpapirrabat); ?></p>
                        </div>
                    </div>
                </div>
                <div class="tilbud">
                    <img src="<?php echo esc_url($faldsikring["url"]); ?>" alt="<?php echo $faldsikring ["alt"]?>">
                    <div class="tilbudContent">
                        <h3><?php echo($faldsikringtitel); ?></h3>
                        <p><strike><?php echo($faldsikringgammelpris); ?></strike><span><?php echo($faldsikringnypris); ?></span></p>
                        <a class="blueCta" href=""><?php echo($faldsikringsemeretekst); ?></a>
                        <div class="tilbudsMerke">
                            <p><?php echo($faldsikringrabat); ?></p>
                        </div>
                    </div>
                </div>
                <div class="tilbud">
                    <img src="<?php echo esc_url($andedraetsvaern["url"]); ?>"
                        alt="<?php echo $andedraetsvaern ["alt"]?>">
                    <div class="tilbudContent">
                        <h3><?php echo($andedraetsvaerntitel); ?></h3>
                        <p><strike><?php echo($andedraetsvaerngammelpris); ?></strike><span><?php echo($andedraetsvaernnypris); ?></span></p>
                        <a class="blueCta" href=""><?php echo($andedraetsvaernsemeretekst); ?></a>
                        <div class="tilbudsMerke">
                            <p><?php echo($andedraetsvaernrabat); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="brandSection">
            <div class="logoLine">
                <div class="brandscontainer">
                    <img src="<?php echo esc_url($snickerslogo["url"]); ?>" alt="<?php echo $snickerslogo ["alt"]?>">
                    <img src="<?php echo esc_url($torklogo["url"]); ?>" alt="<?php echo $torklogo ["alt"]?>">
                    <img src="<?php echo esc_url($kasklogo["url"]); ?>" alt="<?php echo $kasklogo ["alt"]?>">
                    <img src="<?php echo esc_url($hellberglogo["url"]); ?>" alt="<?php echo $hellberglogo ["alt"]?>">
                    <img src="<?php echo esc_url($petzllogo["url"]); ?>" alt="<?php echo $petzllogo ["alt"]?>">
                    <img src="<?php echo esc_url($elkalogo["url"]); ?>" alt="<?php echo $elkalogo ["alt"]?>">
                    <img src="<?php echo esc_url($petzllogo["url"]); ?>" alt="<?php echo $petzllogo ["alt"]?>">
                    <img src="<?php echo esc_url($blakladerlogo["url"]); ?>" alt="<?php echo $blakladerlogo ["alt"]?>">
                </div>
                <div class="brandscontainer">
                    <img src="<?php echo esc_url($snickerslogo["url"]); ?>" alt="<?php echo $snickerslogo ["alt"]?>">
                    <img src="<?php echo esc_url($torklogo["url"]); ?>" alt="<?php echo $torklogo ["alt"]?>">
                    <img src="<?php echo esc_url($kasklogo["url"]); ?>" alt="<?php echo $kasklogo ["alt"]?>">
                    <img src="<?php echo esc_url($hellberglogo["url"]); ?>" alt="<?php echo $hellberglogo ["alt"]?>">
                    <img src="<?php echo esc_url($petzllogo["url"]); ?>" alt="<?php echo $petzllogo ["alt"]?>">
                    <img src="<?php echo esc_url($elkalogo["url"]); ?>" alt="<?php echo $elkalogo ["alt"]?>">
                    <img src="<?php echo esc_url($petzllogo["url"]); ?>" alt="<?php echo $petzllogo ["alt"]?>">
                    <img src="<?php echo esc_url($blakladerlogo["url"]); ?>" alt="<?php echo $blakladerlogo ["alt"]?>">
                </div>
            </div>
        </section>
        <section id="udvalgssektion">
            <div class="udvalgTop">
                <h2><?php echo($sikkerhedsudstyrtilalleopgavertitel); ?></h2>
                <p><?php echo($sikkerhedsudstyrtilalleopgaverbrodtekst); ?> </p>
            </div>
            <div class="udvalgGrid">
                <div class="itemUdvalg">
                    <img src="<?php echo esc_url($horevaern["url"]); ?>" alt="<?php echo $horevaern ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p><?php echo($horevaernogearplugstitel); ?></p>
                        <a href=""><?php echo($horevaernogearplugssemeretekst); ?></a>
                    </div>
                    <p><?php echo($horevaernogearplugsbrodtekst); ?></p>
                </div>
                <div class="itemUdvalg">
                    <img src="<?php echo esc_url($arbejdshandsker["url"]); ?>"
                        alt="<?php echo $arbejdshandsker ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p><?php echo($arbejdshandskertitel); ?></p>
                        <a href=""><?php echo($arbejdshandskersemeretekst); ?></a>
                    </div>
                    <p><?php echo($arbejdshandskerbrodtekst); ?></p>
                </div>
                <div class="itemUdvalg">
                    <img src="<?php echo esc_url($sikkerhedssko["url"]); ?>" alt="<?php echo $sikkerhedssko ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p><?php echo($sikkerhedsskotitel); ?></p>
                        <a href=""><?php echo($sikkerhedsskosemeretekst); ?></a>
                    </div>
                    <p><?php echo($sikkerhedsskobrodtekst); ?></p>
                </div>
                <div class="itemUdvalg">
                    <img src="<?php echo esc_url($arbejdsjakke["url"]); ?>" alt="<?php echo $arbejdsjakke ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p><?php echo($arbejdsjakkertitel); ?></p>
                        <a href=""><?php echo($arbejdsjakkersemeretekst); ?></a>
                    </div>
                    <p><?php echo($arbejdshandskerbrodtekst); ?></p>
                </div>
                <div class="itemUdvalg">
                    <img src="<?php echo esc_url($andedraetsvaernbillede["url"]); ?>"
                        alt="<?php echo $andedraetsvaernbillede ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p><?php echo($andedraetsvaerntitel); ?></p>
                        <a href=""><?php echo($andedraetsvaernsemeretekst); ?></a>
                    </div>
                    <p><?php echo($andedraetsvaernbrodtekst); ?></p>
                </div>
                <div class="itemUdvalg">
                    <img src="<?php echo esc_url($faldsikringbillede["url"]); ?>"
                        alt="<?php echo $faldsikringbillede ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p><?php echo($faldsikringtitel); ?></p>
                        <a href=""><?php echo($faldsikringsemeretekst); ?></a>
                    </div>
                    <p><?php echo($faldsikringbrodtekst); ?></p>
                </div>
                <div class="itemUdvalg">
                    <img src="<?php echo esc_url($ojenskylbillede["url"]); ?>"
                        alt="<?php echo $ojenskylbillede ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p><?php echo($ojenskyltitel); ?></p>
                        <a href=""><?php echo($ojenskylsemeretekst); ?></a>
                    </div>
                    <p><?php echo($ojenskylbrodtekst); ?></p>
                </div>
                <div class="itemUdvalg">
                    <img src="<?php echo esc_url($sikkerhedshjelmbillede["url"]); ?>"
                        alt="<?php echo $sikkerhedshjelmbillede ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p><?php echo($sikkerhedshjelmtitel); ?></p>
                        <a href=""><?php echo($sikkerhedshjelmsemeretekst); ?></a>
                    </div>
                    <p><?php echo($sikkerhedshjelmbrodtekst); ?></p>
                </div>
            </div>
        </section>
        <section id="socialSektion">
            <h3 class="socialTitel"><?php echo($folgsgpasometitel); ?></h3>
            <div class="someContainer">
                <a href="" target="_blank"><img src="<?php echo esc_url($instagramikon["url"]); ?>"
                        alt="<?php echo $instagramikon ["alt"]?>"></a>
                <a href="" target="_blank"><img src="<?php echo esc_url($facebookikon["url"]); ?>"
                        alt="<?php echo $facebookikon ["alt"]?>"></a>
                <a href="" target="_blank"><img src="<?php echo esc_url($linkedinikon["url"]); ?>"
                        alt="<?php echo $linkedinikon ["alt"]?>"></a>
            </div>
            <div class="newsletterContainer">
                <div class="newsletterLeft">
                    <h3><?php echo($holddigopdateretnyhedsmailtitel); ?></h3>
                    <p><?php echo($holddigopdateretnyhedsmailunderteksttilmelddig); ?></p>
                    <form method="post">
                        <input type="email" name="Email" placeholder="Din Email">
                        <button type="submit" value=" ">
                            <img src="data:image/svg+xml,%3Csvg width='30' height='10' viewBox='0 0 16 7' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect y='2.71973' width='15.4286' height='2.56061' fill='%23404040'/%3E%3Cpath d='M18 4.00009L14.1429 7.32641L14.1429 0.673764L18 4.00009Z' fill='%23404040'/%3E%3C/svg%3E"
                                alt="">
                        </button>
                    </form>
                </div>
                <div class="newsLetterRight">
                    <img src="<?php echo esc_url($arbejdskvindebillede["url"]); ?>"
                        alt="<?php echo $arbejdskvindebillede ["alt"]?>">
                </div>
            </div>
        </section>

        <section class="logoGridSection">
            <div class="logoGrid" id="logoGrid"></div>
            <div class="logoGridFog" id="logoGridFog"></div>
            <div class="logoGridContent">
            <?php echo($dinefordelesomerhvervskunde); ?>
            </div>

        </section>
        <section class="erhvervHerosection">
            <div class="erhvervHero">
                <div class="erhvervHeroBg"></div>
                <div class="top1Wrapper">
                    <div class="erhvervsHeroTop" id="top0">
                    <?php echo($dinefordelesomerhvervskunde); ?>
                        <div class="erhvervsHeroTopLinks">
                            <a href=""> <?php echo($tilmelddiglilletekst); ?></a>
                            <span>|</span>
                            <a href=""><?php echo($logindlilletekst); ?></a>
                        </div>
                    </div>

                    <div class="erhvervsHeroTop1" id="top1">
                        <h2><?php echo($maengderabattitel); ?></h2>
                        <p><?php echo($maengderabatbrodtekst); ?></p>
                    </div>
                    <div class="erhvervsHeroTop1" id="top2">
                        <h2><?php echo($skraeddersyetlosningertitel); ?></h2>
                        <p><?php echo($skraeddersyetlosningerbrodtekst); ?></p>
                    </div>
                    <div class="erhvervsHeroTop1" id="top3">
                        <h2><?php echo($firmabeklaedningmedlogotitel); ?></h2>
                        <p><?php echo($firmabeklaedningmedlogobrodtekst); ?></p>
                    </div>
                    <div class="erhvervsHeroTop1" id="top4">
                        <h2><?php echo($personaliseredeshopsidertitel); ?></h2>
                        <p><?php echo($personaliseredeshopsiderbrodtekst); ?></p>
                    </div>
                    <div class="erhvervsHeroTop1" id="top5">
                        <h2><?php echo($professionelradgivningtitel); ?></h2>
                        <p><?php echo($professionelradgivningbrodtekst); ?></p>
                    </div>
                </div>
                <div class="ervhervsHeroBottom">
                    <div class="erhvervHeroItem">
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
                        <p>Professionel rådgivning</p>
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
                                    information om antal af gæster til selskabet, menuen, ønsker og de andre vigtige
                                    detaljer</h4>
                            </div>
                        </div>
                        <div class="bookingText2">
                            <div class="bookingTextLeft">
                                <h1>2</h1>
                            </div>
                            <div class="bookingTextRight">
                                <h4>Efter vi har modtaget din henvendelse over mail eller telefon får du tilsendt et
                                    skriftligt tilbud til gennemlæsning. Heri er beskrevet alt du skal vide når du
                                    booker, som ledige dage m.m Bekræft den eventuelle dato, forbered særlige ønsker og
                                    planer og lad os klare resten af forberedelserne.</h4>
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
        <section id="blogSection">
            <div class="blogSectionInner">
                <div class="blogSectionInnerLeft">
                    <div class="blogItem">
                        <h2>Blogs</h2>
                        <p>Hold dig opdateret via vores blogs, hvor vi deler ekspertråd om alt fra korrekt brug af ffp3
                            masker til vedligeholdelse af sikkerhedssko. Du får værdifuld viden om optimering af dit
                            arbejdsmiljø, valg af personlig sikkerhedsudstyr og de nyeste regler inden for faldsikring.
                        </p>
                    </div>
                    <div class="blogItem">
                        <img src="<?php echo esc_url($blogsikkerhedsskobillede["url"]); ?>"
                            alt="<?php echo $blogsikkerhedsskobillede ["alt"]?>">
                        <h3>Valg af sikkerhedssko</h3>
                        <p>Da ingen fødder er ens, kan det være en jungle at finde det mærke eller den model som passer
                            dig bedst. Via denne guide, kan vi guide dig igennem de forskellige standarder og typer, så
                            du kan blive klogere på hvilke egenskaber dit nye sikkerhedsfodtøj skal have.</p>
                        <a href="">Læs blog</a>
                    </div>
                    <div class="blogItem">
                        <img src="<?php echo esc_url($blogarbejdstoejbillede["url"]); ?>"
                            alt="<?php echo $blogarbejdstoejbillede ["alt"]?>">
                        <h3>Valg af arbejdstøj</h3>
                        <p>Der stilles større og større krav til sikkerheden på arbejdspladsen, dette gælder også vores
                            påklædning. Vores påklædning er en vigtig del for at opfylde disse sikkerhedsmæssige krav. I
                            denne guide vil du blive klogere på hvad de forskellige beklædningsgodkendelser betyde</p>
                        <a href="">Læs blog</a>
                    </div>
                </div>
                <div class="blogSectionInnerRight">
                    <div class="blogItem">
                        <img src="<?php echo esc_url($blogandedraetsvaernbillede["url"]); ?>"
                            alt="<?php echo $blogandedraetsvaernbillede ["alt"]?>">
                        <h3>Valg af åndedrætsværn</h3>
                        <p>Et åndedrætsværn er et personligt værnemiddel, der anvendes til beskyttelse mod indånding af
                            forurenet luft. Det afhænger af åndedrætsværnet, hvilke partikler, gasser og dampe det
                            beskytter imod.</p>
                        <a href="">Læs blog</a>
                    </div>
                    <div class="blogItem">
                        <img src="<?php echo esc_url($blogsikkerhedshjelmbillede["url"]); ?>"
                            alt="<?php echo $blogsikkerhedshjelmbillede ["alt"]?>">
                        <h3>Valg af sikkerhedshjelme</h3>
                        <p>Hvis arbejdsgiveren vurderer, at den ansatte udsættes for risiko for hovedskader som følge af
                            faldende genstande, stød eller andre farer på arbejdspladsen, skal der anvendes
                            sikkerhedshjelm. Det er vigtigt at vælge den rette type hjelm til arbejdsopgaven..</p>
                        <a href="">Læs blog</a>
                    </div>
                    <div class="blogItem">
                        <h2>Læs alle blogs</h2>
                        <a href="">Se mere</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="sidsteTekst">
            <div class="sidsteTekstLeft">
                <h3>SikkerhedsGiganten: Danmarks største sortiment af sikkerhedsudstyr</h3>
                <p>Der findes mange former for sikkerhedsudstyr, og ligeledes mange situationer, hvor udstyret bør tages
                    i brug for at passe på dig selv. <span>Hos SikkerhedsGiganten</span> er det vores mål at være din
                    foretrukne forhandler af personlig sikkerhedsudstyr til ethvert behov, uanset om du søger robuste
                    høreværn eller certificeret øjenværn. <br><br>Vi er stolte af at være Danmarks største forhandler,
                    og vores webshop er pakket med kategorier, der dækker alt fra førstehjælp og skilte til avancerede
                    beskyttelsesdragter.
                    Vi udvider konstant vores sortiment med de nyeste produkter, herunder slidstærkt sikkerhedsfodtøj og
                    specialiseret sikkerhedsudstyr motorsav, så du altid er beskyttet korrekt. <span>Vores fokus er ikke
                        kun på det brede udvalg, men også på at tilbyde de bedste priser i Danmark.</span> Det betyder,
                    at du kan finde alt fra sikkerhedssko til ffp3 masker i højeste kvalitet, som lever op til alle
                    gældende lovkrav og standarder.<br><br>
                    Vi ved, at hurtig levering er afgørende for dit projekt. Derfor tilbyder vi lynhurtig og gratis
                    fragt ved køb over 800 kr. ekskl. moms. Uanset om du mangler et specifikt faldsikring ankerpunkt
                    eller generelt sikkerhedsudstyr, står vi klar til at hjælpe. Når du vil skabe sikre omgivelser med
                    professionelt personlig sikkerhedsudstyr, <span>er SikkerhedsGiganten din totalleverandør</span> –
                    altid til markedets bedste priser.</p>
            </div>
            <div class="sidsteTekstRight">
                <img src="img/arbejdstoj.png" alt="">
            </div>
        </section>
        <section id="socialSektion">
            <h3 class="socialTitel">Følg Sikkerhedsgiganten</h3>
            <div class="someContainer">
                <a href="" target="_blank"><img src="<?php echo esc_url($instagramikon["url"]); ?>"
                        alt="<?php echo $instagramikon ["alt"]?>"></a>
                <a href="" target="_blank"><img src="<?php echo esc_url($facebookikon["url"]); ?>"
                        alt="<?php echo $facebookikon ["alt"]?>"></a>
                <a href="" target="_blank"><img src="<?php echo esc_url($linkedinikon["url"]); ?>"
                        alt="<?php echo $linkedinikon ["alt"]?>"></a>
            </div>
        </section>
        <section id="bottomLinks">
            <div class="bottomLinksContainer">
                <a href=""><a href="" target="_blank"><img src="<?php echo esc_url($findosikon["url"]); ?>"
                            alt="<?php echo $findosikon ["alt"]?>">Find os her</a>
                    <a href=""><a href="" target="_blank"><img src="<?php echo esc_url($nyhedsbrevikon["url"]); ?>"
                                alt="<?php echo $nyhedsbrevikon ["alt"]?>">Tilmeld nyhedsbrev</a>
                        <a href=""><a href="" target="_blank"><img src="<?php echo esc_url($mailikon["url"]); ?>"
                                    alt="<?php echo $mailikon ["alt"]?>">Kontakt os</a>
                            <a href=""><a href="" target="_blank"><img src="<?php echo esc_url($omosikon["url"]); ?>"
                                        alt="<?php echo $omosikon ["alt"]?>">Om os</a>
            </div>
        </section>
    </main>
    <style>
    .erhvervHeroBg {
        position: absolute;
        inset: 0;
        background-image: url(<?php echo esc_url($erhvervHero1["url"]);
        ?>);
        background-size: cover;
        background-position: center;
        z-index: 0;
    }
    </style>
    <?php get_footer(); ?>
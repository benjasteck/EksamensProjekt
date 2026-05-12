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

?>




<main>
    <main>
        <section id="bedsteTilbud">
            <h2>De nyeste tilbud</h2>
            <div class="tilbudsContainer">
                <div class="tilbud">
                    <img src="<?php echo esc_url($toiletpapir["url"]); ?>" alt="<?php echo $toiletpapir ["alt"]?>">
                    <div class="tilbudContent">
                        <h3>Toiletpapir</h3>
                        <p><strike>500,00 kr.</strike><span> 300,00 kr.</span></p>
                        <a class="blueCta" href="">Se mere</a>
                        <div class="tilbudsMerke">
                            <p>10%</p>
                        </div>
                    </div>
                </div>
                <div class="tilbud">
                <img src="<?php echo esc_url($faldsikring["url"]); ?>" alt="<?php echo $faldsikring ["alt"]?>">
                    <div class="tilbudContent">
                        <h3>Sikkerhedssko</h3>
                        <p><strike>800,00 kr.</strike><span> 600,00 kr.</span></p>
                        <a class="blueCta" href="">Se mere</a>
                        <div class="tilbudsMerke">
                            <p>25%</p>
                        </div>
                    </div>
                </div>
                <div class="tilbud">
                <img src="<?php echo esc_url($andedraetsvaern["url"]); ?>" alt="<?php echo $andedraetsvaern ["alt"]?>">
                    <div class="tilbudContent">
                        <h3>Faldsikring</h3>
                        <p><strike>1000,00 kr.</strike><span> 750,00 kr.</span></p>
                        <a class="blueCta" href="">Se mere</a>
                        <div class="tilbudsMerke">
                            <p>25%</p>
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
                <h2>Stort udvalg og stærke priser til alle situationer</h2>
                <p>Som Danmarks største forhandler af sikkerhedsudstyr tilbyder vi et omfattende udvalg af produkter i
                    vores webshop. Fra førstehjælpsudstyr og faldsikring til rengøringsprodukter og skadedyrsbekæmpelse,
                    vi har alt det nødvendige udstyr til at sikre dit arbejdsmiljø. Se de 8 mest besøgte kategorier
                    herunder </p>
            </div>
            <div class="udvalgGrid">
                <div class="itemUdvalg">
                <img src="<?php echo esc_url($horevaern["url"]); ?>" alt="<?php echo $horevaern ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p>Høreværn</p>
                        <a href="">Se mere</a>
                    </div>
                    <p>Beskyt din hørelse med komfortable høreværn i høj kvalitet, der effektivt dæmper skadelig støj.
                    </p>
                </div>
                <div class="itemUdvalg">
                <img src="<?php echo esc_url($arbejdshandsker["url"]); ?>" alt="<?php echo $arbejdshandsker ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p>Arbejdshandsker</p>
                        <a href="">Se mere</a>
                    </div>
                    <p>Slidstærke arbejdshandsker med komfort og godt greb.</p>
                </div>
                <div class="itemUdvalg">
                <img src="<?php echo esc_url($sikkerhedssko["url"]); ?>" alt="<?php echo $sikkerhedssko ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p>Sikkerhedssko</p>
                        <a href="">Se mere</a>
                    </div>
                    <p>Sikkerhedssko med komfortabel pasform og solid beskyttelse, der sikrer godt greb og stabilitet.
                    </p>
                </div>
                <img src="<?php echo esc_url($arbejdsjakke["url"]); ?>" alt="<?php echo $arbejdsjakke ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p>Arbejdsjakker</p>
                        <a href="">Se mere</a>
                    </div>
                    <p>Arbejdsjakker med komfort og slidstærk beskyttelse, der sikrer bevægelse hele dagen.</p>
                </div>
                <img src="<?php echo esc_url($andedraetsvaernbillede["url"]); ?>" alt="<?php echo $andedraetsvaernbillede ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p>Åndedrætsværn</p>
                        <a href="">Se mere</a>
                    </div>
                    <p>Åndedrætsværn med komfortabel pasform og god filtrering, der beskytter mod skadelige partikler.
                    </p>
                </div>
                <img src="<?php echo esc_url($faldsikringbillede["url"]); ?>" alt="<?php echo $faldsikringbillede ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p>Faldsikring</p>
                        <a href="">Se mere</a>
                    </div>
                    <p>Faldsikring med høj sikkerhed og komfort, der beskytter effektivt ved arbejde i højden.</p>
                </div>
                <img src="<?php echo esc_url($ojenskylbillede["url"]); ?>" alt="<?php echo $ojenskylbillede ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p>Øjenskyl</p>
                        <a href="">Se mere</a>
                    </div>
                    <p>Øjenskyl til hurtig og effektiv rensning, der beskytter dine øjne ved uheld.</p>
                </div>
                <img src="<?php echo esc_url($ojenskylbillede["url"]); ?>" alt="<?php echo $ojenskylbillede ["alt"]?>">
                    <div class="itemUdvalgFlex">
                        <p>Sikkerhedshjelm</p>
                        <a href="">Se mere</a>
                    </div>
                    <p>Arbejdshjelm med høj komfort og robust beskyttelse, der sikrer dit hoved hele dagen.</p>
                </div>
            </div>
        </section>
        <section id="socialSektion">
            <h3 class="socialTitel">Følg Sikkerhedsgiganten</h3>
            <div class="someContainer">
                <a href="" target="_blank"><img src="<?php echo esc_url($instagramikon["url"]); ?>" alt="<?php echo $instagramikon ["alt"]?>"></a>
                <a href="" target="_blank"><img src="<?php echo esc_url($facebookikon["url"]); ?>" alt="<?php echo $facebookikon ["alt"]?>"></a>
                <a href="" target="_blank"><img src="<?php echo esc_url($linkedinikon["url"]); ?>" alt="<?php echo $linkedinikon ["alt"]?>"></a>
            </div>
            <div class="newsletterContainer">
                <div class="newsletterLeft">
                    <h3>Hold dig opdateret om tilbud, nyheder og artikler</h3>
                    <p>tilmeld dig vores nyhedsbrev.</p>
                    <form method="post">
                        <input type="email" name="Email" placeholder="Din Email">
                        <button type="submit" value=" ">
                            <img src="data:image/svg+xml,%3Csvg width='30' height='10' viewBox='0 0 16 7' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect y='2.71973' width='15.4286' height='2.56061' fill='%23404040'/%3E%3Cpath d='M18 4.00009L14.1429 7.32641L14.1429 0.673764L18 4.00009Z' fill='%23404040'/%3E%3C/svg%3E"
                                alt="">
                        </button>
                    </form>
                </div>
                <div class="newsLetterRight">
                <img src="<?php echo esc_url($arbejdskvindebillede["url"]); ?>" alt="<?php echo $arbejdskvindebillede ["alt"]?>">
                </div>
            </div>
        </section>

        <section class="logoGridSection">
            <div class="logoGrid" id="logoGrid"></div>
            <div class="logoGridFog" id="logoGridFog"></div>
            <div class="logoGridContent">
                <h2>Dine fordele som <br>erhvervskunde</h2>
            </div>

        </section>
        <section class="erhvervHerosection">
            <div class="erhvervHero">
                <div class="erhvervHeroBg"></div>
                <div class="top1Wrapper">
                    <div class="erhvervsHeroTop" id="top0">
                        <h2>Dine fordele som <br>erhvervskunde</h2>
                        <div class="erhvervsHeroTopLinks">
                            <a href="">Tilmeld dig</a>
                            <span>|</span>
                            <a href="">Log ind</a>
                        </div>
                    </div>

                    <div class="erhvervsHeroTop1" id="top1">
                        <h2>Mængde rabat</h2>
                        <p>Som erhvervskunde hos SikkerhedsGiganten får du adgang til attraktive mængderabatter på
                            personlig sikkerhedsudstyr, der er skræddersyet til din virksomheds specifikke behov. Vi
                            guider dig sikkert gennem hele processen</p>
                    </div>
                    <div class="erhvervsHeroTop1" id="top2">
                        <h2>Skræddersyet løsninger</h2>
                        <p>Som erhvervskunde hos SikkerhedsGiganten får du en skræddersyet firmaaftale på arbejdstøj og
                            personlig sikkerhedsudstyr, der matcher din virksomheds profil. Vi kombinerer professionel
                            rådgivning med attraktive mængderabatter på alt fra slidstærkt beklædning til godkendt
                            sikkerhedsfodtøj.</p>
                    </div>
                    <div class="erhvervsHeroTop1" id="top3">
                        <h2>Firmabeklædning med logo</h2>
                        <p>Gør jeres arbejdstøj unikt og professionelt med virksomhedens eget logo. Vores løsninger
                            inden for firmabeklædning med logo sikrer et skarpt visuelt udtryk, uden at gå på kompromis
                            med komforten i jeres personlige sikkerhedsudstyr.</p>
                    </div>
                    <div class="erhvervsHeroTop1" id="top4">
                        <h2>Personaliserede shop sider</h2>
                        <p>Med en B2B-aftale hos SikkerhedsGiganten får din virksomhed en skræddersyet løsning med faste
                            specialpriser på jeres mest brugte personlig sikkerhedsudstyr, såsom sikkerhedsfodtøj og
                            ffp3 masker. I får jeres egen online shop, der gør det nemt at bestille på tværs af
                            afdelinger døgnet rundt, med fuldt overblik over priser, ordrer og status.</p>
                    </div>
                    <div class="erhvervsHeroTop1" id="top5">
                        <h2>Professionel rådgivning</h2>
                        <p>Vores erhvervskonsulenter er eksperter i at guide din virksomhed til det rette valg af
                            arbejdstøj og personlig sikkerhedsudstyr, så I får en løsning, der forener design med høj
                            funktionalitet. Vi sammensætter et personligt sortiment af alt fra slidstærkt beklædning til
                            certificeret sikkerhedsfodtøj, hvilket gør det enkelt og hurtigt for jer at genbestille det
                            nødvendige udstyr online.</p>
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
                    <img src="<?php echo esc_url($blogsikkerhedsskobillede["url"]); ?>" alt="<?php echo $blogsikkerhedsskobillede ["alt"]?>">
                        <h3>Valg af sikkerhedssko</h3>
                        <p>Da ingen fødder er ens, kan det være en jungle at finde det mærke eller den model som passer
                            dig bedst. Via denne guide, kan vi guide dig igennem de forskellige standarder og typer, så
                            du kan blive klogere på hvilke egenskaber dit nye sikkerhedsfodtøj skal have.</p>
                        <a href="">Læs blog</a>
                    </div>
                    <div class="blogItem">
                    <img src="<?php echo esc_url($blogarbejdstoejbillede["url"]); ?>" alt="<?php echo $blogarbejdstoejbillede ["alt"]?>">
                        <h3>Valg af arbejdstøj</h3>
                        <p>Der stilles større og større krav til sikkerheden på arbejdspladsen, dette gælder også vores
                            påklædning. Vores påklædning er en vigtig del for at opfylde disse sikkerhedsmæssige krav. I
                            denne guide vil du blive klogere på hvad de forskellige beklædningsgodkendelser betyde</p>
                        <a href="">Læs blog</a>
                    </div>
                </div>
                <div class="blogSectionInnerRight">
                    <div class="blogItem">
                    <img src="<?php echo esc_url($blogandedraetsvaernbillede["url"]); ?>" alt="<?php echo $blogandedraetsvaernbillede ["alt"]?>">
                        <h3>Valg af åndedrætsværn</h3>
                        <p>Et åndedrætsværn er et personligt værnemiddel, der anvendes til beskyttelse mod indånding af
                            forurenet luft. Det afhænger af åndedrætsværnet, hvilke partikler, gasser og dampe det
                            beskytter imod.</p>
                        <a href="">Læs blog</a>
                    </div>
                    <div class="blogItem">
                    <img src="<?php echo esc_url($blogsikkerhedshjelmbillede["url"]); ?>" alt="<?php echo $blogsikkerhedshjelmbillede ["alt"]?>">
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
            <a href="" target="_blank"><img src="<?php echo esc_url($instagramikon["url"]); ?>" alt="<?php echo $instagramikon ["alt"]?>"></a>
            <a href="" target="_blank"><img src="<?php echo esc_url($facebookikon["url"]); ?>" alt="<?php echo $facebookikon ["alt"]?>"></a>
            <a href="" target="_blank"><img src="<?php echo esc_url($linkedinikon["url"]); ?>" alt="<?php echo $linkedinikon ["alt"]?>"></a>
            </div>
        </section>
        <section id="bottomLinks">
            <div class="bottomLinksContainer">
                <a href=""><a href="" target="_blank"><img src="<?php echo esc_url($findosikon["url"]); ?>" alt="<?php echo $findosikon ["alt"]?>">Find os her</a>
                <a href=""><a href="" target="_blank"><img src="<?php echo esc_url($nyhedsbrevikon["url"]); ?>" alt="<?php echo $nyhedsbrevikon ["alt"]?>">Tilmeld nyhedsbrev</a>
                <a href=""><a href="" target="_blank"><img src="<?php echo esc_url($mailikon["url"]); ?>" alt="<?php echo $mailikon ["alt"]?>">Kontakt os</a>
                <a href=""><a href="" target="_blank"><img src="<?php echo esc_url($omosikon["url"]); ?>" alt="<?php echo $omosikon ["alt"]?>">Om os</a>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
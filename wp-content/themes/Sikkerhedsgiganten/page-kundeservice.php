<?php get_header(); ?>

<?php
$faqikonbestilling = get_field("faq_ikon_bestilling");
$faqikonlevering = get_field("faq_ikon_levering");
$faqikonbetaling = get_field("faq_ikon_betaling");
$faqikonreturnering = get_field("faq_ikon_returnering");
$vipasserpådig1 = get_field("vi_passer_pa_dig_1");
$vipasserpådig2 = get_field("vi_passer_pa_dig_2");
$kundeservicesomeinstagram = get_field("kundeservice_some_instagram");
$kundeservicesomefacebook = get_field("kundeservice_some_facebook");
$kundeservicesomelinkedin = get_field("kundeservice_some_linkedin");
$kundeservicefindos = get_field("kundeservice_find_os");
$kundeservicenyhedsbrev = get_field("kundeservice_nyhedsbrev");
$kundeservicekontaktos = get_field("kundeservice_kontakt_os");
$kundeserviceomos = get_field("kundeservice_om_os");
?>
<main>
    <section id="kontakt">
        <div class="kontaktLeft">
            <img src="img/kort.jpg" alt="">
        </div>
        <div class="kontaktRight">
            <div class="kontaktRightTop">
                <h2>Sikkerhedsgiganten</h2>
                <p>Lillebæltsvej 60 - A/B 6715 Esbjerg N</p>
                <p>Tlf: 71 99 32 60</p>
                <p>Email: info@sikkerhedsgiganten.dk</p>
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
    <section id="faq">
        <div class="faqTop">
            <p class="faqTopOvertitel">FAQ</p>
            <h2>Ofte stillede spørgsmål</h2>
            <p>På denne side finder du vores samling af hyppigt stillede spørgsmål, hvor du kan få svar på en bred vifte
                af emner, uanset om de er store eller små. Du skal blot klikke på et af punkterne for at få mere
                information.</p>
        </div>
        <div class="faqBottom">
            <div class="faqBottomLeft">
                <p id="faqBottomOverTitel">Direkte kontakt</p>
                <h3>Har du et spørgsmål?</h3>
                <p>Vi står altid klar til en dialog med dig og hjælpe med dit problem</p>
                <a href="">Kontakt os</a>
            </div>
            <div class="faqBottomRight">
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header" id="firstAccordion">
                            <div class="acc-headerLeft">
                            <img src="<?php echo esc_url($faqikonbestilling["url"]); ?>" alt="<?php echo $faqikonbestilling ["alt"]?>">
                                <p>Spørgsmål til Bestilling</p>
                            </div>
                            <div class="acc-headerRight">
                                +
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>This is the content of section 2.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acc-headerLeft">
                            <img src="<?php echo esc_url($faqikonlevering["url"]); ?>" alt="<?php echo $faqikonlevering ["alt"]?>">
                                <p>Spørgsmål til Levering</p>
                            </div>
                            <div class="acc-headerRight">
                                +
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>This is the content of section 2.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acc-headerLeft">
                            <img src="<?php echo esc_url($faqikonbetaling["url"]); ?>" alt="<?php echo $faqikonbetaling ["alt"]?>">
                                <p>Spørgsmål til betaling</p>
                            </div>
                            <div class="acc-headerRight">
                                +
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>This is the content of section 3.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acc-headerLeft">
                            <img src="<?php echo esc_url($faqikonreturnering["url"]); ?>" alt="<?php echo $faqikonreturnering ["alt"]?>">
                                <p>Spørgsmål til returnering</p>
                            </div>
                            <div class="acc-headerRight">
                                +
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>This is the content of section 3.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="lastAccordion">
                            <div class="acc-headerLeft">
                                <img src="img/faqSvg5.svg" alt="">
                                <p>Spørgsmål vdr. erhvervsaftaler</p>
                            </div>
                            <div class="acc-headerRight">
                                +
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>This is the content of section 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="passerPaDig">

    <img src="<?php echo esc_url($vipasserpådig2["url"]); ?>" alt="<?php echo $vipasserpådig2 ["alt"]?>" class="pasImg2">
        <img src="<?php echo esc_url($vipasserpådig1["url"]); ?>" alt="<?php echo $vipasserpådig1 ["alt"]?>" class="pasImg1">
        <div class="pasContainer">
            <h2>Vi passer på dig!</h2>
            <p>Du er vigtig, og vores mål er at hjælpe dig med at udføre dine opgaver sikkert. Med det rette personlig
                sikkerhedsudstyr behøver du aldrig være nervøs for sikkerheden, hverken på arbejdet eller i hjemmet –
                helt enkelt: ”Vi passer på dig!”
                <br><br>
                Vores vision er at være Danmarks bedste leverandør af sikkerhedsudstyr til alle. Det er et ambitiøst
                mål, der forpligter, og derfor gør vi vores yderste for at servicere dig med markedets største udvalg.
                Uanset om du søger professionelle høreværn, øjenværn, slidstærke beskyttelsesdragter eller certificeret
                sikkerhedsfodtøj, garanterer vi effektiv og lynhurtig levering, så du altid er optimalt beskyttet.
            </p>
            <a href="">Få en erhvervsaftale</a>

        </div>

    </section>
    <section id="genOplysninger">
        <div class="menuNav">
            <button class="menuNavBtn active" data-target="handelsbetingelser"
                data-intro="intro-handelsbetingelser">Handelsbetingelser</button>
            <button class="menuNavBtn" data-target="cookiepolitik"
                data-intro="intro-cookiepolitik">Cookiepolitik</button>
            <button class="menuNavBtn" data-target="privatlivspolitik"
                data-intro="intro-privatlivspolitik">Privatlivspolitik</button>
            <button class="menuNavBtn" data-target="delbetaling" data-intro="intro-delbetaling">Delbetaling</button>
            <button class="menuNavBtn" data-target="csr" data-intro="intro-csr">CSR</button>
            <button class="menuNavBtn" data-target="nyttige-links" data-intro="intro-nyttige-links">Nyttige
                links</button>
            <div class="pill-overlay"></div>
        </div>
        <div class="menuIntro">
            <div class="menuIntroContainer">
                <div class="menuIntroItem activeIntro" id="intro-handelsbetingelser">
                    <p>Generelle oplysninger</p>
                    <h2>Handelsbetingelser</h2>
                    <p>Her finder du alt, hvad du behøver at vide om levering, priser, betaling, retur og dine
                        rettigheder, når du handler hos os – både som privat- og erhvervskunde.</p>
                </div>
                <div class="menuIntroItem" id="intro-cookiepolitik">
                    <p>Generelle oplysninger</p>
                    <h2>Cookiepolitik</h2>
                    <p>Når du besøger vores website indsamles der oplysninger om dig, som bruges til at tilpasse og
                        forbedre vores indhold og til at øge værdien af de annoncer, der vises på siden. Hvis du ikke
                        ønsker, at der indsamles oplysninger, bør du slette dine cookies og undlade videre brug af
                        websitet. Nedenfor har vi uddybet.</p>
                </div>
                <div class="menuIntroItem" id="intro-privatlivspolitik">
                    <p>Generelle oplysninger</p>
                    <h2>Privatlivspolitik</h2>
                    <p>Når du besøger vores website indsamles der oplysninger om dig, som bruges til at tilpasse og
                        forbedre vores indhold og til at øge værdien af de annoncer, der vises på siden. Hvis du ikke
                        ønsker, at der indsamles oplysninger, bør du slette dine cookies og undlade videre brug af
                        websitet. Nedenfor har vi uddybet.</p>
                </div>
                <div class="menuIntroItem" id="intro-delbetaling">
                    <p>Generelle oplysninger</p>
                    <h2>Delbetaling</h2>
                    <p>Hos Sikkerhedsgiganten.dk ønsker vi at gøre det så nemt og bekvemt som muligt for dig at handle
                        hos os. Derfor tilbyder vi nu muligheden for delbetaling, så du kan opdele dine køb i mindre
                        betalinger.</p>
                </div>
                <div class="menuIntroItem" id="intro-csr">
                    <p>Generelle oplysninger</p>
                    <h2>CSR</h2>
                    <p>Vi forsøger altid og genanvende papkasser fra vores leverandører og samarbejdspartnere,
                        yderligere bruger vi miljøvenligt indlægspapir til fyld af papkasser. Vi forsøger så vidt muligt
                        og fylde papkasserne maksimalt til forsendelser, så der ikke bruges unødvendig stor emballage.
                    </p>
                </div>
                <div class="menuIntroItem" id="intro-nyttige-links">
                    <p>Generelle oplysninger</p>
                    <h2>Nyttige links</h2>
                    <p>Lidt links og sårn</p>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <section id="handelsbetingelser" class="genOplysningerContent activeSection">
            <p>Generelle oplysninger
                <br><br>
                SikkerhedsGiganten ApS
                <br><br>
                Lillebæltsvej 60 - A/B
                <br><br>
                6715 Esbjerg N Denmark
                <br><br>
                Mobil nr.: 71993260
                <br><br>
                E-mail: Info@sikkerhedsgiganten.dk – vi bestræber os på at besvare din henvendelse indenfor 1-3 dage.
                <br><br>
                CVR-nummer: 35415602
                <br><br>
                Enhver leverance fra Sikkerhedsgiganten sker, medmindre andet er skriftligt aftalt, efter nedenstående
                salgs- og leveringsbetingelser. Da vi handler med både private og erhvervsdrivende skal du være
                opmærksom på, hvilke betingelser, der gælder. Det er tydeligt markeret nedenfor.
                <br><br>
                Når du afgiver en bestilling via sikkerhedsgiganten.dk, sender vi en automatisk mail, hvoraf det
                fremgår, hvilke produkter du har bestilt.
                <br><br>
                Priser: Alle priser er i DKK danske kroner og vises som udgangspunkt både inklusiv og eksklusiv moms
                (25%). Markedsførte priser og priser i tilbud er dagspriser. Priserne er altid eksklusiv fragt og
                miljøgebyr.
                <br><br>
                De ved lov pålagte afgifter på emballage, nikkel-cadmiumbatterier, pvc og ftalater vil fremgå særskilt
                som varelinjer, og står umiddelbart efter de afgiftsbelagte vare.
                <br><br>
                I tilfælde af forsinkelser, restordrer eller udsolgte varer, bestræber vi os på hurtigst muligt at
                informere dig herom, og hvad vi kan gøre i sagen.
                <br><br>
                Prisfejl: Hvis en pris er åbenlyst forkert, og du rimeligvis burde havde opdaget dette, er vi ikke
                forpligtet til at levere det pågældende produkt til den forkerte pris.
                <br><br>
                Leveringstid:Lagerførte standardvare leveres inden for 1-4 arbejdsdage til alle brofaste dele af
                landet. 
                <br><br>
                Følgende varegrupper; faldsikring, sko, sikkerhedsskilte, brandslukkere, øjenskyl, håndcreme og -sæbe
                bliver først bestilt ved købers bestilling. Derved får køberen altid den nyeste og opdaterede vare
                leveret.
                <br><br>
                Ved aftalt leveringsdato, forbeholder vi os retten til at ændre denne, grundet udefrakommende
                omstændigheder i erhvervskøb.
                <br><br>
                 Fragt- og miljøgebyr:<br>
                Sikkerhedsgiganten tilbyder gratis forsendelse for ordrer over kr. 800,- ekskl. moms / kr. 1000,- inkl.
                moms i hele Danmark. Bemærk, gratis forsendelse gælder kun for fragt priser til 42 ekskl. moms. Ordre
                under kr. 150,- ekskl. moms debiteres et håndteringsgebyr på kr. 50,- ekskl. moms eller 62,50,- inkl.
                moms.
                Vores fragtpriser er fra 42-110,25 kr ekskl. Moms afhængig af leveringsmetode.
                Varen leveres med enten GLS eller Danske Fragtmænd.
                Såfremt køber ikke er hjemme ved modtagelse af varen og levering derfor ikke er mulig, vil der blive
                pålagt gebyr for fornyet udkørsel. Husk derfor at skrive på leveringsbetingelser, hvis varen evt. kan/må
                stilles udenfor - dette sker på eget ansvar og for egen risiko.
                <br><br>
                Ejendomsforbehold for salg til erhvervsdrivende:Sikkerhedsgiganten forbeholder sig ejendomsretten over
                leverede varer, indtil fuld betaling af købesummen har fundet sted, med tillæg af eventuelle renter og
                omkostninger.
                <br><br>
                Ansvarsbegrænsning i B2B forhold:Et erstatningskrav overfor Sikkerhedsgiganten kan ikke overstige
                fakturabeløbet for de solgte Produkter og begrænses i øvrigt til skader, som ved indgåelse af Aftalen
                typisk kan forudses, hvor Sælger har handlet groft uagtsomt.
                Sikkerhedsgiganten hæfter ikke for driftstab, avancetab eller andre indirekte tab i anledning af
                Aftalen, herunder indirekte tab, der opstår som følge af forsinkelse eller mangler ved de solgte
                Produkter.
                Hvis der opstår en ekstraordinær situation, som er uden for Sikkerhedsgigantens kontrol, eller hvor
                forpligtelsen grundet uforudsete eller udefrakommende begivenheder er blevet usædvanligt byrdefuld for
                Sikkerhedsgiganten at opfylde - og som må anskues som force majeure og hardship er naturkatastrofer,
                brand, krig, rekvirering, beslaglæggelse, valutarestriktioner, oprør, uroligheder pandemier, mangel på
                transportmidler, almindelige vareknaphed, restriktioner af drivkraft, myndighedspåbud, sygdomsudbrud,
                sundhedskriser, epidemier, pandemier, strejke eller produktionsforstyrrelser hos leverandører, hvor
                Sikkerhedsgiganten ikke kan holdes ansvarlig.
                <br><br>
                Betaling: Du kan benytte følgende betalingsmåder på hjemmesiden:
                <br><br>
                Kreditkort:<br>
                Dankort, VISA, Visa Electron, Mastercard, Maestro, Diners Club International JCB & Mobilepay.
                Der er intet gebyr ved kortbetaling og beløbet trækkes først på din konto, når samtlige varer er sendt
                fra Sikkerhedsgiganten. 
                <br><br>
                Betaling med ViaBill: Ved køb med ViaBill vil du først modtage dine varer. Herefter skal du betale din
                månedsydelse den 20. i hver måned. Betaler du ikke til tiden, vil der blive pålagt et gebyr på
                39,-. Hvis du fortryder dit køb, ophører aftalen om betaling hos ViaBill. ViaBill finansierer køb for op
                til 2000 kr.Beløb over 2.000 kr. finansieres i samarbejde med SparXpress.Læs mere her:
                www.viabill.com/kredit. 
                <br><br>
                Konto:Efter kreditgodkendelse har du mulighed for at oprette en konto hos Sikkerhedsgiganten.
                <br><br>
                Kontooverførsel:<br>
                Der er også mulighed for at betale, ved at overføre penge til Sikkerhedsgigantens konto hos Sydbank. Ved
                bankoverførsel er du ikke beskyttet af indsigelsesordningen.
                Registreringsnummer: 7701 Kontonummer: 0002986550
                Husk altid at oplyse ordrenummeret ved kontooverførsel.
                <br><br>
                Betalingsbetingelser for erhvervsdrivende:Ordre, der er købt kontant med kreditkort, får først trukket
                beløbet når ordren er afsendt. Betaling af faktura og kontokøb skal ske senest den dato fakturaen
                angiver som seneste rettidige betalingsdato. Såfremt betalingen sker efter forfaldsdato, beregnes 2% i
                rente pr. måned indtil det forfaldne beløb er betalt.Rykkere tillægges et gebyr på kr. 100,-. Købers
                indbetalinger afskrives først på tilskrevne renter og omkostninger – derefter af gælden. Køber er ikke
                berettiget til at modregne eventuelle modkrav til Sikkerhedsgiganten, uden skriftlig godkendelse af
                Sikkerhedsgiganten, og har ikke ret til at tilbageholde dele af købesummen på grund af modfordringer af
                nogen art.
                <br><br>
                Sikkerhed ved betaling:Sikkerhedsgiganten benytter SSL kryptering, hvilket er den højest mulige standard
                for kryptering og sikkerhed ved betaling med kreditkort på internettet. Vores betalingsløsning Anyday er
                PCI certificeret af VISA/MasterCard. Med Anyday kan du trygt handle på vores netside.Læs mere om Anyday
                her: https://www.anyday.io/da/ 
                Personlige oplysninger opbevares med størst mulig sikkerhed og kan videregives til leverandører for
                opfyldelse af kontraktlige forpligtelser om levering.
                <br><br>
                 Reservation af beløb:<br>
                Betaler du med et internationalt betalingskort, reserveres beløbet med det samme. Pengene reserveres på
                dit kort eller konto indtil:
                1) Vi trækker beløbet, når vi sender varen, eller 2) pengene frigives ifølge aftale med din
                kortudsteder.
                Vi tilbyder betaling med de internationale betalingskort Mastercard og Visa.
                Du kan læse mere om reglerne for dit specifikke kort hos din kortudsteder.
                <br><br>
                 Fortrydelsesret:<br>
                Som forbruger har du 14 dages fortrydelsesret, når du handler hos os.
                Fortrydelsesfristen udløber 14 dage efter den dag, du har modtaget din vare. Hvis du har bestilt flere
                forskellige varer i én ordre, men de leveres enkeltvis, løber fristen fra den dag, hvor du modtager den
                sidste vare.Består ordren af flere partier eller dele, udløber fortrydelsesfristen 14 dage efter den
                dag, du modtager det sidste parti eller den sidste del.
                Fragtomkostningerne forbundet med returnering er 42 kr ekskl. moms / 52,5 kr. inkl moms.
                Fristen indebærer, at du har 14 dage fra modtagelsen til at give os besked om, at du vil fortryde dit
                køb. Du kan sende en mail til info@sikkerhedsgiganten.dk eller benytte standardfortrydelsesformularen.Du
                kan ikke fortryde købet ved at nægte at modtage vare uden samtidig at give Sikkerhedsgiganten besked.
                Bemærk at returvarer kun kan sendes til følgende adresse og at vi IKKE tager imod retur pakker som er
                sendt til pakkeshops eller pakkebokse:
                Sikkerhedsgiganten ApS
                Lillebæltsvej 60A
                6715 Esbjerg N
                Mærk pakken ”ATT: Retur” og vedlæg en kopi af returseddelen eller din ordrebekræftelse som
                dokumentation.
                Vare som ikke sendes til denne adresse eller via pakkeshop nægtes modtaget af Sikkerhedsgiganten
                Sendes pakken mod vores handelsbetingelser alligevel til en pakkeshop vil du blive kontaktet vdr. aftale
                af et håndteringsgebyr på 100 kr for at vi skal afhente pakken.
                 <br><br>
                Fortrydelse af en del af købet:Hvis du har købt flere varer hos Sikkerhedsgiganten, har du mulighed for
                at sende én eller flere varer retur, selvom de er købt i én ordre.Bemærk, at du ikke får
                fragtomkostningerne retur, hvis du fortryder en del af dit køb.Hvis du har opnået en mængderabat, og
                herefter fortryder en del af købet og ikke længere lever op til betingelsen for at opnå mængderabatten,
                vil du ikke længere have krav på værdien af rabatten.
                 <br><br>
                 
                Returnering:Når du har givet os besked om, at du vil fortryde dit køb, har du 14 dage til at sende varen
                tilbage til os. Du skal selv betale for at pakken returneres, og det er dig, der hæfter, hvis der opstår
                en skade under transporten.
                Visse varer kan ikke returneres med normal post.Særlige returregler - ingen fortrydelsesret:
                Levering af forseglede varer, som af sundhedsbeskyttelses- eller hygiejnemæssige årsager ikke er egnede
                til at blive returneret, og hvor forseglingen er blevet brudt efter leveringen.
                <br><br>
                Engangsmasker, masker og monteringsfiltre kan af hygiejniske og sikkerhedsmæssige grunde ikke
                returneres, hvis emballagen er brudt.
                Levering af varer, som er fremstillet efter dine specifikationer eller har fået et tydeligt personligt
                præg
                Specialfremstillede skilte kan ikke returneres
                <br><br>
                Varens stand, når du sender den retur:Hvis varen har mistet værdi, og det skyldes at du har brugt den på
                en anden måde, end hvad der var nødvendigt for at fastslå varens art, egenskaber og den måde, den
                fungerer, kan du kun få en del af købsbeløbet tilbage. Beløbet du kan få tilbage afhænger af varens
                handelsmæssige værdi, og i visse tilfælde kan det betyde, at du kun kan få fragtomkostningerne tilbage.
                Vi anbefaler, at du sender varen retur i den originale emballage.Hvis den originale emballage mangler,
                kan det muligvis medføre en værdiforringelse af varen.
                Tilbagebetaling af købsbeløbetHvis du fortryder dit køb, får du dine penge tilbage. Hvis varen er
                værdiforringet, fratrækker vi det beløb, du hæfter for. 
                Vi refunderer alle betalinger modtaget fra dig, herunder leveringsomkostninger (det gælder dog ikke
                ekstra leveringsomkostninger i de tilfælde, hvor du har valgt en anden leveringsform, end den billigste
                form for standardlevering, som vi tilbyder), senest 14 dage fra den dag, hvor vi har modtaget din besked
                om, at du vil fortryde aftalen.
                Vi tilbagefører pengene med samme betalingsmiddel, som du benyttede ved købet, medmindre vi har aftalt
                andet.
                Vi kan tilbageholde betalingen indtil vi har modtaget varen, medmindre du sender os dokumentation for at
                have returneret den.
                Varen sendes til:Lillebæltsvej 60 -A/B6715 Esbjerg NDanmark
                Vi modtager kun pakker, som sendes direkte til adressen.Du kan også fortryde købet ved at give os besked
                og aflevere den personligt på ovenstående adresse.
                <br><br>
                Fortrydelsesret i erhvervskøb:Der er ingen fortrydelsesret i erhvervsforhold (B2B aftaler).
                <br><br>
                Reklamation og garanti: Når du handler hos Sikkerhedsgiganten gælder købelovens regler om
                reklamationsret.
                <br><br>
                Privat forbruger:I henhold til dansk lovgivning, er alle varer dækket af 2 års reklamationsret. Det
                betyder, at du har reklamationsret i 24 måneder.Hvis din reklamation er berettiget, betyder det, at du
                enten kan få varen repareret, ombyttet, pengene tilbage eller et afslag i prisen, afhængig af den
                konkrete situation. Reklamationsretten omfatter ikke fejl, skader eller slidstage, der er opstået pga.
                forkert brug/betjeningsfejl, manglende vedligeholdelse, forkert opbevaring eller almindelige
                slidtageskader eller anden skade påført af køber. Kontakt os inden du sender varen på
                info@sikkerhedsgiganten.dk.
                <br><br>
                Du skal reklamere inden for ”rimelig tid” efter, at du har opdaget fejlen. Hvis du reklamerer inden for
                to måneder efter, at fejlen er opdaget, vil reklamationen altid være rettidig.
                Er reklamationen berettiget, refunderer vi dine (rimelige) fragtomkostninger. Varen skal altid sendes
                tilbage i forsvarlig emballage. Husk også at få en kvittering for afsendelse, så vi kan tilbagebetale
                dine fragtomkostninger.
                Vi modtager kun pakker som sendes direkte til vores adresse.
                <br><br>
                Erhvervsdrivende:Erhvervskunder (B2B kunder) ydes 12 måneders reklamationsret. Eventuelle fejl og
                mangler skal anmeldes til Sikkerhedsgiganten, så snart de konstateres. Erhvervskunder opnår ikke en ny
                reklamationsret ved reklamation og ombytning. Vi forbeholder vi os retten til at afhjælpe f.eks. i form
                af reparationer frem for at ombytte.Til delvis dækning af ekspeditionsomkostninger beregnes min.20 % af
                fakturabeløbet.
                Der skal reklameres straks! Ligesom der er en undersøgelsespligt af varen, når denne modtages.
                <br><br>
                Ikke-afhentede varer:Hvis din ordre ikke bliver afhentet rettidigt og derfor returneres til os af GLS,
                vil fragtomkostningerne blive modregnet i det beløb, der refunderes, såfremt du ønsker at annullere
                ordren. Det vil altid være den billigste fragt der bliver trukket fra beløbet.
                Hvis du undlader at hente en pakke i pakkeshop og denne sendes retur til os, skal du betale de reelle
                omkostninger, som fragtfirmaet pålægger os for returforsendelsen. Hvis du ønsker pakken genfremsendt,
                skal du betale en eventuel ny leveringsomkostning.
                <br><br>
                Produktansvar: Sikkerhedsgiganten kan kun gøres ansvarlig for skader et produkt forvolder, såfremt der
                kan forelægges dokumentation for at Sikkerhedsgiganten er direkte årsag til skaden, og er kun ansvarlig
                i overensstemmelse med lovgivningen i produktansvarsloven.
                Sikkerhedsgiganten hæfter ikke for driftstab, avancetab eller andre indirekte tab.
                <br><br>
                Force Majeure: I tilfælde af force majeure, der fritager Sikkerhedsgiganten for ansvar, anses bl.a.
                følgende forhold hos Sikkerhedsgiganten eller Sikkerhedsgigantens underleverandører:Krig og
                undtagelsestilstand, strejke, lockout, naturkatastrofer, svigtende forsyninger, brand, import- og
                eksportforbud, valutarestriktioner og produktionsstop.
                <br><br>
                Kontakt:Har du spørgsmål eller er i tvivl vedrørende ovenstående, er du naturligvis meget velkommen til
                at kontakte os på tlf.: 71 99 32 60 eller på info@sikkerhedsgiganten.dk. Vi hjælper gerne.
                Åbningstiderne er: mandag-torsdag 08.00-16.00 og fredag 08.00-15.30
                <br><br>
                Klageadgang:Hvis du som forbruger vil klage over dit køb, skal du kontakte info@sikkerhedsgiganten.dk.
                Hvis det ikke lykkes os at finde en løsning, kan du sende en klage til:
                Nævnenes HusToldboden 28800 ViborgKlageportalen for Nævnenes hus
                For at kunne klage, skal varen eller ydelsen, som du vil klage over, have kostet mindst 1.110 kr. og
                højst 100.000 kr. For klager over tøj og sko skal prisen dog have været mindst 720 kr. Det koster et
                gebyr at få klagen behandlet.
                Når du handler på en e-mærket webshop, kan du gratis få behandlet din sag - uanset beløbets størrelse.
                Læs mere her.
                Har du bopæl i et andet EU-land end Danmark, kan du klage til EU-kommissionens online klageportal her
                - http://ec.europa.eu/odr
                <br><br>
                Persondatapolitik:Vi har brug for følgende oplysninger, når du handler hos os:
                Navn, adresse, tlf.nr. og mailadresse.
                Vi registrerer og videregiver kun de personoplysninger, som er nødvendige for at kunne levere varen til
                dig.  
                Personoplysningerne registreres hos Sikkerhedsgiganten ApS og opbevares i fem år, hvorefter
                oplysningerne slettes.  Vi samarbejder herudover med en række andre virksomheder, som opbevarer og
                behandler data. Virksomhederne behandler udelukkende oplysninger på vores vegne og må ikke bruge dem til
                egne formål.
                Vi samarbejder kun med databehandlere i EU eller i lande, der kan give dine oplysninger en tilstrækkelig
                beskyttelse.  
                Den dataansvarlige på www.sikkerhedsgiganten.dk er Sikkerhedsgiganten ApS
                Du har ret til at få oplyst, hvilke oplysninger vi behandler om dig.Hvis du mener, at oplysningerne er
                unøjagtige, har du ret til at få dem rettet. I nogle tilfælde har vi pligt til at slette dine
                persondata, hvis du beder om det. Det kan f.eks. være hvis dine data ikke længere er nødvendige i
                forhold til det formål, som vi skulle bruge dem til. Du kan også kontakte os, hvis du mener, at dine
                persondata bliver behandlet i strid med lovgivningen. Du kan skrive til os på:
                info@sikkerhedsgiganten.dk  
                 <br><br>
                Værneting B2B forhold:Enhver uoverensstemmelse mellem Sælger og Kunden skal afgøres efter dansk ret og
                skal i første instans indbringes for Sø- og Handelsretten, subsidiært Sikkerhedsgigantens hjemting.
                 <br><br>
                Handelsbetingelserne er senest opdateret den 31. december 2024.
            </p>
        </section>
        <section id="cookiepolitik" class="genOplysningerContent">
            Cookies<br>
            Websitet anvender ”cookies”, der er en tekstfil, som gemmes på din computer, mobil el. tilsvarende med det
            formål at genkende den, huske indstillinger, udføre statistik og målrette annoncer. Cookies kan ikke
            indeholde skadelig kode som f.eks. virus.
            <br><br>
            Det er muligt at slette eller blokere for cookies. Se vejledning: på minecookies hjemmeside
            <br><br>
            Hvis du sletter eller blokerer cookies vil annoncer kunne blive mindre relevante for dig og optræde
            hyppigere. Du kan desuden risikere at websitet ikke fungerer optimalt samt at der er indhold, du ikke kan få
            adgang til.
            <br><br>
            Websitet indeholder cookies fra tredjeparter, der i varierende omfang kan omfatte:
            <br><br>
            Analytics, Google Ads, Business manager (Facebook), Uniconta (ERP), Consignor.
            <br><br>

            Personoplysninger
            <br><br>
            Generelt<br>
            Personoplysninger er alle slags informationer, der i et eller andet omfang kan henføres til dig. Når du
            benytter vores website indsamler og behandler vi en række sådanne informationer. Det sker f.eks. ved alm.
            tilgang af indhold, hvis du tilmelder dig vores nyhedsbrev, deltager i konkurrencer eller undersøgelser,
            registrerer dig som bruger eller abonnent, øvrig brug af services eller foretager køb via websitet.
            <br><br>
            Vi indsamler og behandler typisk følgende typer af oplysninger: Et unikt ID og tekniske oplysninger om din
            computer, tablet eller mobiltelefon, dit IP-nummer, geografisk placering, samt hvilke sider du klikker på
            (interesser). I det omfang du selv giver eksplicit samtykke hertil og selv indtaster informationerne
            behandles desuden: Navn, telefonnummer, e-mail, adresse og betalingsoplysninger. Det vil typisk være i
            forbindelse med oprettelse af login eller ved køb.
            <br><br>
            Sikkerhed<br>
            Vi har truffet tekniske og organisatoriske foranstaltninger mod, at dine oplysninger hændeligt eller
            ulovligt bliver slettet, offentliggjort, fortabt, forringet eller kommer til uvedkommendes kendskab,
            misbruges eller i øvrigt behandles i strid med lovgivningen.
            <br><br>
            Formål<br>
            Oplysningerne bruges til at identificere dig som bruger og vise dig de annoncer, som vil have størst
            sandsynlighed for at være relevante for dig, at registrere dine køb og betalinger, samt at kunne levere de
            services, du har efterspurgt, som f.eks. at fremsende et nyhedsbrev. Herudover anvender vi oplysningerne til
            at optimere vores services og indhold.
            <br><br>
            Periode for opbevaring<br>
            Oplysningerne opbevares i det tidsrum, der er tilladt i henhold til lovgivningen, og vi sletter dem, når de
            ikke længere er nødvendige. Perioden afhænger af karakteren af oplysningen og baggrunden for opbevaring. Det
            er derfor ikke muligt at angive en generel tidsramme for, hvornår informationer slettes.
            <br><br>
            Videregivelse af oplysninger<br>
            Data om din brug af websitet, hvilke annoncer, du modtager og evt. klikker på, geografisk placering, køn og
            alderssegment m.v. videregives til tredjeparter i det omfang disse oplysninger er kendt. Du kan se hvilke
            tredjeparter, der er tale om, i afsnittet om ”Cookies” ovenfor. Oplysningerne anvendes til målretning af
            annoncering.
            <br><br>
            Vi benytter herudover en række tredjeparter til opbevaring og behandling af data. Disse behandler
            udelukkende oplysninger på vores vegne og må ikke anvende dem til egne formål.
            <br><br>
            Videregivelse af personoplysninger som navn og e-mail m.v. vil kun ske, hvis du giver samtykke til det. Vi
            anvender kun databehandlere i EU eller i lande, der kan give dine oplysninger en tilstrækkelig beskyttelse.
            <br><br>
            Indsigt og klager<br>
            Du har ret til at få oplyst, hvilke personoplysninger, vi behandler om dig. Du kan desuden til enhver tid
            gøre indsigelse mod, at oplysninger anvendes. Du kan også tilbagekalde dit samtykke til, at der bliver
            behandlet oplysninger om dig. Hvis de oplysninger, der behandles om dig, er forkerte har du ret til at de
            bliver rettet eller slettet. Henvendelse herom kan ske til: Info@sikkerhedsgiganten.dk. Hvis du vil klage
            over vores behandling af dine personoplysninger, har du også mulighed for at tage kontakt til datatilsynet
            <br><br>
            Udgiver<br>
            Websitet ejes og publiceres af:
            <br><br>
            SIkkerhedsgiganten ApS
            Lillebæltsvej 60 A/B
            6715 Esbjerg N
            Telefon: 71993260
            Email: Info@sikkerhedsgiganten.dk
        </section>
        <section id="privatlivspolitik" class="genOplysningerContent">
            denne er tom på deres hjemmeside.
        </section>
        <section id="delbetaling" class="genOplysningerContent">
            Hos Sikkerhedsgiganten.dk ønsker vi at gøre det så nemt og bekvemt som muligt for dig at handle hos os.
            Derfor tilbyder vi nu muligheden for delbetaling, så du kan opdele dine køb i mindre betalinger og sprede
            udgifterne over tid. Med vores delbetalingsmulighed kan du vælge at opdele dit køb i enten 4, 6 eller 8
            betalinger, afhængigt af hvad der passer bedst til din økonomi og behov.
            <br><br>
            Lige nu giver vi dig mulighed for at dele dine køb op i 6 eller 8 betalinger helt uden omkostninger. Det
            betyder, at du kan nyde godt af fleksibiliteten ved delbetaling uden at skulle bekymre dig om ekstra gebyrer
            eller renter. Dog skal du være opmærksom på, at vi snart vil tilføje et mindre oprettelsesgebyr for at dele
            en betaling i 6 eller 8. Muligheden for at dele en betaling i 4 uden omkostninger vil forblive gratis.
            <br><br>
            Vi forstår, at forskellige kunder har forskellige behov, og derfor ønsker vi at give dig muligheden for at
            vælge den betalingsplan, der passer bedst til dig. Uanset om du foretrækker at betale dit køb på én gang
            eller sprede udgifterne over flere betalinger, giver vores delbetalingsmulighed dig friheden til at shoppe
            med større fleksibilitet.
            <br><br>
            Så gå ikke glip af muligheden for at nyde godt af vores delbetalingsmulighed og gør dine køb hos
            Sikkerhedsgiganten.dk til en endnu mere behagelig oplevelse. Happy shopping!
        </section>
        <section id="csr" class="genOplysningerContent">
            Miljøvenlig Pakning:
            Vi forsøger altid og genanvende papkasser fra vores leverandører og samarbejdspartnere, yderligere bruger vi
            miljøvenligt indlægspapir til fyld af papkasser. Vi forsøger så vidt muligt og fylde papkasserne maksimalt
            til forsendelser, så der ikke bruges unødvendig stor emballage. Vi ved at det kan blive bedre og er derfor i
            gang med at optimere alle processer så vi pakker så miljøvenligt som muligt. Vi anvender høj kvalitets
            papkasser, samt pakketape til alle forsendelser.
            <br><br>
            Hjernesagen:
            <br><br>
            - Hjernesagen gør et stort stykke arbejde for at forbygge at mennesker bliver ramt af blødninger eller
            blodpropper i hjernen.
            <br>
            - Sikre, at mennesker som rammes af blodpropper eller blødninger i hjernen, får behandling, genoptræning og
            rehabilitering.
            <br>
            - Hjælper de pårørende bedst muligt med støtte.
            <br><br>
            Det gør hjernesagen ved at:
            <br><br>
            arbejde politisk
            lave kampagner
            deltage i den offentlige debat
            tilbyde vores medlemmer rådgivning, aktiviteter, kurser m.m.
            <br><br>

            Danske Hospitalsklovne:

            <br><br>

            Danske hospitalsklovne er i vores optik en nødvendig sag og støtte, de skaber glæde, tryghed og plads til
            alvor. De hjælper både personale, pårørende, men ikke mindst barnet som er i en svær situation. De skaber et
            element i en svær hverdag, som giver en helt fantastisk effekt. Danske hospitalsklovne er trænede til netop
            de opgaver som de kommer ud for. De har været på 1,5 års uddannelse inden man indtræder i teamet som
            hospitalsklovn. Der er lige nu 52 klovne, som inden længe bliver udbygget med 9 yderligere ansatte.
            Hospitalsklovnens største opgave er at skabe en relation til børnene hvilket de også trænes i på uddannelse.
            Alt i alt en rigtigt vigtigt organisation for os og støtte, som vi ved giver en glæde hos nogle børn, som
            har brug for det.

            <br><br>

            Projekt Clean Ocean:
            <br><br>
            Det er vigtigt vi sørger for at holde vores verdenshave rene. Der er mange dyr som lider last fordi vi
            anvender for meget plastik som ender i havene.
        </section>
        <section id="nyttige-links" class="genOplysningerContent">
            <a href="pornhub.com">pornhub.com</a>
        </section>
    </section>
    <section id="socialSektion">
        <h3 class="socialTitel">Følg Sikkerhedsgiganten</h3>
        <div class="someContainer">
            <a href="" target="_blank"><img src="<?php echo esc_url($kundeservicesomeinstagram["url"]); ?>" alt="<?php echo $kundeservicesomeinstagram ["alt"]?>"></a>
            <a href="" target="_blank"><img src="<?php echo esc_url($kundeservicesomefacebook["url"]); ?>" alt="<?php echo $kundeservicesomefacebook ["alt"]?>"></a>
            <a href="" target="_blank"><img src="<?php echo esc_url($kundeservicesomelinkedin["url"]); ?>" alt="<?php echo $kundeservicesomelinkedin ["alt"]?>"></a>
        </div>
    </section>
    <section id="bottomLinks">
        <div class="bottomLinksContainer">
            <a href=""><img src="<?php echo esc_url($kundeservicefindos["url"]); ?>" alt="<?php echo $kundeservicefindos ["alt"]?>">Find os her</a>
            <a href=""><img src="<?php echo esc_url($kundeservicenyhedsbrev["url"]); ?>" alt="<?php echo $kundeservicenyhedsbrev ["alt"]?>">Tilmeld nyhedsbrev</a>
            <a href=""><img src="<?php echo esc_url($kundeservicekontaktos["url"]); ?>" alt="<?php echo $kundeservicekontaktos ["alt"]?>">Kontakt os</a>
            <a href=""><img src="<?php echo esc_url($kundeserviceomos["url"]); ?>" alt="<?php echo $kundeserviceomos ["alt"]?>">Om os</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
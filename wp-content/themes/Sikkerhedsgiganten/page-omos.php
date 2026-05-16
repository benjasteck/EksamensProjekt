<?php get_header(); ?>

<?php
$medarbejderet = get_field("medarbejder_et");
$medarbejderto = get_field("medarbejder_to");
$medarbejdertre = get_field("medarbejder_tre");
$vipasserpadiget = get_field("vi_passer_pa_dig_et");
$vipasserpadigto = get_field("vi_passer_pa_dig_to");
$butikbillede = get_field("butik_billede");
$firmabeklaedning = get_field("firmabeklaedning");
$arbejdstoj = get_field("arbejdstoj");
$omosinstagram = get_field("om_os_instagram");
$omosfacebook = get_field("om_os_facebook");
$omoslinkedin = get_field("om_os_linkedin");
$omosfindos = get_field("om_os_find_os");
$omosnyhedsbrev = get_field("om_os_nyhedsbrev");
$omoskontakt = get_field("om_os_kontakt");
$omosom = get_field("om_os_om");
$medarbejdere = get_field("medarbejdere");
$medarbejderetnavn = get_field("medarbejder_et_navn");
$medarbejderetjobtitel = get_field("medarbejder_et_job_titel");
$medarbejderettlfnr = get_field("medarbejder_et_tlf_nr");
$medarbejderetemail = get_field("medarbejder_et_email");
$medarbejdertonavn = get_field("medarbejder_to_navn");
$medarbejdertojobtitel = get_field("medarbejder_to_job_titel");
$medarbejdertotlfnr = get_field("medarbejder_to_tlf_nr");
$medarbejdertoemail = get_field("medarbejder_to_email");
$medarbejdertrenavn = get_field("medarbejder_tre_navn");
$medarbejdertrejobtitel = get_field("medarbejder_tre_job_titel");
$medarbejdertretlfnr = get_field("medarbejder_tre_tlf_nr");
$medarbejdertreemail = get_field("medarbejder_tre_email");
$vipasserpadigtitel = get_field("vi_passer_pa_dig_titel");
$vipasserpadigbrodtekst = get_field("vi_passer_pa_dig_brodtekst");
$faenerhvervsaftaletitel = get_field("fa_en_erhvervsaftale_titel");
$sikkerhedsgigantenbannerreklametitel= get_field("sikkerhedsgiganten_banner_reklame_titel");
$fysiskbutiktitel = get_field("fysisk_butik_titel");
$fysiskbutiktekstbrodtekst = get_field("fysisk_butik_tekst_brodtekst");
$specialisterifirmabeklaedningtitel = get_field("specialister_i_firmabeklaedning_titel");
$specialisterifirmabeklaedningbrodtekst= get_field("specialister_i_firmabeklaedning_brodtekst");
$fordelesomerhvervskundetitel= get_field("fordele_som_erhvervskunde_titel");
$fordelesomerhvervskundebrodtekst = get_field("fordele_som_erhvervskunde_brodtekst");
$arbejdstojtilalletitel = get_field("arbejdstoj_til_alle_titel");
$arbejdstojtilallebrodtekst = get_field("arbejdstoj_til_alle_brodtekst");
$danmarksstorstesortimentafsikkerhedsudstyrtitel= get_field("danmarks_storste_sortiment_af_sikkerhedsudstyr_titel");
$danmarksstorstesortimentafsikerhedsudstyrbrodtekst = get_field("danmarks_storste_sortiment_af_sikerhedsudstyr_brodtekst");
$folgsikkerhedsgigantenpasometitel = get_field("folg_sikkerhedsgiganten_pa_some_titel");
$findoshertitel = get_field("find_os_her_titel");
$tilmeldnyhedsbrevtitel = get_field("tilmeld_nyhedsbrev_titel");
$kontaktostitel = get_field("kontakt_os_titel");
$omostitel = get_field("om_os_titel");


?>
<section id="medarbejdere">
    <h2><?php echo($medarbejdere); ?></h2>
    <div class="line"></div>
    <div class="medarbejdereContainer">
        <div class="medArbejderItem">
        <img src="<?php echo esc_url($medarbejderet["url"]); ?>" alt="<?php echo $medarbejderet ["alt"]?>">
            <h5><?php echo esc_html($medarbejderetnavn); ?></h5>   
            <p><?php echo($medarbejderetjobtitel);?> <br> 
            <?php echo($medarbejderettlfnr);?></p>   
            <a href="mailto:ma@sikkerhedsgiganten.dk?subject=rick roll&body=never gonna give u upp">
            <?php echo($medarbejderetemail);?>  
            </a>     
        </div>
        <div class="medArbejderItem"> 
        <img src="<?php echo esc_url($medarbejderto["url"]); ?>" alt="<?php echo $medarbejderto ["alt"]?>">
            <h5><?php echo($medarbejdertonavn);?> </h5>   
            <p><?php echo($medarbejdertojobtitel);?>  <br> 
            <?php echo($medarbejdertotlfnr);?> </p> 
            <a href="mailto:mbj@sikkerhedsgiganten.dk?subject=rick roll&body=never gonna give u upp">
            <?php echo($medarbejdertoemail);?>   
            </a>
        </div>
        <div class="medArbejderItem">
        <img src="<?php echo esc_url($medarbejdertre["url"]); ?>" alt="<?php echo $medarbejdertre ["alt"]?>">
            <h5><?php echo($medarbejdertrenavn);?>  </h5>  
            <p><?php echo($medarbejdertrejobtitel);?>  <br>    
            <?php echo($medarbejdertretlfnr);?> </p> 
            <a href="mailto:am@sikkerhedsgiganten.dk?subject=rick roll&body=never gonna give u upp">
            <?php echo($medarbejdertreemail);?>   
            </a>
        </div>
    </div>
</section>
<section id="passerPaDig">

<img src="<?php echo esc_url($vipasserpadigto["url"]); ?>" alt="<?php echo $vipasserpadigto ["alt"]?>" class="pasImg2">
<img src="<?php echo esc_url($vipasserpadiget["url"]); ?>" alt="<?php echo $vipasserpadiget ["alt"]?>" class="pasImg1">
    <div class="pasContainer">   
        <h2><?php echo($vipasserpadigtitel);?> </h2>   
        <p><?php echo($vipasserpadigbrodtekst);?> </p>
        <a href=""><?php echo($faenerhvervsaftaletitel);?></a>   
        
    </div>

</section>
<section id="testimonials">
    <div class="testimonialsContaner"></div>
    <div class="sGSlider">
        <div class="sGSlider1">   
            <h2><?php echo($sikkerhedsgigantenbannerreklametitel);?></h2>  
            <h2><?php echo($sikkerhedsgigantenbannerreklametitel);?></h2>
            <h2><?php echo($sikkerhedsgigantenbannerreklametitel);?></h2>

            <h2><?php echo($sikkerhedsgigantenbannerreklametitel);?></h2>
            <h2><?php echo($sikkerhedsgigantenbannerreklametitel);?></h2>

        </div>
        <div class="sGSlider2">
            <h2><?php echo($sikkerhedsgigantenbannerreklametitel);?></h2>
            <h2><?php echo($sikkerhedsgigantenbannerreklametitel);?></h2>
            <h2><?php echo($sikkerhedsgigantenbannerreklametitel);?></h2>
        </div>
    </div>
    <div class="testimonialsContaner"></div>
</section>
<section id="os">
    <div class="osItem" id="osItem1">
    <img src="<?php echo esc_url($butikbillede["url"]); ?>" alt="<?php echo $butikbillede ["alt"]?>">
        <div class="osItemContainer">
            <h3><?php echo($fysiskbutiktitel);?></h3>   
            <p><?php echo($fysiskbutiktekstbrodtekst);?></p>  
        </div>

    </div>
    <div class="osItem" id="osItem2">
        <div class="osItemContainer"> 
            <h3><?php echo($specialisterifirmabeklaedningtitel);?></h3> 
            <p><?php echo($specialisterifirmabeklaedningbrodtekst);?></p> 
        </div>
        <img src="<?php echo esc_url($firmabeklaedning["url"]); ?>" alt="<?php echo $firmabeklaedning ["alt"]?>">
    </div>
    <div class="osErhverv">  
        <h3><?php echo($fordelesomerhvervskundetitel);?></h3> 
        <p><?php echo($fordelesomerhvervskundebrodtekst);?></p> 
        <a href=""><?php echo($faenerhvervsaftaletitel);?></a> 
    </div>
    <div class="osItem" id="osItem3">
    <img src="<?php echo esc_url($arbejdstoj["url"]); ?>" alt="<?php echo $arbejdstoj ["alt"]?>">
        <div class="osItemContainer">
            <h3><?php echo($arbejdstojtilalletitel);?></h3> 
            <p><?php echo($arbejdstojtilallebrodtekst);?></p> 
        </div>
    </div>
</section>
<section id="sikkerhed"> 
    <h3><?php echo($danmarksstorstesortimentafsikkerhedsudstyrtitel);?></h3> 
    <p><?php echo($danmarksstorstesortimentafsikerhedsudstyrbrodtekst);?></p>
</section>
<section id="socialSektion"> 
    <h3 class="socialTitel"><?php echo($folgsikkerhedsgigantenpasometitel);?></h3> 
    <div class="someContainer">
    <a href="" target="_blank"><img src="<?php echo esc_url($omosinstagram["url"]); ?>" alt="<?php echo $omosinstagram ["alt"]?>"></a>
            <a href="" target="_blank"><img src="<?php echo esc_url($omosfacebook["url"]); ?>" alt="<?php echo $omosfacebook ["alt"]?>"></a>
            <a href="" target="_blank"><img src="<?php echo esc_url($omoslinkedin["url"]); ?>" alt="<?php echo $omoslinkedin ["alt"]?>"></a>
    </div>
</section>
<section id="bottomLinks">
    <div class="bottomLinksContainer">  
    <a href=""><img src="<?php echo esc_url($omosfindos["url"]); ?>" alt="<?php echo $omosfindos ["alt"]?>"><?php echo($findoshertitel);?></a> 
            <a href=""><img src="<?php echo esc_url($omosnyhedsbrev["url"]); ?>" alt="<?php echo $omosnyhedsbrev ["alt"]?>"><?php echo($tilmeldnyhedsbrevtitel);?></a>  
            <a href=""><img src="<?php echo esc_url($omoskontakt["url"]); ?>" alt="<?php echo $omoskontakt ["alt"]?>"><?php echo($kontaktostitel);?></a> 
            <a href=""><img src="<?php echo esc_url($omosom["url"]); ?>" alt="<?php echo $omosom ["alt"]?>"><?php echo($omostitel);?></a> 
    </div>
</section>
<?php get_footer(); ?>
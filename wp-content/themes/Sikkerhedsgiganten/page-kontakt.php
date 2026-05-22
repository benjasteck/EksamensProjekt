<?php get_header(); ?>

<?php
$kontaktinstagram = get_field("kontakt_instagram");
$kontaktfacebook = get_field("kontakt_facebook");
$kontaktlinkedin = get_field("kontakt_linkedin");
$kontaktfindos = get_field("kontakt_find_os");
$kontaktnyhedsbrev = get_field("kontakt_nyhedsbrev");
$kontaktkontaktos = get_field("kontakt_kontakt_os");
$kontaktkontaktostitel = get_field("kontakt_os_titel");
$kontaktsikkerhedsgigantentitel = get_field("sikkerhedsgiganten_titel");
$kontaktfindoshertitel = get_field("find_os_her_titel");
$kontakttilmeldnyhedsbrevtitel = get_field("tilmeld_nyhedsbrev_titel");
$kontakttlfnrtitel = get_field("tlf_nr_titel");
$kontaktemailtitel = get_field("email_titel");
$kontaktadressetitel = get_field("adresse_titel");
$kontaktomos = get_field("kontakt_om_os");
$kontaktomostitel = get_field("om_os_titel");
$abningstidertitel = get_field("abningstider_titel");
$mantors = get_field("man_tors");
$mantorsabningstid= get_field("man-tors_abningstid");
$fredag = get_field("fredag");
$fredagabningstid = get_field("fredag_abningstid");
$sendosenmailtitel = get_field("send_os_en_mail_titel");
$udfyldformularellerringtitel = get_field("udfyldformularellerringtitel");
$benytformularogbeskrivbeskedtekst = get_field("benyt_formular_og_beskriv_besked_tekst");
$narviharmodtagetdinhenvendelsebrodtekst = get_field("nar_vi_har_modtaget_din_henvendelse_brodtekst");
$navn = get_field("navn");
$email = get_field("e-mail");
$tlf = get_field("tlf");
$skrivbesked = get_field("skriv_besked");
$sendforesporgseltitel = get_field("send_foresporgsel_titel");
$folgsgpasome = get_field("folg_sg_pa_some");
?>
</header>
<section id="kontaktSide">
    <div class="kontaktLeft">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.2675354895873!2d8.463353166809167!3d55.50357877778977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b1efbc53ab5bb%3A0x635db43dd92d1700!2sSikkerhedsgiganten!5e0!3m2!1sen!2sdk!4v1779423153451!5m2!1sen!2sdk"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="kontaktRight">
        <div class="kontaktRightTop">
            <h2><?php echo($kontaktsikkerhedsgigantentitel); ?></h2>
            <p><?php echo($kontaktadressetitel); ?></p>
            <p><?php echo($kontakttlfnrtitel); ?></p>
            <p><?php echo($kontaktemailtitel); ?></p>
        </div>
        <div class="kontaktRightBottom">
            <h2><?php echo($abningstidertitel); ?></h2>
            <div class="kontaktBottom">
                <div class="kontaktBottomContainer">
                    <p class="kontaktBottomTitel"><?php echo($mantors); ?></p>
                    <p class="kontaktBottomTekst"> <?php echo($mantorsabningstid); ?></p>
                </div>
                <div class="kontaktBottomContainer">
                    <p class="kontaktBottomTitel"><?php echo($fredag); ?></p>
                    <p class="kontaktBottomTekst"><?php echo($fredagabningstid); ?></p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="booking">
    <div class="bookingContent">
        <div class="bookingRight">
            <div class="formularContainer">
                <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                    <?php wp_nonce_field('kontakt_form_action','kontakt_form_nonce'); ?>
                    <input type="hidden" name="action" value="kontakt_form">
                    <div class="inputContainer">
                        <label for="name"><?php echo($navn); ?></label>
                        <input type="text" class="nameInput" name="kontakt_name" placeholder="Skriv Dit Navn"
                            autocomplete="off" required>
                    </div>

                    <div class="inputContainer">
                        <label for="name"><?php echo($email); ?></label>
                        <input type="email" class="nameInput" name="kontakt_email" placeholder="Skriv Din Email"
                            autocomplete="off" required>
                    </div>

                    <div class="inputContainer">
                        <label for="name"><?php echo($tlf); ?></label>
                        <input type="text" class="nameInput" name="kontakt_tlf" placeholder="Skriv Dit Telefon Nummer"
                            autocomplete="off" required>
                    </div>

                    <div class="inputContainer" id="inputStor">
                        <label for="name"><?php echo($skrivbesked); ?></label>
                        <input type="text" class="bigInput" placeholder="Skriv din besked her"
                            name="kontakt_description" autocomplete="off">
                    </div>
                    <div class="inputBtn">
                        <button type="submit"><?php echo($sendforesporgseltitel); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="socialSektion">
    <h3 class="socialTitel"><?php echo($folgsgpasome); ?></h3>
    <div class="someContainer">
        <a href="https://www.instagram.com/sikkerhedsgigantendk/" target="_blank"
            aria-label="en knap ind til Sikkerhedsgiganten Instagram"><img
                src="<?php echo esc_url($kontaktinstagram["url"]); ?>" alt="<?php echo $kontaktinstagram ["alt"]?>"></a>
        <a href="https://www.facebook.com/sikkerhedsgiganten.dk" target="_blank"
            aria-label="en knap ind til Sikkerhedsgiganten Facebook"><img
                src="<?php echo esc_url($kontaktfacebook["url"]); ?>" alt="<?php echo $kontaktfacebook ["alt"]?>"></a>
        <a href="https://www.linkedin.com/company/sikkerhedsgiganten/" target="_blank"
            aria-label="en knap ind til Sikkerhedsgiganten LinkedIn"><img
                src="<?php echo esc_url($kontaktlinkedin["url"]); ?>" alt="<?php echo $kontaktlinkedin ["alt"]?>"></a>
    </div>
</section>
<section id="bottomLinks">
    <div class="bottomLinksContainer">
        <a href="" aria-label="en knap ind til find os"><img src="<?php echo esc_url($kontaktfindos["url"]); ?>"
                alt="<?php echo $kontaktfindos ["alt"]?>"><?php echo($kontaktfindoshertitel); ?></a>
        <a href="" aria-label="en knap ind til nyhedsbrev"><img src="<?php echo esc_url($kontaktnyhedsbrev["url"]); ?>"
                alt="<?php echo $kontaktnyhedsbrev ["alt"]?>"><?php echo($kontakttilmeldnyhedsbrevtitel); ?></a>
        <a href="" aria-label="en knap ind til kontakt os"><img src="<?php echo esc_url($kontaktkontaktos["url"]); ?>"
                alt="<?php echo $kontaktkontaktos ["alt"]?>"><?php echo($kontaktkontaktostitel); ?></a>
        <a href="" aria-label="en knap ind til om os"><img src="<?php echo esc_url($kontaktomos["url"]); ?>"
                alt="<?php echo $kontaktomos ["alt"]?>"><?php echo($kontaktomostitel); ?></a>
    </div>
</section>
<style>
.bookingRight {
    flex-basis: 100%;
}

.inputContainer label::after {
    width: 92%;
}

#inputStor label::after {
    width: 87%;
}
</style>
<?php get_footer(); ?>
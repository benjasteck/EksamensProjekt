<footer>

    <?php
$footer_post_id = 1047;
$footermailikon      = get_field("footer_mail_ikon", $footer_post_id);
$footertlfikon       = get_field("footer_tlf_ikon", $footer_post_id);
$footeradresseikon   = get_field("footer_adresse_ikon", $footer_post_id);
$footerinstagramikon = get_field("footer_instagram_ikon", $footer_post_id);
$footerfacebooknikon = get_field("footer_facebook_ikon", $footer_post_id);
$footerlinkedinikon  = get_field("footer_linkedin_ikon", $footer_post_id);
$footerlogo          = get_field("footer_logo", $footer_post_id);
$blivendelafnyhedsbrevettitel          = get_field("bliv_en_del_af_nyhedsbrevet_titel", $footer_post_id);
$kontakttitel          = get_field("kontakt_titel", $footer_post_id);
$tlfnr          = get_field("tlf_nr", $footer_post_id);
$emailadressetitel          = get_field("email_adresse_titel", $footer_post_id);
$adresselokation          = get_field("adresse_lokation", $footer_post_id);
$abningstidertitel          = get_field("abningstider_titel", $footer_post_id);
$mantiltorsabningstider          = get_field("man_til_tors_abningstider", $footer_post_id);
$fredagabningstider          = get_field("fredag_abningstider", $footer_post_id);
$navigeringtitel          = get_field("navigering_titel", $footer_post_id);
$forsidefooterlink          = get_field("forside_footer_link", $footer_post_id);
$shopfooterlink          = get_field("shop_footer_link", $footer_post_id);
$erhvervfooterlink          = get_field("erhverv_footer_link", $footer_post_id);
$blogsfooterlink          = get_field("blogs_footer_link", $footer_post_id);
$omosfooterlink          = get_field("om_os_footer_link", $footer_post_id);
$kontaktfooterlink          = get_field("kontakt_footer_link", $footer_post_id);
$socialt_titel          = get_field("socialt_titel", $footer_post_id);
?>





    <div class="footerContent">
        <div class="footerContentLeft">
            <div class="footerContentTop">
                <h2 class="nyhedsbrevTitelFooter"><?php echo($blivendelafnyhedsbrevettitel); ?></h2>  
                <form method="post">
                    <input type="email" name="Email" placeholder="Din Email">
                    <button type="submit" value=" ">
                        <img src="data:image/svg+xml,%3Csvg width='18' height='8' viewBox='0 0 18 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect y='2.71973' width='15.4286' height='2.56061' fill='%23404040'/%3E%3Cpath d='M18 4.00009L14.1429 7.32641L14.1429 0.673764L18 4.00009Z' fill='%23404040'/%3E%3C/svg%3E"
                            alt="">
                    </button>
                </form>
            </div>
            <div class="footerContentBottom">
                <div class="footerContentBottomContainer">
                    <h2 class="titelFooter"><?php echo($kontakttitel); ?></h2>  
                    <div class="footerText">
                        <img src="<?php echo esc_url($footermailikon["url"]); ?>"
                            alt="<?php echo $footermailikon ["alt"]?>">
                        <p><?php echo($emailadressetitel); ?></p>

                    </div>
                    <div class="footerText">
                        <img src="<?php echo esc_url($footertlfikon["url"]); ?>"
                            alt="<?php echo $footertlfikon ["alt"]?>">
                        <p><?php echo($tlfnr); ?></p>    
                    </div>
                    <div class="footerText">
                        <img src="<?php echo esc_url($footeradresseikon["url"]); ?>"
                            alt="<?php echo $footeradresseikon ["alt"]?>">
                        <p><?php echo($adresselokation); ?></p>   
                    </div>
                </div>
                <div class="footerContentBottomContainer">
                    <h2 class="titelFooter"><?php echo($abningstidertitel); ?></h2>
                    <div class="footerText">
                        <p>· <?php echo($mantiltorsabningstider); ?></p>  
                    </div>
                    <div class="footerText">
                        <p>· <?php echo($fredagabningstider); ?></p>  
                    </div>
                </div>
                <div class="footerContentBottomContainer">
                    <h2 class="titelFooter"><?php echo($navigeringtitel); ?></h2>  
                    <div class="grid">
                        <a href="http://sikkerhedsgiganten.local/" aria-label="en knap ind til forsiden"><?php echo($forsidefooterlink); ?></a>  
                        <a href="http://sikkerhedsgiganten.local/shop/" aria-label="en knap ind til shop siden"><?php echo($shopfooterlink); ?></a>  
                        <a href="http://sikkerhedsgiganten.local/index.php/erhverv/" aria-label="en knap ind til erhvervs siden"><?php echo($erhvervfooterlink); ?></a>  
                        <a href="http://sikkerhedsgiganten.local/index.php/blogs/" aria-label="en knap ind til blogs siden"><?php echo($blogsfooterlink); ?></a>  
                        <a href="http://sikkerhedsgiganten.local/index.php/om-os/" aria-label="en knap ind til om os siden"><?php echo($omosfooterlink); ?></a>  
                        <a href="http://sikkerhedsgiganten.local/index.php/kontakt/" aria-label="en knap ind til kontakt os siden"><?php echo($kontaktfooterlink); ?></a>  
                    </div>
                </div>
                <div class="footerContentBottomContainer">
                    <h2 class="titelFooter"><?php echo($socialt_titel); ?></h2>  
                    <div class="footerText">
                        <a href="https://www.instagram.com/sikkerhedsgigantendk/" aria-label="en knap ind til Sikkerhedsgiganten Instagram"><img
                                src="<?php echo esc_url($footerinstagramikon["url"]); ?>"
                                alt="<?php echo $footerinstagramikon ["alt"]?>" class="footerSocial"></a>
                        <a href="https://www.facebook.com/sikkerhedsgiganten.dk" aria-label="en knap ind til Sikkerhedsgiganten Facebook"><img
                                src="<?php echo esc_url($footerfacebooknikon["url"]); ?>"
                                alt="<?php echo $footerfacebooknikon ["alt"]?>" class="footerSocial"></a>
                        <a href="https://www.linkedin.com/company/sikkerhedsgiganten/" aria-label="en knap ind til Sikkerhedsgiganten LinkedIn"><img
                                src="<?php echo esc_url($footerlinkedinikon["url"]); ?>"
                                alt="<?php echo $footerlinkedinikon ["alt"]?>" class="footerSocial"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerContentRight">
            <img src="<?php echo esc_url($footerlogo["url"]); ?>" alt="<?php echo $footerlogo ["alt"]?>">
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>
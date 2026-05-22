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
?>





    <div class="footerContent">
        <div class="footerContentLeft">
            <div class="footerContentTop">
                <h2 class="nyhedsbrevTitelFooter">Bliv en del af nyhedbrevet</h2>
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
                    <h2 class="titelFooter">Kontakt</h2>
                    <div class="footerText">
                        <img src="<?php echo esc_url($footermailikon["url"]); ?>"
                            alt="<?php echo $footermailikon ["alt"]?>">
                        <p>info@sikkerhedsgiganten.dk</p>
                    </div>
                    <div class="footerText">
                        <img src="<?php echo esc_url($footertlfikon["url"]); ?>"
                            alt="<?php echo $footertlfikon ["alt"]?>">
                        <p>+45 71 99 32 60</p>
                    </div>
                    <div class="footerText">
                        <img src="<?php echo esc_url($footeradresseikon["url"]); ?>"
                            alt="<?php echo $footeradresseikon ["alt"]?>">
                        <p>Lillebæltsvej 6 · A/B 6715 Esbjerg N</p>
                    </div>
                </div>
                <div class="footerContentBottomContainer">
                    <h2 class="titelFooter">Åbningstider</h2>
                    <div class="footerText">
                        <p>· Mandag til torsdag: 8:00 - 16:00</p>
                    </div>
                    <div class="footerText">
                        <p>· Fredag: 8:00 - 15.30</p>
                    </div>
                </div>
                <div class="footerContentBottomContainer">
                    <h2 class="titelFooter">Navigering</h2>
                    <div class="grid">
                        <a href="http://sikkerhedsgiganten.local/">Forside</a>
                        <a href="http://sikkerhedsgiganten.local/shop/">Shop</a>
                        <a href="http://sikkerhedsgiganten.local/index.php/erhverv/">Erhverv</a>
                        <a href="http://sikkerhedsgiganten.local/index.php/blogs/">Blogs</a>
                        <a href="http://sikkerhedsgiganten.local/index.php/om-os/">Om Os</a>
                        <a href="http://sikkerhedsgiganten.local/index.php/kontakt/">Kontakt</a>
                    </div>
                </div>
                <div class="footerContentBottomContainer">
                    <h2 class="titelFooter">Socialt</h2>
                    <div class="footerText">
                        <a href="https://www.instagram.com/sikkerhedsgigantendk/"><img
                                src="<?php echo esc_url($footerinstagramikon["url"]); ?>"
                                alt="<?php echo $footerinstagramikon ["alt"]?>" class="footerSocial"></a>
                        <a href="https://www.facebook.com/sikkerhedsgiganten.dk"><img
                                src="<?php echo esc_url($footerfacebooknikon["url"]); ?>"
                                alt="<?php echo $footerfacebooknikon ["alt"]?>" class="footerSocial"></a>
                        <a href="https://www.linkedin.com/company/sikkerhedsgiganten/"><img
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
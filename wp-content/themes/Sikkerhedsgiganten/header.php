<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sikkerhedsminimanten</title>
    <link rel="icon" href="" type="image/png">

    <meta name="author" content="Benjamin Steckmetz">
    <meta name="robots" content="index, follow">

    <?php 
    $current_url = get_permalink();
    echo '<link rel="alternate" hreflang="da" href="' . esc_url($current_url) . '" />' . "\n";
echo '<link rel="alternate" hreflang="x-default" href="' . esc_url($current_url) . '" />' . "\n";
    ?>
    <!--FACEBOOK(meta)-->
    <meta property="og:title" content="Sikkerhedsminimanten">
    <meta property="og:description" content="Sikkerhedsminimanten i Esbjerg ">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <!--tWITTER-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sikkerhedsminimanten">
    <meta name="twitter:description" content="Sikkerhedsminimanten i Esbjerg">
    <meta name="twitter:image" content="">
    <meta name="google-site-verification" content="" />
    <link rel="apple-touch-icon" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <?php wp_head(); ?>
</head>

<?php
$header_post_id = 1047;
$headervideo = get_field("header_video", $header_post_id);
$headerlogotop = get_field("logo_top", $header_post_id);
$Navhjerteikon = get_field("nav_hjerte_ikon", $header_post_id);
$Navkurvikon = get_field("nav_kurv_ikon", $header_post_id);
$Navburgerikon = get_field("nav_burger_ikon", $header_post_id);
$sikkerhedsudstyrikon = get_field("sikkerhedsudstyr_ikon", $header_post_id);
$arbejdstojikon = get_field("arbejdstoj_ikon", $header_post_id);
$andedraetsvaernikon = get_field("andedraetsvaern_ikon", $header_post_id);
$forstehjaelpikon = get_field("forstehjaelp_ikon", $header_post_id);
$skilteikon = get_field("skilte_ikon", $header_post_id);
$hygiejneikon = get_field("hygiejne_ikon", $header_post_id);
$rengoringsartiklerikon = get_field("rengoringsartikler_ikon", $header_post_id);
$skadedyrikon = get_field("skadedyr_ikon", $header_post_id);
$outletikon = get_field("outlet_ikon", $header_post_id);
$faldsikringikon = get_field("faldsikring_ikon", $header_post_id);
$vivaerneromdigtitel = get_field("vi_vaerner_om_dig_titel", $header_post_id);
$forsideundertitel = get_field("forside_undertitel", $header_post_id);
$oftesogt = get_field("ofte_sogt", $header_post_id);
$tobdmaskertitel = get_field("tobd_masker_titel", $header_post_id);
$sikkerhedsskotitel = get_field("sikkerhedssko_titel", $header_post_id);
$faldsikringtitel = get_field("faldsikring_titel", $header_post_id);
$kategoriertitel = get_field("kategorier_titel", $header_post_id);
$arbejdstojtitel = get_field("arbejdstoj_titel", $header_post_id);
$sikkerhedsudstyrtitel = get_field("sikkerhedsudstyr_titel", $header_post_id);
$andedraetsvaerntitel = get_field("andedraetsvaern_titel", $header_post_id);
$forstehjaelptitel = get_field("forstehjaelp_titel", $header_post_id);
$skiltetitel= get_field("skilte_titel", $header_post_id);
$hygiejnetitel = get_field("hygiejne_titel", $header_post_id);
$andedraetsvaerntitel = get_field("andedraetsvaern_titel", $header_post_id);
$rengoringsartiklertitel = get_field("rengoringsartikler_titel", $header_post_id);
$skadedyrtitel = get_field("skadedyr_titel", $header_post_id);
$outlettitel = get_field("outlet_titel", $header_post_id);
$profiltitel = get_field("profil_titel", $header_post_id);
$profilundersidetitel = get_field("profil_underside_titel", $header_post_id);
$favorittertitel = get_field("favoritter_titel", $header_post_id);
$kurvtitel = get_field("kurv_titel", $header_post_id);


$navforside = get_field('nav-forside', $header_post_id);
$navomos = get_field('nav-om-os', $header_post_id);
$navkontakt = get_field('nav-kontakt', $header_post_id);
$navkundeservice = get_field('nav-kundeservice', $header_post_id);
$kurvikon = get_field("kurv_ikon", $header_post_id);
$favoritterikon = get_field("favoritter_ikon", $header_post_id);
$profilundersideikon = get_field("profil_underside_ikon", $header_post_id);
$navshop = get_field('nav-shop', $header_post_id);
$naverhvervskunde = get_field('nav-erhvervskunde', $header_post_id);
$tobdmaskerknap = get_field('tobd_masker_knappen', $header_post_id);
$sikkerhedsskoknap = get_field('sikkerhedssko_knap', $header_post_id);
$faldsikringknap = get_field('faldsikring_knap', $header_post_id);
$sikkerhedsudstyrKnap = get_field('sikkerhedsudstyr_knap', $header_post_id);
$arbejdstojKnap = get_field('arbejdstoj_knap', $header_post_id);
$andedraetsvaernKnap = get_field('andedraetsvaern_knap', $header_post_id);
$faldsikringKnap = get_field('faldsikring_knap', $header_post_id);
$forstehjaelpKnap = get_field('forstehjaelp_knap', $header_post_id);
$skilteKnap = get_field('skilte_knap', $header_post_id);
$hygiejneKnap = get_field('hygiejne_knap', $header_post_id);
$rengoringsartiklerKnap = get_field('rengoringsartikler_knap', $header_post_id);
$skadedyrKnap = get_field('skadedyr_knap', $header_post_id);
$outletKnap = get_field('outlet_knap', $header_post_id);


?>



<body <?php body_class() ?>>
    <a href="#main" class="skip-link">Spring til indhold</a>
    <nav id="nav">
        <div class="navTop">
            <div class="navLeftSide">
                <ul>
                    <li><a
                            href="<?php echo esc_url($navforside ['url']); ?>"><?php echo esc_html($navforside['title']); ?></a>
                    </li>

                    <li><a
                            href="<?php echo esc_url($navomos ['url']); ?>"><?php echo esc_html($navomos['title']); ?></a>
                    </li>
                    <li><a
                            href="<?php echo esc_url($navkontakt ['url']); ?>"><?php echo esc_html($navkontakt['title']); ?></a>
                    </li>
                    <li><a
                            href="<?php echo esc_url($navkundeservice ['url']); ?>"><?php echo esc_html($navkundeservice['title']); ?></a>
                    </li>
                </ul>
            </div>
            <div class="navMiddle">
                <div class="logo">
                    <video autoplay muted playsinline>
                        <source src="<?php echo esc_url($headerlogotop['url']); ?>" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="navRightSide">
                <ul>
                    <li><a
                            href="<?php echo esc_url($navshop ['url']); ?>"><?php echo esc_html($navshop['title']); ?></a>
                    </li>
                    <li><a
                            href="<?php echo esc_url($naverhvervskunde ['url']); ?>"><?php echo esc_html($naverhvervskunde['title']); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( wc_get_account_endpoint_url( 'wishlist' ) ); ?>">
                            <img src="<?php echo esc_url($Navhjerteikon["url"]); ?>"
                                alt="<?php echo esc_attr($Navhjerteikon["alt"]); ?>">
                            <?php
        $count = YITH_WCWL()->count_products();
        if ( $count > 0 ) :
        ?>
                            <span class="nav-wishlist-count"><?php echo $count; ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <li style="position:relative;">
                        <button class="cart-trigger" id="cart-trigger" aria-label="Åbn kurv"
                            style="background:none;border:none;cursor:pointer;padding:0;position:relative;">
                            <img src="<?php echo esc_url($Navkurvikon["url"]); ?>"
                                alt="<?php echo esc_attr($Navkurvikon["alt"]); ?>">
                            <?php
        $count = WC()->cart->get_cart_contents_count();
        if ( $count > 0 ) :
        ?>
                            <span class="nav-cart-count"><?php echo $count; ?></span>
                            <?php endif; ?>
                        </button>
                    </li>
                    <li><a href="#sidemenu" aria-label="Åbn side menu"><img
                                src="<?php echo esc_url($Navburgerikon["url"]); ?>"
                                alt="<?php echo $Navburgerikon ["alt"]?>" class="openMenu"></a></li>
                </ul>
            </div>
        </div>
        <div class="navBottom hide"><input type="search" placeholder="Søg her..." id="headerInputNav"></div>
    </nav>
    <div class="cart-sidebar" id="cart-sidebar">
        <div class="cart-sidebar__header">
            <h3>Din kurv</h3>
            <button class="cart-sidebar__close" id="cart-close" aria-label="Luk kurv">✕</button>
        </div>
        <div class="cart-sidebar__body">
            <?php the_widget( 'WC_Widget_Cart', [ 'title' => '' ] ); ?>
        </div>
    </div>
    <div class="cart-overlay" id="cart-overlay"></div>
    <header id="header">
        <video class="headerBillede" autoplay muted loop playsinline>
            <source src="<?php echo esc_url($headervideo['url']); ?>" type="video/mp4">
        </video>
        <div id="headerOverlay"></div>

        <div class="headerContent">
            <h1 id="headerTitle"><?php echo($vivaerneromdigtitel); ?></h1>
            <p id="headerUndertitel"><?php echo($forsideundertitel); ?></p>
            <input type="search" placeholder="Søg her..." id="headerInput">
            <div class="headerContentLower">
                <p><?php echo($oftesogt); ?></p>
                <ul class="headerContentList">
                    <li>
                        <a href="<?php echo esc_url($tobdmaskerknap['url']); ?>">
                            <?php echo esc_html($tobdmaskerknap['title']); ?>
                        </a>

                    </li>
                    <li><a href="<?php echo esc_url($sikkerhedsskoknap['url']); ?>">
                            <?php echo esc_html($sikkerhedsskoknap['title']); ?>
                        </a></li>
                    <li><a href="<?php echo esc_url($faldsikringknap['url']); ?>">
                            <?php echo esc_html($faldsikringknap['title']); ?>
                        </a></li>
                </ul>
            </div>
        </div>

        <div class="headerAds">

        </div>
    </header>
    <aside class="headerSideMenuCategories">
        <button class="closeBtn" aria-label="Luk side menu">X</button>
        <h3><?php echo($kategoriertitel); ?></h3>
        <ul>

            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($sikkerhedsudstyrKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af sikkerhedsudstyr"><?php echo($sikkerhedsudstyrKnap['title']); ?></a><img
                    src="<?php echo esc_url($sikkerhedsudstyrikon["url"]); ?>" alt="" aria-hidden="true"></li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($arbejdstojKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af arbejdstoej"><?php echo($arbejdstojKnap['title']); ?></a><img
                    src="<?php echo esc_url($arbejdstojikon["url"]); ?>" alt="" aria-hidden="true">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($andedraetsvaernKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af andedraetsvaern"><?php echo($andedraetsvaernKnap['title']); ?></a><img
                    src="<?php echo esc_url($andedraetsvaernikon["url"]); ?>" alt="" aria-hidden="true"></li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($faldsikringKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af faldsikring"><?php echo($faldsikringKnap['title']); ?></a><img
                    src="<?php echo esc_url($faldsikringikon["url"]); ?>" alt="" aria-hidden="true">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($forstehjaelpKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af foerstehjaelp"><?php echo($forstehjaelpKnap['title']); ?></a><img
                    src="<?php echo esc_url($forstehjaelpikon["url"]); ?>" alt="" aria-hidden="true">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($skilteKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af skilte"><?php echo($skilteKnap['title']); ?></a><img
                    src="<?php echo esc_url($skilteikon["url"]); ?>" alt="" aria-hidden="true"></li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($hygiejneKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af hygiejne"><?php echo($hygiejneKnap['title']); ?></a><img
                    src="<?php echo esc_url($hygiejneikon["url"]); ?>" alt="" aria-hidden="true">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($rengoringsartiklerKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af rengoringsartikler"><?php echo($rengoringsartiklerKnap['title']); ?></a><img
                    src="<?php echo esc_url($rengoringsartiklerikon["url"]); ?>" alt="" aria-hidden="true">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($skadedyrKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af skadedyr"><?php echo($skadedyrKnap['title']); ?></a><img
                    src="<?php echo esc_url($skadedyrikon["url"]); ?>" alt="" aria-hidden="true">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="<?php echo esc_url($outletKnap['url']); ?>"
                    aria-label="en knap ind til shopsiden af outlet"><?php echo($outletKnap['title']); ?></a><img
                    src="<?php echo esc_url($outletikon["url"]); ?>" alt="" aria-hidden="true"></li>

        </ul>
        <h3><?php echo($profiltitel); ?></h3>
        <ul>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="#minprofil"
                    aria-label="en knap ind til profil siden"><?php echo($profilundersidetitel); ?></a><img
                    src="<?php echo esc_url($profilundersideikon["url"]); ?>" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="#favoritter"
                    aria-label="en knap ind til favoritter"><?php echo($favorittertitel); ?></a><img
                    src="<?php echo esc_url($favoritterikon["url"]); ?>" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" aria-hidden="true" />
                </svg><a href="#kurv" aria-label="en knap ind til kurv"><?php echo($kurvtitel); ?></a><img
                    src="<?php echo esc_url($kurvikon["url"]); ?>" alt=""></li>
        </ul>
    </aside>
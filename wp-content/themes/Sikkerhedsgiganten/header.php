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
$headervideo = get_field("header_video");
$headerlogotop = get_field("logo_top");
$Navhjerteikon = get_field("nav_hjerte_ikon");
$Navkurvikon = get_field("nav_kurv_ikon");
$Navburgerikon = get_field("nav_burger_ikon");
$sikkerhedsudstyrikon = get_field("sikkerhedsudstyr_ikon");
$arbejdstojikon = get_field("arbejdstoj_ikon");
$andedraetsvaernikon = get_field("andedraetsvaern_ikon");
$forstehjaelpikon = get_field("forstehjaelp_ikon");
$skilteikon = get_field("skilte_ikon");
$hygiejneikon = get_field("hygiejne_ikon");
$rengoringsartiklerikon = get_field("rengoringsartikler_ikon");
$skadedyrikon = get_field("skadedyr_ikon");
$outletikon = get_field("outletikon");
$faldsikringikon = get_field("faldsikring_ikon");
$vivaerneromdigtitel = get_field("vi_vaerner_om_dig_titel");
$forsideundertitel = get_field("forside_undertitel");
$oftesogt = get_field("ofte_sogt");
$tobdmaskertitel = get_field("tobd_masker_titel");
$sikkerhedsskotitel = get_field("sikkerhedssko_titel");
$faldsikringtitel = get_field("faldsikring_titel");



?>

<body <?php body_class() ?>>
    <nav id="nav">
        <div class="navTop">
            <div class="navLeftSide">
                <ul>
                    <li><a href="#forside">Forside</a></li>
                    <li><a href="#omos">Om os</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                    <li><a href="#kundeservice">Kundeservice</a></li>
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
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="#erhvervskunde">Erhvervskunde</a></li>
                    <li><a href="#favoritter"><img src="<?php echo esc_url($Navhjerteikon["url"]); ?>"
                                alt="<?php echo $Navhjerteikon ["alt"]?>"></a></li>
                    <li><a href="#kurv"><img src="<?php echo esc_url($Navkurvikon["url"]); ?>"
                                alt="<?php echo $Navkurvikon ["alt"]?>"></a></li>
                    <li><a href="#sidemenu"><img src="<?php echo esc_url($Navburgerikon["url"]); ?>"
                                alt="<?php echo $Navburgerikon ["alt"]?>" class="openMenu"></a></li>
                </ul>
            </div>
        </div>
        <div class="navBottom"><input type="text" placeholder="Søg her..."></div>
    </nav>
    <header id="header">
        <video class="headerBillede" autoplay muted loop playsinline>
            <source src="<?php echo esc_url($headervideo['url']); ?>" type="video/mp4">
        </video>
        <div id="headerOverlay"></div>
        
        <div class="headerContent">
            <h1 id="headerTitle"><?php echo($vivaerneromdigtitel); ?></h1>
            <h4 id="headerUndertitel"><?php echo($forsideundertitel); ?></h4>
            <input type="text" placeholder="Søg her..." id="headerInput">
            <div class="headerContentLower">
                <p><?php echo($oftesogt); ?></p>     
                <ul class="headerContentList">
                    <li><a href="#handsker"><?php echo($tobdmaskertitel); ?></a></li>
                    <li><a href="#fodtøj"><?php echo($tobdmaskertitel); ?></a></li>
                    <li><a href="#værnemidler"><?php echo($faldsikringtitel); ?></a></li>     
                </ul>
            </div>       
        </div>

        <div class="headerAds">              

        </div>
    </header>
    <div class="headerSideMenuCategories">
        <button class="closeBtn">X</button>
        <h3>Kategorier</h3>
        <ul>

            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#arbejdsudstyr">Arbejdsudstyr</a><img src="<?php echo esc_url($sikkerhedsudstyrikon["url"]); ?>" alt=""></li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#arbejdstoj">Arbejdstøj</a><img src="<?php echo esc_url($arbejdstojikon["url"]); ?>" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#andedretsvern">Åndedrætsværn</a><img src="<?php echo esc_url($andedraetsvaernikon["url"]); ?>" alt=""></li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#faldsikring">Faldsikring</a><img src="<?php echo esc_url($faldsikringikon["url"]); ?>" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#forstehjelp">Førstehjælp</a><img src="<?php echo esc_url($forstehjaelpikon["url"]); ?>" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#skilte">Skilte</a><img src="<?php echo esc_url($skilteikon["url"]); ?>" alt=""></li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#hygiejne">Hygiejne</a><img src="<?php echo esc_url($hygiejneikon["url"]); ?>" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#rengoring">Rengøring</a><img src="<?php echo esc_url($rengoringsartiklerikon["url"]); ?>" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#skadedyr">Skadedyr</a><img src="<?php echo esc_url($skadedyrikon["url"]); ?>" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#outlet">Outlet</a><img src="<?php echo esc_url($outletikon["url"]); ?>" alt=""></li>

        </ul>
        <h3>Profil</h3>
        <ul>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#minprofil">Profil</a><img src="img/hjelmIkon.svg" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#favoritter">Favoritter</a><img src="img/hjelmIkon.svg" alt="">
            </li>
            <li><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79395L13.5 -0.000282288L13.5 15.5882L0 7.79395Z" fill="#020202" />
                </svg><a href="#kurv">Kurv</a><img src="img/hjelmIkon.svg" alt=""></li>
        </ul>
    </div>
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

?>
<body <?php body_class() ?>>
    <header id="header">
        <div class="headerBillede"></div>
        <div id="headerOverlay"></div>
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
    <?php 
    $video_felt = get_field('logo_top'); // Erstat med dit faktiske felt-navn

    if ( $video_felt ) : 
        echo $video_felt; 
    else : ?>
        <img src="<?php echo esc_url($footermailikon["url"]); ?>" alt="<?php echo $footermailikon["alt"]; ?>">
    <?php endif; ?>
</div>
                </div>
                <div class="navRightSide">
                    <ul>
                        <li><a href="#shop">Shop</a></li>
                        <li><a href="#erhvervskunde">Erhvervskunde</a></li>
                        <li><a href="#favoritter"><img src="img/favourite.svg" alt="Favoritter"></a></li>
                        <li><a href="#kurv"><img src="img/cart.svg" alt="Kurv"></a></li>
                        <li><a href="#sidemenu"><img src="img/menu.svg" alt="sidemenu"></a></li>
                    </ul>
                </div>
            </div>
            <div class="navBottom"><input type="text" placeholder="Søg her..."></div>
        </nav>

        <div class="headerContent">
            <h1 id="headerTitle">Vi værner om dig</h1>
            <h4 id="headerUndertitel">Sikkerhedsudstyr, Arbejdstøj & Rengøring til erhverv og privat</h4>
            <input type="text" placeholder="Søg her..." id="headerInput">
            <div class="headerContentLower">
                <p>Ofte søgt</p>
                <ul class="headerContentList">
                    <li><a href="#handsker">F2CB Masker</a></li>
                    <li><a href="#fodtøj">Sikkerhedssko</a></li>
                    <li><a href="#værnemidler">Faldsikring</a></li>
                </ul>
            </div>
        </div>
        <div class="headerSideMenuCategories">
            <button class="closeBtn">X</button>
            <h3>Kategorier</h3>
            <ul>
                <li><a href="#arbejdsudstyr">Arbejdsudstyr</a></li>
                <li><a href="#arbejdstoj">Arbejdstøj</a></li>
                <li><a href="#andedretsvern">Åndedrætsværn</a></li>
                <li><a href="#faldsikring">Faldsikring</a></li>
                <li><a href="#forstehjelp">Førstehjælp</a></li>
                <li><a href="#skilte">Skilte</a></li>
                <li><a href="#hygiejne">Hygiejne</a></li>
                <li><a href="#rengoring">Rengøring</a></li>
                <li><a href="#skadedyr">Skadedyr</a></li>
                <li><a href="#outlet">Outlet</a></li>
            </ul>
            <h3>Profil</h3>
            <ul>
                <li><a href="#minprofil">Profil</a></li>
                <li><a href="#favoritter">Favoritter</a></li>
                <li><a href="#kurv">Kurv</a></li>
            </ul>
        </div>
        <div class="headerAds">

        </div>
    </header>
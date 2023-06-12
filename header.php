<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-hydronix
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <link rel="stylesheet" href="https://use.typekit.net/lzb5moj.css">
    <?php
if (get_field('ga_property', 'options')) {
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
            );
    </script>
    <?php
}
if (get_field('gtm_property', 'options')) {
    ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
            );
    </script>
    <!-- End Google Tag Manager -->
    <?php
}
if (get_field('google_site_verification', 'options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
}
if (get_field('bing_site_verification', 'options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
}

wp_head();
?>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "PBS International Freight Ltd.",
            "url": "https://www.pbs-int.co.uk/",
            "logo": "https://www.pbs-int.co.uk/wp-content/themes/cb-pbsint2023/img/pbs-logo.jpg",
            "description": "Freight forwarding company based at Gatwick and Heathrow, providing international shipping services and global freight solutions.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Charlwood Road, Lowfield Heath, Crawley",
                "addressRegion": "West Sussex",
                "postalCode": "RH11 0PT",
                "addressCountry": "UK"
            },
            "telephone": "+44 (0) 1293 551140",
            "email": "info@pbs-int.co.uk"
        }
        }
    </script>

</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php
do_action('wp_body_open');
?>
<div id="wrapper-navbar" class="fixed-top p-0">
    <div class="topNav d-flex justify-content-between container-xl">
        <a class="logo" href="/"></a>
        <div class="d-flex justify-content-between align-items-center w-100 ms-5 d-xl-none">
            <a href="tel:<?=parse_phone(get_field('gatwick_phone','options'))?>" class="mr-3 text-center"><i class="fas fa-phone-alt"></i><br/>LGW</a>
            <a href="tel:<?=parse_phone(get_field('heathrow_phone','options'))?>" class="mr-3 text-center"><i class="fas fa-phone-alt"></i><br/>LHR</a>
            <a href="mailto:info@pbs-int.co.uk" class="mr-2"><i class="far fa-2x fa-envelope mr-2"></i></a>
            <div class="button-container d-xl-none">
                <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <ul class="d-none d-xl-flex justify-content-between my-4 w-100 align-content-center align-items-stretch">
            <li class="menu-item d-flex">
                <i class="fas fa-2x fa-map-marker-alt me-1"></i> <a href="tel:<?=parse_phone(get_field('gatwick_phone','options'))?>">Gatwick Office<br/><span class="font-weight-normal"><?=get_field('gatwick_phone','options')?></span></a>
            </li>
            <li class="menu-item d-flex">
                <i class="fas fa-2x fa-map-marker-alt me-1"></i> <a href="tel:<?=parse_phone(get_field('heathrow_phone','options'))?>">Heathrow Office<br/><span class="font-weight-normal"><?=get_field('heathrow_phone','options')?></span></a>
            </li>
            <li class="menu-item d-flex">
                <i class="far fa-2x fa-envelope me-1"></i> <a href="mailto:<?=get_field('contact_email','options')?>" style="vertical-align:super">Email<br/><span class="font-weight-normal"><?=get_field('contact_email','options')?></span></a>
            </li>
            <li class="menu-item my-auto mr2">
                <a href="/quotations/" class="btn btn--orange">Get a Quote</a>
            </li>
        </ul>
    </div>
    <nav class="navbar navbar-expand-xl p-0">
        <div class="container-xl align-items-center">
           
            <div class="collapse navbar-collapse justify-content-between" id="navbar">
                    <?php
                    wp_nav_menu(
    array(
        'theme_location'  => 'primary_nav',
        'container_class' => ' w-100',
        'menu_class'      => 'navbar-nav justify-content-between',
        'fallback_cb'     => '',
        'menu_id'         => 'navbarr',
        'depth'           => 3,
        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
    )
);
?>
            </div>
        </div>
    </nav>
</div>
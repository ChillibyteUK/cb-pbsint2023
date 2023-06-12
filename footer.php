<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<?php
/**
 * Setup for footer
 *
 * @package cb-pbsint
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<footer class="footer py-4">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer__heading">PBS Offices</div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="contact__title">GATWICK OFFICE</div>
                        <div class="mb-2"><a href="mailto:<?=get_field('contact_email','options')?>"><?=get_field('contact_email','options')?></a></div>
                        <div class="mb-2"><a href="tel:<?=parse_phone(get_field('gatwick_phone','options'))?>">Tel: <?=get_field('gatwick_phone','options')?></a><br/>
                        Fax: <?=get_field('gatwick_fax','options')?></div>
                        <?=get_field('gatwick_address','options')?>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="contact__title">HEATHROW OFFICE</div>
                        <div class="mb-2"><a href="mailto:<?=get_field('contact_email','options')?>"><?=get_field('contact_email','options')?></a></div>
                        <div class="mb-2"><a href="tel:<?=parse_phone(get_field('heathrow_phone','options'))?>">Tel: <?=get_field('heathrow_phone','options')?></a><br/>
                        Fax: <?=get_field('heathrow_fax','options')?></div>
                        <?=get_field('heathrow_address','options')?>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer__heading">Services</div>
                <?=wp_nav_menu( array('theme_location' => 'footer_menu1') )?>
            </div>
            <div class="col-lg-2">
                <div class="footer__heading">Destinations</div>
                <?=wp_nav_menu( array('theme_location' => 'footer_menu2') )?>
            </div>
            <div class="col-lg-2">
                <div class="footer__heading">Useful Links</div>
                <?=wp_nav_menu( array('theme_location' => 'footer_menu3') )?>
            </div>
        </div>
    </div>
</footer>

<div class="colophon">
    <div class="container py-2">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="col-md-8 text-center text-md-start">
                &copy; <?=date('Y')?> PBS International Freight Ltd | Registered in England No. 2648449 | VAT Registration No. GB 644 7226 33
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-end flex-wrap gap-1">
                <a href="<?=get_field('terms','options')?>">Terms &amp; Conditions</a> |
                <a href="/privacy-policy/">Privacy & Cookies</a> |
                <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                    title="Digital Marketing by Chillibyte"></a>
            </div>
        </div>
    </div>
</div>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>
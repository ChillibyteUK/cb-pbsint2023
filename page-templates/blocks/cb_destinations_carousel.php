<section class="destinations_carousel py-5">
    <div class="container-xl">
        <h2 class="h1 text-center has-primary-color">International Freight Destinations</h2>
        <p class="text-center mb-4"><?=get_field('intro')?></p>
        <div class="destinations_carousel__carousel">
        <?php
        $dest = get_page_by_path( 'destinations' );
        $q = new WP_Query(array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $dest->ID,
            'order'          => 'ASC',
            'orderby'        => 'menu_order'
        ));

        while ($q->have_posts()) {
            $q->the_post();
            ?>
<a class="carousel_card" href="<?=get_the_permalink(get_the_ID())?>">
    <div class="carousel_card__inner">
        <img src="<?=get_the_post_thumbnail_url(get_the_ID(),'large')?>">
        <h3 class="text-center h4"><?=get_the_title()?></h3>
    </div>
</a>
            <?php
        }
        ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
    (function($) {
        $('.destinations_carousel__carousel').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            dots: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                }
            ]
        });
    })(jQuery);
</script>
<?php
}, 9999);
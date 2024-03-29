<section class="nav_cards py-5">
    <div class="container-xl">
        <h2 class="has-primary-color"><?=get_field('title')?></h2>
        <p><?=get_field('intro')?></p>
        <div class="nav_cards__cards">
            <?php
            while(have_rows('services')) {
                the_row();
                $img = wp_get_attachment_image_url(get_sub_field('image'),'large');
                if (!$img) {
                    $img = get_the_post_thumbnail_url(get_sub_field('link')[0],'large');
                }
                ?>
            <a class="nav_cards__card" href="<?=get_the_permalink(get_sub_field('link')[0])?>">
                <img src="<?=$img?>" alt="">
                <div class="nav_cards__detail">
                    <h3><?=get_sub_field('title')?></h3>
                    <p><?=get_sub_field('description')?></p>
                </div>
            </a>
                <?php
            }
            ?>
        </div>
    </div>
</section>
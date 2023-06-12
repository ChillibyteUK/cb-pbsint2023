<?php



$class = $block['className'] ?? null ?: '';
?>
<header class="hero <?=$class?>">
    <div class="carousel slide mb-4" data-bs-ride="carousel" id="front-carousel">
        <div class="carousel-inner">
            <?php
        $active = 'active';
        while (have_rows('carousel')) {
            the_row();
            $img = wp_get_attachment_image_url( get_sub_field('image') ,'full');
            ?>
            <link rel="preload" as="image" href="<?=$img?>">
            <div class="carousel-item <?=$active?>" style="background-image:url(<?=$img?>)">
                <div class="carousel-caption d-none d-md-block">
                    <div class="slide-meta container">
                        <h2 class="slide-title"><?=get_sub_field('slide_title')?></h2>
                        <div class="slide-info">
                            <div class="slide-desc"><?=get_sub_field('slide_description')?></div>
                            <div class="slide-cta">
                                <a class="btn btn--blue mb-2" href="<?=get_sub_field('cta_1')['url']?>"><?=get_sub_field('cta_1')['title']?></a>
                                <a class="btn btn--orange mb-2" href="<?=get_sub_field('cta_2')['url']?>"><?=get_sub_field('cta_2')['title']?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $active = '';
        }
        ?>
    </div>
    <ol class="carousel-indicators w-100">
        <?php
        $count = count(get_field('carousel'));
        $active = 'active';
        for ($i = 0; $i < $count; $i++) {
            echo '<li data-bs-target="#front-carousel" data-bs-slide-to="' . $i . '" class="'. $active . '"></li>';
            $active = '';
        }
        ?>
    </ol>
    </div>
</header>


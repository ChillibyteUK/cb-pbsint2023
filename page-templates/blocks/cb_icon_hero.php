<?php
$img = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
<link rel="preload" as="image" href="<?=$img?>">
<div class="hero icon_hero pb-4 mb-4" style="background-image:url(<?=$img?>)">
    <div class="container text-white h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="row">
                    <?php
                    if (get_field('icon')) {
                        global $post;
                        $post_slug = $post->post_name;
                        ?>
                    <div class="col-lg-1 bg-capri-80 p-3 hero-icon">
                        <img src="<?=get_stylesheet_directory_uri()?>/img/icon-<?=$post_slug?>.svg" class="img-fluid">
                    </div>
                            <?php
                    }
                    ?>
                    <div class="col-lg-4 bg-capri-80 p-3">
                        <h1 class="page-title text-white border-bottom-thick-white"><?=get_field('hero_title')?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$colour = get_field('theme');
$background = '';
$title = '';
switch ($colour) {
    case 'Dark':
        $background = 'has-dark-background-color text-white';
        break;
    case 'Mid':
        $background = 'has-grey-background-color';
        break;
    case 'Light':
        $background = '';
        $title = 'has-primary-color';
        break;
}

$breakout = '';
if (get_field('breakout')[0] ?? null && get_field('breakout')[0] == 'Yes') {
    $breakout = $background;
    $background = '';
}

$splitText = 'col-md-6';
$splitImage = 'col-md-6';

if (get_field('split') == '6040') {
    $splitText = 'col-md-8';
    $splitImage = 'col-md-4';
}
if (get_field('split') == '7030') {
    $splitText = 'col-md-10';
    $splitImage = 'col-md-2';
}

$orderText = 'order-2 order-md-1';
$orderImage = 'order-1 order-md-2';

if (get_field('order') == 'image-text') {
    $orderText = 'order-2 order-md-2';
    $orderImage = 'order-1 order-md-1';
}
?>
<section class="text_image <?=$breakout?>">
    <div class="container-xl <?=$background?> py-5">
        <div class="d-lg-none"><div class="h2 <?=$title?>"><?=get_field('title')?></div></div>
        <div class="row align-items-center g-4">
            <div class="<?=$splitText?> <?=$orderText?>">
                <h2 class="d-none d-lg-block <?=$title?>"><?=get_field('title')?></h2>
                <div class="mb-4"><?=get_field('content')?></div>
                <div class="buttons">
                <?php
                if (get_field('cta_1')) {
                    $link = get_field('cta_1');
                    ?>
                    <a href="<?=$link['url']?>" class="btn btn--blue"><?=$link['title']?></a>
                    <?php
                }
                if (get_field('cta_2')) {
                    $link = get_field('cta_2');
                    ?>
                    <a href="<?=$link['url']?>" class="btn btn--orange"><?=$link['title']?></a>
                    <?php
                }
                if (get_field('cta_3')) {
                    $link = get_field('cta_3');
                    ?>
                    <a href="<?=$link['url']?>" class="btn btn--blue-outline"><?=$link['title']?></a>
                    <?php
                }
                ?>
                </div>
            </div>
            <div class="<?=$splitImage?> <?=$orderImage?> text-center">
                <?=wp_get_attachment_image(get_field('image'), 'large', null, array('class' => 'text_image__image'))?>
            </div>
        </div>
    </div>
</section>
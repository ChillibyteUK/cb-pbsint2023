<?php
$img = wp_get_attachment_image_url(get_field('image'),'full');
?>
<section class="img_banner py-5" style="background-image:url('<?=$img?>')">
    <div class="container-xl py-5">
        <h4><?=get_field('title')?></h4>
        <p><?=get_field('content')?></p>
    </div>
</section>
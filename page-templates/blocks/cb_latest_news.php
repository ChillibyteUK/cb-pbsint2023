<section class="latest_news py-5">
    <div class="container-xl">
        <div class="latest_news__title">
            <h2>Latest News in Shipping</h2>
            <a href="/news/">View all</a>
        </div>
        <div class="latest_news__grid">
            <?php
        $q = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 4
        ));
            while ($q->have_posts()) {
                $q->the_post();
                ?>
            <div class="latest_news__card">
                <img src="<?=get_the_post_thumbnail_url(get_the_id(), 'large')?>"
                    alt="">
                <h3><?=get_the_title()?></h3>
                <a href="<?=get_the_permalink()?>">Learn more</a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
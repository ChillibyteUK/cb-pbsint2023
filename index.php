<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

$page_for_posts = get_option( 'page_for_posts' );
$bg = get_the_post_thumbnail_url($page_for_posts,'full');



get_header();
?>
<main id="main" class="blog_index">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-4 order-lg-1">
                <h1 class="page-title border-bottom-thick">PBS International News</h1>
            </div>
        </div>
    </div>
    <div class="container-xl py-5">
        <?php
        if (get_the_content(null, false, $page_for_posts)) {
            echo '<div class="mb-5">' . get_the_content(null, false, $page_for_posts) . '</div>';
        }

        /*
        $cats = get_categories();
        ?>
        <div class="filters mb-4">
            <?php
        echo '<button class="btn btn-outline-primary active me-2 mb-2" data-filter="*">All</button>';
        foreach ($cats as $cat) {
            echo '<button class="btn btn-outline-primary me-2 mb-2" data-filter=".' . cbslugify($cat->name) . '">' . $cat->cat_name . '</button>';
        }
        echo '<a href="/events/" class="btn btn-outline-primary me-2 mb-2">Events</a>';
        echo '</div>';
        */
        ?>
        <div class="row w-100 g-4" id="grid">
            <?php
            while (have_posts()) {
                the_post();
                $img = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                if (!$img) {
                    $img = get_stylesheet_directory_uri() . '/img/default-blog.jpg';
                }
                $cats = get_the_category();
                $category = wp_list_pluck($cats, 'name');
                $flashcat = cbslugify($category[0]);
                $catclass = implode(' ', array_map( 'cbslugify', $category ) );
                $category = implode(', ',$category);

                if (has_category('event')) {
                    $the_date = get_field('start_date',get_the_ID());
                }
                else {
                    $the_date = get_the_date('jS F, Y');
                }

                ?>
            <div class="grid_item col-lg-4 col-md-6 p-0 <?=$catclass?>">
                <a href="<?=get_the_permalink(get_the_ID())?>">
                    <div class="card card--<?=$flashcat?>">
                        <div class="news__image_container">
                            <div class="news__flash news__flash--<?=$flashcat?>"><?=$category?></div>
                            <div class="news__image" style="background-image:url('<?=get_the_post_thumbnail_url(get_the_ID(),'large')?>')"></div>
                        </div>
                        <div class="news__inner">
                            <h3 class="news__title mb-0"><?=get_the_title()?></h3>
                            <div class="news__date"><?=$the_date?></div>
                            <div class="news__content">
                                <div class="news__content__overlay"></div>
                                <?=wp_trim_words(get_the_content(get_the_ID()),20)?>
                            </div>
                        </div>
                        <!-- <div class="card__link">Read more</div> -->
                    </div>
                </a>
            </div>
                <?php
            }
            ?>
        </div>
        <div class="mt-5">
        <?php
        numeric_posts_nav();
        ?>
        </div>
    </div>
</main>
<?php

get_footer();
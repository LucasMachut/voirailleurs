<?php
/* Template Name: days */ 

get_header(); ?>
<body>
    <?php get_template_part('template_parts/header_menu'); ?>
    <main>
        <h2 class="home-title">Les articles</h2>
        <div class="articles-exerpt-list">
            <?php
            $args = array(
                'category_name' => 'day'
            );
            $query = new WP_Query($args);        
            if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): ?>
                    <?php $query->the_post(); ?>
    
                    <a href="<?php the_permalink() ?>">
                        <article class="article-exerpt-item">
                            <div class="article-exerpt-img">
                                <img src="<?= the_post_thumbnail_url(); ?>" alt="image du post">
                            </div>
                            <div class="article-exerpt-infos">
                                <h3 class="article-exerpt-title"><?= the_title() ?></h3>
                                <p class="article-exerpt-text"><?= get_the_excerpt() ?></p>
                            </div>
                        </article>
                    </a>
    
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </main>
    <div class="banner-photos-insta">
    <a href="https://www.instagram.com/lkts_s/" target="_blank">
        <div class="banner-photos-insta__container">
            <div class="banner-photos-insta__item" id="insta_item-1">
                <img src="<?php the_field('photo_insta_1'); ?>" alt="">
            </div>
            <div class="banner-photos-insta__item" id="insta_item-2">
                <img src="<?php the_field('photo_insta_2'); ?>" alt="">
            </div>
            <div class="banner-photos-insta__item" id="insta_item-3">
                <img src="<?php the_field('photo_insta_3'); ?>" alt="">
            </div>
            <div class="banner-photos-insta__item" id="insta_item-4">
                <img src="<?php the_field('photo_insta_4'); ?>" alt="">
            </div>
            <div class="banner-photos-insta__item" id="insta_item-5">
                <img src="<?php the_field('photo_insta_5'); ?>" alt="">
            </div>
            
        </div>
        <div class="text-center">
                <h3>Suivez-moi sur instagram !</h3>
                <h4 id="link-insta">@lkts_s</h4>
        </div>
    </a>
</div>        
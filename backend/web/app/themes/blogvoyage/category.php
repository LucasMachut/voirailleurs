<?php
get_header(); ?>

<body>
    <?php get_template_part('template_parts/header_menu'); ?>
    <main>
        <h2 class="home-title"><?php the_field('main-title'); ?></h2>
        <div class="articles-exerpt-list">
            <?php 
            // Ajouter une custom query pour les articles de la catégorie "article"
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'article',
            );
            $query = new WP_Query( $args );
            ?>
            <?php if ($query->have_posts()): ?>
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
            <?php wp_reset_postdata(); // Réinitialiser les données des posts ?>
        </div>
    </main>
    <?php get_template_part('template_parts/insta-banner') ?>


<?php get_footer(); ?>

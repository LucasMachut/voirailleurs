<?php
get_header();
// Création d'une custom query pour recuperer les trois derniers posts
// publiés
$the_query = new WP_Query([
  "posts_per_page" => 3,
  "post_type" => 'post',
  "post_status" => 'publish',
  "orderby" => 'date',
  "order" => 'ASC'
]);
?>

<body">
<?php get_template_part('template_parts/header_menu') ?>
<div class="header-container" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php the_field('banner_image'); ?>);background-repeat:no-repeat;background-attachment:fixed;background-position:50% 50%;background-size:cover;">    <div class="header-infos">
      <h1><?php the_field('main_title'); ?></h1>
      <div id="line"></div>
      </div>
    </div>
  </div>

  <main>
    <div class="present-container">
        <h2><?php the_field('title2_paragraphe_presentation'); ?></h2>
        <div>
          <div class="present-blocks">
            <div class="present-text-block">
              <p><?php the_field('paragraphe_presentation'); ?></p>
            </div>
            <div class="present-photo-block">
              <img src="<?php the_field('photo_presentation'); ?>" alt="">
            </div>
          </div>

        </div>
    </div>
      

    <div class="last-articles-container">
      <h2 id="title-last-article">Derniers articles</h2>
      <div class="post-gallery">
      <?php if($the_query->have_posts()) : ?>
        <?php while($the_query->have_posts()) : ?>
          <?php $the_query->the_post() ?>
          <a href="<?php the_permalink() ?>" class="post_link">
            <article class="post">
              <img class="post-image" src="<?php the_post_thumbnail_url(); ?>">
              <h3 class="post-title"><?php the_title() ?></h3>
            </article>
          </a>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <a href="#" id="all-articles-button">
          <h4>Voir tous les articles</h4>
      </a>
    </div>
  </main>

<footer>
  <?php get_template_part('template_parts/insta-banner') ?>
</footer>

<?php
get_footer();
?>
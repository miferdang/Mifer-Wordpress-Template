<?php get_header(); ?>

<!-- Header -->
<header id="header-blog" class="header-banner">
  <?php get_template_part('templates/header-article', get_post_format()); ?>
</header>

<!-- List Blog Post -->
<section id="body-blog" class="body-page">
  <div class="container">
    <div class="row">
      <!-- Column list post -->
      <div class="col m12 l8">
        <div class="row">
          <!-- Loop show list post -->
          <?php if (have_posts()) {
            while (have_posts()) : the_post();
              get_template_part('templates/content-article', get_post_format());
            endwhile;
          } ?>
        </div>
        <div id="pagination-blog" class="row center">
          <?php the_posts_pagination( array(
            'prev_text' => __( 'Trang trước' ),
            'next_text' => __( 'Trang sau' ),
          ) );
          ?>
        </div>
      </div>
      <!-- Column for sidebar & sidebar will not show on mobile screen -->
      <div id="sidebar-blog" class="col s4 sidebar-page">
        <?php get_sidebar('sidebar-primary') ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

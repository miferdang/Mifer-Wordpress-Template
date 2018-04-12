<?php get_header(); ?>

<!-- Header -->
<header id="header-category" class="header-banner">
  <!-- Check if products post type or post blog -->
  <?php $categories = get_the_category();
  if ( $categories[0]->name !== 'Article' ) {
    get_template_part('templates/header-product', get_post_format());
  } else {
    get_template_part('templates/header-article', get_post_format());
  }?>
</header>

<!-- List Category Post -->
<section id="body-category" class="body-page">
  <div class="container">
    <!-- Check if products post type or post blog -->
    <?php $categories = get_the_category();
    if ( $categories[0]->name !== 'Article' ) { ?>
      <div id="category-product" class="row">
        <!-- Button Category Name Title -->
        <div class="row">
          <button class="title-category">
            <h6> Chuyên mục <span class="primary-color"> <?php single_cat_title(); ?> </span> </h6>
          </button>
        </div>
        <div class="row">
          <!-- List posts -->
          <?php if (have_posts()) {
            while (have_posts()) : the_post();
              get_template_part('templates/content-product', get_post_format());
            endwhile;
          } ?>
        </div>
        <!-- Pagination Product Post Type Here -->
        <div id="pagination-category-product" class="row center">
          <?php the_posts_pagination( array(
            'prev_text' => __( 'Trang trước' ),
            'next_text' => __( 'Trang sau' ),
          ) );
          ?>
        </div>
      </div>
    <?php } else { ?>
      <div id="category-article" class="row">
        <!-- Column list post -->
        <div class="col s12 m8">
          <div class="row">
            <button class="title-category">
              <h6> Chuyên mục <span class="primary-color"> <?php single_cat_title(); ?></span></h6>
            </button>
            <!-- Loop show list post -->
            <?php if (have_posts()) {
              while (have_posts()) : the_post();
                get_template_part('templates/content-article', get_post_format());
              endwhile;
            } ?>
          </div>
          <div id="pagination-category-article" class="row center">
            <?php the_posts_pagination( array(
              'prev_text' => __( 'Trang trước' ),
              'next_text' => __( 'Trang sau' ),
            ) );
            ?>
          </div>
        </div>
        <!-- Column for sidebar & sidebar will not show on mobile screen -->
        <div id="sidebar-category" class="col s4 sidebar-page">
          <?php get_sidebar('sidebar-primary') ?>
        </div>
      </div>
    <?php } ?>
  </div>
</section>

<?php get_footer(); ?>

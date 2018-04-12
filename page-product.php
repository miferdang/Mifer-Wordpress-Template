<?php get_header(); ?>

<!-- Header -->
<header id="header-list-product" class="header-banner">
    <?php get_template_part('templates/header-product', get_post_format()); ?>
</header>

<!-- List Blog Post -->
<section id="body-list-product" class="body-page">
  <div class="container">
    <?php
    if ( get_query_var('paged') ) $paged = get_query_var('paged');
    if ( get_query_var('page') ) $paged = get_query_var('page');
    $query = new WP_Query( array( 'post_type' => 'products', 'paged' => $paged ) );
    if ( $query->have_posts() ) { ?>
      <div class="row">
        <!-- List posts -->
	      <?php while ( $query->have_posts() ) : $query->the_post();
		      get_template_part('templates/content-product', get_post_format());
        endwhile; ?>
      </div>
	    <!-- Pagination here -->
      <div id="pagination-list-product" class="row center">
        <ul class="pagination">
           <li><?php echo get_next_posts_link( 'Trang sau >', $query->max_num_pages ); ?></li>
           <li><?php echo get_previous_posts_link( '< Trang trước' ); ?></li>
       </ul>
      </div>
    <?php wp_reset_postdata(); }?>
  </div>
</section>

<?php get_footer(); ?>

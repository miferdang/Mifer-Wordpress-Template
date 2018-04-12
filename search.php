<?php get_header() ?>

<div class="search-page-form" id="ss-search-page-form">
  <?php get_search_form(); ?>
</div>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<span class="search-post-title"><?php the_title(); ?></span>
<span class="search-post-excerpt"><?php the_excerpt(); ?></span>
<?php endwhile; ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<span class="search-post-title"><?php the_title(); ?></span>
<span class="search-post-excerpt"><?php the_excerpt(); ?></span>
<span class="search-post-link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></span>
<?php endwhile; ?>

<?php get_footer() ?>

<?php get_header(); ?>

<!-- Show Page with Loop -->
<?php
  if ( have_posts()) :
    while (have_posts()) : the_post();
?>

<!-- Show Content For Each Page -->
<!-- Header -->

<!-- Content -->
<section>
  <div class="container">
    <p> <?php the_content() ?> </p>
  </div>
</section>
<!-- Handle if no post & End loop -->
<?php
    endwhile;
  else : echo('Trang này không tồn tại');
  endif;
?>

<?php get_footer(); ?>

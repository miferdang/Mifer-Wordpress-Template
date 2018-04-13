<?php get_header(); ?>

<!-- Show Page with Loop -->
<?php
  if ( have_posts()) :
    while (have_posts()) : the_post();
?>

<!-- Show Content For Each Page -->

<!-- Content -->
<section id="body-page" class="body-page">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <div class="title-card center">
              <a href="<?php the_permalink() ?>">
                <h1> <?php the_title() ?> </h1>
              </a>
              <div class="title-line"></div>
            </div>
            <div class="content-card">
              <p> <?php the_content() ?> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Handle if no post & End loop -->
<?php
    endwhile;
  else : echo('Trang này không tồn tại');
  endif;
?>

<?php get_footer(); ?>

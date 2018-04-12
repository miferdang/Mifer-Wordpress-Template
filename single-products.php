<?php get_header(); ?>

<!-- Header -->

<!-- Show Article Post -->
<section id="body-product" class="body-page">
  <div class="container">
    <!-- Show Content Post -->
    <div class="row">
      <!-- Column content post -->
      <div class="col s12">
        <div class="card">
            <div class="card-content">
              <div class="time-card center">
                <span> <?php the_time('F j, Y'); ?> - <?php the_time('g:i a'); ?></span>
              </div>
              <div class="title-card center">
                <a href="<?php the_permalink() ?>">
                  <h1> <?php the_title() ?> </h1>
                </a>
                <div class="title-line"></div>
              </div>
              <div class="content-card">
                <!-- Loop list post to show content of article -->
                <?php if (have_posts()) {
                  while (have_posts()) : the_post();
                ?>
                  <p> <?php the_content() ?> </p>
                <?php endwhile;
                } else {
                  echo('This Article is not exist');
                };
                ?>
              </div>
            </div>
          </div>
        <div id="comment-card" class="card">
          <!-- Comments -->
          <?php if (comments_open() || get_comments_number()) { ?>
            <div class="card-content">
              <?php comments_template(); ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<article class="card">
  <div class="card-content">
    <div class="row">
      <div class="card-img col s12 m4">
        <a href="<?php the_permalink() ?>">
          <!-- Check if post have thumbnail will show this thumbnail -->
          <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url() ?>">
          <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/thumbnail_post.jpg">
          <?php } ?>
        </a>
      </div>
      <!-- Content Post Card -->
      <div class="card-info col s12 m8">
        <div class="title-card">
          <a href="<?php the_permalink() ?>">
            <h5> <?php the_title() ?> </h5>
          </a>
        </div>
        <div class="time-card">
          <i class="far fa-clock"></i>
          <span> <?php the_time('F j, Y'); ?> . <?php the_time('g:i a'); ?></span>
        </div>
        <div class="content-card">
          <p> <?php the_excerpt() ?> </p>
        </div>
      </div>
    </div>
  </div>
</article>

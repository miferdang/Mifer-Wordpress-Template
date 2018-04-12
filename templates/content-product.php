<article class="card-product col s12 m6 l4">
  <div class="card">
    <div class="row">
      <div class="card-img">
        <a href="<?php the_permalink() ?>">
          <!-- Check if post have thumbnail will show this thumbnail -->
          <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url() ?>">
          <?php } ?>
        </a>
      </div>
      <!-- Content Post Card -->
      <div class="card-info">
        <div class="title-card">
          <a href="<?php the_permalink() ?>">
            <h5> <?php the_title() ?> </h5>
          </a>
        </div>
        <div class="time-card">
          <i class="far fa-clock"></i>
          <span> <?php the_time('F j, Y'); ?> . <?php the_time('g:i a'); ?></span>
        </div>
      </div>
    </div>
  </div>
</article>

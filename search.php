<?php get_header() ?>

<section id="body-search" class="body-page">
  <div class="container">
    <div class="row search-page-container">
      <div class="title-card center">
        <h1> Tìm kiếm bài viết và sản phẩm</h1>
        <div class="title-line"></div>
      </div>
      <div class="search-form" id="search-form-page">
        <?php get_search_form(); ?>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="search-result card">
          <div class="card-content">
            <a href="<?php the_permalink(); ?>">
              <h5 class="search-post-title"><?php the_title(); ?></h5>
            </a>
            <p> <?php the_excerpt(); ?> </p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php get_footer() ?>

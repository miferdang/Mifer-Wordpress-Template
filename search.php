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
      <div class="search-result card">
        <div class="card-content">
          <?php if ( have_posts() ) {
            while ( have_posts() ) : the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <h5 class="search-post-title"><?php the_title(); ?></h5>
              </a>
              <p> <?php the_excerpt(); ?> </p>
            <?php endwhile;
          } else { ?>
            <p> Không có kết quả tìm kiếm nào khớp với truy vấn của bạn. </p>
          <?php }; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>

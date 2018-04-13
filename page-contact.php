<?php get_header(); ?>

<!-- Show Page with Loop -->
<?php
  if ( have_posts()) :
    while (have_posts()) : the_post();
?>

<!-- Show Content For Each Page -->

<!-- Content -->
<section id="body-contact" class="body-page">
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-content">
          <div class="title-card center">
            <a href="<?php the_permalink() ?>">
              <h1> <?php the_title() ?> </h1>
            </a>
            <div class="title-line"></div>
          </div>
          <div class="content-card">
            <div class="row">
              <div class="col s12">
              <form method="POST"
                target="hidden_iframe"
                onsubmit="submitted=true;"
                action="https://docs.google.com/forms/d/e/1FAIpQLSdmAQKqz7mTFiliGkmBPiov9nClMPD27tsJXNaAV7hSHmNe2g/formResponse">
                <div class="row">
                  <div class="input-form col s12 m6">
                    <input name="entry.359572854" placeholder="Your name" type="text" class="validate">
                  </div>
                  <div class="input-form col s12 m6">
                    <input name="entry.1505788218" placeholder="Your email address" type="email" class="validate">
                  </div>
                </div>
                <div class="row textarea-form">
                  <textarea name="entry.2039422223" placeholder="Your message" type="text" class="validate"></textarea>
                </div>
                <div class="row center">
                  <button type="submit" class="btn-primary" onclick="submitContact()">
                    Submit
                  </button>
                </div>
              </form>
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

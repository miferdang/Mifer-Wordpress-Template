<!-- Banner -->
<div class="container">
  <div class="row">
    <div class="col m12 l4">
      <div class="title-header">
        <a href="http://miferdang.freetzi.com"><h1> Mifer's Products </h1></a>
        <p class="left"> This is product page for all my designs and researchs  ! </p>
      </div>
    </div>
    <div class="col m12 l8">
      <img class="img-banner" alt="header-banner" title="img-banner" src="<?php echo get_template_directory_uri(); ?>/assets/mifer_banner.jpg" />
    </div>
  </div>
</div>
<nav class="list-menu">
  <div class="container">
    <button class="left btn-menu" data-id="catemenu-mobile" onclick="showMenuMobile(this.getAttribute('data-id'))">
      <i class="fas fa-angle-right"></i>
    </button>
    <ul class="left hide-on-med-and-down">
      <?php wp_nav_menu(array( 'theme_location' => 'product_menu' )); ?>
    </ul>
    <ul class="right social-menu">
      <li><a title="linkedin" target=_blank href="https://www.linkedin.com/in/dang-phuong-mifer-45749915a/">
        <i class="fab fa-linkedin-in"></i>
      </a></li>
      <li><a title="facebook" target=_blank href="https://www.facebook.com/miferdang">
        <i class="fab fa-facebook-f"></i>
      </a></li>
      <li><a title="blogger" target=_blank href="http://melodiesofmifer.blogspot.com">
        <i class="fab fa-blogger-b"></i>
      </a></li>
      <li><a title="youtube" target=_blank href="https://www.youtube.com/channel/UC3cSKQ3ekeD7DYe7o4TTUWQ?view_as=subscriber">
        <i class="fab fa-youtube"></i>
      </a></li>
      <li><a title="github" target=_blank href="https://github.com/miferdang">
        <i class="fab fa-github"></i>
      </a></li>
    </ul>
  </div>
</nav>

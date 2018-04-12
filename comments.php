<?php // return if cmt required password to see
if ( post_password_required() )  return;
?>

<div id="comments">
  <?php if ( have_comments() ) : ?>
    <h6> Bài viết này có <?php echo get_comments_number() ?> bình luận </h6>
    <div>
      <?php
        wp_list_comments( array(
          'style'       => 'ol',
          'short_ping'  => true,
          'avatar_size' => 44,
          'reply_text'  => 'Bình luận',
        ) );
      ?>
    </div>
    <?php
      // Are there comments to navigate through?
      if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
      <div class="navigation row">
        <div class="nav-previous">
          <?php previous_comments_link( __( '&larr; Bình luận trước ' ) ); ?>
        </div>
        <div class="nav-next">
          <?php next_comments_link( __( 'Bình luận sau &rarr;' ) ); ?>
        </div>
      </div>
      <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
      <p class="no-comments"><?php _e( 'Comments are closed.' ); ?></p>
    <?php endif; ?>

  <?php  else : // have_comments()?>
  <h6> Bạn hãy là người đầu tiên bình luận cho bài viết này ! </h6> </br>
  <?php endif; // have_comments() ?>
<?php comment_form(); ?>

</div><!-- #comments -->

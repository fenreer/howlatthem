<? include_once 'comment.php'; ?>
<section id="comments" class="comments-area">
<? if (have_comments ()): ?>
  <h3 class="comments-title"><? _e('Official report and discussion', 'hat'); ?></h3>
  <ul class="commentlist">
     <? wp_list_comments( array( 'callback' => 'hat_comment', 'style' => 'ul' ) ); ?>
  </ul><!-- .commentlist -->
  <? if (get_comment_pages_count () > 1 && get_option ('page_comments')): ?>
  <nav id="comment-nav-below" class="navigation" role="navigation">
    <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'hat' ); ?></h1>
    <div class="pagination">
      <ul>
        <li class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'hat' ) ); ?></li>
        <li class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'hat' ) ); ?></li>
      </ul>
    </div>
  </nav>
  <? endif; ?>
  <? if (!comments_open() && get_comments_number()): ?>
    <p class="nocomments"><?php _e( 'Comments are closed.' , 'hat' ); ?></p>
  <?php endif; ?>
<?php endif; ?>
  <?php comment_form(); ?>
</section>
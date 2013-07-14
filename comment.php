<?

function hat_comment ($comment, $args, $depth) 
{
  $GLOBALS['comment'] = $comment;

  global $post;
?>
  <li <? comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
    <article id="comment-<?php comment_ID(); ?>" class="comment">
      <header class="comment-meta comment-author vcard">
        <?= get_avatar( $comment, 44 ); ?>
        <? printf('<cite class="fn">%1$s %2$s</cite>', get_comment_author_link(),( $comment->user_id === $post->post_author ) ? '<span> ' . __( 'Wolf Pac Moderator', 'hat' ) . '</span>' : ''); ?>
        <? printf('<a href="%1$s"><time datetime="%2$s">%3$s</time></a>', esc_url (get_comment_link ($comment->comment_ID)), get_comment_time( 'c' ), sprintf( __( '%1$s at %2$s', 'hat' ), get_comment_date (), get_comment_time ())); ?>
      </header><!-- .comment-meta -->
      <? if ('0' == $comment->comment_approved) : ?>
        <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'hat' ); ?></p>
      <?php endif; ?>
      <section class="comment-content comment">
        <?php comment_text(); ?>
        <?php edit_comment_link( __( 'Edit', 'hat' ), '<p class="edit-link">', '</p>' ); ?>
      </section><!-- .comment-content -->
      <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'hat' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
      </div><!-- .reply -->
    </article><!-- #comment-## -->
  </li>
<?
}


<?

$args = array (
  'posts_per_page' => 1,
  'post__in'  => get_option( 'sticky_posts' ),
  'ignore_sticky_posts' => 1
);

query_posts ($args);

?>
<? while (have_posts ()): the_post (); ?>
<article id="post-<? the_ID ();?>" <? post_class (); ?>>
  <header>
    <h1><a href="<? the_permalink (); ?>" title="<? the_title (); ?>"><? the_title (); ?></a></h1>
  </header>
  <p><? the_excerpt (); ?></p>
  <footer>
    <a href="<? the_permalink (); ?>" title="<? the_title (); ?>"></small><? _e('Read more about: ') ?><? the_title(); ?></small></a>
  </footer>
</article>
<? endwhile; ?>
<? wp_reset_query (); ?>
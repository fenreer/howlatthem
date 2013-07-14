<? while (have_posts ()): the_post (); ?>
<article id="post-<? the_ID (); ?>" <? post_class ();?>>
  <h1><a href="<? the_permalink (); ?>" title="<? the_title (); ?>"><? the_title (); ?></a></h1>
  <p><? the_content (); ?></p>
</article>
<? endwhile; ?>
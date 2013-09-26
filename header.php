<!DOCTYPE html>
<html lang="<?php bloginfo ('language'); ?>">
<head>
  <title><?php bloginfo ('name'); ?></title>
  <meta charset='UTF-8'>
  <meta name="description" content="<?php bloginfo ('description'); ?>">
  <meta name="keywords" content="<?php echo get_option ('hat-keywords', ''); ?>">
  <meta name="robots" content="all">
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head (); ?>
</head>
<body <?php body_class (); ?>>

  <div class="navbar-wrapper">
    <div class="container">
      <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <header class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url ('/'); ?>" title="<?php _e('Home Page', 'hat'); ?>"><?php bloginfo ('name'); ?></a>
          </header>
          <aside class="navbar-collapse collapse">
            <?php if (is_user_logged_in()): $user = wp_get_current_user();?>
              <p class="navbar-text pull-right hidden-xs"><?php _e('Hello, ', 'hat'); ?><a href="#" class="navbar-link"><?php echo $user->user_login; ?></a></p>
            <?php else: ?>
              <form class="navbar-form navbar-right" role="login" method="post" action="<?php echo home_url ('/wp-login.php'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control" name="log" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="pwd" placeholder="Password">
                </div>
                <input type="hidden" name="redirect_to" value="<?php echo home_url ('/'); ?>">
                <button type="submit" class="btn btn-default" name="wp-submit">Login</button>
              </form>
            <?php endif; ?>
          </aside>
        </div><!-- navbar-nav -->
      </div><!-- .navbar -->
    </div><!-- .container -->
  </div><!-- .navbar-wrapper -->

<!DOCTYPE html>
<html lang="<? bloginfo ('language'); ?>">
<head>
  <title><? bloginfo ('name'); ?></title>
  <meta charset='UTF-8'>
  <meta name="description" content="<? bloginfo ('description'); ?>">
  <meta name="keywords" content="<?= get_option ('hat-keywords', ''); ?>">
  <meta name="robots" content="all">
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <? wp_head (); ?>
</head>
<body <? body_class (); ?>>
  <div class="container">
    <div class="row">
      <div class="span9">
        <header id="header-main" class="row page-header">
          <h1><a href="<?= site_url ();?>" title="<? bloginfo ('name'); ?>"><? bloginfo ('name'); ?></a></h1>
          <h2><a href="<?= site_url ();?>" title="<? bloginfo ('name'); ?>"><? bloginfo ('description'); ?></a></h2>
          <a id="banner" href="<?= site_url ();?>" title="<? bloginfo ('name'); ?>"><img src="<? header_image(); ?>" height="<?=get_custom_header()->height; ?>" width="<?= get_custom_header()->width; ?>" alt="" /></a>
          <? if (is_user_logged_in ()): ?>
            <? $user = wp_get_current_user (); ?>
            <div id="welcome"><small><?= __('Welcome', 'hat'); ?> <?= $user->display_name; ?>!</small></div>
          <? else: ?>
            <div id="welcome"><small>
              <a href="<?= wp_login_url (home_url ()); ?>" title="<? _e('Login', 'hat'); ?>"><? _e('Login', 'hat'); ?></a> <? _e('or', 'hat'); ?>
              <a href="<?= site_url('/wp-login.php?action=register&redirect_to=' . home_url ()); ?>" title="<? _e('Register', 'hat'); ?>"><? _e('Register', 'hat');?></a>
            </small></div>
          <? endif; ?>
        </header>
        <nav id="main-nav">
          <? wp_nav_menu (array ('theme_location' => 'main-nav')); ?>
        </nav>
        <div class="clearfix"></div>


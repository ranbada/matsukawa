<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="canonical" href="http://localhost:8080" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="author" content="matsuda" />
    <?php if(is_home()): ?>
    <meta property="og:url" content="<?php bloginfo('url') ?>">
    <meta property="og:title" content="<?php bloginfo('name') ?>">
    <?php else: ?>
    <meta property="og:url" content="<?php the_permalink() ?>">
    <meta property="og:title" content="<?php wp_title('', true, 'right'); ?> | <?php bloginfo('name') ?>">
    <?php endif; ?>
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website" />
    <meta property="og:site_name"  content="<?php bloginfo('name') ?>">
    <meta property="og:description" content="<?php bloginfo('description') ?>">
    <meta property="og:image" content="<?php echo esc_url( home_url() ); ?>/assets/img/share/facebook.png" />
    <meta name="twitter:site" content="@" />
    <meta name="twitter:creator" content="@" />
    <meta name="twitter:url" content="<?php bloginfo('url') ?>" />
    <meta name="twitter:title" content="<?php bloginfo('name') ?>" />
    <meta name="twitter:description" content="<?php bloginfo('description') ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="<?php echo esc_url( home_url() ); ?>/assets/img/share/twitter.png"/>
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name') ?>" />
    <meta name="google-site-verification" content="EtrFoSvI9Z93niDSuYsW_jeOuABE9chFXaOGmUOwsNg" />
    <link rel="shortcut icon" href="<?php echo esc_url( home_url() ); ?>/assets/share/favicon.ico" />
    <link rel="stylesheet" href="<?php echo esc_url( home_url() ); ?>/assets/css/style.css" />
	<?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
    <div id="wrapper">
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/includes/img/favicon.png" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--FONTS-->
    <script src="https://use.typekit.net/zrm8fyc.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/includes/css/animate.css">
	<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-10573690-2', 'auto');
  ga('send', 'pageview');
 
</script>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

  <header class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 col-xs-12">
          <a href="<?php echo get_site_url(); ?>" class="logo" title="RJW Engineering"></a>
        </div>
        <div class="col-md-10">
          <div id="top_right" class="hidden-xs hidden-sm">
            <div class="social_area">
                <a href="https://twitter.com/RJW_Engineering" title="Twitter" target="_blank" class="twitter"></a>
                <a href="https://www.facebook.com/pages/RJW-Engineering/1620788144816897?fref=ts" target="_blank" title="Facebook" class="facebook"></a>
                <a href="https://plus.google.com/+Rjwengineering/about" title="Google" target="_blank" class="google"></a>
                <a href="http://uk.linkedin.com/pub/rjw-engineering/67/b56/531" target="_blank" title="LinkedIn" class="linkedin"></a>
              <a href="<?php echo get_site_url(); ?>/locations" class="btn btn-info">Our Locations</a>
            </div>
            <div class="info_right">
              <h2><small>Call our freephone...</small>0800 999 0200</h2>
            </div>
          </div>
          <!--MAIN MENU-->
            <nav class="navbar navbar-default">
              <div>
                <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
              </div><!-- /.container-fluid -->
            </nav>
          <!--END OF MAIN MENU-->
        </div>
      </div>
    </div>
  </header>



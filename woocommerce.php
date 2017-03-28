<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

  <!--START OF BANNER AREA-->
  <div id="internal_banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Shop Motors &amp; Inverters</h1>
        </div>
      </div>
    </div>
  </div>
  <!--END OF BANNER AREA-->
  <!--CONTENT AREA-->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div id="shop-sidebar">
          <?php get_sidebar() ?>
        </div>
        <h4>Payments secured with</h4>
        <img src="<?php bloginfo('template_directory'); ?>/includes/img/sagepay.jpg" alt="Payments secured with SagePay" />
      </div>
      <div class="col-md-9 store-page">
        <?php woocommerce_content(); ?>
      </div>
    </div>
  </div>
  <!--END OF CONTENT AREA-->

<?php get_footer(); ?>

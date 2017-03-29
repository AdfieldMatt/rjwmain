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
  <?php if(get_field('main_banner')){ ?>
    <div id="internal_user_banner" style="background:url('<?php the_field('main_banner')?>'); background-size:cover;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content animated fadeIn">
              <?php the_field('banner_text'); ?>
            </div>
          </div>
        </div>
      </div>
      <?php if(get_field('overlay') == 1){ ?>
        <div class="overlay"></div>
      <?php } ?>
    </div>
  <?php }else{ ?>
  <div id="internal_banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="animated fadeIn"><?php the_title() ?></h1>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <!--END OF BANNER AREA-->

<div id="intro_area">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_excerpt(); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() )
            comments_template();
        ?>

      <?php endwhile; // end of the loop. ?>
      </div>
      <div class="col-md-offset-5 col-md-2">
        <a href="#jump" class="btn btn-danger content-show">Read More <i class="fa fa-caret-down" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>

  <!--CONTENT AREA-->
  <div class="container">
    <div class="row">
      <div class="col-md-12 jump">
        <div id="content">
          <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() )
            comments_template();
        ?>

      <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 no-padding">
      <div id="news_area">
        <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <div class="post">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h4>Posted by <?php the_author(); ?> <span class="readmore"><a href="<?php the_permalink(); ?>" class="readmore">Read More</a></span></h4>
          </div>
        <?php endwhile;?>
      </div>
    </div>
    <div class="col-md-6 no-padding">
      <div id="call_area">
        <h3>Would you like us to call you?</h3>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="fullName" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" id="enquiry" placeholder="What would you like to discus?"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Request a Callback</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="service_area_grid">
      <div class="service_area_item" style="background:url('<?php bloginfo('template_directory'); ?>/includes/img/conveyor-oil.jpg'); background-size:cover;">
        <div class="overlay">
          <h3>Repairs</h3>
          <a href="#" class="btn-primary">Discover</a>
        </div>
      </div>
      <div class="service_area_item" style="background:url('<?php bloginfo('template_directory'); ?>/includes/img/industrial-fan.jpg'); background-size:cover;">
        <div class="overlay">
          <h3>Maintenance</h3>
          <a href="#" class="btn-primary">Discover</a>
        </div>
      </div>
      <div class="service_area_item" style="background:url('<?php bloginfo('template_directory'); ?>/includes/img/factory-motor.jpg'); background-size:cover;">
        <div class="overlay">
          <h3>Manufacturing</h3>
          <a href="#" class="btn-primary">Discover</a>
        </div>
      </div>
    </div>
    <div class="service_area_grid">
      <div class="service_area_item"style="background:url('<?php bloginfo('template_directory'); ?>/includes/img/product-motors.jpg'); background-size:cover;">
        <div class="overlay">
          <h3>Product Sales</h3>
          <a href="#" class="btn-primary">Discover</a>
        </div>
      </div>
      <div class="service_area_item"style="background:url('<?php bloginfo('template_directory'); ?>/includes/img/wind-turbine.jpg'); background-size:cover;">
        <div class="overlay">
          <h3>Energy Saving</h3>
          <a href="#" class="btn-primary">Discover</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

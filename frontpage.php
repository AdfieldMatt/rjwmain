<?php
/*
Template Name: Homepage
*/
?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

<div id="home_banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 no-padding">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner animated fadeIn" role="listbox">
              <div class="item active">
                <div class="carousel-caption">
                  <h2>MOTOR REPAIRS</h2>
                  <h3>24/7 HOUR CALL OUT</h3>
                  <p>One of the largest independently owned electric motor and rotating equipment repairers in the UK.</p>
                  <a href="#" class="btn btn-lg btn-primary">RJW Repairs</a> 
                  <a href="#" class="btn btn-lg btn-default">Shop Motors</a>
                </div>
                <div class="video_overlay">
                  <video autoplay="" loop="" class="fillWidth fadeIn animated" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
                      <source src="<?php bloginfo('template_directory'); ?>/includes/video/2025_4789.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
                  </video>
                </div>
              </div>
              <div class="item">
                <div class="carousel-caption">
                  <h2>MOTOR REPAIRS</h2>
                  <h3>24/7 HOUR CALL OUT</h3>
                  <p>One of the largest independently owned electric motor and rotating equipment repairers in the UK.</p>
                  <a href="#" class="btn btn-lg btn-primary">RJW Repairs</a> 
                  <a href="#" class="btn btn-lg btn-default">Shop Motors</a>
                </div>
                <div class="video_overlay">
                  <video autoplay="" loop="" class="fillWidth fadeIn animated" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
                      <source src="<?php bloginfo('template_directory'); ?>/includes/video/2025_4789.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
                  </video>
                </div>
              </div>
              <div class="item">
                <div class="carousel-caption">
                  <h2>MOTOR REPAIRS</h2>
                  <h3>24/7 HOUR CALL OUT</h3>
                  <p>One of the largest independently owned electric motor and rotating equipment repairers in the UK.</p>
                  <a href="#" class="btn btn-lg btn-primary">RJW Repairs</a> 
                  <a href="#" class="btn btn-lg btn-default">Shop Motors</a>
                </div>
                <div class="video_overlay">
                  <video autoplay="" loop="" class="fillWidth fadeIn animated" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
                      <source src="<?php bloginfo('template_directory'); ?>/includes/video/2025_4789.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
                  </video>
                </div>
              </div>
            </div>
          </div>
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

<div id="intro_area">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <h2>Rewinds &amp; J. Windsor</h2>
        <p>Welcome to the home of Rewinds &amp; J. Windsor, one of the largest independently owned electric motor and rotating equipment repairers in the UK. From mechanical and electrical repairs to electrical manufacturing and sales, at Rewinds &amp; J. Windsor we have been setting the standards for engineering solutions for over 60 years. </p>
        <span class="arrow bounce"></span>
      </div>
      <div class="col-md-offset-2 col-md-8">
        <div id="callusBlock">
          <div class="left">
            <h2>Ready to talk with RJW?</h2>
          </div>
          <div class="right">
            <a href="<?php echo get_site_url(); ?>/contact" class="btn btn-primary">Get in touch <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="shop_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Shop Motors &amp; Inverters</h2>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product">
          <a href="https://www.motorsandinverters.co.uk/category/ac-motors"><img src="<?php bloginfo('template_directory'); ?>/includes/img/ac-motors.jpg" alt="Shop for AC Motors with RJW"></a>
        </div>
        <a href="https://www.motorsandinverters.co.uk/category/ac-motors" class="btn btn-lg btn-primary">AC Motors</a> 
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product">
          <a href="https://www.motorsandinverters.co.uk/category/ac-inverters"><img src="<?php bloginfo('template_directory'); ?>/includes/img/ac-inverters.jpg" alt="Shop for AC Inverters with RJW"></a>
        </div>
        <a href="https://www.motorsandinverters.co.uk/category/ac-inverters" class="btn btn-lg btn-primary">AC Inverters</a> 
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product">
          <a href="https://www.motorsandinverters.co.uk/category/phase-converters"><img src="<?php bloginfo('template_directory'); ?>/includes/img/phase-converters.jpg" alt="Shop for Phase Converters with RJW"></a>
        </div>
        <a href="https://www.motorsandinverters.co.uk/category/phase-converters" class="btn btn-lg btn-primary">Phase Converters</a> 
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

<?php get_footer(); ?>
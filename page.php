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
            <div class="content">
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
          <h1><?php the_title() ?></h1>
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
        <?php while (have_posts()) : the_post(); ?>
          <div class="post">
            <h3><?php the_title(); ?></h3>
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

  <div class="container-fluid hidden-xs">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
        <div class="grid">
          <figure class="effect-zoe">
            <h3>Motor Repairs</h3>
            <img src="<?php bloginfo('template_directory'); ?>/includes/img/conveyor-oil.jpg" alt="Food Industry Conveyor Repairs"/>
            <figcaption>
              <h2>Motor <span>Repairs</span></h2>
              <p class="icon-links">
                <a href="#"><span class="icon-eye"></span></a>
              </p>
              <p class="description">The electrical department specialises in electrically driven industrial rotating equipment...</p>
            </figcaption>     
          </figure>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
        <div class="grid">
          <figure class="effect-zoe">
            <h3>Maintenance</h3>
            <img src="<?php bloginfo('template_directory'); ?>/includes/img/industrial-fan.jpg" alt="Industrial Fans"/>
            <figcaption>
              <h2>Maintenance</h2>
              <p class="icon-links">
                <a href="#"><span class="icon-eye"></span></a>
              </p>
              <p class="description">With maintenance crews being reduced and under more pressure to cover a wide range of plant and equipment...</p>
            </figcaption>     
          </figure>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
        <div class="grid">
          <figure class="effect-zoe">
            <h3>Manufacturing</h3>
            <img src="<?php bloginfo('template_directory'); ?>/includes/img/factory-motor.jpg" alt="Factory Motors"/>
            <figcaption>
              <h2>Manufacturing</h2>
              <p class="icon-links">
                <a href="#"><span class="icon-eye"></span></a>
              </p>
              <p class="description">Where motor or generators have special requirements due to performance criteria, size or environment...</p>
            </figcaption>     
          </figure>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
        <div class="grid">
          <figure class="effect-zoe">
            <h3>Product Sales</h3>
            <img src="<?php bloginfo('template_directory'); ?>/includes/img/product-motors.jpg" alt="Product Motors"/>
            <figcaption>
              <h2>Product <span>Sales</span></h2>
              <p class="icon-links">
                <a href="#"><span class="icon-eye"></span></a>
              </p>
              <p class="description">Our new sales department of manufacturer trained, experienced internal sales engineers is dedicated to the sales of new machines...</p>
            </figcaption>     
          </figure>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
        <div class="grid">
          <figure class="effect-zoe">
            <h3>Energy Saving</h3>
            <img src="<?php bloginfo('template_directory'); ?>/includes/img/wind-turbine.jpg" alt="Wind Turbines Energy Saving"/>
            <figcaption>
              <h2>Energy <span>Saving</span></h2>
              <p class="icon-links">
                <a href="#"><span class="icon-eye"></span></a>
              </p>
              <p class="description">It is a little known fact that an electric motor uses up to 100 times its purchase cost in electricity during it’s working life...</p>
            </figcaption>     
          </figure>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

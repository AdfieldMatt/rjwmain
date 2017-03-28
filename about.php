<?php
/*
Template Name: About
*/
?>
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

<!--NOISE BARS-->
  <div id="noise-right" class="hidden-sm hidden-xs">
    <div class="bar-one animated slideInRight"></div>
    <div class="bar-two animated slideInRight"></div>
    <div class="bar-three animated slideInRight"></div>
  </div>

  <div id="noise-left" class="hidden-sm hidden-xs">
    <div class="bar-one animated slideInLeft"></div>
    <div class="bar-two animated slideInLeft"></div>
    <div class="bar-three animated slideInLeft"></div>
  </div>
  <!--HOMEPAGE BANNER AREA-->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="banner-area">
          <img src="<?php bloginfo('template_directory'); ?>/includes/img/banner_internal.jpg" alt="Silentair broadcast" />
        </div>
      </div>
    </div>
  </div>

  <!--CALL TO ACTION BOXES-->

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 contact">
        <div id="content">
			<?php while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

			  	<?php the_content(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>
		</div>
      </div>
      <div class="col-md-4 hidden-sm">
        <div id="broadcast"><a href="<?php echo get_site_url(); ?>/what-we-do/silentair-ltd/"></a></div>
        <div id="solutions"><a href="<?php echo get_site_url(); ?>/what-we-do/solutions/"></a></div>
        <div id="systems"><a href="<?php echo get_site_url(); ?>/what-we-do/systems/"></a></div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>

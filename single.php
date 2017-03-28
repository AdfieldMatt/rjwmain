<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

  <!--START OF BANNER AREA-->
  <div id="internal_banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="<?php bloginfo('template_directory'); ?>/includes/img/shop-internal-banner.jpg" class="max-img" alt="Industrial Pain from Andrews Coatings">
        </div>
      </div>
    </div>
  </div>
  <!--END OF BANNER AREA-->

  <!--CALL TO ACTION BOXES-->

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div id="shop-sidebar">
          <?php get_sidebar() ?>
        </div>
      </div>
      <div class="col-md-9 contact">
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
    </div>
  </div>

<?php get_footer(); ?>
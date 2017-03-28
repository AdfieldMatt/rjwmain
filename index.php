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

<div class="container">
    <div class="row">
		<div class="col-md-12">
			<div id="content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><em><?php the_time('l, F jS, Y'); ?></em></p>
					<p><?php the_excerpt(); ?></p>
					<hr>
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, there are no posts.'); ?></p>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>
<div id="intro_area">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <h2>Not quite sure?</h2>
          <p>Are you struggling to find what you are looking for? Our happy and knowledgable team are here to help. Call us now on <span class="number">0800 999 0200</span>.</p>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
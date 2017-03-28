<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
      <div class="col-md-8 col-sm-6 contact">
        <div id="content">

		<?php if ( have_posts() ) : ?>
					<?php
						if ( is_category() ) :?>
							<h1><?php single_cat_title(); ?></h1>

						<?php elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', '_tk' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', '_tk' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', '_tk' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', '_tk' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', '_tk' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', '_tk');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', '_tk' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', '_tk' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', '_tk' );

						else :
							_e( 'Archives', '_tk' );

						endif;
					?>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php _tk_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>
		</div>
      </div>
      <div class="col-md-4 col-sm-4 sidebar-stories">
      	<iframe width="560" height="315" src="https://www.youtube.com/embed/aN4rAEaU0n8?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        <div id="broadcast"><a href="<?php echo get_site_url(); ?>/what-we-do/silentair-ltd/"></a></div>
        <div id="solutions"><a href="<?php echo get_site_url(); ?>/what-we-do/solutions/"></a></div>
        <div id="systems"><a href="<?php echo get_site_url(); ?>/what-we-do/systems/"></a></div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

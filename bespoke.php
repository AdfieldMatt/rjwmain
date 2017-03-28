<?php
/*
Template Name: Bespoke
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

<!--SOCIAL LINKS-->

  <div id="social" class="hidden-sm hidden-xs">
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
  </div>

  <!--BESPOKE-->
  <div id="bespoke">
    <div class="bespoke-points">
      <div class="pol_one animated fadeInLeft wow" data-wow-delay="0.5s"></div>
      <div class="pol_two animated rollIn wow" data-wow-delay="1s"></div>
      <div class="pol_three animated fadeInRight wow" data-wow-delay="1.5s"></div>
      <div class="pol_four animated rollIn wow" data-wow-delay="2s"></div>
      <div class="pol_five animated rollIn wow" data-wow-delay="2.5s"></div>
      <div class="pol_six animated fadeInRight wow" data-wow-delay="3s"></div>
      <div class="pol_enquiry animated flash wow" data-wow-delay="3.5s">
        <a href="../contact-us"></a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Introduction</a></li>
          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Key Benefits</a></li>
          <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Applications</a></li>
          <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Enquire</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div id="blue-area">
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
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
            <div class="col-md-5">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/aN4rAEaU0n8?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="content">
                <?php the_field('key_benefits'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="messages">
        <div class="container">
          <div id="content">
            <div class="row">
              <div class="col-md-12">
                <h2>Applications</h2>
                <p>Take a look at some of the environments that our besoke solutions can be used.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <a class="hotels" href="<?php echo get_site_url(); ?>/hotels">
                  <span class="overlap">Hotels</span>
                </a>
              </div>
              <div class="col-md-3">
                <a class="healthcare" href="<?php echo get_site_url(); ?>/healthcare">
                  <span class="overlap">Healthcare</span>
                </a>
              </div>
              <div class="col-md-3">
                <a class="offices" href="<?php echo get_site_url(); ?>/what-we-do/systems/office-and-boardrooms/">
                  <span class="overlap">Offices</span>
                </a>
              </div>
              <div class="col-md-3">
                <a class="datacentre" href="<?php echo get_site_url(); ?>/datacentre">
                  <span class="overlap">Datacentres</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div id="content">
                <h2>Get in Touch</h2>
                <?php echo do_shortcode( '[contact-form-7 id="15" title="Contact form 1"]' ); ?>
              </div>
            </div>
            <div class="col-md-4">
              <div id="contact_box">
                <h3>HOW TO FIND US</h3>
                <p>Silentair Ltd<br> Unit 2E Elland Road Industrial Park<br> Elland Way<br> Leeds<br> LS11 0EY</p>
                <p>Tel Number<br> +44 (0)1132 708873</p>
                <p>Email:<br> <span id="cloak41837"><a href="mailto:info@silentair.co.uk">info@silentair.co.uk</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>

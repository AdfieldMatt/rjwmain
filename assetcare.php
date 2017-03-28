<?php
/*
Template Name: Asset Care
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

<div id="asset_banner_main">
  <div id="overlay">
    <div id="upper_cost">
      <span id="visible_cost">20%</span>
      <span id="visible_cost_text">Visible Cost</span>
    </div>
    <div id="lower_cost">
      <span id="invisible_cost">80%</span>
      <span id="invisible_cost_text">Invisible Cost</span>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="tagline">
            <img src="<?php bloginfo('template_directory'); ?>/includes/img/ac_logo.png" alt="AssetCare by RJW" style="width:400px; height:auto; margin:0px auto; display:block;">
            <h1>Boost your bottom line</h1>
            <h2>Protect your reputation</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="tagline_two">
            <h2>It’s what you can’t see that will cost you money… Or worse &ndash; your reputation!</h2>
            <h2 class="down-arrow"><i class="fa fa-angle-double-down" aria-hidden="true"></i></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="why_do_you">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Why do you need an AssetCare Programme?</h2>
        <p>Our asset care programme will significantly reduce your total cost of ownership by reducing costs associated with unexpected failures, untimely parts purchasing and excessive energy consumption.</p>
        <h3>Guaranteed saving = 10% in the first year.</h3>
      </div>
      <div class="col-md-4">
        <img src="<?php bloginfo('template_directory'); ?>/includes/img/10_percent.png" alt="10% Saving in the first year" />
      </div>
    </div>
  </div>
</div>

<div id="what_is_the">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="<?php bloginfo('template_directory'); ?>/includes/img/10_percent.png" alt="10% Saving in the first year" />
      </div>
      <div class="col-md-8">
        <h2>What is the RJW AssetCare Programme</h2>
        <h3>Ensure consistent delivery day after day, by improving your production efficiency.</h3>
        <ul> 
          <li>Site audit by fully qualified staff</li>
          <li>Data capture</li> 
          <li>Cloud-based online client portal</li>
          <li>Condition monitoring</li>
          <li>24/7 asset repair service</li>
          <li>Regular ongoing maintenance</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div id="register_area">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Register your interest...</h2>
        <h3>Behind every great product...is a great company.
        <p>In every great company there are machines that are working efficiently, 24/7....because the company has implemented an asset care programme.</p>
        <img src="<?php bloginfo('template_directory'); ?>/includes/img/hand_arrow.png" alt="Fill out the form to the right..." style="width:250px; height:auto; float:right;" />
      </div>
      <div class="col-md-6">
        <div id="register_box">
          <?php echo do_shortcode('[contact-form-7 id="1864" title="AssetCare"]'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

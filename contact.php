<?php
/*
Template Name: Contact
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

  <!--CALL TO ACTION BOXES-->

  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h2 id="contact-header">Get in touch...</h2>
        <?php echo do_shortcode('[contact-form-7 id="263" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
  <div id="locations">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 id="contact-header">Our locations...</h2>
        </div>
        <div class="col-md-4 col-sm-4">
          <div id="shop-sidebar">
            <h3>Head Office (Liverpool)</h3>
            <p>81 Regent Road, Liverpool L5 9SY</p>
            <p>Tel Number<br> 0151 207 2074</p>
            <p>Email:<br> <span id="cloak41837"><a href="mailto:enquiries@rjweng.com">enquiries@rjweng.com</a></span></p>
          </div>
          <div id="map_box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2377.3705307776477!2d-3.0009869480723594!3d53.42608287633797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b214d2731258b%3A0x3b31f54dd26aa337!2s81+Regent+Rd%2C+Liverpool+L5+9SY!5e0!3m2!1sen!2suk!4v1490712315746" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div id="shop-sidebar">
            <h3>Manchester</h3>
            <p>Hulton Works, Smithfold Lane, Worsley, Manchester M28 0GP</p>
            <p>Tel Number<br> 0161 702 8737</p>
            <p>Email:<br> <span id="cloak41837"><a href="mailto:enquiries@rjweng.com">enquiries@rjweng.com</a></span></p>
          </div>
          <div id="map_box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2371.714516394998!2d-2.419533083616612!3d53.52715526885269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ba88f7232c3d5%3A0xf6ec506a9389e614!2sRJW+Engineering+(MCR)+Ltd!5e0!3m2!1sen!2suk!4v1486721256632" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div id="shop-sidebar">
            <h3>Wallasey</h3>
            <p>Unit 7 &amp; 8, Westfield Rd, Poulton Ind Estate, Wallasey CH44 7HX</p>
            <p>Tel Number<br> 0151 652 1315</p>
            <p>Email:<br> <span id="cloak41837"><a href="mailto:enquiries@rjweng.com">enquiries@rjweng.com</a></span></p>
          </div>
          <div id="map_box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.460769147807!2d-3.0304150480727357!3d53.40658522779957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b26e886619ca5%3A0xd1735fbf4092823f!2sWestfield+Rd%2C+Wallasey+CH44+7HX!5e0!3m2!1sen!2suk!4v1490712407299" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </div>
  </div>
<?php get_footer(); ?>

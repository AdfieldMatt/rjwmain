<?php
/*
Template Name: Colours
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

  <!--HOMEPAGE BANNER AREA-->

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
      <div class="col-md-12 col-sm-12 contact">
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

      <!--TABBED COLOUR CHART-->

      <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#ral" aria-controls="ral" role="tab" data-toggle="tab">RAL Colours</a></li>
          <li role="presentation"><a href="#bs4800" aria-controls="bs4800" role="tab" data-toggle="tab">BS4800 Colours</a></li>
          <li role="presentation"><a href="#bs381c" aria-controls="bs381c" role="tab" data-toggle="tab">BS 381C Colours</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="ral">
            <table style="width: 100%;" border="0" cellspacing="4" cellpadding="0">
              <tbody>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#c5b98c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#c9b68b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#cdb479">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#edbd33">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#dbb22c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#c8a924">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#daa528">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#eea629">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ae8e5f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e1c749">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Green Beige"><span style="color: #333333;">1000</span></a><br></td>
              <td class="infoBox" height="24"><a title="Beige"><span style="color: #333333;">1001</span></a><br></td>
              <td class="infoBox" height="24"><a title="Sand Yellow"><span style="color: #333333;">1002</span></a><br></td>
              <td class="infoBox" height="24"><a title="Signal Yellow"><span style="color: #333333;">1003</span></a><br></td>
              <td class="infoBox" height="24"><a title="Golden Yellow"><span style="color: #333333;">1004</span></a><br></td>
              <td class="infoBox" height="24"><a title="Honey Yellow"><span style="color: #333333;">1005</span></a><br></td>
              <td class="infoBox" height="24"><a title="Maize Yellow"><span style="color: #333333;">1006</span></a><br></td>
              <td class="infoBox" height="24"><a title="Daffodil Yellow"><span style="color: #333333;">1007</span></a><br></td>
              <td class="infoBox" height="24"><a title="Brown Beige"><span style="color: #333333;">1011</span></a><br></td>
              <td class="infoBox" height="24"><a title="Lemon Yellow"><span style="color: #333333;">1012</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#efead2">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e4d6a3">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f2e1c1">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fdef61">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f6bc65">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f8ea5b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a49781">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a19a70">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ebd428">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f3d52e">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Oyster White"><span style="color: #333333;">1013</span></a><br></td>
              <td class="infoBox" height="24"><a title="Ivory"><span style="color: #333333;">1014</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Ivory"><span style="color: #333333;">1015</span></a><br></td>
              <td class="infoBox" height="24"><a title="Sulphur Yellow"><span style="color: #333333;">1016</span></a><br></td>
              <td class="infoBox" height="24"><a title="Saffron Yellow"><span style="color: #333333;">1017</span></a><br></td>
              <td class="infoBox" height="24"><a title="Zinc Yellow"><span style="color: #333333;">1018</span></a><br></td>
              <td class="infoBox" height="24"><a title="Grey Yellow"><span style="color: #333333;">1019</span></a><br></td>
              <td class="infoBox" height="24"><a title="Olive Yellow"><span style="color: #333333;">1020</span></a><br></td>
              <td class="infoBox" height="24"><a title="Rape Yellow"><span style="color: #333333;">1021</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic Yellow"><span style="color: #333333;">1023</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#b19d63">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a1923c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ffb32b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e1b738">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f9b041">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#eeac64">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#da7c32">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#be563c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#cf4633">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ff8846">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Ochre Yellow"><span style="color: #333333;">1024</span></a><br></td>
              <td class="infoBox" height="24"><a title="Curry"><span style="color: #333333;">1027</span></a><br></td>
              <td class="infoBox" height="24"><a title="Melon Yellow"><span style="color: #333333;">1028</span></a><br></td>
              <td class="infoBox" height="24"><a title="Broom Yellow"><span style="color: #333333;">1032</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dahlia Yellow"><span style="color: #333333;">1033</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pastel Yellow"><span style="color: #333333;">1034</span></a><br></td>
              <td class="infoBox" height="24"><a title="Yellow Orange"><span style="color: #333333;">2000</span></a><br></td>
              <td class="infoBox" height="24"><a title="Red Orange"><span style="color: #333333;">2001</span></a><br></td>
              <td class="infoBox" height="24"><a title="Vermillion"><span style="color: #333333;">2002</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pastel Orange"><span style="color: #333333;">2003</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#e55f38">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f2743e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e55f33">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d06138">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e6773f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#db6e59">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#b53b33">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a93129">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#af3731">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#912d2b">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Pure Orange"><span style="color: #333333;">2004</span></a><br></td>
              <td class="infoBox" height="24"><a title="Bright Red Orange"><span style="color: #333333;">2008</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic Orange"><span style="color: #333333;">2009</span></a><br></td>
              <td class="infoBox" height="24"><a title="Signal Orange"><span style="color: #333333;">2010</span></a><br></td>
              <td class="infoBox" height="24"><a title="Deep Orange"><span style="color: #333333;">2011</span></a><br></td>
              <td class="infoBox" height="24"><a title="Salmon Orange"><span style="color: #333333;">2012</span></a><br></td>
              <td class="infoBox" height="24"><a title="Flame Red"><span style="color: #333333;">3000</span></a><br></td>
              <td class="infoBox" height="24"><a title="Signal Red"><span style="color: #333333;">3001</span></a><br></td>
              <td class="infoBox" height="24"><a title="Carmine Red"><span style="color: #333333;">3002</span></a><br></td>
              <td class="infoBox" height="24"><a title="Ruby Red"><span style="color: #333333;">3003</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#633942">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#58393f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2b2f34">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5f363c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6f2734">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#c58d7f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#973535">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#da7a82">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f3afbb">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ab443f">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Purple Red"><span style="color: #333333;">3004</span></a><br></td>
              <td class="infoBox" height="24"><a title="Wine Red"><span style="color: #333333;">3005</span></a><br></td>
              <td class="infoBox" height="24"><a title="Black Red"><span style="color: #333333;">3007</span></a><br></td>
              <td class="infoBox" height="24"><a title="Oxide Red"><span style="color: #333333;">3009</span></a><br></td>
              <td class="infoBox" height="24"><a title="Brown Red"><span style="color: #333333;">3011</span></a><br></td>
              <td class="infoBox" height="24"><a title="Beige Red"><span style="color: #333333;">3012</span></a><br></td>
              <td class="infoBox" height="24"><a title="Tomato Red"><span style="color: #333333;">3013</span></a><br></td>
              <td class="infoBox" height="24"><a title="Antique Pink"><span style="color: #333333;">3014</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Pink"><span style="color: #333333;">3015</span></a><br></td>
              <td class="infoBox" height="24"><a title="Coral Red"><span style="color: #333333;">3016</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#d35f68">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d14e5a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#c22f2f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d56e61">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#b8364a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ac3c49">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8d698d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8d3f55">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d96a9a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4f1140">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Rose"><span style="color: #333333;">3017</span></a><br></td>
              <td class="infoBox" height="24"><a title="Strawberry Red"><span style="color: #333333;">3018</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic Red"><span style="color: #333333;">3020</span></a><br></td>
              <td class="infoBox" height="24"><a title="Salmon Pink"><span style="color: #333333;">3022</span></a><br></td>
              <td class="infoBox" height="24"><a title="Raspberry Red"><span style="color: #333333;">3027</span></a><br></td>
              <td class="infoBox" height="24"><a title="Orient Red"><span style="color: #333333;">3031</span></a><br></td>
              <td class="infoBox" height="24"><a title="Red Lilac"><span style="color: #333333;">4001</span></a><br></td>
              <td class="infoBox" height="24"><a title="Red Violet"><span style="color: #333333;">4002</span></a><br></td>
              <td class="infoBox" height="24"><a title="Heather Violet"><span style="color: #333333;">4003</span></a><br></td>
              <td class="infoBox" height="24"><a title="Claret Violet"><span style="color: #333333;">4004</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#8b75a0">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a54e78">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5f3b3f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#925485">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a88f9b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d2557f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3e5376">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#1f4464">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#163c7d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#103054">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Blue Lilac"><span style="color: #333333;">4005</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic Purple"><span style="color: #333333;">4006</span></a><br></td>
              <td class="infoBox" height="24"><a title="Purple Violet"><span style="color: #333333;">4007</span></a><br></td>
              <td class="infoBox" height="24"><a title="Signal Violet"><span style="color: #333333;">4008</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pastel Violet"><span style="color: #333333;">4009</span></a><br></td>
              <td class="infoBox" height="24"><a title="Tele Magenta"><span style="color: #333333;">4010</span></a><br></td>
              <td class="infoBox" height="24"><a title="Violet Blue"><span style="color: #333333;">5000</span></a><br></td>
              <td class="infoBox" height="24"><a title="Green Blue"><span style="color: #333333;">5001</span></a><br></td>
              <td class="infoBox" height="24"><a title="Ultramarine Blue"><span style="color: #333333;">5002</span></a><br></td>
              <td class="infoBox" height="24"><a title="Sapphire Blue"><span style="color: #333333;">5003</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#11151c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#0c4987">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4d6b8f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2f3b43">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#385b79">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#0b447e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#0a1835">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4b87c1">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#162d50">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6d809c">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Black Blue"><span style="color: #333333;">5004</span></a><br></td>
              <td class="infoBox" height="24"><a title="Signal Blue"><span style="color: #333333;">5005</span></a><br></td>
              <td class="infoBox" height="24"><a title="Brilliant Blue"><span style="color: #333333;">5007</span></a><br></td>
              <td class="infoBox" height="24"><a title="Grey Blue"><span style="color: #333333;">5008</span></a><br></td>
              <td class="infoBox" height="24"><a title="Azure Blue"><span style="color: #333333;">5009</span></a><br></td>
              <td class="infoBox" height="24"><a title="Gentian Blue"><span style="color: #333333;">5010</span></a><br></td>
              <td class="infoBox" height="24"><a title="Steel Blue"><span style="color: #333333;">5011</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Blue"><span style="color: #333333;">5012</span></a><br></td>
              <td class="infoBox" height="24"><a title="Cobalt Blue"><span style="color: #333333;">5013</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pigeon Blue"><span style="color: #333333;">5014</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#3b73b3">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#114d98">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#528392">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#1f5088">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#0f214a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2d697b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#1d0f5c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#556a94">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7291b0">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4c7363">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Sky Blue"><span style="color: #333333;">5015</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic Blue"><span style="color: #333333;">5017</span></a><br></td>
              <td class="infoBox" height="24"><a title="Turquoise Blue"><span style="color: #333333;">5018</span></a><br></td>
              <td class="infoBox" height="24"><a title="Capri Blue"><span style="color: #333333;">5019</span></a><br></td>
              <td class="infoBox" height="24"><a title="Ocean Blue"><span style="color: #333333;">5020</span></a><br></td>
              <td class="infoBox" height="24"><a title="Water Blue"><span style="color: #333333;">5021</span></a><br></td>
              <td class="infoBox" height="24"><a title="Night Blue"><span style="color: #333333;">5022</span></a><br></td>
              <td class="infoBox" height="24"><a title="Distant Blue"><span style="color: #333333;">5023</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pastel Blue"><span style="color: #333333;">5024</span></a><br></td>
              <td class="infoBox" height="24"><a title="Patina Green"><span style="color: #333333;">6000</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#3d6a3b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#395e29">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#50513e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#133540">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#15342d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3f3433">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2e241e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#31140e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#1e2120">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4c7437">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Emerald Green"><span style="color: #333333;">6001</span></a><br></td>
              <td class="infoBox" height="24"><a title="Leaf Green"><span style="color: #333333;">6002</span></a><br></td>
              <td class="infoBox" height="24"><a title="Olive Green"><span style="color: #333333;">6003</span></a><br></td>
              <td class="infoBox" height="24"><a title="Blue Green"><span style="color: #333333;">6004</span></a><br></td>
              <td class="infoBox" height="24"><a title="Moss Green"><span style="color: #333333;">6005</span></a><br></td>
              <td class="infoBox" height="24"><a title="Grey Olive"><span style="color: #333333;">6006</span></a><br></td>
              <td class="infoBox" height="24"><a title="Bottle Green"><span style="color: #333333;">6007</span></a><br></td>
              <td class="infoBox" height="24"><a title="Brown Green"><span style="color: #333333;">6008</span></a><br></td>
              <td class="infoBox" height="24"><a title="Fir Green"><span style="color: #333333;">6009</span></a><br></td>
              <td class="infoBox" height="24"><a title="Grass Green"><span style="color: #333333;">6010</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#6e8564">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#203a44">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#767a62">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3f403c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2b363d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#035d50">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4f7e48">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5c984a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#badab8">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#263e38">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Reseda Green"><span style="color: #333333;">6011</span></a><br></td>
              <td class="infoBox" height="24"><a title="Black Green"><span style="color: #333333;">6012</span></a><br></td>
              <td class="infoBox" height="24"><a title="Reed Green"><span style="color: #333333;">6013</span></a><br></td>
              <td class="infoBox" height="24"><a title="Yellow Olive"><span style="color: #333333;">6014</span></a><br></td>
              <td class="infoBox" height="24"><a title="Black Olive"><span style="color: #333333;">6015</span></a><br></td>
              <td class="infoBox" height="24"><a title="Turquoise Green"><span style="color: #333333;">6016</span></a><br></td>
              <td class="infoBox" height="24"><a title="May Green"><span style="color: #333333;">6017</span></a><br></td>
              <td class="infoBox" height="24"><a title="Yellow Green"><span style="color: #333333;">6018</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pastel Green"><span style="color: #333333;">6019</span></a><br></td>
              <td class="infoBox" height="24"><a title="Chrome Green"><span style="color: #333333;">6020</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#89a382">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2f3132">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2d845d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#577746">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#004d4f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#85bcc0">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2d4f4b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#116749">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#408060">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4b8686">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Pale Green"><span style="color: #333333;">6021</span></a><br></td>
              <td class="infoBox" height="24"><a title="Olive Drab"><span style="color: #333333;">6022</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic Green"><span style="color: #333333;">6024</span></a><br></td>
              <td class="infoBox" height="24"><a title="Fern Green"><span style="color: #333333;">6025</span></a><br></td>
              <td class="infoBox" height="24"><a title="Opal Green"><span style="color: #333333;">6026</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Green"><span style="color: #333333;">6027</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pine Green"><span style="color: #333333;">6028</span></a><br></td>
              <td class="infoBox" height="24"><a title="Mint Green"><span style="color: #333333;">6029</span></a><br></td>
              <td class="infoBox" height="24"><a title="Signal Green"><span style="color: #333333;">6032</span></a><br></td>
              <td class="infoBox" height="24"><a title="Mint Turquoise"><span style="color: #333333;">6033</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#89b0b0">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7f8891">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8e969f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7c7a67">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#76786a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#989a9e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6b6e6e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#756b61">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#736746">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#575c53">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Pastel Turquoise"><span style="color: #333333;">6034</span></a><br></td>
              <td class="infoBox" height="24"><a title="Squirrel Grey"><span style="color: #333333;">7000</span></a><br></td>
              <td class="infoBox" height="24"><a title="Silver Grey"><span style="color: #333333;">7001</span></a><br></td>
              <td class="infoBox" height="24"><a title="Olive Grey"><span style="color: #333333;">7002</span></a><br></td>
              <td class="infoBox" height="24"><a title="Moss Grey"><span style="color: #333333;">7003</span></a><br></td>
              <td class="infoBox" height="24"><a title="Signal Grey"><span style="color: #333333;">7004</span></a><br></td>
              <td class="infoBox" height="24"><a title="Mouse Grey"><span style="color: #333333;">7005</span></a><br></td>
              <td class="infoBox" height="24"><a title="Beige Grey"><span style="color: #333333;">7006</span></a><br></td>
              <td class="infoBox" height="24"><a title="Khaki Grey"><span style="color: #333333;">7008</span></a><br></td>
              <td class="infoBox" height="24"><a title="Green Grey"><span style="color: #333333;">7009</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#575a58">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4e575d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5c5f63">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#565142">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4e515a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#383c42">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#242428">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4a4a47">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#80847b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#44474e">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Tarpaulin Grey"><span style="color: #333333;">7010</span></a><br></td>
              <td class="infoBox" height="24"><a title="Iron Grey"><span style="color: #333333;">7011</span></a><br></td>
              <td class="infoBox" height="24"><a title="Basalt Grey"><span style="color: #333333;">7012</span></a><br></td>
              <td class="infoBox" height="24"><a title="Brown Grey"><span style="color: #333333;">7013</span></a><br></td>
              <td class="infoBox" height="24"><a title="Slate Grey"><span style="color: #333333;">7015</span></a><br></td>
              <td class="infoBox" height="24"><a title="Anthracite Grey"><span style="color: #333333;">7016</span></a><br></td>
              <td class="infoBox" height="24"><a title="Black Grey"><span style="color: #333333;">7021</span></a><br></td>
              <td class="infoBox" height="24"><a title="Umber Grey"><span style="color: #333333;">7022</span></a><br></td>
              <td class="infoBox" height="24"><a title="Concrete Grey"><span style="color: #333333;">7023</span></a><br></td>
              <td class="infoBox" height="24"><a title="Graphite Grey"><span style="color: #333333;">7024</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#363638">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#929189">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5f666e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#bbbaaa">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#828776">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#969175">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d6d9d8">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#9e999b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7e7f7f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#b9beb7">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Granite Grey"><span style="color: #333333;">7026</span></a><br></td>
              <td class="infoBox" height="24"><a title="Stone Grey"><span style="color: #333333;">7030</span></a><br></td>
              <td class="infoBox" height="24"><a title="Blue Grey"><span style="color: #333333;">7031</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pebble Grey"><span style="color: #333333;">7032</span></a><br></td>
              <td class="infoBox" height="24"><a title="Cement Grey"><span style="color: #333333;">7033</span></a><br></td>
              <td class="infoBox" height="24"><a title="Yellow Grey"><span style="color: #333333;">7034</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Grey"><span style="color: #333333;">7035</span></a><br></td>
              <td class="infoBox" height="24"><a title="Platinum Grey"><span style="color: #333333;">7036</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dusty Grey"><span style="color: #333333;">7037</span></a><br></td>
              <td class="infoBox" height="24"><a title="Agate Grey"><span style="color: #333333;">7038</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#6e6961">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#9fa5ab">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#999c9c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4f4e4c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#c5c4b9">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#9fa3a8">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#898f95">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#dddede">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8e7540">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#9d6d29">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Quartz Grey"><span style="color: #333333;">7039</span></a><br></td>
              <td class="infoBox" height="24"><a title="Window Grey"><span style="color: #333333;">7040</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic Grey A"><span style="color: #333333;">7042</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic Grey B"><span style="color: #333333;">7043</span></a><br></td>
              <td class="infoBox" height="24"><a title="Silk Grey"><span style="color: #333333;">7044</span></a><br></td>
              <td class="infoBox" height="24"><a title="Tele Grey 1"><span style="color: #333333;">7045</span></a><br></td>
              <td class="infoBox" height="24"><a title="Tele Grey 2"><span style="color: #333333;">7046</span></a><br></td>
              <td class="infoBox" height="24"><a title="Tele Grey 4"><span style="color: #333333;">7047</span></a><br></td>
              <td class="infoBox" height="24"><a title="Green Brown"><span style="color: #333333;">8000</span></a><br></td>
              <td class="infoBox" height="24"><a title="Ochre Brown"><span style="color: #333333;">8001</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#795547">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7d573b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#915442">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6f4f35">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#715636">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#583c2c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#683b36">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#483a2a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5f3936">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4e332b">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Signal Brown"><span style="color: #333333;">8002</span></a><br></td>
              <td class="infoBox" height="24"><a title="Clay Brown"><span style="color: #333333;">8003</span></a><br></td>
              <td class="infoBox" height="24"><a title="Copper Brown"><span style="color: #333333;">8004</span></a><br></td>
              <td class="infoBox" height="24"><a title="Fawn Brown"><span style="color: #333333;">8007</span></a><br></td>
              <td class="infoBox" height="24"><a title="Olive Brown"><span style="color: #333333;">8008</span></a><br></td>
              <td class="infoBox" height="24"><a title="Nut Brown"><span style="color: #333333;">8011</span></a><br></td>
              <td class="infoBox" height="24"><a title="Red Brown"><span style="color: #333333;">8012</span></a><br></td>
              <td class="infoBox" height="24"><a title="Sepia Brown"><span style="color: #333333;">8014</span></a><br></td>
              <td class="infoBox" height="24"><a title="Chestnut Brown"><span style="color: #333333;">8015</span></a><br></td>
              <td class="infoBox" height="24"><a title="Mahogany Brown"><span style="color: #333333;">8016</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#483733">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3d393a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#131519">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a76541">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7a5a46">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#786355">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#554339">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fffcef">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f3f3ea">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f3f3ea">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Chocolate Brown"><span style="color: #333333;">8017</span></a><br></td>
              <td class="infoBox" height="24"><a title="Grey Brown"><span style="color: #333333;">8019</span></a><br></td>
              <td class="infoBox" height="24"><a title="Black Brown"><span style="color: #333333;">8022</span></a><br></td>
              <td class="infoBox" height="24"><a title="Orange Brown"><span style="color: #333333;">8023</span></a><br></td>
              <td class="infoBox" height="24"><a title="Beige Brown"><span style="color: #333333;">8024</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pale Brown"><span style="color: #333333;">8025</span></a><br></td>
              <td class="infoBox" height="24"><a title="Terra Brown"><span style="color: #333333;">8028</span></a><br></td>
              <td class="infoBox" height="24"><a title="Cream"><span style="color: #333333;">9001</span></a><br></td>
              <td class="infoBox" height="24"><a title="Grey White"><span style="color: #333333;">9002</span></a><br></td>
              <td class="infoBox" height="24"><a title="Signal White"><span style="color: #333333;">9003</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#222327">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#0a0d12">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#080b0e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ffffff">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Signal Black"><span style="color: #333333;">9004</span></a><br></td>
              <td class="infoBox" height="24"><a title="Jet Black"><span style="color: #333333;">9005</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic White"><span style="color: #333333;">9016</span></a><br></td>
              <td class="infoBox" height="24"><a title="Traffic Black"><span style="color: #333333;">9017</span></a><br></td>
              <td class="infoBox" height="24">&nbsp;</td>
              </tr>
              </tbody>
              </table>
          </div>
          <div role="tabpanel" class="tab-pane" id="bs4800">
            <table style="width: 100%;" border="0" cellspacing="4" cellpadding="0">
              <tbody>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#deded2">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#b5b8b3">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#788585">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#385552">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f7d0cf">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a97681">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#69474f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3f4042">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fdeee6">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ead5ca">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Portland"><span style="color: #333333;">00-A-01</span></a><br></td>
              <td class="infoBox" height="24"><a title="Goosewing"><span style="color: #333333;">00-A-05</span></a><br></td>
              <td class="infoBox" height="24"><a title="Flint"><span style="color: #333333;">00-A-09</span></a><br></td>
              <td class="infoBox" height="24"><a title="Greyfriar"><span style="color: #333333;">00-A-13</span></a><br></td>
              <td class="infoBox" height="24"><a title="Lupin"><span style="color: #333333;">02-C-33</span></a><br></td>
              <td class="infoBox" height="24"><a title="Fontana"><span style="color: #333333;">02-C-37</span></a><br></td>
              <td class="infoBox" height="24"><a title="Plum"><span style="color: #333333;">02-C-39</span></a><br></td>
              <td class="infoBox" height="24"><a title="Loganberry"><span style="color: #333333;">02-C-40</span></a><br></td>
              <td class="infoBox" height="24"><a title="Rosepetal"><span style="color: #333333;">04-B-15</span></a><br></td>
              <td class="infoBox" height="24"><a title="Tea Rose"><span style="color: #333333;">04-B-17</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#a5978c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#facabc">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ac786b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#704a3f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#b05b4b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8b4131">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ffece0">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f77d64">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e1553e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f7d3aa">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Sierra"><span style="color: #333333;">04-B-21</span></a><br></td>
              <td class="infoBox" height="24"><a title="Shell"><span style="color: #333333;">04-C-33</span></a><br></td>
              <td class="infoBox" height="24"><a title="Rosevale"><span style="color: #333333;">04-C-37</span></a><br></td>
              <td class="infoBox" height="24"><a title="Copper Beech"><span style="color: #333333;">04-C-39</span></a><br></td>
              <td class="infoBox" height="24"><a title="Tawny"><span style="color: #333333;">04-D-44</span></a><br></td>
              <td class="infoBox" height="24"><a title="Monarch"><span style="color: #333333;">04-D-45</span></a><br></td>
              <td class="infoBox" height="24"><a title="Petal"><span style="color: #333333;">04-E-49</span></a><br></td>
              <td class="infoBox" height="24"><a title="Azalea"><span style="color: #333333;">04-E-51</span></a><br></td>
              <td class="infoBox" height="24"><a title="Poppy"><span style="color: #333333;">04-E-53</span></a><br></td>
              <td class="infoBox" height="24"><a title="Cameo"><span style="color: #333333;">06-C-33</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#9f7159">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#634739">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#cd864a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8f583d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ffc882">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ff9b61">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#bc6e3c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fff7e3">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e9dac3">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a69c8e">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Brownstone"><span style="color: #333333;">06-C-37</span></a><br></td>
              <td class="infoBox" height="24"><a title="Saddle"><span style="color: #333333;">06-C-39</span></a><br></td>
              <td class="infoBox" height="24"><a title="Cinnamon"><span style="color: #333333;">06-D-43</span></a><br></td>
              <td class="infoBox" height="24"><a title="Mace"><span style="color: #333333;">06-D-45</span></a><br></td>
              <td class="infoBox" height="24"><a title="Apricot"><span style="color: #333333;">06-E-50</span></a><br></td>
              <td class="infoBox" height="24"><a title="Clementine"><span style="color: #333333;">06-E-51</span></a><br></td>
              <td class="infoBox" height="24"><a title="Nectarine"><span style="color: #333333;">06-E-56</span></a><br></td>
              <td class="infoBox" height="24"><a title="Magnolia"><span style="color: #333333;">08-B-15</span></a><br></td>
              <td class="infoBox" height="24"><a title="Sandstone"><span style="color: #333333;">08-B-17</span></a><br></td>
              <td class="infoBox" height="24"><a title="Antelope"><span style="color: #333333;">08-B-21</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#6a645d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3b3c3d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fff6d6">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#dbb17a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#9d7c4d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#624f3e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f8bf2c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d8d6cd">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#9f9e99">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#606667">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Beaver"><span style="color: #333333;">08-B-25</span></a><br></td>
              <td class="infoBox" height="24"><a title="Vandyke"><span style="color: #333333;">08-B-29</span></a><br></td>
              <td class="infoBox" height="24"><a title="Honeysuckle"><span style="color: #333333;">08-C-31</span></a><br></td>
              <td class="infoBox" height="24"><a title="Bamboo"><span style="color: #333333;">08-C-35</span></a><br></td>
              <td class="infoBox" height="24"><a title="Bracken"><span style="color: #333333;">08-C-37</span></a><br></td>
              <td class="infoBox" height="24"><a title="Bison"><span style="color: #333333;">08-C-39</span></a><br></td>
              <td class="infoBox" height="24"><a title="Goldcup"><span style="color: #333333;">08-E-51</span></a><br></td>
              <td class="infoBox" height="24"><a title="Flake Grey"><span style="color: #333333;">10-A-03</span></a><br></td>
              <td class="infoBox" height="24"><a title="Woodash"><span style="color: #333333;">10-A-07</span></a><br></td>
              <td class="infoBox" height="24"><a title="Rhino"><span style="color: #333333;">10-A-11</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#fffce4">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e0d6b4">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a5a086">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6f6b58">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3a3830">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fff5d0">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fae6a8">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ccb66f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#594f31">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d0b842">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Gardenia"><span style="color: #333333;">10-B-15</span></a><br></td>
              <td class="infoBox" height="24"><a title="Hopsack"><span style="color: #333333;">10-B-17</span></a><br></td>
              <td class="infoBox" height="24"><a title="Lizard"><span style="color: #333333;">10-B-21</span></a><br></td>
              <td class="infoBox" height="24"><a title="Turtle"><span style="color: #333333;">10-B-25</span></a><br></td>
              <td class="infoBox" height="24"><a title="Ironstone"><span style="color: #333333;">10-B-29</span></a><br></td>
              <td class="infoBox" height="24"><a title="Buttermilk"><span style="color: #333333;">10-C-31</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pollen"><span style="color: #333333;">10-C-33</span></a><br></td>
              <td class="infoBox" height="24"><a title="Savannah"><span style="color: #333333;">10-C-35</span></a><br></td>
              <td class="infoBox" height="24"><a title="Seaweed"><span style="color: #333333;">10-C-39</span></a><br></td>
              <td class="infoBox" height="24"><a title="Capricorn"><span style="color: #333333;">10-D-43</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#988c38">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fef6b3">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ffeb75">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f2e428">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fcfae0">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#dddcb7">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a3a789">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#696c5a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3a3e33">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#dbdd9f">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Florida"><span style="color: #333333;">10-D-45</span></a><br></td>
              <td class="infoBox" height="24"><a title="Jonquil"><span style="color: #333333;">10-E-49</span></a><br></td>
              <td class="infoBox" height="24"><a title="Forsythia"><span style="color: #333333;">10-E-50</span></a><br></td>
              <td class="infoBox" height="24"><a title="Aztec"><span style="color: #333333;">10-E-53</span></a><br></td>
              <td class="infoBox" height="24"><a title="Sea Foam"><span style="color: #333333;">12-B-15</span></a><br></td>
              <td class="infoBox" height="24"><a title="Willow"><span style="color: #333333;">12-B-17</span></a><br></td>
              <td class="infoBox" height="24"><a title="Moorland"><span style="color: #333333;">12-B-21</span></a><br></td>
              <td class="infoBox" height="24"><a title="Chive"><span style="color: #333333;">12-B-25</span></a><br></td>
              <td class="infoBox" height="24"><a title="Juniper"><span style="color: #333333;">12-B-29</span></a><br></td>
              <td class="infoBox" height="24"><a title="Catkin"><span style="color: #333333;">12-C-33</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#49502d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8f9d38">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#626e19">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d2dd49">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a3bd42">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f1fbe9">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#acbfab">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3e5041">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#32382b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#74b979">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Orchard"><span style="color: #333333;">12-C-39</span></a><br></td>
              <td class="infoBox" height="24"><a title="Spring Leaf"><span style="color: #333333;">12-D-43</span></a><br></td>
              <td class="infoBox" height="24"><a title="Sherwood"><span style="color: #333333;">12-D-45</span></a><br></td>
              <td class="infoBox" height="24"><a title="Citrine"><span style="color: #333333;">12-E-51</span></a><br></td>
              <td class="infoBox" height="24"><a title="Linden"><span style="color: #333333;">12-E-53</span></a><br></td>
              <td class="infoBox" height="24"><a title="Alpine"><span style="color: #333333;">14-C-31</span></a><br></td>
              <td class="infoBox" height="24"><a title="Braemar"><span style="color: #333333;">14-C-35</span></a><br></td>
              <td class="infoBox" height="24"><a title="Hollybush"><span style="color: #333333;">14-C-39</span></a><br></td>
              <td class="infoBox" height="24"><a title="Conifer"><span style="color: #333333;">14-C-40</span></a><br></td>
              <td class="infoBox" height="24"><a title="Garland"><span style="color: #333333;">14-E-51</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#448d60">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#c5ddd6">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#648887">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#264f52">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4b8e90">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d6dfdc">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#9ca4a5">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6a6f73">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#333335">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fdfff8">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Verona"><span style="color: #333333;">14-E-53</span></a><br></td>
              <td class="infoBox" height="24"><a title="Duck Egg"><span style="color: #333333;">16-C-33</span></a><br></td>
              <td class="infoBox" height="24"><a title="Orion"><span style="color: #333333;">16-C-37</span></a><br></td>
              <td class="infoBox" height="24"><a title="Scarab"><span style="color: #333333;">16-D-45</span></a><br></td>
              <td class="infoBox" height="24"><a title="Lido"><span style="color: #333333;">16-E-53</span></a><br></td>
              <td class="infoBox" height="24"><a title="Heron"><span style="color: #333333;">18-B-17</span></a><br></td>
              <td class="infoBox" height="24"><a title="Tideway"><span style="color: #333333;">18-B-21</span></a><br></td>
              <td class="infoBox" height="24"><a title="Merlin"><span style="color: #333333;">18-B-25</span></a><br></td>
              <td class="infoBox" height="24"><a title="Raven"><span style="color: #333333;">18-B-29</span></a><br></td>
              <td class="infoBox" height="24"><a title="Spindrift"><span style="color: #333333;">18-C-31</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#a2b7be">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3b5264">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5c869d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e5f9f4">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#bde1e9">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#65a2c3">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2569a1">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ccdcec">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7489a6">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#29374b">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Pigeon"><span style="color: #333333;">18-C-35</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dolphin"><span style="color: #333333;">18-C-39</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dresden"><span style="color: #333333;">18-D-43</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pinefrost"><span style="color: #333333;">18-E-49</span></a><br></td>
              <td class="infoBox" height="24"><a title="Cirrus"><span style="color: #333333;">18-E-50</span></a><br></td>
              <td class="infoBox" height="24"><a title="Larkspur"><span style="color: #333333;">18-E-51</span></a><br></td>
              <td class="infoBox" height="24"><a title="Regatta"><span style="color: #333333;">18-E-53</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pompadour"><span style="color: #333333;">20-C-33</span></a><br></td>
              <td class="infoBox" height="24"><a title="Viking"><span style="color: #333333;">20-C-37</span></a><br></td>
              <td class="infoBox" height="24"><a title="Midnight"><span style="color: #333333;">20-C-40</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#3b5780">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#72a2d9">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f8f6ee">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#dbd9da">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#847e9f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#524f81">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e5d1db">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#684a6b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#000000">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ffffff">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Trafalgar"><span style="color: #333333;">20-D-45</span></a><br></td>
              <td class="infoBox" height="24"><a title="Cornflower"><span style="color: #333333;">20-E-51</span></a><br></td>
              <td class="infoBox" height="24"><a title="Swansdown"><span style="color: #333333;">22-B-15</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dove"><span style="color: #333333;">22-B-17</span></a><br></td>
              <td class="infoBox" height="24"><a title="Heather"><span style="color: #333333;">22-C-37</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pageant"><span style="color: #333333;">22-D-45</span></a><br></td>
              <td class="infoBox" height="24"><a title="Mallow"><span style="color: #333333;">24-C-33</span></a><br></td>
              <td class="infoBox" height="24"><a title="Regalia"><span style="color: #333333;">24-C-39</span></a><br></td>
              <td class="infoBox" height="24"><a title="Black"><span style="color: #333333;">00-E-53</span></a><br></td>
              <td class="infoBox" height="24"><a title="White"><span style="color: #333333;">00-E-55</span></a><br></td>
              </tr>
              </tbody>
              </table>
          </div>
          <div role="tabpanel" class="tab-pane" id="bs381c">
            <table style="width: 100%;" border="0" cellspacing="4" cellpadding="0">
              <tbody>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#94bfac">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5b9291">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3b6879">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#264d7e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#1f3057">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2a283d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3a73a9">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#173679">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#1c5680">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2c3e75">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Sky Blue"><span style="color: #333333;">101</span></a><br></td>
              <td class="infoBox" height="24"><a title="Turqoise Blue"><span style="color: #333333;">102</span></a><br></td>
              <td class="infoBox" height="24"><a title="Peacock Blue"><span style="color: #333333;">103</span></a><br></td>
              <td class="infoBox" height="24"><a title="Azure Blue"><span style="color: #333333;">104</span></a><br></td>
              <td class="infoBox" height="24"><a title="Oxford Blue"><span style="color: #333333;">105</span></a><br></td>
              <td class="infoBox" height="24"><a title="Royal Blue"><span style="color: #333333;">106</span></a><br></td>
              <td class="infoBox" height="24"><a title="Strong Blue"><span style="color: #333333;">107</span></a><br></td>
              <td class="infoBox" height="24"><a title="Aircraft Blue"><span style="color: #333333;">108</span></a><br></td>
              <td class="infoBox" height="24"><a title="Middle Blue"><span style="color: #333333;">109</span></a><br></td>
              <td class="infoBox" height="24"><a title="Roundel Blue"><span style="color: #333333;">110</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#8cc5bb">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#78adc2">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3f687d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#1f4b61">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5f88c1">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#2458af">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a7c6eb">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#64a0aa">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4f81c5">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#bbc9a5">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Pale Blue"><span style="color: #333333;">111</span></a><br></td>
              <td class="infoBox" height="24"><a title="Arctic Blue"><span style="color: #333333;">112</span></a><br></td>
              <td class="infoBox" height="24"><a title="Deep Saxe Blue"><span style="color: #333333;">113</span></a><br></td>
              <td class="infoBox" height="24"><a title="Rail Blue"><span style="color: #333333;">114</span></a><br></td>
              <td class="infoBox" height="24"><a title="Cobalt Blue"><span style="color: #333333;">115</span></a><br></td>
              <td class="infoBox" height="24"><a title="French Blue"><span style="color: #333333;">166</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pale Roundel Blue"><span style="color: #333333;">172</span></a><br></td>
              <td class="infoBox" height="24"><a title="Oriental Blue"><span style="color: #333333;">174</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light French Blue"><span style="color: #333333;">175</span></a><br></td>
              <td class="infoBox" height="24"><a title="Sky"><span style="color: #333333;">210</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#bcd890">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#96bf65">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#698b47">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4b5729">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#507d3a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6a7031">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#49523a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#3e4630">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#406a28">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#33533b">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Eau-De-Nil"><span style="color: #333333;">216</span></a><br></td>
              <td class="infoBox" height="24"><a title="Sea Green"><span style="color: #333333;">217</span></a><br></td>
              <td class="infoBox" height="24"><a title="Grass Green"><span style="color: #333333;">218</span></a><br></td>
              <td class="infoBox" height="24"><a title="Olive Green"><span style="color: #333333;">220</span></a><br></td>
              <td class="infoBox" height="24"><a title="Brilliant Green"><span style="color: #333333;">221</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Bronze Green"><span style="color: #333333;">222</span></a><br></td>
              <td class="infoBox" height="24"><a title="Middle Bronze Green"><span style="color: #333333;">223</span></a><br></td>
              <td class="infoBox" height="24"><a title="Deep Bronze Green"><span style="color: #333333;">224</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Brunswick Green"><span style="color: #333333;">225</span></a><br></td>
              <td class="infoBox" height="24"><a title="Middle Brunswick Green"><span style="color: #333333;">226</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#254432">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#428b64">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4f5241">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#44945e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#476a4c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8fc693">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#87965a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#68ab77">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#506b52">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7e8f6e">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Deep Brunswick Green"><span style="color: #333333;">227</span></a><br></td>
              <td class="infoBox" height="24"><a title="Emerald Green"><span style="color: #333333;">228</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dark Green"><span style="color: #333333;">241</span></a><br></td>
              <td class="infoBox" height="24"><a title="Bold Green"><span style="color: #333333;">262</span></a><br></td>
              <td class="infoBox" height="24"><a title="Deep Chrome Green"><span style="color: #333333;">267</span></a><br></td>
              <td class="infoBox" height="24"><a title="Opaline Green"><span style="color: #333333;">275</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Olive Green"><span style="color: #333333;">278</span></a><br></td>
              <td class="infoBox" height="24"><a title="Verdigris Green"><span style="color: #333333;">280</span></a><br></td>
              <td class="infoBox" height="24"><a title="Forest Green"><span style="color: #333333;">282</span></a><br></td>
              <td class="infoBox" height="24"><a title="Aircraft Grey Green"><span style="color: #333333;">283</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#6b6f5a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5f5c4b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4f5138">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#feec04">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fef963">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fef96a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#9e7339">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#4c4a3c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7b6b4f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fced96">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Spruce Green"><span style="color: #333333;">284</span></a><br></td>
              <td class="infoBox" height="24"><a title="NATO Green"><span style="color: #333333;">285</span></a><br></td>
              <td class="infoBox" height="24"><a title="Olive Drab"><span style="color: #333333;">298</span></a><br></td>
              <td class="infoBox" height="24"><a title="Canary Yellow"><span style="color: #333333;">309</span></a><br></td>
              <td class="infoBox" height="24"><a title="Primrose"><span style="color: #333333;">310</span></a><br></td>
              <td class="infoBox" height="24"><a title="Grapefruit"><span style="color: #333333;">315</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Brown"><span style="color: #333333;">320</span></a><br></td>
              <td class="infoBox" height="24"><a title="Very Dark Drab"><span style="color: #333333;">337</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dark Earth"><span style="color: #333333;">350</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pale Cream"><span style="color: #333333;">352</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#fdf07a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fdd906">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fcc808">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f6c870">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#dbac50">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d4b97d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fde706">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f4f0bd">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f5e7a1">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fef6bf">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Deep Cream"><span style="color: #333333;">353</span></a><br></td>
              <td class="infoBox" height="24"><a title="Lemon"><span style="color: #333333;">355</span></a><br></td>
              <td class="infoBox" height="24"><a title="Golden Yellow"><span style="color: #333333;">356</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Buff"><span style="color: #333333;">358</span></a><br></td>
              <td class="infoBox" height="24"><a title="Middle Buff"><span style="color: #333333;">359</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Stone"><span style="color: #333333;">361</span></a><br></td>
              <td class="infoBox" height="24"><a title="Bold Yellow"><span style="color: #333333;">363</span></a><br></td>
              <td class="infoBox" height="24"><a title="Vellum"><span style="color: #333333;">365</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Beige"><span style="color: #333333;">366</span></a><br></td>
              <td class="infoBox" height="24"><a title="Manilla"><span style="color: #333333;">367</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#feeba8">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#bba38a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#eedfa5">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e4cf93">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#b2a788">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#74542f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5c422e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a86c29">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a89177">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#845b4d">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Biscuit"><span style="color: #333333;">369</span></a><br></td>
              <td class="infoBox" height="24"><a title="Camouflage Desert Sand"><span style="color: #333333;">380</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Straw"><span style="color: #333333;">384</span></a><br></td>
              <td class="infoBox" height="24"><a title="Beige"><span style="color: #333333;">388</span></a><br></td>
              <td class="infoBox" height="24"><a title="Camouflage Beige"><span style="color: #333333;">389</span></a><br></td>
              <td class="infoBox" height="24"><a title="Middle Brown"><span style="color: #333333;">411</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dark Brown"><span style="color: #333333;">412</span></a><br></td>
              <td class="infoBox" height="24"><a title="Golden Brown"><span style="color: #333333;">414</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dark Camouflage Desert Sand"><span style="color: #333333;">420</span></a><br></td>
              <td class="infoBox" height="24"><a title="Camouflage Red"><span style="color: #333333;">435</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#564b47">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a65341">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#83422b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#774430">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f3b28b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#67403a">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#693b3f">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#613339">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fbded6">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e8a1a2">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Dark Camouflage Brown"><span style="color: #333333;">436</span></a><br></td>
              <td class="infoBox" height="24"><a title="Terracotta"><span style="color: #333333;">444</span></a><br></td>
              <td class="infoBox" height="24"><a title="Venetian Red"><span style="color: #333333;">445</span></a><br></td>
              <td class="infoBox" height="24"><a title="Red Oxide"><span style="color: #333333;">446</span></a><br></td>
              <td class="infoBox" height="24"><a title="Salmon Pink"><span style="color: #333333;">447</span></a><br></td>
              <td class="infoBox" height="24"><a title="Deep Indian Red"><span style="color: #333333;">448</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Purple Brown"><span style="color: #333333;">449</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dark Crimson"><span style="color: #333333;">452</span></a><br></td>
              <td class="infoBox" height="24"><a title="Shell Pink"><span style="color: #333333;">453</span></a><br></td>
              <td class="infoBox" height="24"><a title="Pale Roundel Red"><span style="color: #333333;">454</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#bd8f56">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#793932">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8d5b41">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#59493e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#dd3420">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#c41c22">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#d21e2b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8b1a32">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#471b21">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#982d57">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Deep Buff"><span style="color: #333333;">460</span></a><br></td>
              <td class="infoBox" height="24"><a title="Gulf Red"><span style="color: #333333;">473</span></a><br></td>
              <td class="infoBox" height="24"><a title="Leaf Brown"><span style="color: #333333;">489</span></a><br></td>
              <td class="infoBox" height="24"><a title="Service Brown"><span style="color: #333333;">499</span></a><br></td>
              <td class="infoBox" height="24"><a title="Signal Red"><span style="color: #333333;">537</span></a><br></td>
              <td class="infoBox" height="24"><a title="Cherry"><span style="color: #333333;">538</span></a><br></td>
              <td class="infoBox" height="24"><a title="Currant Red"><span style="color: #333333;">539</span></a><br></td>
              <td class="infoBox" height="24"><a title="Crimson"><span style="color: #333333;">540</span></a><br></td>
              <td class="infoBox" height="24"><a title="Maroon"><span style="color: #333333;">541</span></a><br></td>
              <td class="infoBox" height="24"><a title="Ruby"><span style="color: #333333;">542</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#ef841e">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#dd3524">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#fb9c06">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#e45523">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#f24816">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a0a9aa">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#bec0b8">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7a838b">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a5ad98">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#9aaa9f">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Light Orange"><span style="color: #333333;">557</span></a><br></td>
              <td class="infoBox" height="24"><a title="Bold Red"><span style="color: #333333;">564</span></a><br></td>
              <td class="infoBox" height="24"><a title="Apricot"><span style="color: #333333;">568</span></a><br></td>
              <td class="infoBox" height="24"><a title="International Orange"><span style="color: #333333;">592</span></a><br></td>
              <td class="infoBox" height="24"><a title="Rail Red"><span style="color: #333333;">593</span></a><br></td>
              <td class="infoBox" height="24"><a title="Camouflage Grey"><span style="color: #333333;">626</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Aircraft Grey"><span style="color: #333333;">627</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dark Camouflage Grey"><span style="color: #333333;">629</span></a><br></td>
              <td class="infoBox" height="24"><a title="French Grey"><span style="color: #333333;">630</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Grey"><span style="color: #333333;">631</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#6b7477">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#424c53">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6f7264">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#525b55">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#5f7682">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#8e9b9c">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6c7377">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#667563">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#566164">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#282b2f">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Dark Admiralty Grey"><span style="color: #333333;">632</span></a><br></td>
              <td class="infoBox" height="24"><a title="RAF Blue-Grey"><span style="color: #333333;">633</span></a><br></td>
              <td class="infoBox" height="24"><a title="Slate"><span style="color: #333333;">634</span></a><br></td>
              <td class="infoBox" height="24"><a title="Lead"><span style="color: #333333;">635</span></a><br></td>
              <td class="infoBox" height="24"><a title="PRU Blue"><span style="color: #333333;">636</span></a><br></td>
              <td class="infoBox" height="24"><a title="Medium Sea Grey"><span style="color: #333333;">637</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dark Sea Grey"><span style="color: #333333;">638</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Slate Grey"><span style="color: #333333;">639</span></a><br></td>
              <td class="infoBox" height="24"><a title="Extra Dark Sea Grey"><span style="color: #333333;">640</span></a><br></td>
              <td class="infoBox" height="24"><a title="Night"><span style="color: #333333;">642</span></a><br></td>
              </tr>
              <tr valign="top">
              <td height="32" valign="top" bgcolor="#4e5355">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#a9b7b9">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#676f76">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#7b93a3">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#88918d">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#909a92">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#b6d3cc">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#6e4a75">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#c9a8ce">&nbsp;</td>
              <td height="32" valign="top" bgcolor="#ffffff">&nbsp;</td>
              </tr>
              <tr valign="top">
              <td class="infoBox" height="24"><a title="Middle Graphite"><span style="color: #333333;">671</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Weatherwork Grey"><span style="color: #333333;">676</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dark Weatherwork Grey"><span style="color: #333333;">677</span></a><br></td>
              <td class="infoBox" height="24"><a title="Smoke Grey"><span style="color: #333333;">692</span></a><br></td>
              <td class="infoBox" height="24"><a title="Aircraft Grey"><span style="color: #333333;">693</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dove Grey"><span style="color: #333333;">694</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Admiralty Grey"><span style="color: #333333;">697</span></a><br></td>
              <td class="infoBox" height="24"><a title="Dark Violet"><span style="color: #333333;">796</span></a><br></td>
              <td class="infoBox" height="24"><a title="Light Violet"><span style="color: #333333;">797</span></a><br></td>
              <td class="infoBox" height="24">&nbsp;</td>
              </tr>
              </tbody>
              </table>
          </div>

        </div>
      </div>

		</div>
      </div>

    </div>
  </div>
<?php get_footer(); ?>

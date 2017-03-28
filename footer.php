<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
  
<!--CLIENT AREA-->
  <div id="client_logos">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="<?php bloginfo('template_directory'); ?>/includes/img/client_logos.jpg" alt="RJW Client Logos and Accreditations" />
        </div>
      </div>
    </div>
  </div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3>RJW Engineering</h3>
        <p>At RJW our focus has traditionally been on ensuring that the electrical and mechanical repairs side of our business continued to thrive and that we continued as market leaders in this industry.</p>
      </div>
      <div class="col-md-3">
        <h3>Where are we?</h3>
        <p>Manchester Office<br />Hulton Works,<br /> Smithfold Lane,<br /> Worsley,<br /> Manchester<br /> M28 0GP<br /><br />Telephone: 0161 702 8737<br />Fax: 0161 702 8730</p>
      </div>
      <div class="col-md-2 col-xs-6">
        <h3>Navigation</h3>
        
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h3>Join Newsletter</h3>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="fullName" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Email Address">
          </div>
          <button type="submit" class="btn btn-primary">Join Us</button>
        </form>
      </div>
    </div>
  </div>
</footer>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/589a01bb55c2fd09f8492891/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script>
jQuery(document).ready(function(){
    jQuery("a.content-show").click(function(){
        jQuery("#content").toggle();
    });
});
</script>
<!--End of Tawk.to Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
</body>
</html>

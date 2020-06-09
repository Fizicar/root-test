<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package root-theme
 */

?>

	<div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <div class="ft-left">
                <div class="footer-img">
                   <img src="<?php echo get_home_url() . "/wp-content/themes/root-theme/root-html/" ;?>assets/icons/pi-logo.png" width="30" alt="Logo">
                </div>
                <p>Cu qui probo malorum saperet. Ne admodum apeirian iracundia usu, eam cu agam ludus,
                  eum munere accusam molestie ut. Alienum percipitur ne est, pri quando iriure ad. </p>
                <p>&copy; 2017 YDirection Themes by IOThemes</p>
              </div>
            </div>
            <div class="col-sm-4 col-sm-offset-3">
              <div class="ft-right">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Product Details</a></li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Privacy policy</a></li>
                  <li><a href="#">User Agreement</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      </div> <!-- Main -->
    </div><!-- Wrapper -->
	<?php wp_footer(); ?>
  </body>


</html>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Wordpress_Theme
 */

?>

	<footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <p>
            <a href="#"><img src="assets/img/logo.png" alt="Bootstrap To Wordpress"></a>
          </p>
        </div>
        <div class="col-sm-6">
          <nav>
            <ul class="list-inline text-center">
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Blog</a></li>
              <li class="list-inline-item"><a href="#">Resources</a></li>
              <li class="list-inline-item"><a href="#">Contact</a></li>
              <li class="list-inline-item signup-link"><a href="#">Sign up now</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-sm-3">
          <p class="text-right">&copy; 2018 BH</p>
        </div>
      </div>
    </div>
	</footer>
	
	<script src="<?php bloginfo('template_directory')?>/assets/js/jquery.js"></script>
  <script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>
  <script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>

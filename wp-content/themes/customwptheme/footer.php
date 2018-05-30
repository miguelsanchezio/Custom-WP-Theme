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
  <!-- SIGN UP -->
  <section id="signup" data-type="background" data-speed="4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
          <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
        </div>
      </div>
    </div>
  </section>

	<footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <p>
            <a href="#"><img src="<?php bloginfo('template_directory')?>/assets/img/logo.png" alt="Bootstrap To Wordpress"></a>
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
  
  <!-- MODAL -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">
            <i class="fas fa-envelope"></i> Subscribe To Our Mailing List</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ab aperiam voluptatibus asperiores perspiciatis facilis
            eum voluptates dolorum unde ducimus.</p>

          <form>
            <div class="form-group">
              <label for="subscribe-name">Your Name</label>
              <input type="text" class="form-control" id="subscribe-name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <label for="subscribe-email">Your Email</label>
              <input type="email" class="form-control" id="subscribe-email" placeholder="Your Email">
            </div>
            <button type="submit" class="btn btn-danger text-center">Subscribe!</button>
          </form>
          <hr>
          <p>
            <small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. No Spam. Just
              good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
	<script src="<?php bloginfo('template_directory')?>/assets/js/jquery.js"></script>
  <script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>
  <script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>

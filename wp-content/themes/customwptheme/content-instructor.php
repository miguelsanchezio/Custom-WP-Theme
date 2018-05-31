<?php
  $instructor_section_title = get_field('instructor_section_title');
  $instructor_name = get_field('instructor_name');
  $bio_excerpt = get_field('bio_excerpt');
  $full_bio = get_field('full_bio');
  $twitter_username = get_field('twitter_username');
  $facebook_username = get_field('facebook_username');
  $google_username = get_field('google_username');
  $number_of_students = get_field('number_of_students');
  $number_of_reviews = get_field('number_of_reviews');
  $number_of_courses = get_field('number_of_courses');
?>

<!-- INSTRUCTOR -->
<section id="instructor">
  <div class="container">
    <!-- start container -->
    <div class="row">
      <!-- start first row -->
      <div class="col-sm-8 col-md-6">
        <!-- start first column -->
        <div class="row">
          <!-- start first nested row -->
          <div class="col-lg-8">
            <h2><?php echo $instructor_section_title; ?>
              <small><?php echo $instructor_name; ?></small>
            </h2>
          </div>
          <div class="col-lg-4">
            <?php if(!empty($twitter_username)) : ?>
              <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter">
                <i class="fab fa-twitter"></i>
              </a>
            <?php endif; ?>

            <?php if(!empty($facebook_username)) : ?>              
              <a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook">
                <i class="fab fa-facebook"></i>
              </a>
            <?php endif; ?>

            <?php if(!empty($google_username)) : ?>
              <a href="https://plus.google.com/<?php echo $google_username; ?>" class="badge social gplus">
                <i class="fab fa-google-plus"></i>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <!-- end first nested row -->

        <p class="lead"><?php echo $bio_excerpt; ?></p>
        <p><?php echo $full_bio; ?></p>

        <hr>

        <h3>The Numbers
          <small>They Don't Lie</small>
        </h3>

        <div class="row">
          <!-- start second nested row -->
          <div class="col-4">
            <div class="num">
              <div class="num-content">
                <?php echo $number_of_students; ?>
                <span>students</span>
              </div>
            </div>
          </div>

          <div class="col-4">
            <div class="num">
              <div class="num-content">
                <?php echo $number_of_reviews; ?>
                <span>reviews</span>
              </div>
            </div>
          </div>

          <div class="col-4">
            <div class="num">
              <div class="num-content">
                <?php echo $number_of_courses; ?>
                <span>courses</span>
              </div>
            </div>
          </div>
        </div>
        <!-- end second nested row -->

      </div>
      <!-- end first column -->
    </div>
    <!-- end first row -->
  </div>
  <!-- end container -->
</section>
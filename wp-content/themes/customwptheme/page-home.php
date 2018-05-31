<?php
/*
  Template Name: Home Page
*/

// Custom Fields
$prelaunch_price = get_post_meta(9, 'prelaunch_price', true);
$launch_price = get_post_meta(9, 'launch_price', true);
$final_price = get_post_meta(9, 'final_price', true);
$course_url = get_post_meta(9, 'course_url', true);
$button_text = get_post_meta(9, 'button_text', true);
$optin_text = get_post_meta(9, 'optin_text', true);
$optin_button_text = get_post_meta(9, 'optin_button_text', true);

// Advanced Custom Fields
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_desc = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_desc = get_field('reason_1_description');
$reason_2_title = get_field('reason_2_title');
$reason_2_desc = get_field('reason_2_description');

$who_feature_image = get_field('who_feature_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');

$project_features_title = get_field('project_features_title');
$project_features_body = get_field('project_features_body');

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

get_header(); ?>

<!-- HERO -->
<section id="hero" data-type="background" data-speed="5">
    <article>
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="BTW">
          </div>
          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('name')?></h1>
            <p class="lead"><?php bloginfo('description'); ?></p>
            <div id="price-timeline">
              <div class="price active">
                <h4>Pre-Launch Price
                  <small>Ends soon!</small>
                </h4>
                <span><?php echo $prelaunch_price; ?></span>
              </div>
              <div class="price">
                <h4>Launch Price
                  <small>Coming soon!</small>
                </h4>
                <span><?php echo $launch_price; ?></span>
              </div>
              <div class="price">
                <h4>Final Price
                  <small>Coming soon!</small>
                </h4>
                <span><?php echo $final_price; ?></span>
              </div>
              <!-- price -->
            </div>
            <!-- price-timeline -->
            <p>
              <a href="<?php echo $course_url; ?>" class="btn btn-lg btn-danger"><?php echo $button_text; ?> &raquo;</a>
            </p>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- OPT IN -->
  <section id="optin">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <p class="lead">
            <?php echo $optin_text; ?>
          </p>
        </div>
        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
          <?php echo $optin_button_text; ?>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- BOOST YOUR INCOME -->
  <section id="boost-income">
    <div class="container">
      <div class="section-header">

        <?php if(!empty($income_feature_image)) : ?>
          <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
        <?php endif; ?>

        <h2><?php echo $income_section_title; ?></h2>
        <p class="lead"><?php echo $income_section_desc; ?></p>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $reason_1_title; ?></h3>
          <p><?php echo $reason_1_desc; ?></p>
        </div>
        <div class="col-sm-6">
          <h3><?php echo $reason_2_title; ?></h3>
          <p><?php echo $reason_2_desc; ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO BENEFITS -->
  <section id="who-benefits">
    <div class="container">
      <div class="section-header">
        
        <?php if(!empty($who_feature_image)) : ?>
          <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
        <?php endif; ?>

        <h2><?php echo $who_section_title; ?></h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-sm-8">
          <?php echo $who_section_body; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- COURSE FEATURES -->
  <section id="course-features">
    <div class="container">
      <div class="section-header">
        
        <?php if(!empty($features_section_image)) : ?>
          <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
        <?php endif; ?>

        <h2><?php echo $features_section_title; ?></h2>

        <?php if(!empty($features_section_body)) : ?>
          <p class="lead"><?php echo $features_section_body; ?></p>
        <?php endif; ?>
      </div>
      <div class="row">

        <?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-sm-2">
            <i class="<?php the_field('course_feature_icon'); ?>"></i>
            <h4><?php the_title(); ?></h4>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </section>

  <!-- PROJECT FEATURES -->
  <section id="project-features">
    <div class="container">
      <h2><?php echo $project_features_title; ?></h2>
      <p class="lead"><?php echo $project_features_body; ?></p>
      <div class="row">

        <?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-sm-4">
            <?php
              if(has_post_thumbnail()) {
                the_post_thumbnail();
              }
            ?>
            <h3><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </section>

  <!-- VIDEO FEATURETTE -->
  <section id="featurette">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <h2>Watch The Course Introduction</h2>
          <iframe width="100%" height="415" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

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

  <!-- TESTIMONIALS -->
  <section id="testimonials">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <h2>What People Are Saying About Brad</h2>
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
            </div>
            <div class="col-sm-8">
              <blockquote>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia in a voluptates iure optio nihil, consequatur ex incidunt
                dolores aperiam corrupti possimus hic earum nisi corporis veniam! Blanditiis corrupti, tempora impedit mollitia
                ratione assumenda at error recusandae ipsa est, animi, a vero nulla dolorem deleniti inventore! Corporis
                non tempore reprehenderit?
                <cite>&mdash; Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, quasi.</cite>
              </blockquote>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
            </div>
            <div class="col-sm-8">
              <blockquote>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia in a vmus hic earum nisi corporis veniam! Blanditiis corrupti, tempora impedit mollitia
                ratione assumenda at error recusandae ipsa est, animi, a vero nulla dolorem deleniti inventore! Corporis
                non tempore reprehenderit?
                <cite>&mdash; Lorem ipsum dolor, amet consectetur adipisicing elit. Repudiandae, quasi.</cite>
              </blockquote>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Aj">
            </div>
            <div class="col-sm-8">
              <blockquote>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia in a voluptates iure optio nihil, consequatur ex incidunt
                dolores aperiam coris corrupti, tempora impedit mollitia
                ratione assumenda at error recusandae ipsa est, animi, a vero nulla dolorem deleniti inventore! Corporis
                non tempore reprehenderit?
                <cite>&mdash; Lorsit amet consectetur adipisicing elit. Repudiandae, quasi.</cite>
              </blockquote>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ernest">
            </div>
            <div class="col-sm-8">
              <blockquote>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia in a voluptates iure optio nihil, consequatur ex incidunt
                dolores aperiam corrupti possimus hic earum nisi
                ratione assumenda at error recusandae ipsa est, animi, a vero nulla dolorem deleniti inventore! Corporis
                non tempore reprehenderit?
                <cite>&mdash; Lorem ipsum dolor, sit amet adipisicing elit. Repudiandae, quasi.</cite>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
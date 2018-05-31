<?php
  $who_feature_image = get_field('who_feature_image');
  $who_section_title = get_field('who_section_title');
  $who_section_body = get_field('who_section_body');
?>

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
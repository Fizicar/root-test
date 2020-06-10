<?php /* Template Name: Landing Page Template */ 

get_header();


// ACF Field

$landing_page = get_field('landing_page');

$hero_section = $landing_page['hero_section'];

$specs_section = $landing_page['spec_section'];

$features_section = $landing_page['features_section'];

$video_section = $landing_page['video_section'];

$reviews_section = $landing_page['reviews_section'];

$pitch_section = $landing_page['pitch_section'];

?>


<div id="main" class="main main-2">
    <div class="hero-2">
        <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
            <div class="intro">
                <?php echo $hero_section['content'] ;?>
            </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <img class="img-responsive" src="<?php echo $hero_section['image']['url'] ;?>" alt="<?php echo $hero_section['image']['alt'] ;?>">
            </div>
        </div>
    </div>
</div><!-- Pi-Hero -->



        <div id="specs" class="features-boxed">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="boxed-intro text-center wow fadeInDown">
                     <h4><?php echo $specs_section['header_subtitle']; ?></h4>
                  <h1><?php echo $specs_section['header_title']; ?></h1>
                  <p><?php echo $specs_section['header_content']; ?></p>
                </div>
              </div>
              <?php

              foreach ($specs_section['spec_boxes'] as $key => $value) { ?>
                <div class="col-md-3 col-sm-4 wow fadeInDown">
                  <div class="box-inner">
                    <div class="box-icon">
                      <img src="<?php echo $value['box_icon']['url'];?>" width="45" alt="Feature">
                    </div>
                    <div class="box-info">
                      <?php echo $value['box_info'];?>
                    </div>
                    <div class="box-arrow">
                      <a href="<?php echo $value['box_link'];?>"><i class="ion-ios-arrow-thin-right"></i></a>
                    </div>
                  </div>
                </div>
              <?php
              
              }

              ?>
            
            </div>
          </div>
        </div>


        <div id="features" class="features">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="features-text wow fadeInDown">
                  <?php echo $features_section['features_content']; ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="features-image wow fadeInRight">
                  <img class="img-responsive" src="<?php echo $features_section['features_image']['url']; ?>" alt="<?php echo $features_section['features_image']['alt']; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="flex-split">
          <div class="f-left">
            <div class="left-content wow fadeInLeft" data-wow-delay="0s">
              <?php echo $video_section['video_content']; ?>
            </div>
          </div>
          <div class="f-right" style='background: url(<?php echo $video_section['video_background_image']['url']; ?>) no-repeat center center'>
            <div class="video-icon hidden-xs text-center">
              <a class="popup wow fadeInUp" data-wow-delay="0.2s" href="<?php echo $video_section['video_url']; ?>"><i class="ion-ios-play"></i></a>
            </div>
          </div>
        </div>


        <div id="reviews" class="review-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="reviews owl-carousel owl-theme">
                <?php 

                $args = array(
                  'post__in' => $reviews_section,
                  'post_type' => 'reviews'
                );
                
                // The Query
                $the_query = new WP_Query( $args );
                
                // The Loop
                if ( $the_query->have_posts() ) {
                    
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $review_image = get_field('review_image');
                        $review = get_field('review');
                        $job = get_field('job_title');
                        $rating = get_field('rating');
                        ?>
                        <div class="review-single"><img class="img-circle" src="<?php echo $review_image['url']  ;?>" alt="Client Testimonoal" />
                        <div class="review-text wow fadeInDown" data-wow-delay="0.2s">
                          <p><?php echo $review; ?></p>
                          <h3>- <?php echo get_the_title(); ?></h3>
                          <h3><?php echo $job; ?></h3>
                          <?php 
                          
                          for ($x = 0; $x < $rating; $x++) { ?>
                            <i class="ion ion-star"></i>
                          <?php 

                          }
                          
                          ?>
                          
                          
                        </div>
                      </div>
                        <?php
                    }
                    
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                
                
                ?>
                  

                </div>
              </div>
            </div>
          </div>
        </div>


      <div class="pitch-2" style='background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url(<?php echo $pitch_section['background_image']['url'];?>) no-repeat center center; background-size: cover;'>
        <div class="container">
          <div class="pitch-inner wow fadeInRight">
            <?php echo $pitch_section['content']; ?>
          </div>
        </div>
      </div>

      <div id="buy" class="cta">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-offset-7">
              <div class="cta-inner">
                <h1>Mi Virtual</h1>
                <p>Made with precision to give absolute comfort and great experience. Get your own Mi today.</p>
                <h3>Color</h3>
                <span><i class="ion-android-checkbox-blank"></i></span>
                <span><i class="ion-android-checkbox-blank"></i></span>
                <span><i class="ion-android-checkbox-blank"></i></span>
                <h2>$299.99</h2>
                <ul>
                  <li>Free Worldwide Shipping</li>
                  <li>30-day Return Policy</li>
                </ul>
                 <div class="download-buttons wow fadeInUp">
                   <a href="#"><button class="btn btn-primary btn-action" type="button"><span>Buy Now</span></button></a>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="subscribe" class="cta-2">
        <div class="container">
          <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
              <div class="cta-2-inner">
                <h1 class="wow fadeInDown" data-wow-delay="0.1s">Subscribe now and get lifetime premium access.</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Just kidding you have to pay every month or every year to get all the benefits
                   we mentioned everywhere. Everything comes at a cost.</p>
                <div class="subform wow fadeInDown" data-wow-delay="0.3s">
                  <form id="signup" class="formee" action="http://ydirection.com/Root/<?php echo get_home_url() . "/wp-content/themes/root-theme/root-html/" ;?>assets/php/subscribe.php" method="post">
                    <input name="email" id="email" type="text" /><input class="right inputnew" type="submit" title="Send" value="Subscribe" />
                  </form>
                  <div id="response"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php

get_footer();

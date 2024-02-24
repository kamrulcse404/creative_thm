<?php

/**
 * Template Name: review-write
 **/
get_header();

?>



<!-- review write section start  -->

<section class="review_write">
  <div class="container">
    <div class="row">


      <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
        <div class="review_write_left">
          <h1> Write a review of our service </h1>
          <p> Overall rating </p>
          <div class="review_star_left">
            <img src="<?php echo get_template_directory_uri() ?>/image/review/star.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/image/review/star.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/image/review/star.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/image/review/star.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/image/review/star.png" alt="">
          </div>

          <div class="review_write_left_form">

            <div class="form_item">
              <label for="#">Title of your review</label>
              <input type="text" name="review_title" placeholder="If you could say it in one sentence, what would you say?">
            </div>

            <div class="form_item">
              <label for="#">Title of your review</label>
              <textarea name="" id="" cols="30" rows="10">
                               If you could say it in one sentence, what would you say?
                            </textarea>
            </div>

            <div class="form_btn">
              <a href="#">Submit Review </a>
            </div>

          </div>

        </div>
      </div>


      <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="review_write_right">
          <div class="review_write_right_title">
            <h2> Recent reviews for <br>
              Good Electronics
            </h2>
          </div>

          <div class="review_write_right_box">
            <div class="img_star">
              <div class="img_star_reviewer">
                <img src="<?php echo get_template_directory_uri(  )?>/image/review/model.png" alt="">
              </div>
              <div class="given_star">
                <div class="stars">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star-blue.png" alt="">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star-blue.png" alt="">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star-blue.png" alt="">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star-blue.png" alt="">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star.png" alt="">
                </div>
                <div class="stars_txt">
                  <h3>Client</h3>
                  <p>4.50/5.00</p>
                </div>
              </div>
            </div>
            <div class="reviewd_txt_1">
              <p>Lukas Lee reviewed Fnac</p>
            </div>
            <div class="reviewd_txt_2">
              <h4>"Excellent Support"</h4>
              <p>
                Mucius doctus constituto pri at, ne cetero postulant pro.
                At vix utinam corpora, ea oblique moderatius usu. Vix id
              </p>
            </div>
            <div class="reviewd_txt_3">
              <p>Published: 26.08.2018</p>
              <a href="#"> Read More </a>
            </div>
          </div>


          <div class="review_write_right_box">
            <div class="img_star">
              <div class="img_star_reviewer">
                <img src="<?php echo get_template_directory_uri(  )?>/image/review/model.png" alt="">
              </div>
              <div class="given_star">
                <div class="stars">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star-blue.png" alt="">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star-blue.png" alt="">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star-blue.png" alt="">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star-blue.png" alt="">
                  <img src="<?php echo get_template_directory_uri(  )?>/image/review/star.png" alt="">
                </div>
                <div class="stars_txt">
                  <h3>Client</h3>
                  <p>4.50/5.00</p>
                </div>
              </div>
            </div>
            <div class="reviewd_txt_1">
              <p>Lukas Lee reviewed Fnac</p>
            </div>
            <div class="reviewd_txt_2">
              <h4>"Excellent Support"</h4>
              <p>
                Mucius doctus constituto pri at, ne cetero postulant pro.
                At vix utinam corpora, ea oblique moderatius usu. Vix id
              </p>
            </div>
            <div class="reviewd_txt_3">
              <p>Published: 26.08.2018</p>
              <a href="#"> Read More </a>
            </div>
          </div>


        </div>
      </div>



    </div>
  </div>
</section>

<!-- review write section start  -->


<?php
get_footer();
?>
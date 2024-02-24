<?php

/**
 * Template Name: lets-work
 **/
get_header();

?>

<!-- Contact section start  -->

<section class="contact_section">
  <!-- title -->
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="contact_sec_title">
      <h1> Let’s work <br>
        <span> Together </span>
      </h1>
    </div>
  </div>

  <!-- contact form  -->

  <div class="form-1">
    <form action="#">
      <div class="form-single">
        <ul class="form-lebel">
          <li>
            <label for="name">Full Name</label>
            <input id="name" type="text" placeholder="Robart Rony">
          </li>
        </ul>
      </div>

      <div class="form-pair">
        <ul class="form-lebel">
          <li>
            <label for="com_name">Company name</label>
            <input id="com_name" type="text" placeholder="Ex. Tesla Inc">
          </li>
        </ul>
        <ul class="form-lebel">
          <li>
            <label for="email">Email*</label>
            <input id="email" type="email" placeholder="you@example.com" required>
          </li>
        </ul>
      </div>

      <div class="form-pair">
        <ul class="form-lebel">
          <li>
            <label>Service required*</label>
            <select required>
              <option value="">
                <p>Select Your Service</p>
              </option>
              <option value="Graphic_Design">Graphic Design</option>
              <option value="Branding_Design">Branding Design</option>
              <option value="Animation_Design">Animation Design</option>
              <option value="Digital_Art">Digital Art</option>
              <option value="Motion_Design">Motion Design</option>
              <option value="3D_Design">3D Design</option>
              <option value="Video_Editing">Video Editing</option>
              <option value="UI_UX_Design">UI UX Design</option>
              <option value="Social_Media_Marketing">Social Media Marketing</option>
              <option value="Brand_Management">Brand Management</option>
              <option value="Content_Writing">Content Writing</option>
              <option value="Content_Strategy">Content Strategy</option>
              <option value="SEO">SEO</option>
              <option value="Email_Marketing">Email Marketing</option>
            </select>
          </li>
        </ul>
        <ul class="form-lebel">
          <li>
            <label>Project budget*</label>
            <select required>
              <option value="">Select Your Range</option>
              <option value="1K-5K">$1K - $5K</option>
              <option value="5K-10K">$5K - $10K</option>
              <option value="10K-20K">$10K - $20K</option>
              <option value="20K-50K">10K-20K</option>
              <option value="60K-up">$60K and up</option>
            </select>
          </li>
        </ul>
      </div>

      <div class="form-single">
        <ul class="form-lebel">
          <li>
            <label>Project details*</label>
            <textarea rows="2" placeholder="Tell us more about your idea" required></textarea>
          </li>
        </ul>
      </div>

      <div class="form-button">
        <ul>
          <li>
            <input type="submit" value="">
          </li>
        </ul>
      </div>
    </form>
  </div>

</section>

<!-- Contact section end   -->


<?php
get_footer();
?>
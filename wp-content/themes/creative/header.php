<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- motiure bhai nav start  -->

    <section class="nav-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="logo">
                        <a href="#"><img src="<?php echo get_template_directory_uri(  ) ?>/image/logo/Logo_brand_new_1.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-8 col-l-8 col-xl-8">
                    <div class="nav-item">
                        <ul>
                            <li><a href="#">Works</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Carrer</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="nav-btn">
                        <a href="#"><b>LET'S START</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- motiure bhai nav end  -->
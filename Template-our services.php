<?php

/**
 * The main template file
 * Template for displaying single pages
 * Template Name: OUR SERVICES Template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atn
 */

get_header();
?>

<section class="inner-page_banner section-padding" style="background-image: url( https://atn.linkbuilderpros.com/wp-content/uploads/2024/05/ourservices-bannerbg.png)">
    <div class="container">
        <div class="row align-items-center text-center justify-content-center">
            <div class="col-lg-8 col-12 inpb-cont-wrap">
                <div class="banner-heading">
                    <h2 class="fadeInUp animated mb-2">
                        Our Services
                    </h2>
                </div>
                <!-- Dark section heading -->
                <div class="content-banner fadeInDown animated">
                    Secure your family’s future with structured plans for asset distribution, trust management, and succession planning </div>
            </div>
        </div>

    </div>

</section>



<section class="what-we-offer-area section-padding">
    <!-- section heading -->
    <!-- section heading -->
    <div class="container">
        <div class="row">
        <?php if ( !empty( $redux_demo['what_we_offer_slides'] ) ) : ?>
                <?php foreach ( $redux_demo['what_we_offer_slides'] as $slide ) : ?>
                    <div class="col-lg-4">
                        <div class="what-we-offer-card bg-white radius-8">
                            <?php if ( !empty( $slide['image'] ) ) : ?>
                                <img src="<?php echo esc_url( $slide['image'] ); ?>" alt="<?php echo esc_attr( $slide['title'] ); ?>" class="img-fluid">
                            <?php endif; ?>
                            <h4 class="dark-1 fw-bold mt-30">
                                <?php echo esc_html( $slide['title'] ); ?>
                            </h4>
                            <p class="dark-2 fs-18">
                                <?php echo esc_html( $slide['description'] ); ?>
                            </p>
                            <div class="mt-40">
                                <a href="<?php echo esc_url( $slide['url'] ); ?>" class="secondary-border-btn">
                                    More Details
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
    </div>
</section>
<!-- Call to action area -->




<?php
// get_sidebar();
get_footer();

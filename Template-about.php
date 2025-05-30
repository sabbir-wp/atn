<?php

/**
 * The main template file
 * Template for displaying single pages
 * Template Name: ABOUT Template
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

<section class="inner-page_banner section-padding" style="background-image: url( https://atn.linkbuilderpros.com/wp-content/uploads/2024/04/innerpage-banner.webp)">
    <div class="container">
        <div class="row align-items-center text-center justify-content-center">
            <div class="col-lg-8 col-12 inpb-cont-wrap">
                <div class="banner-heading">
                    <h2 class="fadeInUp animated mb-2">
                        About Us
                    </h2>
                </div>
                <!-- Dark section heading -->
                <div class="content-banner fadeInDown animated">
                    Secure your family’s future with structured plans for asset distribution, trust management, and succession planning </div>
            </div>
        </div>

    </div>

</section>



<?php
// Fetch Redux options
$background_image = isset($redux_demo['about_us_background_image']) ? esc_url($redux_demo['about_us_background_image']['url']) : '';
$title = isset($redux_demo['about_us_title']) ? esc_html($redux_demo['about_us_title']) : 'Who is Aaron Richards?';
$content = isset($redux_demo['about_us_content']) ? esc_html($redux_demo['about_us_content']) : '';
$client_count = isset($redux_demo['about_us_client_count']) ? esc_html($redux_demo['about_us_client_count']) : '250+';
$client_image = isset($redux_demo['about_us_client_image']) ? esc_url($redux_demo['about_us_client_image']['url']) : '';
?>

<section class="about-us-area section-padding" style="background-image: url(<?php echo $background_image; ?>)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft animated animated">
                <div class="about-section-content-wrap">
                    <!-- Dark section heading -->
                    <h2 class="dark-1 fw-bold titlevalue">
                        <?php echo $title; ?>
                    </h2>

                    <div class="content-wrapper">
                        <p><?php echo $content; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 wow fadeInRight animated animated">
                <div class="about-section-img-wrap">
                    <div class="client-wrap">
                        <div class="clientaa">
                            <span class="normal-tx">Client</span>
                            <span><svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_35_19282)">
                                        <path d="M16.3064 2.88849C9.05456 2.88849 3.17578 8.76727 3.17578 16.0191C3.17578 23.271 9.05456 29.1497 16.3064 29.1497C23.5583 29.1497 29.437 23.271 29.437 16.0191C29.437 8.76727 23.5583 2.88849 16.3064 2.88849ZM16.3064 27.5084C9.96103 27.5084 4.81711 22.3645 4.81711 16.0191C4.81711 9.67374 9.96103 4.52982 16.3064 4.52982C22.6518 4.52982 27.7957 9.67374 27.7957 16.0191C27.7957 22.3645 22.6518 27.5084 16.3064 27.5084Z" fill="#FF8F00"></path>
                                        <path d="M12.2029 13.5571C13.1093 13.5571 13.8442 12.8223 13.8442 11.9158C13.8442 11.0093 13.1093 10.2745 12.2029 10.2745C11.2964 10.2745 10.5615 11.0093 10.5615 11.9158C10.5615 12.8223 11.2964 13.5571 12.2029 13.5571Z" fill="#FF8F00"></path>
                                        <path d="M20.4094 13.5571C21.3159 13.5571 22.0507 12.8223 22.0507 11.9158C22.0507 11.0093 21.3159 10.2745 20.4094 10.2745C19.5029 10.2745 18.7681 11.0093 18.7681 11.9158C18.7681 12.8223 19.5029 13.5571 20.4094 13.5571Z" fill="#FF8F00"></path>
                                        <path d="M22.051 16.0191C22.051 19.1918 19.4791 21.7638 16.3064 21.7638C13.1337 21.7638 10.5617 19.1918 10.5617 16.0191H8.92041C8.92041 20.0983 12.2272 23.4051 16.3064 23.4051C20.3856 23.4051 23.6924 20.0983 23.6924 16.0191H22.051Z" fill="#FF8F00"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_35_19282">
                                            <rect width="26.2613" height="26.2613" fill="white" transform="translate(3.17529 2.8885)"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </span>
                        </div>
                        <div class="clent_number"><?php echo $client_count; ?></div>
                        <span class="normal-tx">Happy Clients</span>
                    </div>
                    <img decoding="async" src="<?php echo $client_image; ?>" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="faq-section section-padding faq" style="background-image: url( https://atn.linkbuilderpros.com/wp-content/uploads/2024/04/Testimonial-bg.png); background-color:#fff">
    <div class="container">
        <div class="row align-items-start justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="faq-section-title text-center">
                    <h2 class="darkblue-title wow fadeInUp animated" style="visibility: hidden; animation-name: none;">
                        ATN’s Core <span class="section-heading-mark primary-main">Pillars</span>
                    </h2>
                </div>
            </div>
            <div class="col-lg-7 col-12 faw-wrwp">
                <div class="faq-accordion-sec-wrap">
                    <div class="accordion " id="accordionFlushExample">
                    <div class="accordion" id="accordionFlushExample">
                                <?php 
                                // Loop through the FAQ questions and answers
                                for ($i = 1; $i <= 3; $i++) :
                                    $question = isset($redux_demo["faq_question_$i"]) ? esc_html($redux_demo["faq_question_$i"]) : 'No question provided.';
                                    $answer = isset($redux_demo["faq_answer_$i"]) ? wp_kses_post($redux_demo["faq_answer_$i"]) : 'No answer provided.';
                                    $delay = ($i * 0.1) . 's'; // Animation delay
                                ?>
                                    <div class="accordion-item wow fadeInUp animated" data-wow-delay="<?php echo $delay; ?>" style="visibility: hidden; animation-delay: <?php echo $delay; ?>; animation-name: none;">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed text-clr-gray1 ff-sg-semibold-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
                                                <?php echo $question; ?>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body ff-sg-book-20">
                                                <?php echo $answer; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</section>










<?php
// get_sidebar();
get_footer();

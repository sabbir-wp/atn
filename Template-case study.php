<?php

/**
 * The main template file
 * Template for displaying single pages
 * Template Name: CASE STUDY Template
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

<section class="inner-page_banner section-padding"
    style="background-image: url( https://atn.linkbuilderpros.com/wp-content/uploads/2024/04/Case-Study-header-bg.png)">
    <div class="container">
        <div class="row align-items-center text-center justify-content-center">
            <div class="col-lg-8 col-12 inpb-cont-wrap">
                <div class="banner-heading">
                    <h2 class="fadeInUp animated mb-2">
                        Case Study
                    </h2>
                </div>
                <!-- Dark section heading -->
                <div class="content-banner fadeInDown animated">
                    Secure your family’s future with structured plans for asset distribution, trust management, and
                    succession planning </div>
            </div>
        </div>

    </div>

</section>







<?php
// Fetch video link and image from Redux options
$video_link = isset($redux_demo['bc_video_link']) ? esc_url($redux_demo['bc_video_link']) : '';
$image_url  = isset($redux_demo['bc_image']['url']) ? esc_url($redux_demo['bc_image']['url']) : 'img/ourbestclient.png';
?>

<section class="best-client-section" style="background-image: url('<?php echo esc_url($redux_demo['bc_background_image']['url']); ?>');">
    <div class="container">
        <div class="bset-client-wrapper">
            <div class="bcw-titlewrwp">
                <div class="bcw-tag wow fadeInUp animated animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <p><?php echo isset($redux_demo['bc_section_title']) ? esc_html($redux_demo['bc_section_title']) : 'Our Clients'; ?></p>
                </div>
                <div class="bew-contentwrwp">
                    <h2 class="bcw-title wow fadeInLeft animated animated"
                        style="visibility: visible; animation-name: fadeInLeft;">
                        <?php echo isset($redux_demo['bc_section_title']) ? esc_html($redux_demo['bc_section_title']) : 'Watch Our Client Interviews Down Below'; ?>
                    </h2>
                    <p class="bew-content wow fadeInLeft animated animated"
                        style="visibility: visible; animation-name: fadeInLeft;">
                        <?php echo isset($redux_demo['bc_section_description']) ? wp_kses_post($redux_demo['bc_section_description']) : 'Define your short-term and long-term financial goals. Whether it’s saving for retirement, buying a house, or funding your children’s education.'; ?>
                    </p>
                    <!-- Primary Button -->
                    <div class="mt-40 wow fadeInDown animated animated" data-wow-delay="1.0s"
                        style="visibility: visible; animation-delay: 1s; animation-name: fadeInDown;">
                        <a target="_blank"
                            href="<?php echo isset($redux_demo['bc_button_link']) ? esc_url($redux_demo['bc_button_link']) : '#'; ?>"
                            class="primary-main-btn text-uppercase fs-16 fw-bold text-decoration-none">
                            Schedule A Call
                        </a>
                    </div>
                    <!-- Primary Button -->
                </div>
            </div>
            <div class="video-wrap wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <!-- Display Image -->
                <img decoding="async" src="<?php echo esc_url($redux_demo['bc_image']['url']); ?>" alt="Item Image">

                <div class="postertext">
                    <div class="posttxt">
                        <div class="headerwrwp">
                            Our Best Clients Interview <br>
                            <div class="duration">23:33 Min</div>
                        </div>

                        <button type="button" class="splide__video__play" data-bs-toggle="modal" data-bs-target="#myModal" data-src="<?php echo esc_url($video_link); ?>"type="video/mp4" data-bs-target="#myModal">

                            <!-- SVG Icon -->
                            <svg width="120" height="121" viewBox="0 0 120 121" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M60 8.10107C31.0078 8.10107 7.5 31.6089 7.5 60.6011C7.5 89.5933 31.0078 113.101 60 113.101C88.9922 113.101 112.5 89.5933 112.5 60.6011C112.5 31.6089 88.9922 8.10107 60 8.10107ZM76.8867 61.4097L51.293 80.0308C51.1527 80.1316 50.9873 80.1918 50.815 80.2047C50.6427 80.2177 50.4701 80.1829 50.3163 80.1042C50.1625 80.0254 50.0334 79.9059 49.9431 79.7585C49.8529 79.6112 49.805 79.4418 49.8047 79.269V42.0503C49.8041 41.8772 49.8515 41.7073 49.9416 41.5594C50.0317 41.4116 50.1609 41.2915 50.3151 41.2127C50.4692 41.1338 50.6421 41.0991 50.8147 41.1125C50.9873 41.1259 51.1529 41.1869 51.293 41.2886L76.8867 59.8979C77.0076 59.9835 77.1063 60.0967 77.1743 60.2283C77.2424 60.3598 77.2779 60.5057 77.2779 60.6538C77.2779 60.8019 77.2424 60.9478 77.1743 61.0794C77.1063 61.2109 77.0076 61.3242 76.8867 61.4097Z" fill="#F9FBFF"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


            <!-- Bootstrap Modal for Video -->
            <!-- Modal Structure -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <iframe id="video" width="100%" height="400" src="" frameborder="0" allow="; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>








<section class="best-client-slider-section"
    style="background-image: url(<?php echo esc_url($redux_demo['slider_background']['url']); ?>)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <h2 class="slider-sec-title wow fadeInLeft animated"
                    style="visibility: visible; animation-name: fadeInLeft;">
                    <?php echo esc_html($redux_demo['slider_title']); ?>
                    <span class="blue">Case Studies</span>
                </h2>
                <!-- Button -->
                <div class="mt-40 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <a target="_blank" href="<?php echo esc_url($redux_demo['slider_button_link']); ?>"
                        class="primary-main-btn text-uppercase fs-16 fw-bold text-decoration-none">
                        <?php echo esc_html($redux_demo['slider_button_text']); ?>
                    </a>
                </div>
            </div>
            <!-- Slider Section -->
            <div class="col-md-6 col-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <?php
                $slides = $redux_demo['best_clients_slides'];
                if (!empty($slides)) :
                ?>
                    <div class="splide" id="ourbestclientslider" role="region" aria-roledescription="carousel">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($slides as $slide) : ?>
                                    <li class="splide__slide">
                                        <img src="<?php echo esc_url($slide['image']); ?>"
                                            alt="<?php echo esc_attr($slide['title']); ?>">
                                        <div class="postertext">
                                            <div class="posttxt">
                                                <div class="headerwrwp-sm">
                                                    <?php echo esc_html($slide['title']); ?>
                                                    <div class="duration"><?php echo esc_html($slide['description']); ?></div>
                                                </div>
                                                <button type="button" class="splide__video__play" data-bs-toggle="modal"
                                                    data-src="<?php echo esc_url($slide['url']); ?>" type="video/mp4" data-bs-target="#myModal">

                                                    <!-- SVG Icon for Play Button -->
                                                    <svg width="60" height="60" viewBox="0 0 120 121" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M60 8.10107C31.0078 8.10107 7.5 31.6089 7.5 60.6011C7.5 89.5933 31.0078 113.101 60 113.101C88.9922 113.101 112.5 89.5933 112.5 60.6011C112.5 31.6089 88.9922 8.10107 60 8.10107ZM76.8867 61.4097L51.293 80.0308C51.1527 80.1316 50.9873 80.1918 50.815 80.2047C50.6427 80.2177 50.4701 80.1829 50.3163 80.1042C50.1625 80.0254 50.0334 79.9059 49.9431 79.7585C49.8529 79.6112 49.805 79.4418 49.8047 79.269V42.0503C49.8041 41.8772 49.8515 41.7073 49.9416 41.5594C50.0317 41.4116 50.1609 41.2915 50.3151 41.2127C50.4692 41.1338 50.6421 41.0991 50.8147 41.1125C50.9873 41.1259 51.1529 41.1869 51.293 41.2886L76.8867 59.8979C77.0076 59.9835 77.1063 60.0967 77.1743 60.2283C77.2424 60.3598 77.2779 60.5057 77.2779 60.6538C77.2779 60.8019 77.2424 60.9478 77.1743 61.0794C77.1063 61.2109 77.0076 61.3242 76.8867 61.4097Z"
                                                            fill="#F9FBFF"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <video id="video" controls="" autoplay="">
                        <source src="<?php echo esc_url($slide['url']); ?>" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Declare a variable to store the video source
    let videoSrc;

    // Add click event listener to all elements with class "video-btn"
    document.querySelectorAll('.video-btn').forEach(button => {
        button.addEventListener('click', () => {
            // Get the video source from the data-src attribute
            videoSrc = button.dataset.src;
            console.log(videoSrc);
        });
    });

    // Add event listener for when the modal is opened
    document.getElementById('myModal').addEventListener('shown.bs.modal', () => {
        // Update the video source with autoplay and other options
        document.getElementById('video').src = videoSrc + "?autoplay";
    });

    // Add event listener for when the modal is closed              
    document.getElementById('myModal').addEventListener('hide.bs.modal', () => {
        // Debugging statement to check if the event listener is triggered
        console.log("Modal is hiding");

        // Pause the video explicitly
        const video = document.getElementById('video');
        if (video) {
            console.log("Video element found, pausing video");
            video.pause();
        } else {
            console.error("Video element not found");
        }
    });
</script>









<?php
// Fetch video data from Redux options
$videos = $redux_demo['client_videos'];

if (!empty($videos)) :
?>
    <section class="section-padding myclientsay-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 wow fadeInDown animated" style="visibility: visible;">
                    <h2 class="darkblue-title">See What My <span>Clients Say</span></h2>
                </div>
                <div class="video-secwrap col-12">
                    <div class="row">
                        <?php foreach ($videos as $index => $video) : ?>
                            <div class="col-12 col-md-4 single-video wow fadeInUp animated" data-wow-delay="<?php echo 0.1 * $index; ?>s" style="visibility: visible;">
                                <div class="ratio ratio-16x9">
                                    <video controls poster="<?php echo esc_url($video['image']); ?>" width="100%">
                                        <source src="<?php echo esc_url($video['url']); ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <h4 class="video-title"><?php echo esc_html($video['title']); ?></h4>
                                    <?php if (!empty($video['description'])) : ?>
                                        <p class="video-description"><?php echo esc_html($video['description']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>




<section class="faq-section section-padding faq" style="background-image: url(https://atn.linkbuilderpros.com/wp-content/uploads/2024/05/award.svg); background-color:#F5FBFF">
    <div class="container">
        <div class="row align-items-start justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="faq-section-title text-center">
                    <h2 class="darkblue-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        Frequently Asked <span>Questions</span>
                    </h2>
                </div>
            </div>
            <div class="col-lg-7 col-12 faw-wrwp">
                <div class="faq-accordion-sec-wrap">
                    <div class="accordion" id="accordionFlushExample">
                        <?php
                        // Fetch FAQ data from Redux options
                        $faqs = $redux_demo['faq_video_items'];

                        if (!empty($faqs)) :
                            foreach ($faqs as $index => $faq) :
                        ?>
                            <div class="accordion-item wow fadeInUp animated" data-wow-delay="<?php echo 0.1 * $index; ?>s">
                                <h2 class="accordion-header" id="flush-heading<?php echo $index; ?>">
                                    <button class="accordion-button collapsed text-clr-gray1 ff-sg-semibold-20 plusbutton"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $index; ?>"
                                        aria-expanded="false" aria-controls="flush-collapse<?php echo $index; ?>">
                                        <?php echo esc_html($faq['title']); ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse<?php echo $index; ?>" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading<?php echo $index; ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body ff-sg-book-20">
                                        <p><?php echo esc_html($faq['description']); ?></p>
                                        <?php if (!empty($faq['url'])) : ?>
                                            <div class="ratio ratio-16x9">
                                                <video controls width="50%" height="50%">
                                                    <source src="<?php echo esc_url($faq['url']); ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







  
   <?php
   // get_sidebar();
   get_footer();

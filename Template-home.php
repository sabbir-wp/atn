<?php

/**
 * The main template file
 * 
 * Template for displaying single pages
 * Template Name: Homepage Template
 * 
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
<?php global $redux_demo; ?>

<section class="banner-area" style="background-image: url('<?php echo esc_url($redux_demo['banner_img']['url']); ?>');">
    <div class="container">
        <div class="banner-content text-center">
            <p class="sub-heading fs-16 text-uppercase dark-4 fw-bold fadeInUp animated">
                <?php echo esc_html($redux_demo['banner_sub_heading']); ?>
            </p>
            <h1 class="dark-7 fw-bold fadeInDown animated" data-wow-delay="0.2s">
                <?php echo esc_html($redux_demo['banner_main_heading']); ?>
            </h1>
            <p class="dark-6 fadeInDown animated" data-wow-delay="0.3s">
                <?php echo esc_html($redux_demo['banner_description']); ?>
            </p>
            <div class="fadeInDown animated" data-wow-delay="0.4s">
                <a target="_blank" href="<?php echo esc_url($redux_demo['banner_cta_link']); ?>" class="primary-main-btn">
                    <?php echo esc_html($redux_demo['banner_cta_text']); ?>
                </a>
            </div>
        </div>
    </div>
</section>



<section class="our-approach-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="section-heading">
                    <h2 class="dark-1 fw-bold">
                        <?php echo esc_html($redux_demo['our_approach_title']); ?>
                    </h2>
                    <p class="dark-2">
                        <?php echo esc_html($redux_demo['our_approach_description']); ?>
                    </p>
                </div>
            </div>
            <?php if (!empty($redux_demo['our_approach_slides'])) : ?>
                <?php foreach ($redux_demo['our_approach_slides'] as $key => $slide) : ?>
                    <div class="col-lg-4 col-12 wow fadeInUp animated" data-wow-delay="<?php echo esc_attr($key * 0.1); ?>s">
                        <div class="our-approach-item radius-4">
                            <div class="">
                                <?php if (!empty($slide['image'])) : ?>
                                    <img src="<?php echo esc_url($slide['image']); ?>" alt="<?php echo esc_attr($slide['title']); ?>" class="img-fluid">
                                <?php endif; ?>
                                <h4 class="dark-1 fw-bold">
                                    <?php echo esc_html($slide['title']); ?>
                                </h4>
                                <p class="dark-2">
                                    <?php echo esc_html($slide['description']); ?>
                                </p>
                            </div>
                            <div class="">
                                <a href="<?php echo esc_url($slide['url']); ?>" class="secondary-border-btn">
                                    More Details
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.1083 14.0302L7.05005 12.9697L11.0168 8.99998L7.05005 5.03023L8.1113 3.96973L12.075 7.93948C12.3562 8.22077 12.5142 8.60223 12.5142 8.99998C12.5142 9.39772 12.3562 9.77918 12.075 10.0605L8.1083 14.0302Z" fill="#141414"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>




<section class="about-us-area section-padding" style="background-image: url('<?php echo esc_url($redux_demo['about_us_bg_image']['url']); ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="about-section-content-wrap">
                    <!-- Section Heading -->
                    <div class="dark-section-heading">
                        <h2 class="">
                            <span class="dark-section-heading-mark primary-main"><?php echo esc_html($redux_demo['about_us_heading']); ?></span>
                        </h2>
                    </div>
                    <!-- Section Content -->
                    <div class="content-wrapper">
                        <p class="dark-7 mt-30"><?php echo esc_html($redux_demo['about_us_paragraph_1']); ?></p>
                        <p class="dark-7 mt-36"><?php echo esc_html($redux_demo['about_us_paragraph_2']); ?></p>
                    </div>
                    <!-- Primary Button -->
                    <div class="mt-40">
                        <a href="<?php echo esc_url($redux_demo['about_us_button_link']); ?>" class="primary-main-btn text-uppercase fs-16 fw-bold text-decoration-none">
                            <?php echo esc_html($redux_demo['about_us_button_text']); ?>
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.1083 14.5302L7.05005 13.4697L11.0168 9.49998L7.05005 5.53023L8.1113 4.46973L12.075 8.43948C12.3562 8.72077 12.5142 9.10223 12.5142 9.49998C12.5142 9.89772 12.3562 10.2792 12.075 10.5605L8.1083 14.5302Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                <div class="about-section-img-wrap">
                    <img decoding="async" src="<?php echo esc_url($redux_demo['about_us_image']['url']); ?>" alt="Image" class="img-fluid">
                    <div class="about-section-img-caption bg-white radius-18 dark-2 fs-15">
                        <?php echo esc_html($redux_demo['about_us_paragraph_1']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="what-we-offer-area section-padding">
    <div class="section-heading text-center mb-64">
        <h2 class="dark-1 fw-bold">
            <?php echo esc_html($redux_demo['what_we_offer_title']); ?>
        </h2>
        <p class="dark-2">
            <?php echo esc_html($redux_demo['what_we_offer_description']); ?>
        </p>
    </div>
    <div class="container">
        <div class="row">
            <?php if (!empty($redux_demo['what_we_offer_slides'])) : ?>
                <?php foreach ($redux_demo['what_we_offer_slides'] as $slide) : ?>
                    <div class="col-lg-4">
                        <div class="what-we-offer-card bg-white radius-8">
                            <?php if (!empty($slide['image'])) : ?>
                                <img src="<?php echo esc_url($slide['image']); ?>" alt="<?php echo esc_attr($slide['title']); ?>" class="img-fluid">
                            <?php endif; ?>
                            <h4 class="dark-1 fw-bold mt-30">
                                <?php echo esc_html($slide['title']); ?>
                            </h4>
                            <p class="dark-2 fs-18">
                                <?php echo esc_html($slide['description']); ?>
                            </p>
                            <div class="mt-40">
                                <a href="<?php echo esc_url($slide['url']); ?>" class="secondary-border-btn">
                                    More Details
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="text-center mt-64">
            <a href="<?php echo esc_url($redux_demo['what_we_offer_view_all_link']); ?>" class="primary-main-btn text-uppercase fs-16 fw-bold text-decoration-none">
                View All
            </a>
        </div>
    </div>
</section>



<!-- Case Studies -->

<?php
global $redux_demo;
$video_slides = isset($redux_demo['video_slides']) ? $redux_demo['video_slides'] : [];
?>

<section class="case-studies-area section-padding" style="background-image: url('<?php echo esc_url($redux_demo['casestudies_us_bg_image']['url']); ?>');">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="fw-bold text-white">
                        Client
                        <span class="section-heading-mark primary-main">
                            <?php echo esc_html($redux_demo['casestudies_us_heading']); ?>
                        </span>
                    </h2>
                    <p class="text-white fw-normal"><?php echo esc_html($redux_demo['casestudies_paragraph_1']); ?></p>
                </div>
            </div>

            <div class="col-lg-8 wow animated fadeInUp">
                <div class="splide" id="splide01" role="region" aria-roledescription="carousel">
                    <div class="splide__track">
                        <?php if (!empty($video_slides) && is_array($video_slides)): ?>
                            <ul class="splide__list">
                                <?php foreach ($video_slides as $slide): ?>
                                    <li class="splide__slide splide__slide--has-video">
                                        <img src="<?php echo esc_url($slide['image']); ?>" alt="Thumbnail">
                                        <div class="splide__video">
                                            <button type="button" class="splide__video__play" data-bs-toggle="modal" 
                                                data-src="<?php echo esc_url($slide['url']); ?>" 
                                                data-bs-target="#videoModal">
                                                <svg width="120" height="121" viewBox="0 0 120 121" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M60 8.10107C31.0078 8.10107 7.5 31.6089 7.5 60.6011C7.5 89.5933 31.0078 113.101 60 113.101C88.9922 113.101 112.5 89.5933 112.5 60.6011C112.5 31.6089 88.9922 8.10107 60 8.10107ZM76.8867 61.4097L51.293 80.0308C51.1527 80.1316 50.9873 80.1918 50.815 80.2047C50.6427 80.2177 50.4701 80.1829 50.3163 80.1042C50.1625 80.0254 50.0334 79.9059 49.9431 79.7585C49.8529 79.6112 49.805 79.4418 49.8047 79.269V42.0503C49.8041 41.8772 49.8515 41.7073 49.9416 41.5594C50.0317 41.4116 50.1609 41.2915 50.3151 41.2127C50.4692 41.1338 50.6421 41.0991 50.8147 41.1125C50.9873 41.1259 51.1529 41.1869 51.293 41.2886L76.8867 59.8979C77.0076 59.9835 77.1063 60.0967 77.1743 60.2283C77.2424 60.3598 77.2779 60.5057 77.2779 60.6538C77.2779 60.8019 77.2424 60.9478 77.1743 61.0794C77.1063 61.2109 77.0076 61.3242 76.8867 61.4097Z" fill="#F9FBFF"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p>No videos available.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="ratio ratio-16x9">
                    <video id="videoPlayer" controls autoplay>
                        <source src="" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize Splide
        const splide = new Splide('#splide01', {
            heightRatio: 0.6,
            cover: true,
            arrows: false,
        });
        splide.mount();

        // Video Modal Functionality
        const videoModal = document.getElementById('videoModal');
        const videoPlayer = document.getElementById('videoPlayer');

        document.querySelectorAll('.video-btn').forEach(button => {
            button.addEventListener('click', () => {
                const videoSrc = button.getAttribute('data-src');
                videoPlayer.querySelector('source').setAttribute('src', videoSrc);
                videoPlayer.load();
                videoPlayer.play();
            });
        });

        videoModal.addEventListener('hide.bs.modal', () => {
            videoPlayer.pause();
            videoPlayer.querySelector('source').setAttribute('src', '');
        });
    });
</script>








<?php
global $redux_demo;

// Fetch client reviews and ratings
$reviews = $redux_demo['clients_reviews'] ?? [];
$ratings = $redux_demo['client_ratings'] ?? [];

if (!empty($reviews)) : ?>
    <section class="clients-review-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h2 class="dark-1 fw-bold wow animated fadeInLeft">
                            What Our <span class="section-heading-mark primary-main">Clients Say</span>
                        </h2>
                        <p>At ATN, we take client results extremely seriously. Hear from some of our happy clients.</p>
                    </div>
                </div>
                <div class="col-lg-7 wow animated fadeInRight">
                    <div class="clients-review-wrapper">
                        <div id="clients-review-splide" class="splide" role="group" aria-label="Client Reviews">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php foreach ($reviews as $index => $review) :
                                        // Ensure rating is numeric and within 1-5 range
                                        $rating = (int)($ratings[$index] ?? 0);
                                        $rating = max(1, min(5, $rating)); // Clamp to 1-5
                                    ?>
                                        <li class="splide__slide tmitem_wrap">
                                            <p class="tm_content"><?php echo esc_html($review['description']); ?></p>
                                            <img class="clientimg" 
                                                 src="<?php echo esc_url($review['url']); ?>" 
                                                 alt="<?php echo esc_attr($review['title']); ?>">
                                            <h2 class="name"><?php echo esc_html($review['title']); ?></h2>

                                            <!-- Rating Section -->
                                            <div class="rating" aria-label="Rating: <?php echo esc_attr($rating); ?> out of 5">
                                                <span class="rating-value"><?php echo esc_html($rating); ?></span>
                                                <span class="stars">
                                                    <?php
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        echo $i <= $rating
                                                            ? '<i class="fa fa-star filled"></i>'
                                                            : '<i class="fa fa-star-o empty"></i>';
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Initialize Splide Carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#clients-review-splide', {
                type: 'loop',
                perPage: 2,
                autoplay: true,
                interval: 3000,
                breakpoints: {
                    768: {
                        perPage: 1
                    },
                },
                pagination: true,
                arrows: true,
            }).mount();
        });
    </script>

    <!-- Additional CSS for Rating Stars -->
    <style>
        .rating .stars {
            display: inline-flex;
            gap: 2px;
        }
        .rating .stars .filled {
            color: #FF8F00;
        }
        .rating .stars .empty {
            color: #d3d3d3;
        }
    </style>
<?php endif; ?>











<section class="latest-blog-area section-padding">
    <!-- Section Heading -->
    <div class="section-heading text-center mb-64">
        <h2 class="dark-1 fw-bold wow animated fadeInUp" style="visibility: hidden; animation-name: none;">
            Our Latest <span class="section-heading-mark primary-main">Blog</span>
        </h2>
    </div>
    <!-- Section Heading -->

    <div class="container">
        <div class="splide" id="latest_blog_post_slider" aria-label="Latest Blog Post Slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    // WP_Query Arguments
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 6,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    );

                    // The Query
                    $query = new WP_Query($args);

                    // Loop through posts
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <li class="splide__slide">
                                <div class="col-12 blog-item mb-4 wow fadeInUp animated">
                                    <div class="single-latest-blog regular-item single-latest-blog wow animated fadeInLeft animated">
                                        <div class="featured-image">
                                            <!-- Featured Image -->
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid" style="aspect-ratio: 16 / 9; object-fit: cover;">
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.jpg" alt="Default image" class="img-fluid">
                                            <?php endif; ?>
                                        </div>

                                        <div class="single-latest-blog-content radius-8">
                                            <!-- Date & Category -->
                                            <div class="date-category">
                                                <?php
                                                $category = get_the_category();
                                                if (!empty($category)) {
                                                    echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '" class="post-category-name fs-14 text-uppercase fw-bold text-white bg-success-main">' . esc_html($category[0]->name) . '</a>';
                                                }
                                                ?>
                                                <span class="post-date fs-14 fw-bold dark-2">
                                                    <?php echo get_the_date(); ?>
                                                </span>
                                            </div>

                                            <!-- Post Title -->
                                            <h4 class="post-title dark-1 fw-bold"><?php the_title(); ?></h4>

                                            <!-- Post Excerpt -->
                                            <p class="post-excerpt fs-20 dark-2">
                                                <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                                            </p>
                                        </div>

                                        <!-- Read More Button -->
                                        <a href="<?php the_permalink(); ?>" class="blog-read-more-btn dark-1 fs-16 fw-bold text-uppercase text-decoration-none">
                                            Read More
                                            <span class="read-more-btn-icon bg-primary-main">
                                                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M37.7307 22.9363L28.4292 13.6348L25.3656 16.6984L32.5004 23.8333H10.8337V28.1666H32.5004L25.3656 35.3014L28.4292 38.3651L37.7307 29.0636C38.5431 28.251 38.9995 27.149 38.9995 25.9999C38.9995 24.8509 38.5431 23.7489 37.7307 22.9363Z" fill="white"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>

<?php
                        // Restore original Post Data
                        wp_reset_postdata();
                    else :
                        echo '<p>' . __('No posts found.') . '</p>';
                    endif;
?>
</section>










<?php
// get_sidebar();
get_footer();

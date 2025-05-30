<?php

/**
 * The main template file
 * Template for displaying single pages
 * Template for displaying single pages
 * Template Name: Blog Template
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

<section class="inner-page_banner section-padding">
    <div class="container">
        <div class="row align-items-center text-center justify-content-center">
            <div class="col-lg-7 col-12 ">
                <div class="banner-heading">
                    <h2 class="fadeInUp animated">
                        News and Blog
                    </h2>
                </div>
                <!-- Dark section heading -->
                <div class="content-banner fadeInDown animated">
                    Secure your family's future with structured plans for asset distribution, trust management, and succession planning
                </div>
            </div>
        </div>
    </div>
</section>
<!--   -->



<section class="blog-section latest-blog-area section-padding">
    <div class="container">
        <div class="row">



            <?php
            // Define the custom query arguments
            $args = array(
                'post_type'      => 'post',      // Ensure it's pulling WordPress posts
                'posts_per_page' => 7,           // Limit the number of posts to 6
                'order'          => 'DESC',      // Order posts by date (latest first)
                'orderby'        => 'date',      // Sort posts by date
            );

            // Execute the custom query
            $query = new WP_Query($args);

            // Check if there are any posts
            if ($query->have_posts()) :
                // Loop through the posts
                $counter = 0; // To track if we are on the first post
                while ($query->have_posts()) : $query->the_post();
                    // Check if it's the first post
                    if ($counter == 0) :
            ?>
                        <!-- 1st Block - Display latest blog item with full content -->
                        <div class="col-12 wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="single-latest-blog blog-item-last mb-4">
                                <div class="featured-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Featured image" class="img-fluid">
                                    <?php else : ?>
                                        <img src="default-image.jpg" alt="Featured image" class="img-fluid"> <!-- Default image if no thumbnail -->
                                    <?php endif; ?>
                                </div>
                                <div class="radius-8 contbg-wrap">
                                    <div class="single-latest-blog-content">
                                        <!-- Date & Category -->
                                        <div class="date-category">
                                            <?php
                                            $category = get_the_category();
                                            if (!empty($category)) : ?>
                                                <a href="<?php echo get_category_link($category[0]->term_id); ?>" class="post-category-name fs-14 <?php echo esc_attr($category[0]->slug); ?> text-uppercase fw-bold text-white text-decoration-none">
                                                    <?php echo esc_html($category[0]->name); ?>
                                                </a>
                                            <?php endif; ?>
                                            <span class="post-date fs-14 fw-bold dark-2">
                                                <?php echo get_the_date(); ?>
                                            </span>
                                        </div>
                                        <!-- Date & Category -->
                                        <h4 class="post-title dark-1 fw-bold"><?php the_title(); ?></h4>
                                        <p class="post-excerpt fs-20 dark-2">
                                            <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
                                        </p>
                                    </div>
                                    <!-- Read More btn -->
                                    <a href="<?php the_permalink(); ?>" class="blog-read-more-btn dark-1 fs-16 fw-bold text-uppercase text-decoration-none">
                                        Read More
                                        <span class="read-more-btn-icon bg-primary-main">
                                            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M37.7307 22.9363L28.4292 13.6348L25.3656 16.6984L32.5004 23.8333H10.8337V28.1666H32.5004L25.3656 35.3014L28.4292 38.3651L37.7307 29.0636C38.5431 28.251 38.9995 27.149 38.9995 25.9999C38.9995 24.8509 38.5431 23.7489 37.7307 22.9363Z" fill="white"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <!-- Read More btn -->
                                </div>
                            </div>
                        </div>
                        <!-- End 1st Block -->
                    <?php
                    else :
                    ?>
                        <!-- 2nd Block - Display other blog items -->
                        <div class="col-lg-4 col-md-6 col-12 blog-item mb-4 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="single-latest-blog regular-item">
                                <div class="featured-image">
                                    <!-- Featured Image -->
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                    <?php else : ?>
                                        <img src="path/to/your/default-image.jpg" alt="Default image" class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <div class="single-latest-blog-content radius-8">
                                    <!-- Date & Category -->
                                    <div class="date-category">
                                        <?php
                                        // Get the first category
                                        $category = get_the_category();
                                        if (!empty($category)) {
                                            echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '" class="post-category-name fs-14 text-uppercase fw-bold text-white text-decoration-none bg-success-main">' . esc_html($category[0]->name) . '</a>';
                                        }
                                        ?>
                                        <span class="post-date fs-14 fw-bold dark-2">
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div>
                                    <!-- Post Title -->
                                    <h4 class="post-title dark-1 fw-bold">
                                        <?php the_title(); ?>
                                    </h4>
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
                        <!-- End 2nd Block -->
            <?php
                    endif;

                    $counter++; // Increment the counter after each loop
                endwhile;

                // Reset post data
                wp_reset_postdata();
            else :
                echo '<p>' . __('Sorry, no posts found.') . '</p>';
            endif;
            ?>


        </div>
    </div>
</section>

















<?php
// get_sidebar();
get_footer();

<?php
// Arguments for the WP_Query
$args = array(
    'post_type' => 'post',      // Fetches posts
    'posts_per_page' => 6,      // Adjust the number as needed
    'orderby' => 'date',        // Order by date
    'order' => 'DESC'           // Latest posts first
);

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) : ?>
    <div class="container">
        <div class="splide" id="latest_blog_post_slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="splide__slide">
                            <div class="single-latest-blog">
                                <div class="featured-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <div class="single-latest-blog-content radius-8">
                                    <div class="date-category">
                                        <?php
                                        // Display categories
                                        $categories = get_the_category();
                                        if (!empty($categories)) : ?>
                                            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="post-category-name fs-14 text-uppercase fw-bold text-white bg-success-main">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </a>
                                        <?php endif; ?>
                                        <span class="post-date fs-14 fw-bold dark-2">
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div>
                                    <h4 class="post-title dark-1 fw-bold"><?php the_title(); ?></h4>
                                    <p class="post-excerpt fs-20 dark-2">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="blog-read-more-btn dark-1 fs-16 fw-bold text-uppercase text-decoration-none">
                                        Read More
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
endif;

// Restore original Post Data
wp_reset_postdata();
?>










<?php
// Arguments for the WP_Query
$args = array(
    'post_type' => 'post',      // Fetches posts
    'posts_per_page' => 6,      // Adjust the number as needed
    'orderby' => 'date',        // Order by date
    'order' => 'DESC'           // Latest posts first
);

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) : ?>

    <div class="container">
        <div class="splide splide--loop splide--ltr splide--draggable is-active is-overflow is-initialized" role="group" id="latest_blog_post_slider" aria-label="Splide Basic HTML Example" aria-roledescription="carousel">
            <div class="splide__track splide__track--loop splide__track--ltr splide__track--draggable" id="latest_blog_post_slider-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite" aria-atomic="true">
                <ul class="splide__list" id="latest_blog_post_slider-list" role="presentation" style="transform: translateX(-2951.91px);">

                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <li class="splide__slide splide__slide--clone" id="latest_blog_post_slider-clone03" role="tabpanel" aria-roledescription="slide" aria-label="3 of 6" style="margin-right: 30px; width: calc(33.3333% - 20px);" aria-hidden="true">
                            <div class="single-latest-blog wow animated fadeInLeft" data-wow-delay="0.20s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                <div class="featured-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <div class="single-latest-blog-content radius-8">
                                    <!-- Date & Category -->
                                    <div class="date-category">
                                        <?php
                                        // Display categories
                                        $categories = get_the_category();
                                        if (!empty($categories)) : ?>
                                            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="post-category-name fs-14 text-uppercase fw-bold text-white bg-success-main">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </a>
                                        <?php endif; ?>

                                        <a href="https://atn.linkbuilderpros.com/category/insurance" class="post-category-name insurance fs-14 text-uppercase fw-bold text-white text-decoration-none bg-success-main" tabindex="-1">
                                            Insurance
                                        </a>
                                        <span class="post-date fs-14 fw-bold dark-2">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4499 11.2168L11.1999 10.4668L8.54992 7.80016V4.45016H7.54992V8.20016L10.4499 11.2168ZM7.99992 14.6668C7.08881 14.6668 6.2277 14.4918 5.41658 14.1418C4.60547 13.7918 3.89714 13.3141 3.29159 12.7085C2.68603 12.1029 2.20825 11.3946 1.85825 10.5835C1.50825 9.77238 1.33325 8.91127 1.33325 8.00016C1.33325 7.08905 1.50825 6.22794 1.85825 5.41683C2.20825 4.60572 2.68603 3.89738 3.29159 3.29183C3.89714 2.68627 4.60547 2.2085 5.41658 1.8585C6.2277 1.5085 7.08881 1.3335 7.99992 1.3335C8.91103 1.3335 9.77214 1.5085 10.5833 1.8585C11.3944 2.2085 12.1027 2.68627 12.7083 3.29183C13.3138 3.89738 13.7916 4.60572 14.1416 5.41683C14.4916 6.22794 14.6666 7.08905 14.6666 8.00016C14.6666 8.91127 14.4916 9.77238 14.1416 10.5835C13.7916 11.3946 13.3138 12.1029 12.7083 12.7085C12.1027 13.3141 11.3944 13.7918 10.5833 14.1418C9.77214 14.4918 8.91103 14.6668 7.99992 14.6668ZM7.99992 13.6668C9.55547 13.6668 10.8888 13.1113 11.9999 12.0002C13.111 10.8891 13.6666 9.55572 13.6666 8.00016C13.6666 6.44461 13.111 5.11127 11.9999 4.00016C10.8888 2.88905 9.55547 2.3335 7.99992 2.3335C6.44436 2.3335 5.11103 2.88905 3.99992 4.00016C2.88881 5.11127 2.33325 6.44461 2.33325 8.00016C2.33325 9.55572 2.88881 10.8891 3.99992 12.0002C5.11103 13.1113 6.44436 13.6668 7.99992 13.6668Z" fill="#4C4C4C"></path>
                                            </svg>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div>
                                    <!-- Date & Category -->
                                    <h4 class="post-title dark-1 fw-bold">
                                        <?php the_title(); ?>

                                    </h4>
                                    <p class="post-excerpt fs-20 dark-2">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                    </p>

                                    <!-- /wp:paragraph -->

                                </div>
                                <!-- Read More btn -->
                                <a href="<?php the_permalink(); ?>" class="blog-read-more-btn dark-1 fs-16 fw-bold text-uppercase text-decoration-none" tabindex="-1">
                                    Read More
                                    <span class="read-more-btn-icon bg-primary-main">
                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M37.7307 22.9363L28.4292 13.6348L25.3656 16.6984L32.5004 23.8333H10.8337V28.1666H32.5004L25.3656 35.3014L28.4292 38.3651L37.7307 29.0636C38.5431 28.251 38.9995 27.149 38.9995 25.9999C38.9995 24.8509 38.5431 23.7489 37.7307 22.9363Z" fill="white"></path>
                                        </svg>
                                    </span>
                                </a>
                                <!-- Read More btn -->
                            </div>
                        </li>
                    <?php endwhile; ?>

                </ul>
            </div>
        </div>
    </div>
<?php
endif;

// Restore original Post Data
wp_reset_postdata();
?>











<?php
// Arguments for the WP_Query
$args = array(
    'post_type'      => 'post',      // Fetches posts
    'posts_per_page' => 6,           // Adjust the number as needed
    'orderby'        => 'date',      // Order by date
    'order'          => 'DESC'       // Latest posts first
);

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) : ?>

    <div class="container">
        <div class="splide" role="group" aria-label="Latest Blog Posts Carousel">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="splide__slide">
                            <div class="single-latest-blog wow animated fadeInLeft" data-wow-delay="0.1s">
                                <div class="featured-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/default-img.jpg" alt="Default image" class="img-fluid">
                                    <?php endif; ?>
                                </div>

                                <div class="single-latest-blog-content radius-8">
                                    <!-- Date & Category -->
                                    <div class="date-category">
                                        <?php
                                        // Display categories
                                        $categories = get_the_category();
                                        if (!empty($categories)) : ?>
                                            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="post-category-name fs-14 text-uppercase fw-bold text-white bg-success-main">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </a>
                                        <?php endif; ?>

                                        <span class="post-date fs-14 fw-bold dark-2">
                                            <?php echo get_the_date('d F Y'); ?>
                                        </span>
                                    </div>

                                    <!-- Post Title -->
                                    <h4 class="post-title dark-1 fw-bold">
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none dark-1">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>

                                    <!-- Post Excerpt -->
                                    <p class="post-excerpt fs-20 dark-2">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </p>

                                    <!-- Read More Button -->
                                    <a href="<?php the_permalink(); ?>" class="blog-read-more-btn dark-1 fs-16 fw-bold text-uppercase text-decoration-none">
                                        Read More
                                        <span class="read-more-btn-icon bg-primary-main">
                                            <!-- SVG Arrow -->
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
    // Reset post data after custom query
    wp_reset_postdata();
else : ?>
    <p><?php esc_html_e('No posts found.', 'your-theme-text-domain'); ?></p>
<?php endif; ?>























<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 6, // Number of posts to display
    'order' => 'DESC',
    'orderby' => 'date',
);

$latest_posts = new WP_Query($args);

if ($latest_posts->have_posts()) :
?>
    <div class="container">
        <div class="splide" id="latest_blog_post_slider" role="group" aria-label="Latest Blog Posts Carousel">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                        <li class="splide__slide">
                            <div class="single-latest-blog wow animated fadeInLeft" data-wow-delay="0.1s">
                                <!-- Featured Image -->
                                <div class="featured-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/default-image.jpg" class="img-fluid" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                    </a>
                                </div>

                                <!-- Blog Content -->
                                <div class="single-latest-blog-content radius-8">
                                    <!-- Date & Category -->
                                    <div class="date-category">
                                        <?php
                                        $category = get_the_category();
                                        if ($category) :
                                        ?>
                                            <a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>" class="post-category-name fs-14 text-uppercase fw-bold text-white text-decoration-none bg-success-main">
                                                <?php echo esc_html($category[0]->name); ?>
                                            </a>
                                        <?php endif; ?>
                                        <span class="post-date fs-14 fw-bold dark-2">
                                            <svg width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M10.4499 11.2168L11.1999 10.4668L8.54992 7.80016V4.45016H7.54992V8.20016L10.4499 11.2168ZM7.99992 14.6668C7.08881 14.6668 6.2277 14.4918 5.41658 14.1418C4.60547 13.7918 3.89714 13.3141 3.29159 12.7085C2.68603 12.1029 2.20825 11.3946 1.85825 10.5835C1.50825 9.77238 1.33325 8.91127 1.33325 8.00016C1.33325 7.08905 1.50825 6.22794 1.85825 5.41683C2.20825 4.60572 2.68603 3.89738 3.29159 3.29183C3.89714 2.68627 4.60547 2.2085 5.41658 1.8585C6.2277 1.5085 7.08881 1.3335 7.99992 1.3335C8.91103 1.3335 9.77214 1.5085 10.5833 1.8585C11.3944 2.2085 12.1027 2.68627 12.7083 3.29183C13.3138 3.89738 13.7916 4.60572 14.1416 5.41683C14.4916 6.22794 14.6666 7.08905 14.6666 8.00016C14.6666 8.91127 14.4916 9.77238 14.1416 10.5835C13.7916 11.3946 13.3138 12.1029 12.7083 12.7085C12.1027 13.3141 11.3944 13.7918 10.5833 14.1418C9.77214 14.4918 8.91103 14.6668 7.99992 14.6668ZM7.99992 13.6668C9.55547 13.6668 10.8888 13.1113 11.9999 12.0002C13.111 10.8891 13.6666 9.55572 13.6666 8.00016C13.6666 6.44461 13.111 5.11127 11.9999 4.00016C10.8888 2.88905 9.55547 2.3335 7.99992 2.3335C6.44436 2.3335 5.11103 2.88905 3.99992 4.00016C2.88881 5.11127 2.33325 6.44461 2.33325 8.00016C2.33325 9.55572 2.88881 10.8891 3.99992 12.0002C5.11103 13.1113 6.44436 13.6668 7.99992 13.6668Z" fill="#4C4C4C"></path>
                                            </svg>
                                            <?php echo get_the_date('d F Y'); ?>
                                        </span>
                                    </div>

                                    <!-- Post Title -->
                                    <h4 class="post-title dark-1 fw-bold">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>

                                    <!-- Excerpt -->
                                    <p class="post-excerpt fs-20 dark-2">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </p>

                                    <!-- Read More Button -->
                                    <a href="<?php the_permalink(); ?>" class="blog-read-more-btn dark-1 fs-16 fw-bold text-uppercase text-decoration-none">
                                        Read More
                                        <span class="read-more-btn-icon bg-primary-main">
                                            <!-- SVG Icon Here -->
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
    wp_reset_postdata();
endif;
?>






<?php
// Arguments for the WP_Query
$args = array(
    'post_type' => 'post',      // Fetch posts
    'posts_per_page' => 6,      // Number of posts to display
    'orderby' => 'date',        // Order by date
    'order' => 'DESC'           // Latest posts first
);

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) : ?>

    <div class="container">
        <div class="splide" role="group" id="latest_blog_post_slider" aria-label="Latest Blog Post Slider">
            <div class="splide__track">
                <ul class="splide__list" id="latest_blog_post_slider-list">

                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="splide__slide" style="margin-right: 30px; width: calc(33.3333% - 20px);">
                            <div class="single-latest-blog wow animated fadeInLeft" data-wow-delay="0.20s">
                                <div class="featured-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <div class="single-latest-blog-content radius-8">
                                    <!-- Date & Category -->
                                    <div class="date-category">
                                        <?php
                                        // Display categories
                                        $categories = get_the_category();
                                        if (!empty($categories)) : ?>
                                            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="post-category-name fs-14 text-uppercase fw-bold text-white bg-success-main">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </a>
                                        <?php endif; ?>
                                        <span class="post-date fs-14 fw-bold dark-2">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4499 11.2168L11.1999 10.4668L8.54992 7.80016V4.45016H7.54992V8.20016L10.4499 11.2168ZM7.99992 14.6668C7.08881 14.6668 6.2277 14.4918 5.41658 14.1418C4.60547 13.7918 3.89714 13.3141 3.29159 12.7085C2.68603 12.1029 2.20825 11.3946 1.85825 10.5835C1.50825 9.77238 1.33325 8.91127 1.33325 8.00016C1.33325 7.08905 1.50825 6.22794 1.85825 5.41683C2.20825 4.60572 2.68603 3.89738 3.29159 3.29183C3.89714 2.68627 4.60547 2.2085 5.41658 1.8585C6.2277 1.5085 7.08881 1.3335 7.99992 1.3335C8.91103 1.3335 9.77214 1.5085 10.5833 1.8585C11.3944 2.2085 12.1027 2.68627 12.7083 3.29183C13.3138 3.89738 13.7916 4.60572 14.1416 5.41683C14.4916 6.22794 14.6666 7.08905 14.6666 8.00016C14.6666 8.91127 14.4916 9.77238 14.1416 10.5835C13.7916 11.3946 13.3138 12.1029 12.7083 12.7085C12.1027 13.3141 11.3944 13.7918 10.5833 14.1418C9.77214 14.4918 8.91103 14.6668 7.99992 14.6668ZM7.99992 13.6668C9.55547 13.6668 10.8888 13.1113 11.9999 12.0002C13.111 10.8891 13.6666 9.55572 13.6666 8.00016C13.6666 6.44461 13.111 5.11127 11.9999 4.00016C10.8888 2.88905 9.55547 2.3335 7.99992 2.3335C6.44436 2.3335 5.11103 2.88905 3.99992 4.00016C2.88881 5.11127 2.33325 6.44461 2.33325 8.00016C2.33325 9.55572 2.88881 10.8891 3.99992 12.0002C5.11103 13.1113 6.44436 13.6668 7.99992 13.6668Z" fill="#4C4C4C"></path>
                                            </svg>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div>
                                    <!-- Date & Category -->

                                    <h4 class="post-title dark-1 fw-bold"><?php the_title(); ?></h4>
                                    <p class="post-excerpt fs-20 dark-2"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                </div>
                                <!-- Read More button -->
                                <a href="<?php the_permalink(); ?>" class="blog-read-more-btn dark-1 fs-16 fw-bold text-uppercase text-decoration-none">
                                    Read More
                                    <span class="read-more-btn-icon bg-primary-main">
                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M37.7307 22.9363L28.4292 13.6348L25.3656 16.6984L32.5004 23.8333H10.8337V28.1666H32.5004L25.3656 35.3014L28.4292 38.3651L37.7307 29.0636C38.5431 28.251 38.9995 27.149 38.9995 25.9999C38.9995 24.8509 38.5431 23.7489 37.7307 22.9363Z" fill="white"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>

                </ul>
            </div>
        </div>
    </div>

<?php
endif;

// Restore original Post Data
wp_reset_postdata();
?>







<?php
// Arguments for the WP_Query
$args = array(
    'post_type' => 'post',      // Fetch posts
    'posts_per_page' => 6,      // Number of posts to display
    'orderby' => 'date',        // Order by date
    'order' => 'DESC'           // Latest posts first
);

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) : ?>

    <div class="container">
        <div class="splide splide--loop splide--ltr splide--draggable is-active is-overflow is-initialized" role="group" id="latest_blog_post_slider" aria-label="Splide Basic HTML Example" aria-roledescription="carousel">
            <div class="splide__track splide__track--loop splide__track--ltr splide__track--draggable" id="latest_blog_post_slider-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite" aria-atomic="true">
                <ul class="splide__list" id="latest_blog_post_slider-list" role="presentation" style="transform: translateX(-2951.91px);">

                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <li class="splide__slide splide__slide--clone is-active" id="latest_blog_post_slider-clone01" role="tabpanel" aria-roledescription="slide" aria-label="1 of 6" style="margin-right: 30px; width: calc(33.3333% - 20px);" aria-hidden="true">
                            <div class="single-latest-blog wow animated fadeInLeft" data-wow-delay="0.00s" style="visibility: hidden; animation-delay: 0s; animation-name: none;">
                                <div class="featured-image">
                                    <!-- <img decoding="async" src="./img/blog-featured-img-3.jpg" alt="Featured image" class="img-fluid"> -->
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <div class="single-latest-blog-content radius-8">
                                    <!-- Date & Category -->
                                    <div class="date-category">
                                        <!-- <a href="https://atn.linkbuilderpros.com/category/business-management" class="post-category-name business-management fs-14 text-uppercase fw-bold text-white text-decoration-none bg-success-main" tabindex="-1">
                                        Business Management
                                    </a> -->
                                        <?php
                                        // Display categories
                                        $categories = get_the_category();
                                        if (!empty($categories)) : ?>
                                            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="post-category-name business-management fs-14 text-uppercase fw-bold text-white text-decoration-none bg-success-main">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </a>
                                        <?php endif; ?>

                                        <span class="post-date fs-14 fw-bold dark-2">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4499 11.2168L11.1999 10.4668L8.54992 7.80016V4.45016H7.54992V8.20016L10.4499 11.2168ZM7.99992 14.6668C7.08881 14.6668 6.2277 14.4918 5.41658 14.1418C4.60547 13.7918 3.89714 13.3141 3.29159 12.7085C2.68603 12.1029 2.20825 11.3946 1.85825 10.5835C1.50825 9.77238 1.33325 8.91127 1.33325 8.00016C1.33325 7.08905 1.50825 6.22794 1.85825 5.41683C2.20825 4.60572 2.68603 3.89738 3.29159 3.29183C3.89714 2.68627 4.60547 2.2085 5.41658 1.8585C6.2277 1.5085 7.08881 1.3335 7.99992 1.3335C8.91103 1.3335 9.77214 1.5085 10.5833 1.8585C11.3944 2.2085 12.1027 2.68627 12.7083 3.29183C13.3138 3.89738 13.7916 4.60572 14.1416 5.41683C14.4916 6.22794 14.6666 7.08905 14.6666 8.00016C14.6666 8.91127 14.4916 9.77238 14.1416 10.5835C13.7916 11.3946 13.3138 12.1029 12.7083 12.7085C12.1027 13.3141 11.3944 13.7918 10.5833 14.1418C9.77214 14.4918 8.91103 14.6668 7.99992 14.6668ZM7.99992 13.6668C9.55547 13.6668 10.8888 13.1113 11.9999 12.0002C13.111 10.8891 13.6666 9.55572 13.6666 8.00016C13.6666 6.44461 13.111 5.11127 11.9999 4.00016C10.8888 2.88905 9.55547 2.3335 7.99992 2.3335C6.44436 2.3335 5.11103 2.88905 3.99992 4.00016C2.88881 5.11127 2.33325 6.44461 2.33325 8.00016C2.33325 9.55572 2.88881 10.8891 3.99992 12.0002C5.11103 13.1113 6.44436 13.6668 7.99992 13.6668Z" fill="#4C4C4C"></path>
                                            </svg>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div>
                                    <!-- Date & Category -->
                                    <h4 class="post-title dark-1 fw-bold">
                                        <?php the_title(); ?>
                                    </h4>
                                    <p class="post-excerpt fs-20 dark-2">
                                        <!-- wp:paragraph -->
                                    </p>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <!-- /wp:paragraph -->
                                    <p></p>
                                </div>
                                <!-- Read More btn -->
                                <a href="<?php the_permalink(); ?>" class="blog-read-more-btn dark-1 fs-16 fw-bold text-uppercase text-decoration-none" tabindex="-1">
                                    Read More
                                    <span class="read-more-btn-icon bg-primary-main">
                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M37.7307 22.9363L28.4292 13.6348L25.3656 16.6984L32.5004 23.8333H10.8337V28.1666H32.5004L25.3656 35.3014L28.4292 38.3651L37.7307 29.0636C38.5431 28.251 38.9995 27.149 38.9995 25.9999C38.9995 24.8509 38.5431 23.7489 37.7307 22.9363Z" fill="white"></path>
                                        </svg>
                                    </span>
                                </a>
                                <!-- Read More btn -->
                            </div>
                        </li>
                    <?php endwhile; ?>

                </ul>
            </div>
        </div>
    </div>

<?php
endif;

// Restore original Post Data
wp_reset_postdata();
?>





<?php
// Arguments for the WP_Query
$args = array(
    'post_type' => 'post',      // Fetch posts
    'posts_per_page' => 6,      // Number of posts to display
    'orderby' => 'date',        // Order by date
    'order' => 'DESC'           // Latest posts first
);

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) : ?>

    <div class="container">
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-overflow is-initialized" role="group" id="latest_blog_post_slider" aria-label="Splide Basic HTML Example" aria-roledescription="carousel">
            <div class="splide__track splide__track--loop splide__track--ltr splide__track--draggable" id="latest_blog_post_slider-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite" aria-atomic="true">
                <ul class="splide__list" id="latest_blog_post_slider-list" role="presentation" style="transform: translateX(-2951.91px);">

                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="splide__slide splide__slide--clone is-active" id="latest_blog_post_slider-clone01" role="tabpanel" aria-roledescription="slide" aria-label="1 of 6" style="margin-right: 30px; width: calc(33.3333% - 20px);" aria-hidden="true">
                    <div class="single-latest-blog wow animated fadeInLeft" data-wow-delay="0.00s" style="visibility: hidden; animation-delay: 0s; animation-name: none;">
                                <div class="featured-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <div class="single-latest-blog-content radius-8">
                                    <!-- Date & Category -->
                                    <div class="date-category">
                                        <?php
                                        // Display categories (showing the first category)
                                        $categories = get_the_category();
                                        if (!empty($categories)) : ?>
                                            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="post-category-name business-management fs-14 text-uppercase fw-bold text-white text-decoration-none bg-success-main">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <span class="post-date fs-14 fw-bold dark-2">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4499 11.2168L11.1999 10.4668L8.54992 7.80016V4.45016H7.54992V8.20016L10.4499 11.2168ZM7.99992 14.6668C7.08881 14.6668 6.2277 14.4918 5.41658 14.1418C4.60547 13.7918 3.89714 13.3141 3.29159 12.7085C2.68603 12.1029 2.20825 11.3946 1.85825 10.5835C1.50825 9.77238 1.33325 8.91127 1.33325 8.00016C1.33325 7.08905 1.50825 6.22794 1.85825 5.41683C2.20825 4.60572 2.68603 3.89738 3.29159 3.29183C3.89714 2.68627 4.60547 2.2085 5.41658 1.8585C6.2277 1.5085 7.08881 1.3335 7.99992 1.3335C8.91103 1.3335 9.77214 1.5085 10.5833 1.8585C11.3944 2.2085 12.1027 2.68627 12.7083 3.29183C13.3138 3.89738 13.7916 4.60572 14.1416 5.41683C14.4916 6.22794 14.6666 7.08905 14.6666 8.00016C14.6666 8.91127 14.4916 9.77238 14.1416 10.5835C13.7916 11.3946 13.3138 12.1029 12.7083 12.7085C12.1027 13.3141 11.3944 13.7918 10.5833 14.1418C9.77214 14.4918 8.91103 14.6668 7.99992 14.6668Z" fill="#4C4C4C"></path>
                                            </svg>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div>
                                    
                                    <!-- Title & Excerpt -->
                                    <h4 class="post-title dark-1 fw-bold"><?php the_title(); ?></h4>
                                    <p class="post-excerpt fs-20 dark-2"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    
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
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#latest_blog_post_slider', {
            type   : 'loop',
            perPage: 3,
            autoplay: true,
            interval: 5000, // Adjust as needed
        }).mount();
    });
</script>


<?php
endif;

// Restore original Post Data
wp_reset_postdata();
?>








<div class="container">
    <div class="splide" id="latest_blog_post_slider" aria-label="Latest Blog Post Slider">
        <div class="splide__track">
            <ul class="splide__list">
                <?php
                // Arguments for the WP_Query
                $args = array(
                    'post_type' => 'post',      // Fetch posts
                    'posts_per_page' => 6,      // Number of posts to display
                    'orderby' => 'date',        // Order by date
                    'order' => 'DESC'           // Latest posts first
                );

                // The Query
                $query = new WP_Query($args);

                // The Loop
                if ($query->have_posts()) : ?>

                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="splide__slide" style="margin-right: 30px;">
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
                        </li>
                    <?php endwhile; ?>

            </ul>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#latest_blog_post_slider', {
            type: 'loop',
            perPage: 3,
            autoplay: true,
            interval: 5000, // Adjust as needed
        }).mount();
    });
</script>


<?php
                endif;

                // Restore original Post Data
                wp_reset_postdata();
?>







<section class="blog-section latest-blog-area section-padding">
    <div class="container">
        <div class="row">



            <?php
            // Define the custom query arguments
            $args = array(
                'post_type'      => 'post',      // Ensure it's pulling WordPress posts
                'posts_per_page' => 6,           // Limit the number of posts to 6
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
                                <div class="single-latest-blog regular-item">
                                    <div class="featured-image">
                                        <!-- Featured Image -->
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
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
                <?php
                    endwhile;
                ?>
            </ul>
        </div>
    </div>
</div>

<!-- Splide Initialization Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#latest_blog_post_slider', {
            type: 'loop',
            perPage: 3,
            autoplay: true,
            interval: 5000, // Adjust as needed
            breakpoints: {
                1024: { perPage: 2 },
                768: { perPage: 1 },
            },
            pagination: true,
            arrows: true,
        }).mount();
    });
</script>

<?php
                // Restore original Post Data
                wp_reset_postdata();
            else :
                echo '<p>' . __('No posts found.') . '</p>';
            endif;
?>





<?php
$slider_background = Redux::get_option('your_opt_name', 'slider_background'); // Replace 'your_opt_name'
$slider_title = Redux::get_option('your_opt_name', 'slider_title');
$slider_button_text = Redux::get_option('your_opt_name', 'slider_button_text');
$slider_button_link = Redux::get_option('your_opt_name', 'slider_button_link');
$slides = Redux::get_option('your_opt_name', 'slides');
?>

<section class="best-client-slider-section" style="background-image: url('<?php echo esc_url($slider_background['url'] ?? ''); ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <h2 class="slider-sec-title wow fadeInLeft animated animated">
                    <?php echo esc_html($slider_title); ?>
                    <span class="blue">Case Studies</span>
                </h2>
                <div class="mt-40 wow fadeInLeft animated animated">
                    <a target="_blank" href="<?php echo esc_url($slider_button_link); ?>" class="primary-main-btn">
                        <?php echo esc_html($slider_button_text); ?>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-12 wow fadeInUp animated animated">
                <div class="splide" id="ourbestclientslider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php if (!empty($slides)) : 
                                foreach ($slides as $slide) : 
                                    $slide_image = esc_url($slide['slide_image']['url'] ?? '');
                                    $video_url = esc_url($slide['slide_video_url'] ?? '');
                                    $slide_title = esc_html($slide['slide_title'] ?? '');
                                    $slide_duration = esc_html($slide['slide_duration'] ?? '');
                            ?>
                            <li class="splide__slide">
                                <?php if ($slide_image) : ?>
                                    <img src="<?php echo $slide_image; ?>" alt="Slide Image">
                                <?php endif; ?>
                                <div class="postertext">
                                    <div class="headerwrwp-sm">
                                        <?php echo $slide_title; ?>
                                        <div class="duration"><?php echo $slide_duration; ?></div>
                                    </div>
                                    <?php if ($video_url) : ?>
                                        <!-- Video Button Modal Trigger -->
                                        <button class="btn btn-primary video-btn" data-src="<?php echo $video_url; ?>" data-bs-toggle="modal" data-bs-target="#myModal">
                                            <!-- Video Play SVG -->
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
$slides = $redux_demo['custom_slider_slides']; // Replace with your Redux variable
if (!empty($slides)) : ?>
    <div class="splide" id="your-slider-id">
        <div class="splide__track">
            <ul class="splide__list">
                <?php foreach ($slides as $slide) : ?>
                    <li class="splide__slide">
                        <img src="<?php echo esc_url($slide['url']); ?>" alt="<?php echo esc_attr($slide['title']); ?>">
                        <div class="postertext">
                            <div class="posttxt">
                                <div class="headerwrwp-sm">
                                    <?php echo esc_html($slide['title']); ?>
                                    <div class="duration"><?php echo esc_html($slide['description']); ?></div>
                                </div>
                                <!-- Button or additional content here -->
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>



<?php
// Get the video URL from Redux options
$video = $redux_demo['video_upload_field']['url'];

if (!empty($video)) :
?>
    <div class="video-container">
        <video controls width="100%">
            <source src="<?php echo esc_url($video); ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
<?php endif; ?>





<?php
// Fetch the client reviews from Redux
$client_reviews = isset($redux_demo['clients_reviews']) ? $redux_demo['clients_reviews'] : array();
if (!empty($client_reviews)): ?>
    <section class="clients-review-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h2 class="dark-1 fw-bold wow animated fadeInLeft">
                            What Our <span class="section-heading-mark primary-main">Clients Say</span>
                        </h2>
                        <p>At ATN we take client results extremely seriously.</p>
                        <p>Hear from some of our happy clients.</p>
                    </div>
                </div>
                <div class="col-lg-7 wow animated fadeInRight">
                    <div class="clients-review-wrapper">
                        <div id="clients-review-splide" class="splide">
                            <div class="splide__arrows">
                                <button class="splide__arrow splide__arrow--prev">Previous</button>
                                <button class="splide__arrow splide__arrow--next">Next</button>
                            </div>
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php foreach ($client_reviews as $review): ?>
                                        <li class="splide__slide tmitem_wrap">
                                            <p class="tm_content"><?php echo esc_html($review['review_text'] ?? 'No review text available'); ?></p>
                                            <img decoding="async" class="clientimg" src="<?php echo esc_url($review['client_image'] ?? 'default-image.jpg'); ?>" alt="Client Image">
                                            <h2 class="name"><?php echo esc_html($review['client_name'] ?? 'Unknown Client'); ?></h2>
                                            <div class="rating">
                                                <span><?php echo esc_html($review['client_rating'][0] ?? 'No rating'); ?></span>
                                                <span id="stars">
                                                    <?php echo isset($review['client_rating'][0]) ? getStars($review['client_rating'][0]) : ''; ?>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#clients-review-splide').mount();
        });
    </script>
<?php endif; ?>

<?php
// Function to display star rating based on the value
function getStars($rating)
{
    $rating = round($rating * 2) / 2;  // Round to nearest half
    $output = '';

    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $output .= '<i class="fa fa-star" style="color:#FF8F00;"></i>';
        } elseif ($i == ceil($rating) && $rating != floor($rating)) {
            $output .= '<i class="fa fa-star-half-o" style="color:#FF8F00;"></i>';
        } else {
            $output .= '<i class="fa fa-star-o" style="color:#FF8F00;"></i>';
        }
    }

    return $output;
}
?>



<?php
// Retrieve the client reviews from Redux options
$reviews = $redux_demo['clients_reviews'];  // Replace '$redux_demo' with your Redux instance variable

if (!empty($reviews)) : ?>
<section class="clients-review-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <!-- Section heading -->
                <div class="section-heading">
                    <h2 class="dark-1 fw-bold wow animated fadeInLeft">
                        What Our <span class="section-heading-mark primary-main">Clients Say</span>
                    </h2>
                    <p>At ATN we take client results extremely seriously. Hear from some of our happy clients.</p>
                </div>
                <!-- Section heading -->
            </div>
            <div class="col-lg-7 wow animated fadeInRight">
                <!-- Clients review carousel -->
                <div class="clients-review-wrapper">
                    <div id="clients-review-splide" class="splide" role="group" aria-label="Client Reviews">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($reviews as $review) : ?>
                                    <li class="splide__slide">
                                        <p class="tm_content"><?php echo esc_html($review['description']); ?></p>
                                        <img class="clientimg" src="<?php echo esc_url($review['media']); ?>" alt="<?php echo esc_attr($review['title']); ?>">
                                        <h2 class="name"><?php echo esc_html($review['title']); ?></h2>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Clients review carousel -->
            </div>
        </div>
    </div>
</section>

<!-- Initialize Splide Carousel -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#clients-review-splide', {
        type: 'loop',
        perPage: 2,
        autoplay: true,
        interval: 3000,
        breakpoints: {
            768: {
                perPage: 1,
            },
        },
    }).mount();
});
</script>
<?php endif; ?>
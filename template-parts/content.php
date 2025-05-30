<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atn
 */

?>

<?php get_header(); ?>

<section class="singlepageg section-padding-top">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-7 col-12 cont-wrap">
                <div class="banner-heading">
                    <h2 class="mb-3 singlepage-title"><?php the_title(); ?></h2>
                </div>
                <div class="singlepage-banner-content">
                    <?php the_excerpt(); ?>
                </div>
                <div class="mt-56">
                    <a href="<?php the_permalink(); ?>" class="explorebtn text-uppercase fs-16 fw-bold text-decoration-none">
                        Explore More
                    </a>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 col-12 singlepage-featerimage">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full', ['class' => 'singlebanner-img']);
                } ?>
            </div>            
        </div>
    </div>
</section>

<div class="author-sec d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="post-infowrwpper col-lg-9 col-12">
                <div class="spi-item">
                    <span class="item-title">Posted By</span>
                    <span class="item-author tags d-flex gap-3 align-items-center text-decoration-none">
                        <span class="avatar-img">
                            <?php echo get_avatar(get_the_author_meta('ID'), 96); ?>
                        </span>
                        <span class="ff-sg-book-20 fs-16 text-clr-secondary author-name">
                            <?php the_author(); ?>
                        </span>
                    </span>
                </div>
                <div class="spi-item">
                    <span class="item-title">Date</span>
                    <span class="item-aur tags d-flex gap-3 align-items-center text-decoration-none">
                        <?php the_date(); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-content-wrapper py-5 position-relative">
    <div class="container">
        <div class="row py-lg-8 py-md-4 py-2 flex-lg-row flex-column flex-column-reverse">
            <div class="col-12 col-lg-8">
                <div class="blog-details-content pe-lg-5">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xxl-4 mb-4 mb-lg-0">
                <div class="sidebar">
                    <aside id="secondary" class="widget-area">
                        <section id="block-7" class="widget widget_block">
                            <div class="tableofcontent-wrapper">
                                <h3>Table of Content</h3>
                                <!-- Add table of content functionality here -->
                            </div>
                        </section>
                        <section id="block-8" class="widget widget_block">
                            <div class="tableofcontent-wrapper social-share-buttons d-none d-md-block">
                                <h3>Social Share</h3>
                                <ul class="">
                                    <!-- Social Share Buttons here -->
                                </ul>
                            </div>
                        </section>
                    </aside>
                </div>                
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>


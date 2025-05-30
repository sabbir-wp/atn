<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package atn
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="singlepageg section-padding-top">
		<div class="container">
			<div class="row align-items-start">
				<div class="col-lg-7 col-12 cont-wrap">
					<div class="banner-heading">
						<?php
						// Display category of the post
						$categories = get_the_category();
						if (! empty($categories)) {
							echo '<p class="singlepage-cat">' . esc_html($categories[0]->name) . '</p>';
						}
						?>
						<h2 class="mb-3 singlepage-title"><?php the_title(); ?></h2>
					</div>
					<!-- Single Post Content -->
					<div class="singlepage-banner-content">
						<?php the_excerpt(); ?>
					</div>
					<!-- Primary Button -->
					<div class="mt-56">
						<a href="<?php the_permalink(); ?>" class="explorebtn text-uppercase fs-16 fw-bold text-decoration-none">
							Explore More
						</a>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1 col-12 singlepage-featerimage">
					<?php
					// Display featured image if exists
					if (has_post_thumbnail()) {
						the_post_thumbnail('full', ['class' => 'singlebanner-img']);
					}
					?>
				</div>
			</div>
		</div>
	</section>

	<!-- Author Section -->



	<div class="aurthor-sec d-none d-md-block">
		<div class="container">
			<div class="row">
				<div class="post-infowrwpper col-lg-9 col-12">
					<div class="spi-item">
						<span class="item-title">Posted By</span>
						<span class="item-aur tags d-flex gap-3 align-items-center text-decoration-none">
							<span class="avater-img">
								<img alt="" src="<?php echo esc_url(get_template_directory_uri() . '/img/review_2.png'); ?>" srcset="https://secure.gravatar.com/avatar/?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo avatar-default" height="96" width="96" decoding="async"> </span>
							<span class="ff-sg-book-20 fs-16 text-clr-secondary aurthor-ame">
								<?php the_author(); ?> </span>
						</span>
					</div>
					<div class="spi-item">
						<span class="item-title">Date</span>
						<span class="item-aur tags d-flex gap-3 align-items-center text-decoration-none">
							<?php echo get_the_date(); ?></span>
					</div>
					<div class="spi-item">
						<span class="item-title">Reading Time</span>
						<span class="item-aur tags d-flex gap-3 align-items-center text-decoration-none ">
							<p class="reading-time"> <?php echo estimate_reading_time(get_the_content()); ?>mins</p>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog Content -->
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
						<!-- Table of Contents -->
						<aside id="secondary" class="widget-area">
							<section id="block-7" class="widget widget_block">
								<div class="tableofcontent-wrapper">
									<h3>Table of Content</h3>
									<ul class="list-content-wrapper">
										<?php
										// Automatically generate a list of headings for table of contents
										$headings = get_headings_from_content(get_the_content());
										if (! empty($headings)) :
											foreach ($headings as $heading) :
										?>
												<li><a href="#<?php echo esc_attr(sanitize_title($heading)); ?>"><?php echo esc_html($heading); ?></a></li>
										<?php endforeach;
										endif; ?>
									</ul>
								</div>
							</section>
						</aside>
						<!-- Social Share -->
						<aside id="secondary" class="widget-area social-share-buttons d-none d-md-block">
							<h3>Social Share</h3>
							<ul class="social-media-link">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/ATNunlimited">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_337_15907)">
                                            <path d="M13.2865 0.432125L11.0634 0.428558C8.56592 0.428558 6.95191 2.08447 6.95191 4.64744V6.59262H4.71674C4.52359 6.59262 4.36719 6.74921 4.36719 6.94236V9.76071C4.36719 9.95385 4.52377 10.1103 4.71674 10.1103H6.95191V17.2219C6.95191 17.415 7.10832 17.5714 7.30146 17.5714H10.2177C10.4109 17.5714 10.5673 17.4148 10.5673 17.2219V10.1103H13.1807C13.3739 10.1103 13.5303 9.95385 13.5303 9.76071L13.5313 6.94236C13.5313 6.84962 13.4944 6.7608 13.429 6.69517C13.3635 6.62954 13.2743 6.59262 13.1816 6.59262H10.5673V4.94367C10.5673 4.15111 10.7561 3.74877 11.7886 3.74877L13.2861 3.74823C13.4791 3.74823 13.6355 3.59165 13.6355 3.39868V0.781677C13.6355 0.588889 13.4793 0.432482 13.2865 0.432125Z" fill="#757575"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_337_15907">
                                                <rect width="17.143" height="17.1429" fill="white" transform="translate(0.429688 0.428558)"></rect>
                                            </clippath>
                                        </defs>
                                    </svg> </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/aaronrofficial_/">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_71_16053)">
                                            <path d="M11.25 0H3.75015C1.68789 0 0.000244141 1.68764 0.000244141 3.74991V11.2501C0.000244141 13.3118 1.68789 15 3.75015 15H11.25C13.3122 15 14.9999 13.3118 14.9999 11.2501V3.74991C14.9999 1.68764 13.3122 0 11.25 0ZM13.7498 11.2501C13.7498 12.6282 12.6288 13.75 11.25 13.75H3.75015C2.37188 13.75 1.25027 12.6282 1.25027 11.2501V3.74991C1.25027 2.37145 2.37188 1.25003 3.75015 1.25003H11.25C12.6288 1.25003 13.7498 2.37145 13.7498 3.74991V11.2501Z" fill="#F9FBFF"></path>
                                            <path d="M11.563 4.37495C12.0807 4.37495 12.5004 3.95523 12.5004 3.43748C12.5004 2.91972 12.0807 2.5 11.563 2.5C11.0452 2.5 10.6255 2.91972 10.6255 3.43748C10.6255 3.95523 11.0452 4.37495 11.563 4.37495Z" fill="#F9FBFF"></path>
                                            <path d="M7.49991 3.75C5.42845 3.75 3.75 5.42863 3.75 7.49991C3.75 9.57041 5.42845 11.2502 7.49991 11.2502C9.57078 11.2502 11.2498 9.57041 11.2498 7.49991C11.2498 5.42863 9.57078 3.75 7.49991 3.75ZM7.49991 10.0002C6.11936 10.0002 5.00003 8.88082 5.00003 7.49991C5.00003 6.119 6.11936 5.00003 7.49991 5.00003C8.88045 5.00003 9.99979 6.119 9.99979 7.49991C9.99979 8.88082 8.88045 10.0002 7.49991 10.0002Z" fill="#F9FBFF"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_71_16053">
                                                <rect width="15" height="15" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg> </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.youtube.com/@atnunlimited">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.4153 3.12787C13.8739 2.48423 12.8742 2.22168 10.965 2.22168H4.03481C2.08195 2.22168 1.06534 2.50116 0.525919 3.18642C0 3.85455 0 4.83899 0 6.20147V8.79836C0 11.4379 0.624 12.7781 4.03481 12.7781H10.9651C12.6207 12.7781 13.5381 12.5464 14.1316 11.9784C14.7403 11.3959 15 10.4449 15 8.79836V6.20147C15 4.76462 14.9593 3.77437 14.4153 3.12787ZM9.63005 7.85844L6.48305 9.50316C6.41269 9.53994 6.33576 9.55818 6.25892 9.55818C6.17192 9.55818 6.08511 9.53476 6.00823 9.48821C5.86345 9.40049 5.77505 9.24357 5.77505 9.07431V5.79541C5.77505 5.62644 5.86321 5.46966 6.00769 5.38189C6.15223 5.29412 6.33198 5.28812 6.48194 5.36602L9.62893 7.00015C9.78905 7.08328 9.8896 7.24857 9.88984 7.42891C9.89003 7.60939 9.78992 7.77492 9.63005 7.85844Z" fill="#E9ECF0"></path>
                                    </svg> </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.linkedin.com/company/atnunlimited/about/">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5001 13.4999V9.10492C13.5001 6.94492 13.0351 5.29492 10.5151 5.29492C9.30012 5.29492 8.49012 5.95492 8.16012 6.58492H8.13012V5.48992H5.74512V13.4999H8.23512V9.52492C8.23512 8.47492 8.43012 7.46992 9.72012 7.46992C10.9951 7.46992 11.0101 8.65492 11.0101 9.58492V13.4849H13.5001V13.4999Z" fill="#E9ECF0"></path>
                                        <path d="M1.69507 5.49023H4.18507V13.5002H1.69507V5.49023Z" fill="#E9ECF0"></path>
                                        <path d="M2.94 1.5C2.145 1.5 1.5 2.145 1.5 2.94C1.5 3.735 2.145 4.395 2.94 4.395C3.735 4.395 4.38 3.735 4.38 2.94C4.38 2.145 3.735 1.5 2.94 1.5Z" fill="#E9ECF0"></path>
                                    </svg> </a>
                            </li>

                        </ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>

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
	get_footer();

	/**
	 * Function to estimate reading time based on content length
	 */
	function estimate_reading_time($content)
	{
		$word_count = str_word_count(strip_tags($content));
		$words_per_minute = 200; // Average reading speed
		return ceil($word_count / $words_per_minute);
	}

	/**
	 * Function to get headings from post content
	 */
	function get_headings_from_content($content)
	{
		preg_match_all('/<h[1-6][^>]*>(.*?)<\/h[1-6]>/', $content, $matches);
		return isset($matches[1]) ? $matches[1] : [];
	}
	?>
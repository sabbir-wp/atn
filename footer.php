<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atn
 */

?>

<?php
global $redux_demo;

// Fetch CTA settings from Redux
$cta_bg_image = isset($redux_demo['cta_bg_image']['url']) ? esc_url($redux_demo['cta_bg_image']['url']) : '';
$cta_heading   = isset($redux_demo['cta_heading']) ? esc_html($redux_demo['cta_heading']) : 'Start Making Passive Income Now';
$cta_button_link = isset($redux_demo['cta_button_link']) ? esc_url($redux_demo['cta_button_link']) : '#';
?>

<!-- Call to action area -->
<section class="cta-area section-padding-80" style="background:url('<?php echo $cta_bg_image; ?>');">
    <div class="container text-center">
        <h2 class="dark-7 wow fadeInUp animated" style="visibility: hidden; animation-name: none;">
            <?php echo $cta_heading; ?>
        </h2>
        <!-- Primary Button -->
        <div class="mt-40 wow fadeInDown animated" style="visibility: hidden; animation-name: none;">
            <a target="_blank" href="<?php echo $cta_button_link; ?>" class="primary-main-btn text-uppercase fs-16 fw-bold text-decoration-none">
                Schedule A Call
            </a>
        </div>
        <!-- Primary Button -->
    </div>
</section>



<footer class="footer-area">
    <!-- Footer top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="footer-widget">
                        <?php global $redux_demo;
                        // Get the footer logo URL from Redux options
                        $footer_logo_url = get_option('footer_logo'); // 'footer_logo' should be the option ID set in Redux
                        ?>
                        <a href="<?php echo esc_url($footer_logo_url); ?>">
                            <img src="<?php echo esc_url($footer_logo_url); ?>" alt="Footer Logo" class="img-fluid">
                        </a>
                        <p class="dark-5 fs-18 pt-24 pb-24">
                            We are not registered investment advisors, brokers, accountants, insurance agents. </p>
                        <!-- Footer social media -->
                        <ul class="footer-social-media-link">
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
                        <!-- Footer social media -->
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title dark-5 fw-bold">
                            Contact </h4>

                        <!-- Footer address -->
                        <ul class="footer-address">
                            <li>
                                <a target="_blank" href="https://maps.app.goo.gl/x9PtZhobcsxHBKes5">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.90576 10.3915C4.92017 6.15089 8.36952 2.7249 12.6101 2.7393C16.8507 2.75371 20.2767 6.20306 20.2623 10.4437V10.5306C20.2101 13.2871 18.671 15.835 16.784 17.8263C15.7049 18.9469 14.4998 19.939 13.1927 20.7828C12.8432 21.0851 12.3248 21.0851 11.9753 20.7828C10.0268 19.5145 8.3167 17.9133 6.92315 16.0523C5.68111 14.4296 4.97593 12.4599 4.90576 10.4176L4.90576 10.3915Z" stroke="#F9FBFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <circle cx="12.5839" cy="10.5395" r="2.46087" stroke="#F9FBFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                    </svg><span>1603 Capitol Ave Suite 41- C1053 Cheyenne WY 82001</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:support@atnunlimited.com">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.4167 3.75H2.91675C2.5019 3.75 2.16675 4.08516 2.16675 4.5V19.5C2.16675 19.9148 2.5019 20.25 2.91675 20.25H22.4167C22.8316 20.25 23.1667 19.9148 23.1667 19.5V4.5C23.1667 4.08516 22.8316 3.75 22.4167 3.75ZM21.4792 6.34687V18.5625H3.85425V6.34687L3.20737 5.84297L4.12847 4.65938L5.13159 5.43984H20.2042L21.2074 4.65938L22.1285 5.84297L21.4792 6.34687ZM20.2042 5.4375L12.6667 11.2969L5.12925 5.4375L4.12612 4.65703L3.20503 5.84062L3.8519 6.34453L11.8582 12.5695C12.0884 12.7484 12.3717 12.8455 12.6632 12.8455C12.9548 12.8455 13.2381 12.7484 13.4683 12.5695L21.4792 6.34687L22.1261 5.84297L21.205 4.65938L20.2042 5.4375Z" fill="#F9FBFF"></path>
                                    </svg><span>support@atnunlimited.com</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Footer address -->
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title dark-5 fw-bold">
                            Navigation </h4>
                        <ul id="menu-navigation" class="footer-navigation-menu">
                            <li id="menu-item-197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-197"><a href="https://atn.linkbuilderpros.com/">HOME</a></li>
                            <li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198"><a href="https://atn.linkbuilderpros.com/about/">ABOUT</a></li>
                            <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="https://atn.linkbuilderpros.com/our-services/">OUR SERVICES</a></li>
                            <li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200"><a href="https://atn.linkbuilderpros.com/case-study/">CASE STUDY</a></li>
                            <li id="menu-item-199" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-199"><a href="https://atn.linkbuilderpros.com/blog/">BLOG</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title dark-5 fw-bold">
                            Join Our Newsletter </h4>
                    </div>
                    <!-- Subscribe form -->
                    <div class="subscribe-form">

                        <div class="wpcf7 js" id="wpcf7-f440-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="https://atn.linkbuilderpros.com/hello-world-5/#wpcf7-f440-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="440">
                                    <input type="hidden" name="_wpcf7_version" value="5.9.4">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f440-o1">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                </div>
                                <p><span class="wpcf7-form-control-wrap" data-name="email-713"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email form-control" id="inputEmail4" aria-invalid="false" placeholder="Enter email" value="" type="email" name="email-713"></span><input class="wpcf7-form-control wpcf7-submit has-spinner subscribe-btn" type="submit" value="Send"><span class="wpcf7-spinner"></span>
                                </p>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                    <!-- Subscribe form -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-text fs-16 dark-5">
                        Copyright 2024 Automated Trading Network. All Rights Reserved. </div>
                </div>
                <div class="col-lg-6">
                    <ul id="menu-copy" class="footer-privacy-policy-menu">
                        <li id="menu-item-363" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-363"><a rel="privacy-policy" href="https://atn.linkbuilderpros.com/privacy-policy/">Privacy Policy</a></li>
                        <li id="menu-item-364" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-364"><a href="https://atn.linkbuilderpros.com/atn-disclaimer/">ATN Disclaimer</a></li>
                        <li id="menu-item-365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-365"><a href="https://atn.linkbuilderpros.com/terms-of-service/">Terms Of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
</footer>


<?php wp_footer(); ?>

</body>

</html>
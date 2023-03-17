<?php
/**
 * Title: Alternate card
 * Slug: spectra-one/alternate-card
 * Categories: text
 * Keywords: Alternate card
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [$get_url . "assets/image/card-img.png"];
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"0","left":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
    style="padding-top:var(--wp--preset--spacing--large);padding-right:0;padding-bottom:var(--wp--preset--spacing--large);padding-left:0">
    <!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:heading {"textAlign":"left","textColor":"heading","className":"wp-block-heading"} -->
        <h2 class="wp-block-heading has-text-align-left has-heading-color has-text-color">Everything you need to create amazing websites</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"left"} -->
        <p class="has-text-align-left">Interactive design tools and its many customization options to customize anything and everything needed to build the fully-functional website of your dreams.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"16px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-surface-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:image {"id":148,"width":512,"height":320,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img
                        src="<?php echo esc_url(
                            $images[0]
                        ); ?>" alt="" class="wp-image-148" style="border-radius:8px"
                        width="512" height="320" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":4,"textColor":"heading","className":"wp-block-heading"} -->
                    <h4 class="wp-block-heading has-heading-color has-text-color">Huge Design Collection</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
                    <p style="padding-right:var(--wp--preset--spacing--small)">Imperdiet etiam scelerisque convallis pulvinar laoreet. Enim imperdiet nullam ullamcorper tempus vivamus eget leo elementum. Sed platea pellentesque nulla egestas porttitor.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"16px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-surface-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:html -->
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.5 28.5H37.5M10.5 28.5C7.18629 28.5 4.5 25.8137 4.5 22.5M10.5 28.5C7.18629 28.5 4.5 31.1863 4.5 34.5C4.5 37.8137 7.18629 40.5 10.5 40.5H37.5C40.8137 40.5 43.5 37.8137 43.5 34.5C43.5 31.1863 40.8137 28.5 37.5 28.5M37.5 28.5C40.8137 28.5 43.5 25.8137 43.5 22.5M4.5 22.5C4.5 19.1863 7.18629 16.5 10.5 16.5H37.5C40.8137 16.5 43.5 19.1863 43.5 22.5M4.5 22.5C4.5 20.5527 5.1316 18.6579 6.3 17.1L11.475 10.2C12.7498 8.50028 14.7504 7.5 16.875 7.5H31.125C33.2496 7.5 35.2502 8.50028 36.525 10.2L41.7 17.1C42.8684 18.6579 43.5 20.5527 43.5 22.5M37.5 34.5H37.515V34.515H37.5V34.5ZM37.5 22.5H37.515V22.515H37.5V22.5ZM31.5 34.5H31.515V34.515H31.5V34.5ZM31.5 22.5H31.515V22.515H31.5V22.5Z"
                            stroke="var(--wp--preset--color--secondary)" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <!-- /wp:html -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"right":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--70)">
                    <!-- wp:heading {"level":4,"textColor":"heading","className":"wp-block-heading"} -->
                    <h4 class="wp-block-heading has-heading-color has-text-color">Outstanding Performance</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
                    <p style="padding-right:var(--wp--preset--spacing--small)">In nisl enim vulputate varius. Nec sodales elit duis ornare. Non lectus elementum maecenas sit eu orci proin mauris netus.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"16px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-surface-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:html -->
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M28.1809 25.7392C28.3896 26.6256 28.5 27.5499 28.5 28.5C28.5 35.1275 23.1275 40.5 16.5 40.5V30.9007M28.1809 25.7392C35.6488 20.2823 40.5001 11.4574 40.5001 1.5C30.5429 1.50042 21.719 6.35175 16.2625 13.8195M28.1809 25.7392C24.7637 28.2362 20.7988 30.0281 16.5 30.9007M16.5 30.9007C16.2932 30.9426 16.0856 30.9825 15.8773 31.0201C14.0634 29.5819 12.4199 27.9383 10.9816 26.1245C11.0194 25.9156 11.0594 25.7074 11.1014 25.5M16.2625 13.8195C15.3755 13.6106 14.4507 13.5 13.5 13.5C6.87255 13.5 1.5 18.8725 1.5 25.5H11.1014M16.2625 13.8195C13.7657 17.2366 11.9741 21.2014 11.1014 25.5M6.62385 30.2815C4.42427 31.9223 3 34.5448 3 37.5C3 37.9737 3.0366 38.4389 3.10713 38.8929C3.56109 38.9634 4.02627 39 4.5 39C7.45515 39 10.0777 37.5758 11.7185 35.3762M30 15C30 16.6568 28.6568 18 27 18C25.3432 18 24 16.6568 24 15C24 13.3432 25.3432 12 27 12C28.6568 12 30 13.3432 30 15Z"
                            stroke="var(--wp--preset--color--secondary)" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <!-- /wp:html -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":4,"textColor":"heading","className":"wp-block-heading"} -->
                    <h4 class="wp-block-heading has-heading-color has-text-color">Outstanding Performance</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
                    <p style="padding-right:var(--wp--preset--spacing--small)">In nisl enim vulputate varius. Nec sodales elit duis ornare. Non lectus elementum maecenas sit eu orci proin mauris netus.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"16px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-surface-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"right":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--70)">
                    <!-- wp:heading {"level":4,"textColor":"heading","className":"wp-block-heading"} -->
                    <h4 class="wp-block-heading has-heading-color has-text-color">Huge Design Collection</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
                    <p style="padding-right:var(--wp--preset--spacing--small)">Imperdiet etiam scelerisque convallis pulvinar laoreet. Enim imperdiet nullam ullamcorper tempus vivamus eget leo elementum. Sed platea pellentesque nulla egestas porttitor.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":148,"width":512,"height":320,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img
                        src="<?php echo esc_url(
                            $images[0]
                        ); ?>" alt="" class="wp-image-148" style="border-radius:8px"
                        width="512" height="320" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
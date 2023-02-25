<?php
/**
 * Title: Image Gallery Row
 * Slug: slate/gallery
 * Categories: slate-patterns
 * Viewport Width: 1280
 */
?>




<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","right":"var:preset|spacing|sm","left":"var:preset|spacing|sm"}}},"backgroundColor":"base-secondary","className":"is-style-bordered","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-bordered has-base-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--sm);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--sm)"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="letter-spacing:3px;text-transform:uppercase">Lead Text</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">This is a Gallery</h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":3,"linkTo":"none","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xs","left":"var:preset|spacing|xs"},"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md"}}}} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-3 is-cropped" style="padding-top:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md)"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin urna orci, finibus at felis quis, venenatis porttitor nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
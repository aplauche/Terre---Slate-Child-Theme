<?php
/**
 * Title: Image Gallery Row
 * Slug: slate/gallery
 * Categories: slate-patterns
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"}}},"backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="letter-spacing:3px;text-transform:uppercase">Lead Text</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">This is a Gallery</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin urna orci, finibus at felis quis, venenatis porttitor nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"columns":3,"linkTo":"none","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xs","left":"var:preset|spacing|xs"}}}} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-3 is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" alt="" class=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->
<?php
/**
 * Title: Split 50/50 Image & Text
 * Slug: slate/split-image-text
 * Categories: slate-patterns
 * Viewport Width: 1280
 */
?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)"><!-- wp:heading {"textAlign":"left","level":4} -->
<h4 class="has-text-align-left">Heading</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin urna orci, finibus at felis quis, venenatis porttitor nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Call to Action</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-secondary-button"} -->
<div class="wp-block-button is-style-secondary-button"><a class="wp-block-button__link wp-element-button">Call to Action 2</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"bottomRight":"100px","topLeft":"100px"}}},"className":"is-style-default"} -->
<figure class="wp-block-image size-large has-custom-border is-style-default"><img src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" alt="" class="" style="border-top-left-radius:100px;border-bottom-right-radius:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
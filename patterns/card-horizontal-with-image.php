<?php
/**
 * Title: Single Horizontal Card with Image
 * Slug: slate/card-horizontal-with-image
 * Categories: slate-patterns
 * Viewport Width: 1280
 */
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"bg-secondary"} -->
<div class="wp-block-columns alignwide has-bg-secondary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>","dimRatio":0,"style":{"color":{}}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo get_template_directory_uri( ) . '/assets/terre-sample.jpg'?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"primary"} -->
<p class="has-text-align-left has-primary-color has-text-color" style="letter-spacing:2px;text-transform:uppercase">Lead Text</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="has-text-align-left">Heading</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin urna orci, finibus at felis quis, venenatis porttitor nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

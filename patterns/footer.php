<?php
/**
 * Title: Footer with site title, text, links.
 * Slug: terre/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"fontSize":"x-small"} -->
<div class="wp-block-group alignfull has-x-small-font-size" style="padding-top:0;padding-bottom:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"margin":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"}}},"className":"is-style-bordered","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-bordered" style="margin-top:var(--wp--preset--spacing--lg);margin-bottom:var(--wp--preset--spacing--lg);padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">© <?php echo esc_html( gmdate( 'Y' ) ); ?>  - <a href="https://antonplauche.com">Anton Plauche</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="#">Twitter</a> · <a href="#">Instagram</a> · <a href="#">LinkedIn</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php
/**
 * Title: Query of posts.
 * Slug: terre/query-excerpt
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":1},"displayLayout":{"type":"flex","columns":2},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","right":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|sm"}}},"className":"is-style-bordered","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bordered" style="padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--sm);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--sm)"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"xl"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"var:preset|spacing|xs"}}},"layout":{"type":"flex"},"fontSize":"x-small"} -->
<div class="wp-block-group has-x-small-font-size" style="margin-bottom:var(--wp--preset--spacing--xs)"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->


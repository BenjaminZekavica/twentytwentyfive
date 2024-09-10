<?php
/**
 * Title: Centered search with categories
 * Slug: twentytwentyfive/copyright
 * Categories: text, call-to-action
 *
 * @package Twenty Twenty-Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
   <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
   <div class="wp-block-group alignwide">
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--custom--font-size--huge)"}}} -->
      <h3 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--custom--font-size--huge);"><?php esc_html_e( 'Search our blog', 'twentytwentyfive' ); ?></h3>
      <!-- /wp:heading -->
      <!-- wp:search {"label":"<?php esc_html_e( 'Search', 'twentytwentyfive' ); ?>","showLabel":false,"placeholder":"<?php esc_html_e( 'Type here...', 'twentytwentyfive' ); ?>","buttonText":"<?php esc_html_e( 'Search', 'twentytwentyfive' ); ?>","align":"center"} /-->
   </div>
   <!-- /wp:group -->
   <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
   <div class="wp-block-group alignwide">
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group" style="margin-bottom:2rem">
         <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
         <figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marshland-birds-square.webp" alt="Fauna" style="aspect-ratio:1;object-fit:cover"/></figure>
         <!-- /wp:image -->
         <!-- wp:paragraph {"fontSize":"x-large"} -->
         <p class="has-x-large-font-size">Fauna</p>
         <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group" style="margin-bottom:2rem">
         <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
         <figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coral-square.webp" alt="Ocean" style="aspect-ratio:1;object-fit:cover"/></figure>
         <!-- /wp:image -->
         <!-- wp:paragraph {"fontSize":"x-large"} -->
         <p class="has-x-large-font-size">Ocean</p>
         <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group" style="margin-bottom:2rem">
         <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
         <figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/parthenon-square.webp" alt="Architecture" style="aspect-ratio:1;object-fit:cover"/></figure>
         <!-- /wp:image -->
         <!-- wp:paragraph {"fontSize":"x-large"} -->
         <p class="has-x-large-font-size">Architecture</p>
         <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group" style="margin-bottom:2rem">
         <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
         <figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/agenda-img-4.webp" alt="People" style="aspect-ratio:1;object-fit:cover"/></figure>
         <!-- /wp:image -->
         <!-- wp:paragraph {"fontSize":"x-large"} -->
         <p class="has-x-large-font-size">People</p>
         <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group" style="margin-bottom:2rem">
         <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
         <figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/vash-gon-square.webp" alt="Spirituality" style="aspect-ratio:1;object-fit:cover"/></figure>
         <!-- /wp:image -->
         <!-- wp:paragraph {"fontSize":"x-large"} -->
         <p class="has-x-large-font-size">Spirituality</p>
         <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group" style="margin-bottom:2rem">
         <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
         <figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-8802603-original.webp" alt="Flora" style="aspect-ratio:1;object-fit:cover"/></figure>
         <!-- /wp:image -->
         <!-- wp:paragraph {"fontSize":"x-large"} -->
         <p class="has-x-large-font-size">Flora</p>
         <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
   </div>
   <!-- /wp:group -->
</div>
<!-- /wp:group -->

<?php
/**
 * Title: Footer for ALH
 * Slug: alh/footer
 * Categories: footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"alh-purple","textColor":"white","className":"alh-footer","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alh-footer has-white-color has-alh-purple-background-color has-text-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Aspiring Log Homes (ALH) Builds houses to the highest quality using the best quality trees from certified log plantations</p>
<!-- /wp:paragraph -->
<!-- wp:image {"id":392,"width":"40px","sizeSlug":"medium","linkDestination":"custom","className":"fb-footer"} -->
<figure class="wp-block-image size-medium is-resized fb-footer">
    <a href="https://www.facebook.com/AspiringLogHomes" target="_blank" rel="noreferrer noopener">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/facebook_logo.png" alt="fb-logo" class="wp-image-392" style="width:40px"/>
    </a>
</figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"alhnav"} -->
<div class="wp-block-column is-vertically-aligned-center alhnav" style="flex-basis:60%">
    <!-- wp:list -->
    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => false,
        'walker' => new ALH_Footer_Nav_Menu()
    ));
    ?>
    <!-- /wp:list -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"align":"center","id":69,"width":"90px","sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-medium is-resized"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/alh-logo-white.svg" alt="asl logo white" class="wp-image-69" style="width:90px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>© <?php echo date('Y') ?> | Aspiring Log Homes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

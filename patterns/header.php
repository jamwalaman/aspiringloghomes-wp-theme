<?php
/**
 * Title: Header for ALH
 * Slug: alh/header
 * Categories: header
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"base","className":"alh-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide alh-header has-base-background-color has-background"
	style="padding-top:10px;padding-bottom:10px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"id":24,"width":"90px","sizeSlug":"medium","linkDestination":"custom", "className":"logo-main"} -->
			<figure class="wp-block-image size-medium is-resized logo-main"><a href="<?php echo esc_url(home_url()) ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/logo-alh.svg" alt="alh-logo" class="wp-image-24" style="width:90px"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:image {"id":24,"width":"90px","sizeSlug":"medium","linkDestination":"custom", "className":"logo-white"} -->
			<figure class="wp-block-image size-medium is-resized logo-white"><a href="<?php echo esc_url(home_url()) ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/logo-alh-white.svg" alt="alh-logo-white" class="wp-image-24" style="width:90px"/></a></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->

		<!-- wp:list -->
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => false,
			'menu_class' => 'main-menu',
            'walker' => new ALH_Header_Nav_Menu()
        ));
        ?>
		<!-- wp:list-item -->
		<li class="mobileicon"><a href="javascript:void(0);" onClick="mobileBtn()"><i class="fa-solid fa-bars"></i></a></li>
		<!-- /wp:list-item -->
        <!-- /wp:list -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

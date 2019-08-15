<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pixaful
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="sidebar pure-u-1 pure-u-md-1-3""><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
</div><!--end of pure-g-->



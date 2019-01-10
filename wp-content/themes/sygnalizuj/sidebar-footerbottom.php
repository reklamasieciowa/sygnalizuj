<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vre
 */

if ( ! is_active_sidebar( 'footer-4' ) ) {
	return;
}
?>
<div class="site-info fleft">
	<?php dynamic_sidebar( 'footer-4' ); ?> <span>&copy; Value Real Estate</span><span>designed by <a href="http://delikatesyifrykasy.pl/" target="_blank">Delikatesy&Frykasy</a></span>
</div>
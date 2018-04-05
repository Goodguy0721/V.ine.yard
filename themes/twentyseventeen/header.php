<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body data-rsssl=1 class="home page-template-default page page-id-296 lightfootandwolfville.com">
	<header role="banner" id="navigation">
		<a href="/" class="logo">Lightfoot &amp; Wolfville</a>
		<nav role="navigation" class="jump-to">
			<ul id="menu-main-navigation" class="menu"><li class="current-menu-item current_page_item"><a href="/">Home</a></li>
                <li><a href="#">Our Wines</a></li>
                <li><a href="#">Weddings</a></li>
                <li><a href="#">Journal</a></li>
                <li><a href="#">Visit</a></li>
            </ul>
        </nav>

		<section class="vcard">
			<a href="/" class="fn org"><em>Lightfoot &amp; Wolfville</em> Vineyards</a>
			<div class="adr">
				<span class="street-address">11143 Evangeline Trail</span><br>
				<span class="locality">Wolfville</span>, <span class="region">Nova Scotia</span><br>
				<span class="postal-code">B4P&nbsp;2R1</span> <span class="country-name">Canada</span><br>
			</div>
			<span class="tel">+1 (902) 542-7774</span><br>
			<a class="email" href="&#109;ailto:info&#064;chateaudesours.com">email us</a>
		</section>

		<nav class="social">
			<ul>
				<li class="twitter"><a href="https://twitter.com/chateaudesours">Follow us on Twitter</a></li>
				<li class="instagram"><a href="http://instagram.com/chateaudesours">Follow us on Instagram</a></li>
				<li class="newsletter"><a href="#newsletter-signup">Subscribe to our newsletter</a></li>
			</ul>
		</nav>
	</header>

	<main role="main">

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div id="content" tabindex="-1">

		<main class="site-main" id="main">

			<div class="container">
				<div class="error-404 not-found w-100 py-12 text-center">
					<h1 class="display-jumbo text-deepgreen">404</h1>
					<p class="fs-3 mb-6">Oops! This page doesn't exist.</p>
					<a href="/" class="btn btn-lg mx-auto">Back to Home</a>
				</div>
			</div>

		</main>

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
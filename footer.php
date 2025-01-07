<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper pb-3" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<p class="mb-0  text-end"><small>© <?php echo date("Y"); ?> PostClick Studio | All Rights Reserved</small></p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->


<?php wp_footer(); ?>

<?php if(is_front_page()): ?>
<div class="bg-svg bg-top position-absolute top-0 start-0 w-100 overflow-hidden">
	<svg class="w-100 h-100" width="1440" height="1069" viewBox="0 0 1440 1069" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M1440 0C1395.91 30.1244 1275.66 138.126 1175.45 180.746C1075.24 223.366 934.95 207.224 838.75 255.721C742.55 304.217 700.431 438.331 604.231 498.579C508.031 558.828 237.448 577.611 137.239 620.231C37.031 662.851 41.0918 709.073 -2.99985 727.445V1069C-2.99985 1069 390.331 991.89 521.599 930.586C652.866 869.281 700.45 798.14 838.75 780.5C977.05 762.86 1028.36 802.708 1242.72 732.172L1341.36 702.586L1440 673V0Z" fill="url(#paint0_linear_33_332)" fill-opacity="0.08"/>
	<defs>
	<linearGradient id="paint0_linear_33_332" x1="-153.627" y1="1044.09" x2="1620.49" y2="112.871" gradientUnits="userSpaceOnUse">
	<stop stop-color="#2A735B"/>
	<stop offset="1" stop-color="#9AD25A"/>
	</linearGradient>
	</defs>
	</svg>
</div>

<div class="bg-svg bg-middle position-absolute top-50 end-0 translate-middle-y overflow-hidden">
	<svg width="1408" height="1333" viewBox="0 0 1408 1333" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M704.164 36.5377C843.452 0.508576 1004.32 -30.4434 1123.39 54.3255C1243.21 139.63 1255.21 315.787 1300.61 461.168C1346.33 607.598 1451.45 763.953 1388.36 902.923C1324.84 1042.86 1132.61 1029.88 1006.6 1108.84C898.277 1176.71 829.35 1318.64 704.164 1331.62C575.589 1344.96 458.569 1259.07 355.523 1176.35C254.191 1095.01 179.824 988.35 124.977 866.699C62.416 727.939 -43.7455 569.175 19.3303 430.678C83.5071 289.763 281.425 313.184 411.038 238.588C516.023 178.166 588.139 66.5495 704.164 36.5377Z" fill="url(#paint0_linear_33_363)" fill-opacity="0.08"/>
	<defs>
	<linearGradient id="paint0_linear_33_363" x1="1060.67" y1="1366.95" x2="-118.436" y2="171.351" gradientUnits="userSpaceOnUse">
	<stop stop-color="#9AD25A"/>
	<stop offset="1" stop-color="#2A735B"/>
	</linearGradient>
	</defs>
	</svg>
</div>

<div class="bg-svg bg-bottom position-absolute bottom-0 start-0 w-100 overflow-hidden">
	<svg class="w-100 h-100" viewBox="0 0 1440 788" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M-185 0C-129.694 22.4876 21.1389 103.11 146.833 134.926C272.528 166.741 448.5 154.691 569.167 190.894C689.833 227.096 750.167 307.163 870.833 352.139C991.5 397.114 1167.47 428.929 1293.17 460.745C1418.86 492.561 1569.69 529.318 1625 543.032V798H-185V0Z" fill="url(#paint0_linear_33_326)" fill-opacity="0.08"/>
	<defs>
	<linearGradient id="paint0_linear_33_326" x1="1178.5" y1="818.326" x2="643.021" y2="-347.624" gradientUnits="userSpaceOnUse">
	<stop stop-color="#9AD25A"/>
	<stop offset="1" stop-color="#2A735B"/>
	</linearGradient>
	</defs>
	</svg>
</div>
<?php endif; ?>

</body>

</html>


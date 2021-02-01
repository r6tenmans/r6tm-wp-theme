<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer fixed-bottom container-fluid px-4 pb-1" id="colophon">

					<div class="site-info row justify-content-start">

						<small class="font-weight-light container">

							<div class="row justify-content-between">

								<div class="ml-0">
									<i class="fab fa-twitter fa-lg mr-2"></i>
									<i class="fab fa-discord fa-lg"></i>
								</div>

								<div class="m-0">&copy; 2021 Ten Mans Management. All Rights Reserved.</div>

								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'secondary',
										'container_class' => '',
										'container_id'    => 'navbarNavDropdown',
										'menu_class'      => 'nav justify-content-center',
										'fallback_cb'     => '',
										'menu_id'         => 'footer-menu',
										'depth'           => 2,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								);
								?>
								
							</div>	
								
						</small>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


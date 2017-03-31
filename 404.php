<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package miac
 */

get_header(); ?>

	<div class="miac-container">
		<?php do_action( 'miac_before_body_content' ); ?>
		
		<main id="main" class="site-main" role="main">
		<?php miac_breadcrumbs(); ?>

			<section class="error-404 not-found">
				<div class="miac-404">
					<span><?php _e( '4', 'miac' );?></span>
					<span class="zero"><?php _e( '0', 'miac' );?></span>
					<span><?php _e( '4', 'miac' );?></span>
				</div>
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'miac' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'miac' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			<?php do_action( 'miac_related_posts' ); ?>

		</main><!-- #main -->
		
		<?php do_action( 'miac_after_body_content' ); ?>
	</div><!-- .miac-container -->

<?php
get_footer();
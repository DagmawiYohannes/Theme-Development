<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package moonsight
 */

get_header();
?>
<div class="container-fluid">
	<div class="row">
	<div class="col-sm-1"></div>
		<div class="col-sm-7">
			<div class="card mb-4 mt-3 left top">
				<div class="card-body">
					<div id="primary" class="content-area">
						<main id="main" class="site-main">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation();
						?>
					</div>
					</div>
					</div>
					<div class="card mb-4 mt-3 left top">
					<div class="card-body">
					<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
		<div class="col-sm-3">
		<div class="col-sm-1"></div>
		<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>


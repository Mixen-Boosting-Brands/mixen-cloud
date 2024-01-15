<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php esc_html_e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php 
	get_header();

	// Get the post thumbnail ID
	$post_thumbnail_id = get_post_thumbnail_id();

	// Get the raw URL of the post thumbnail
	$post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id, 'large');
?>

	<section id="jumbotron" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $post_thumbnail_url[0]; ?>">
		<div id="overlay"></div>
	</section>

    <section id="body" class="py-60">
        <div class="container">
            <div class="row mb-1 mb-lg-3">
                <div class="col">
					<h1 class="titulo-page">
                        <span class="fs-4">Error 404: Página no encontrada 🫤</span>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
					<p>
					La página que solicitaste no se encontró. Algunas posibles causas son que haya cambiado de lugar, o que de plano haya sido eliminada del servidor. <a href="<?php echo esc_url( home_url() ); ?>">Haz clic aquí</a> para regresar al inicio.
					</p>

					<?php edit_post_link(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
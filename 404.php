<?php get_header(); ?>

    <section id="jumbotron" style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bg-404.png');">
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
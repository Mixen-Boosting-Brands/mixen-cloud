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
                    <h1 class="titulo">
                        <span class="fs-4"><?php the_title(); ?></span> <img class="ico-arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-arrow.png" alt="" class="img-fluid"> <?php if( get_field('tipo_de_proyecto') ): ?><?php the_field('tipo_de_proyecto'); ?><?php endif; ?>
                    </h1>
                    <p class="subtitulo">
                        <small><?php if( get_field('ubicacion') ): ?><?php the_field('ubicacion'); ?><?php endif; ?> - <?php if( get_field('servicios') ): ?><?php the_field('servicios'); ?><?php endif; ?></small>
                    </p>
                </div>
            </div>
		<?php if( get_field('video') ): ?>
            <div class="row mb-5">
                <div class="col">
					<div class="ratio ratio-21x9">
						<?php the_field('video'); ?>
					</div>
                </div>
            </div>
		<?php endif; ?>
            <div class="row mb-4">
			<?php if( get_field('texto_nuestro_cliente') ): ?>
                <div class="col-lg-6">
                    <h4>Nuestro cliente</h4>
                    <p><?php the_field('texto_nuestro_cliente'); ?></p>
                </div>
			<?php endif; ?>
			<?php if( get_field('texto_el_reto') ): ?>
                <div class="col-lg-6">
                    <h4>El reto</h4>
					<p><?php the_field('texto_el_reto'); ?></p>
				</div>
			<?php endif; ?>
            </div>
		<?php if( have_rows('nuestra_solucion') ): while( have_rows('nuestra_solucion') ): the_row(); ?>
            <div class="row mb-5">
                <div class="col-lg-8">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/internas/thumb-1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-7 text-lg-end">
                    <h4>Nuestra solución</h4>
					<p><?php the_sub_field('texto_nuestra_solucion'); ?></p>
				</div>
                <div class="col-lg-5">
                    <img src="<?php the_sub_field('imagen_nuestra_solucion'); ?>" alt="" class="img-fluid">
                </div>
            </div>
		<?php endwhile; endif; ?>
		<?php if( have_rows('nuestros_resultados') ): while( have_rows('nuestros_resultados') ): the_row(); ?>
            <div class="row">
                <div class="col-lg-5">
                    <img src="<?php the_sub_field('imagen_nuestros_resultados'); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h4>Nuestros resultados</h4>
					<p><?php the_sub_field('texto_nuestros_resultados'); ?></p>
				</div>
            </div>
		<?php endwhile; endif; ?>
			<?php edit_post_link(); ?>
        </div>
    </section>

    <section id="como-lo-logramos" class="py-60">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="mb-1 mb-lg-3">
                        <span class="fs-4">¿Cómo</span> <img class="ico-arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-arrow.png" alt="" class="img-fluid"> lo logramos?
                    </h1>
                    <p>Para poder ofrecerte presencia, relevancia e inteligencia, hemos diseñado los siguientes servicios:</p>
                    <div class="separador"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 offset-lg-2">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="focus">
                                    <th scope="row">
                                        <h1 class="fs-4">Branding</h1>
                                    </th>
                                    <td>Crea una identidad única y memorable mediante diseño y mensajes impactantes.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">Web</h1>
                                    </th>
                                    <td>Transforma tu visión en una experiencia en línea excepcional. Creamos soluciones.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">e-Commerce</h1>
                                    </th>
                                    <td>Impulsa tus ventas en línea con nuestras soluciones de comercio electrónico, ofreemos una experiencia de compra segura y eficiente.</td>
                                </tr>
                                <tr class="focus">
                                    <th scope="row">
                                        <h1 class="fs-4">Social media</h1>
                                    </th>
                                    <td>Mejora tu presencia en redes sociales con nuestra gestión estratégica. Creamos contenido atractivo, aumentando la conexión y compromiso con tu audiencia.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">Development</h1>
                                    </th>
                                    <td>Transforma tus ideas en aplicaciones móviles atractivas y funcionales, trabajamos contiho para crear soluciones valiosas y fluidas para tus usuarios.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">CX</h1>
                                    </th>
                                    <td>Pon a tus clientes en el centro de nuestro enfoque en la Experiencia del Cliente (CX). Optimizamos cada interacción desde el inicio hasta la posventa.</td>
                                </tr>
                                <tr class="focus">
                                    <th scope="row">
                                        <h1 class="fs-4">Contenido</h1>
                                    </th>
                                    <td>Cuenta tu historia de manera convincente con contenido multimedia relevante y valioso, estableciendo autoridad y manteniendo el compromiso de tu audiencia.</td>
                                </tr>
                                <tr class="focus">
                                    <th scope="row">
                                        <h1 class="fs-4">SEO/SEM</h1>
                                    </th>
                                    <td>Mejora tu visibilidad en línea con SEO y SEM. Aumentamos la clasificación y generamos tráfico de calidad para maximizar tu alcance y conversiones.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">Automatización</h1>
                                    </th>
                                    <td>Optimizamos operaciones con automatización para aumentar eficienca, reducir trabajo manual y enfocarte en el crecimiento.</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'includes/contenido-relacionado' ); ?>

	<?php get_template_part( 'includes/blog' ); ?>

<?php get_footer(); ?>

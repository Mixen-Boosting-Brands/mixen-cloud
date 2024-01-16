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
                        <span class="fs-4">Suláwe</span> <img class="ico-arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-arrow.png" alt="" class="img-fluid"> Identity
                    </h1>
                    <p class="subtitulo">
                        <small>Chihuahua, Chih. México - Branding / Social Media / Multimedia Content</small>
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
					<div class="ratio ratio-21x9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/kcoFqvzs1uU?si=zx-jF5l9MEIRVjrB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <h4>Nuestro cliente</h4>
                    <p>SULÁWE nace de las manos del Chef Christian Duthoy, empezando su vida culinaria en Monterrey, después CDMX, y ahora decide emprender en Chihuahua. Restaurante que busca enaltecer los sabores y técnicas de México, desde Oaxaca hasta Baja California, mezclando con toques orientales, en donde se busca el apoyo constante a productores locales. SULÁWE es un espacio sobrio e íntimo, con alta variedad en etiquetas de vino y coctelería de autor.</p>
                </div>
                <div class="col-lg-6">
                    <h4>El reto</h4>
                    <p>Suláwe es un concepto nuevo en la ciudad de Chihuahua, que viene a competir con restaurantes mejor posicionados, con mayor consumo y reconocimiento, ¿cómo sobresalir con un chef quien, a pesar de tener una trayectoria sólida, no es conocido en la ciudad?</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-8">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/internas/thumb-1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-7 text-lg-end">
                    <h4>Nuestra solución</h4>
                    <p>Se desarrolló una marca, concepto y una narrativa comercial que abraza la esencia de la tierra y el mar para generar una imponente comunicación de los valores de la marca y su ADN. Además, se creó un sitio web, se generaron contenidos de alto valor apoyados por fotografía de alto impacto, un video institucional, manejo de medios tradicionales y digitales, identidad visual y coordinación de actividades de mercadotecnia y pauta publicitaria.</p>
                </div>
                <div class="col-lg-5">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/internas/thumb-2.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/internas/thumb-3.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h4>Nuestros resultados</h4>
                    <p>En menos de 6 meses, hemos logrado posicionar a Suláwe en la mente del segmento destinado como un lugar predilecto para pasar el rato o festejar los logros de grandes negocios en el corazón del complejo exclusivo más importante de Chihuahua.</p>
                </div>
            </div>
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

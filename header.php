<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' - '; } ?><?php bloginfo( 'name' ); ?></title>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/styles.css">
</head>
<body <?php if( is_home() || is_page( 2 ) ): ?>class="is-single"<?php endif; ?> id="top">
    <div id="backdrop"></div>
    <div class="menu">
        <a id="cerrar-menu" href="javascript:void(0)">
            <i class="fas fa-times"></i>
        </a>
        <div class="menu-contenido">
            <a class="anchor" id="btn-logo" href="#top">
                <img class="logo img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="Mixen: Boosting Brands">
            </a>
            <nav>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://mixen.mx#problematicas">Problemáticas comunes</a>
                    </li>
                    <li>
                        <a href="https://mixen.mx#soluciones">Nuestras soluciones</a>
                    </li>
                    <li>
                        <a href="https://mixen.mx#como-lo-logramos">¿Cómo lo logramos?</a>
                    </li>
                    <li>
                        <a href="https://mixen.mx#portafolio">Proyectos destacados</a>
                    </li>
                    <li>
                        <a href="https://mixen.mx#portafolio">Podcast</a>
                    </li>
                    <li>
                        <a href="https://mixen.mx#portafolio">Blog</a>
                    </li>
                    <li>
                        <a href="https://mixen.mx/soporte"><i class="fa-solid fa-headset"></i> ¿Necesitas soporte?</a>
                    </li>
                </ul>
            </nav>
            <a href="https://wa.me/5216145154943?text=Hola%20Mixen,%20necesito%20información." class="btn btn-outline-primary rounded-pill" id="btn-contacto" target="_blank">
                <span class="d-lg-none">¿Hablamos?</span><span class="d-none d-lg-inline-block">Hablemos de tu proyecto</span>
            </a>
            <div id="social">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/MixenMx/" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/mixenmx/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/mixenmx/" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="contacto-menu">
                <ul class="list-unstyled">
                    <li>
                        <i class="far fa-envelope"></i> <a href="mailto:hola@mixen.mx">hola@mixen.mx</a>
                    </li>
                    <li>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-wa-business.svg" alt="" class="ico-wa-business img-fluid" loading="lazy"> <a href="https://wa.me/5216145154943?text=Hola%20Mixen,%20necesito%20información." target="_blank">+52 1 (614) 515 4943</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-5 col-lg-4 my-auto">
                    <a href="https://mixen.agency/">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="Mixen: Boosting Brands" class="logo img-fluid" id="logo-navbar">
                    </a>
                </div>
                <div class="col-7 col-lg-8 my-auto text-end">
                    <a href="https://wa.me/5216145154943?text=Hola%20Mixen,%20necesito%20información." class="btn btn-outline-primary rounded-pill me-3" target="_blank">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-wa-business.svg" alt="" class="ico-wa-business img-fluid" loading="lazy"> <span class="d-lg-none">¿Hablamos?</span><span class="d-none d-lg-inline-block">Hablar con un asesor</span>
                    </a>
                    <a id="mburger" href="javascript:void(0)">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
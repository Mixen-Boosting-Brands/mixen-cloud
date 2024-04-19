    <footer>
        <div class="container">
            <div class="row mb-1 mb-lg-3">
                <div class="col-lg-6">
                    <div class="row mb-4">
                        <div class="col-12">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        Nuestras soluciones
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#soluciones">
                                            Presencia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#soluciones">
                                            Relevancia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#soluciones">
                                           Inteligencia
                                        </a>
                                    </li>
                                    <li class="mb-5">
                                        <a href="https://mixen.mx#soluciones">
                                           Posicionamiento
                                        </a>
                                    </li>
                                    <li>
                                        ¿Cómo lo logramos?
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#como-lo-logramos">
                                            Branding
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#como-lo-logramos">
                                            Web
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#como-lo-logramos">
                                            e-Commerce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#como-lo-logramos">
                                            SEO/SEM
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#como-lo-logramos">
                                            Social Media
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#como-lo-logramos">
                                            Contenido
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#como-lo-logramos">
                                            CX
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#como-lo-logramos">
                                            IA
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx#como-lo-logramos">
                                            Desarrollo
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        Proyectos destacados
                                    </li>
                                <?php
                                    $args = array(
                                        'post_type'      => 'proyectos', // Specify the custom post type
                                        'posts_per_page' => 10,
                                        'category__in'   => array(48),   // Specify the category ID
                                    );

                                    $proyectosFooterQuery = new WP_Query($args);
                                    if ($proyectosFooterQuery->have_posts()): while ($proyectosFooterQuery->have_posts()) : $proyectosFooterQuery->the_post();
                                ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </li>
                                <?php 
                                    endwhile; endif;
                                    wp_reset_postdata();
                                ?>
                                </ul>
                            </nav>
                        </div -->
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        Nuestra opinión
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx/blog/">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mixen.mx/podcast/">
                                            Podcast: Aprobado Sin Cambios
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        Nuestra opinión
                                    </li>
                                    <li>
                                        <a href="<?php echo get_category_link(2); ?>">
                                            <?php echo get_cat_name(2); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_category_link(45); ?>">
                                            <?php echo get_cat_name(45); ?>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div -->
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li class="mb-1 mb-lg-3">
                                        <a href="mailto:torh@mixen.mx?subject=Deseo%20unirme%20al%20equipo%20de%20Mixen">
                                            Unirme al equipo
                                        </a>
                                    </li>
                                    <li class="mb-1 mb-lg-3">
                                        <a href="https://mixen.mx/aviso-de-privacidad">
                                            Aviso de Privacidad
                                        </a>
                                    </li>
                                    <li class="mb-1 mb-lg-3">
                                        <a class="bg-primary badge rounded-pill" href="https://mixen.mx/soporte">
                                            <i class="fa-solid fa-headset"></i> ¿Necesitas soporte?
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer/thumb.png" alt="" class="img-fluid mb-3" loading="lazy">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> Mixen: Boosting Brands. Todos los derechos reservados.</p>
                </div>
                <div class="col text-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/mixenmx/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.tiktok.com/mixenmx/" target="_blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/company/mixenmx/" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a -->

    <!-- Modales -->
    <div class="modal fade" id="modalFolioINE" tabindex="-1" aria-labelledby="modalFolioINELabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2024/01/folio-ine.png" alt="" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/app.bundle.js"></script>
</body>
</html>
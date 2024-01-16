    <section id="portafolio" class="common-light py-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Proyectos<br>
                        destacados
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col overflow-hidden">
                    <!-- Slider main container -->
                    <div class="swiper-resultados">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <?php
                            $args = array(
                                'post_type'      => 'proyectos', // Specify the custom post type
                                'posts_per_page' => 6,
                                'category__in'   => array(48),   // Specify the category ID
                            );

                            $proyectosFooterQuery = new WP_Query($args);
                            if ($proyectosFooterQuery->have_posts()): while ($proyectosFooterQuery->have_posts()) : $proyectosFooterQuery->the_post();
                        ?>
                            <!-- Inicio Slide -->
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12">
                                        <h2><?php the_title(); ?></h2>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('home-proyecto', array('class' => 'img-fluid mb-3')); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Fin Slide -->
                        <?php 
                            endwhile; endif;
                            wp_reset_postdata();
                        ?>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
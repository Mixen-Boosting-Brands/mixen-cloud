<?php get_header(); ?>

	<section id="blog" class="common-dark py-60" style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto">
                    <h1>
                        Estás en<br>
                        <?php single_cat_title(); ?>
                    </h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <div class="tab-content" id="nav-blog">
                        <div class="tab-pane fade show active" id="nav-cat-1" role="tabpanel" aria-labelledby="nav-cat-1-tab" tabindex="0">
                            <div class="row">
                            <?php
                                if (have_posts()): while (have_posts()) : the_post();
                                    $excerpt = get_the_excerpt();
                                    $words = explode(' ', $excerpt);
                                    
                                    if (count($words) > 30) {
                                        $words = array_slice($words, 0, 30);
                                        $excerpt = implode(' ', $words) . '...';
                                    }
                            ?>
                                <div class="col-lg-6 mb-3">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('home-blog', array('class' => 'img-fluid')); ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="mt-3">
                                            <?php the_title(); ?>
                                            <span class="date badge bg-secondary rounded-pill">
                                                <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
                                                    <?php echo get_the_date('M j, Y'); ?>
                                                </time>
                                            </span>
                                        </h2>
                                    </a>
                                    <?php echo $excerpt; ?>
                                </div>
                            <?php 
                                endwhile; endif;
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col text-center">
					<?php echo bootstrap_pagination(); ?>
				</div>
			</div>
        </div>
    </section>

<?php get_footer(); ?>
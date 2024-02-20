<?php 
    /*
        * Template Name: Renovación anual
    */

	get_header();
?>

    <section id="body" class="py-60">
        <div class="container">
            <div class="row mb-1 mb-lg-3">
                <div class="col">
					<h1 class="titulo-page">
                        <span class="fs-4"><?php the_title(); ?></span>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
					<?php the_content(); ?>

					<?php edit_post_link(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
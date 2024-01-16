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
                        <span class="fs-4"><?php the_title(); ?></span>
                    </h1>
                    <p class="subtitulo">
                        <small>
						<?php
							// Get the author's name
							$author_name = get_the_author_meta('display_name', $post->post_author);

							// Get the post date
							$post_date = get_the_date('j \d\e F, Y');

							// Get the published time
							$published_time = get_the_time('g:i a');

							// Output the post data
							echo 'Publicado por ' . $author_name . ' el ' . $post_date . ' a la(s) ' . $published_time;
						?>
						</small>
                    </p>
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

    <?php get_template_part( 'includes/contenido-relacionado' ); ?>

	<?php get_template_part( 'includes/blog' ); ?>

<?php get_footer(); ?>

<?php 
    /*
        * Template Name: Comenzar
    */

	get_header();

    // Retrieve the token from the WordPress database
    $stored_token = get_option( 'stripe_success_token' );
?>

// Verify the token
<?php if ( isset( $_GET['token'] ) && $_GET['token'] === $stored_token ): ?>
    <section id="body" class="py-60" style="margin-top: 60px;">
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
<?php else: ?>
    <section id="body" class="py-60" style="margin-top: 60px;">
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
                    <p>Acceso no autorizado.</p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
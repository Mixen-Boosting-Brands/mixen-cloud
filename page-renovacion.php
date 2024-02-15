<?php
    /*
        * Template Name: Renovación anual
    */

    get_header();
?>

    <section id="jumbotron">
        <div id="overlay"></div>
        <div class="container">
            <div class="row py-30">
                <div class="col-lg-8 offset-lg-2 text-center text-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/jumbotron/texto-renovacion.png" alt="Dominio, hosting y correos empresaariales, para que tengas presencia formal en Internet." class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
        <a id="ver-mas" class="btn btn-primary" href="#paquetes">
            <i class="fa-solid fa-arrow-down"></i>
        </a>
    </section>

    <section id="paquetes" class="common-dark py-60">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-cloud.png" alt="" class="img-fluid" id="ico-cloud" loading="lazy">
                            <h5 class="card-title">
                                Mixen Cloud
                            </h5>
                        </div>
                        <ul class="card-text fa-ul">
                            <li>
                                <span class="fa-li">
                                    <i class="fa-regular fa-circle-check"></i>
                                </span> Hosting
                            </li>
                            <li>
                                <span class="fa-li">
                                    <i class="fa-regular fa-circle-check"></i>
                                </span> Correos empresariales
                            </li>
                            <li>
                                <span class="fa-li">
                                    <i class="fa-regular fa-circle-check"></i>
                                </span> Certificado de seguridad SSL
                            </li>
                            <li>
                                <span class="fa-li">
                                    <i class="fa-regular fa-circle-check"></i>
                                </span> Cifrado de seguridad y confianza en navegadores
                            </li>
                        </ul>
                        <div class="card-body text-center">
                            <h1 class="card-text">
                                $3,750 MXN
                            </h1>
                            <h2 class="card-text">
                                + IVA / Renovación anual
                            </h2>
                            <a href="https://buy.stripe.com/4gw03AbJR0ERcVO4gk" class="btn btn-primary rounded-pill">
                                <i class="fa-solid fa-cart-shopping"></i> Quiero renovar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <ul class="pagos list-inline">
                        <li class="list-inline-item">
                            <i class="fa-brands fa-cc-amex"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa-brands fa-cc-mastercard"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa-brands fa-cc-visa"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa-brands fa-google-pay"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa-brands fa-apple-pay"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>
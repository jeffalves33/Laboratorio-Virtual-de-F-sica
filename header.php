<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <!--Bootstrap -->
    <?php wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all'); ?>
    <?php wp_enqueue_style('meu-tema-style', get_stylesheet_uri(), array('bootstrap'), '1.0', 'all'); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Navbar -->
    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-decoration-none h2" href="https://labvirtual.fisica.ufes.br">Física
                        Virtual</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav justify-content-between">
        <a class="nav-item nav-link link-body-emphasis text-light d-flex flex-column align-items-center" href="<?php echo home_url('/simulacoes'); ?>" style="width: 70px; height: 100px; padding: 0px;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/simulacoes_black.png" class="w-100" alt="simulações" style="max-height: 80px;">
            <p class="text-center"  style="width: 97px;">Simulações</p>
        </a>
        <a class="nav-item nav-link link-body-emphasis text-light d-flex flex-column align-items-center" href="<?php echo home_url('/solucionador'); ?>" style="width: 70px; height: 100px; padding: 0px;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/solucionador_black.png" class="w-100" alt="solucionador" style="max-height: 80px;">
            <p class="text-center"  style="width: 97px;">Solucionador</p>
        </a>
        <a class="nav-item nav-link link-body-emphasis text-light d-flex flex-column align-items-center" href="<?php echo home_url('/aprenda-aqui'); ?>" style="width: 70px; height: 100px; padding: 0px;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/aprendaAqui_black.png" class="w-100" alt="aprenda aqui" style="max-height: 80px;">
            <p class="text-center"  style="width: 97px;">Aprenda aqui</p>
        </a>
        <a class="nav-item nav-link link-body-emphasis text-light d-flex flex-column align-items-center" href="<?php echo home_url('/contatos'); ?>" style="width: 70px; height: 100px; padding: 0px;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contatos_black.png" class="w-100" alt="contatos" style="max-height: 80px;">
            <p class="text-center" style="width: 97px;">Contatos</p>
        </a>
    </nav>
</div>

    </div>

    <?php wp_footer(); ?>
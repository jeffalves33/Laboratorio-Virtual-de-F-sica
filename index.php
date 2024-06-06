<?php
// Inclui o cabeçalho do WordPress
get_header();
?>

<!-- Conteúdo principal -->
<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded fundoImagem">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic">Física Virtual</h1>
            <p class="lead my-3">Bem-vindo ao portal de Física Experimental, destinado aos alunos e professores da
                disciplina.</p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 strong-text1">último vídeo</strong>
                    <h3 class="mb-0">Leis de Newton</h3>
                    <div class="mb-1 text-secondary">Abr 24</div>
                    <p class="card-text mb-auto">As leis de Newton descrevem o movimento dos corpos e fundamentam a
                        física clássica.</p>
                    <a href="https://www.youtube.com/watch?v=1Yh3V87IAjc"
                        class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue assistindo
                    </a>
                </div>
                <div class="ratio ratio-21x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/1Yh3V87IAjc?si=HI6m5U9NOmSAmqTQ"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 strong-text2">último experimento</strong>
                    <h3 class="mb-0">Gerador termoelétrico</h3>
                    <div class="mb-1 text-secondary">Abr 24</div>
                    <p class="mb-auto">Demonstrado o efeito Peltier, observado em 1834 por Jean Charles Athanase
                        Peltier.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue assistindo
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/experimento_teste.png"
                        class="d-block w-100" alt="experimento_teste">
                </div>
            </div>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Sobre nós
            </h3>

            <article class="blog-post">

                <h5>Simulações em Vídeo</h5>
                <p>Este site oferece uma abordagem dinâmica para o estudo da física experimental, fornecendo duas
                    alternativas complementares aos experimentos tradicionais: Simulações em Vídeo e Solucionador de
                    Fórmulas, além de uma seção dedicada ao aprendizado aprofundado por meio das simulações filmadas.
                </p>

                <h5>Solucionador de Fórmulas</h5>
                <p>
                    As Simulações em Vídeo são projetadas para reproduzir fielmente os experimentos reais,
                    proporcionando uma experiência interativa que permite aos usuários explorar os conceitos físicos em
                    um ambiente virtual. Com uma variedade de experimentos disponíveis, desde mecânica até
                    eletromagnetismo, os usuários podem manipular variáveis, observar resultados e entender os
                    princípios subjacentes de maneira prática e envolvente.
                </p>

                <h5>Aprendendo com Experimentos</h5>
                <p>
                    Em nossa página dedicada ao aprendizado aprofundado, os usuários podem mergulhar em conceitos
                    físicos fundamentais através de experimentos cuidadosamente selecionados. Acompanhados por
                    descrições detalhadas e análises aprofundadas, esses experimentos clássicos e contemporâneos
                    proporcionam uma oportunidade única para os usuários explorarem conceitos físicos fundamentais
                    através da leitura e reflexão, enriquecendo assim seu entendimento da matéria.
                </p>

                <hr>
            </article>

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logoufes.png"
                        class="w-100" alt="ceunes">
                </div>

                <div>
                    <h4 class="fst-italic">Seções</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                href="#">
                                <svg class="bd-placeholder-img" width="100%" height="96"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#777" />
                                </svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Nome 1</h6>
                                    <small class="text-body-secondary">January 15, 2024</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                href="#">
                                <svg class="bd-placeholder-img" width="100%" height="96"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#777" />
                                </svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Nome 2</h6>
                                    <small class="text-body-secondary">January 14, 2024</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                href="#">
                                <svg class="bd-placeholder-img" width="100%" height="96"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#777" />
                                </svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Nome 3</h6>
                                    <small class="text-body-secondary">January 13, 2024</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
// Inclui o rodapé do WordPress
get_footer();
?>
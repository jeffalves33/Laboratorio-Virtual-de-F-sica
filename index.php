<?php
// Inclui o cabeçalho do WordPress
get_header();
?>

<!-- Conteúdo principal -->
<main class="container-fluid">
    <div class="p-4 p-md-5 mb-4 rounded fundoImagem shadow">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic">Física Virtual</h1>
            <p class="lead my-3">Bem-vindo ao portal de Física Experimental, destinado aos alunos e professores da
                disciplina.</p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6 d-flex">
            <div
                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-body-secondary">
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
        <div class="col-md-6 d-flex">
            <div
                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-body-secondary">
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
                Documentação
            </h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                            Apostilas
                        </button>
                    </h2>
                    <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="#"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Apostila1</a>
                                    </p>
                                </li>
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="#"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Apostila2</a>
                                    </p>
                                </li>
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="#"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Apostila3</a>
                                    </p>
                                </li>
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="#"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Apostila4</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Introdução à Física Experimental
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Método Científico</li>
                                <li class="list-group-item">Segurança no Laboratório</li>
                                <li class="list-group-item">Erros e Incertezas</li>
                                <li class="list-group-item">Equipamentos de Medição</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Cinemática
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Medição de Tempo e Velocidade</li>
                                <li class="list-group-item">Experimentos com Movimento Retilíneo Uniforme</li>
                                <li class="list-group-item">Experimentos com Movimento Acelerado</li>
                                <li class="list-group-item">Equipamentos de Medição</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Dinâmica
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Leis de Newton</li>
                                <li class="list-group-item">Força, Massa e Aceleração</li>
                                <li class="list-group-item">Experimentos com Atrito</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Estática e Equilíbrio
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Condições de Equilíbrio</li>
                                <li class="list-group-item">Centro de Massa</li>
                                <li class="list-group-item">Experimentos com Alavancas e Polias</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="bg-body-tertiary rounded-3 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logoufes.png" class="w-100 rounded-3"
                        alt="ceunes">
                </div>

                <div class="mt-4">
                    <h4 class="fst-italic">Criadores</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/raniella.png"
                                    class="w-25 rounded-2" alt="raniella">
                                <div class="col-lg-8">
                                    <h6 class="mb-0 text-body-emphasis">Raniella Falchetto Bazoni</h6>
                                    <small class="text-body-secondary">Fevereiro, 2024</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/paulo.png"
                                    class="w-25 rounded-2" alt="paulo">
                                <div class="col-lg-8">
                                    <h6 class="mb-0 text-body-emphasis">Paulo Sergio Moscon</h6>
                                    <small class="text-body-secondary">Fevereiro, 2024</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/esequiel.png"
                                    class="w-25 rounded-2" alt="esequiel">
                                <div class="col-lg-8">
                                    <h6 class="mb-0 text-body-esphasis">Esequiel da Veiga Pereira</h6>
                                    <small class="text-body-secondary">Fevereiro, 2024</small>
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
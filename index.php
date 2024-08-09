<?php
// Inclui o cabeçalho do WordPress
get_header();
?>

<!-- Conteúdo principal -->
<main class="container-fluid">
    <div class="row py-5 px-2 mb-4 rounded fundoImagem shadow d-flex align-items-center">
        <div class="col-lg-2 p-0">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logoLVF.jpg" class="d-block w-75"
                alt="experimento_teste">
        </div>
        <div class="col-lg-10 p-0">
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
            <h3 class="pb-1 mb-3 fst-italic border-bottom">
                Apostilas
            </h3>
            <div class="accordion" id="accordionApostilas">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            Licenciatura em Física
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionApostilas">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="https://cienciasnaturais.saomateus.ufes.br/sites/cienciasnaturais.saomateus.ufes.br/files/field/anexo/fisica_experimental_i_licenciatura_fisica_2018_1.pdf"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Física Experimental I</a>
                                    </p>
                                </li>
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="https://cienciasnaturais.saomateus.ufes.br/sites/cienciasnaturais.saomateus.ufes.br/files/field/anexo/fisica_experimenta_ii_licenciatura_fisica_2020.pdf"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Física Experimental II</a>
                                    </p>
                                </li>
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="https://cienciasnaturais.saomateus.ufes.br/sites/cienciasnaturais.saomateus.ufes.br/files/field/anexo/fisica_experimental_iii_licenciatura_fisica_2019_0.pdf"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Física Experimental III</a>
                                    </p>
                                </li>
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="https://cienciasnaturais.saomateus.ufes.br/sites/cienciasnaturais.saomateus.ufes.br/files/field/anexo/F%C3%ADsica%20Experimental%20IV_licenciatura_F%C3%ADsica.pdf#overlay-context=laborat%25C3%25B3rio-de-f%25C3%25ADsica"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Física Experimental VI</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Física Moderna
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionApostilas">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="https://cienciasnaturais.saomateus.ufes.br/sites/cienciasnaturais.saomateus.ufes.br/files/field/anexo/interferometro_de_precisao.pdf"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Interferômetro</a>
                                    </p>
                                </li>
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="https://cienciasnaturais.saomateus.ufes.br/sites/cienciasnaturais.saomateus.ufes.br/files/field/anexo/efeito_fotoeletrico.pdf"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Efeito Fotoelétrico</a>
                                    </p>
                                </li>
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="https://cienciasnaturais.saomateus.ufes.br/sites/cienciasnaturais.saomateus.ufes.br/files/field/anexo/millikan_1.pdf"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Millikan</a>
                                    </p>
                                </li>
                                <li class="list-group-item border-0">
                                    <p class="m-0"><a href="https://cienciasnaturais.saomateus.ufes.br/sites/cienciasnaturais.saomateus.ufes.br/files/field/anexo/polarizacao_da_luz.pdf"
                                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Polarização da Luz</a>
                                    </p>
                                </li>
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
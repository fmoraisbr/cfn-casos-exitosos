<!DOCTYPE html>
<html lang="pt-BR">

<!--

  :: Conselho Federal de Nutricionistas - CFN
  :: Unidade de Imprensa e Comunicação (UIC)
  :: EXPERIÊNCIAS EXITOSAS NA NUTRIÇÃO
  
  :: Desenvolvimento: 22 de agosto de 2022
  :: Tecnologias: Bootstrap, CSS, SVG, Javascript

-->

<?php

include 'assets/inc/head.php';

?>

<body>

  <?php

  include 'assets/inc/header.php';

  ?>

  <!-- ======= Primeira Section - Call-to-action ======= -->
  <section id="home" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Experiências Exitosas na Nutrição</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Esta página tem como objetivo identificar, valorizar e divulgar
            ações exitosas realizadas por nutricionistas de todo o país
          </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Cadastrar trabalho</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= START #main ======= -->
  <main id="main">

    <!-- ======= START Section - SOBRE ======= -->
    <section id="sobre" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>SOBRE O SISTEMA</h3>
              <h2>
                Este é o espaço para que nutricionistas de todo o país demonstrem como a nossa profissão pode contribuir
                para melhorar a vida da população brasileira
              </h2>
              <p>
                Abaixo ha um mapa dos trabalhos registrados por Regional. Clique e conheça os trabalhos publicados!
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Conhecer trabalhos</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section><!-- END Section - SOBRE -->

    <!-- ======= START Section - Apresentação ======= -->
    <section id="apresentacao" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Nutrição em foco</h2>
          <p>O que será apresentado</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <i class="bi bi-front" style="font-size: 8em; color: #65bc45;"></i>
              <h3>Área de nutrição</h3>
              <p>Alimentação Coletiva, Clínica, Esportes e Exercício Físico, Saúde Coletiva etc.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <i class="bi bi-chat-left-quote" style="font-size: 8em; color: #65bc45;"></i>
              <h3>Resumo do trabalho</h3>
              <p>Uma apresentação do trabalho desenvolvido e divulgado pelo profissional</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <i class="bi bi-image" style="font-size: 8em; color: #65bc45;"></i>
              <h3>Fotos e registros</h3>
              <p>Imagens de trabalhos postadas por diversos profissionais de todo território nacional</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- END Section - Apresentação -->

    <!-- ======= START Section - Mapa ======= -->
    <section id="mapa" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Mapa de resultados</h2>
          <p>Veja os trabalhos no mapa abaixo</p>
        </header>

        <div class="row justify-content-center" style="margin-top: 2em;">


          <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="200">
            <!-- d-flex align-items-center -->

            <!-- <span class="post-date">Instruções</span> -->
            <h3 class="post-title">Clique no cor correspondente ao Conselho Regional para ver os resultados:</h3><br />

            <button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #ff3ce2; border-color: #fff;"></button> CRN-1: DF, GO, MT, TO -
            Sede:
            Brasília-DF
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #b724ff; border-color: #fff;"></button> CRN-2: RS – Sede: Porto
            Alegre-RS
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #ffc200; border-color: #fff;"></button> CRN-3: SP e MS – Sede: São
            Paulo-SP
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #b4ff00; border-color: #fff;"></button> CRN-4: ES e RJ – Sede: Rio
            de
            Janeiro-RJ
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #00efcb; border-color: #fff;"></button> CRN-5: BA e SE – Sede:
            Salvador-BA
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #ff7b00; border-color: #fff;"></button> CRN-6: AL, PB, PE, RN –
            Sede:
            Recife-PE
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #00c600; border-color: #fff;"></button> CRN-7: AC, AM, AP, PA, RO,
            RR –
            Sede:
            Belém-PA
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #009af8; border-color: #fff;"></button> CRN-8: PR – Sede:
            Curitiba-PR
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #006600; border-color: #fff;"></button> CRN-9: MG – Sede: Belo
            Horizonte-MG
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #ff3100; border-color: #fff;"></button> CRN-10: SC – sede:
            Florianópolis-SC
            <br /><button type="button" class="btn btn-primary btn-square-md" style="color: #fff; background-color: #0044f7; border-color: #fff;"></button> CRN-11: CE, MA, PI – sede:
            Fortaleza-CE

          </div>

          <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">
            <!-- d-flex flex-column justify-content-center -->

            <!-- START MAPA-->

            <div id="any-"></div>
            <div style="max-width: 100%;">
              <div id="br_mine"></div>
            </div>

            <script src="assets/js/maparegionais.js"></script>

            <script>
              BrMap.Draw({
                wrapper: '#br_mine',
                selectStates: ['sc'],
                callbacks: {
                  click: (element, uf) => {
                    alert(uf);
                  },
                  /*mouseover: (element, uf) => {
                    document.querySelector("#any-").appendChild(document.createTextNode(uf + " "));
                  },*/
                }
              });
            </script>

            <!-- END MAPA -->

          </div>

        </div> <!-- / row -->

      </div>

    </section><!-- END Section - Mapa -->

    <!-- START Section - Logos Regionais -->
    <section id="regionais">

      <div class="container" data-aos="fade-up">
        <!-- <header class="section-header">
          <h2>órgãos contemplados</h2>
          <p>Conselhos Regionais (CRN)</p>
        </header> -->
        <div class="row justify-content-center">

          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-1-CFN.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-2-CRN1-v2.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-3-CRN2-v2.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-4-CRN3.png" class="img-fluid" alt="Responsive image">
          </div>

        </div>
        <div class="row justify-content-center" style="margin-top: 20px;">

          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-5-CRN5.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-6-CRN4.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-7-CRN5-v2.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-8-CRN6.png" class="img-fluid" alt="Responsive image">
          </div>

        </div>
        <div class="row justify-content-center" style="margin-top: 20px;">

          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-9-CRN7.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-10-CRN8.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-11-CRN9.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Logo-12-CRN10.png" class="img-fluid" alt="Responsive image">
          </div>

        </div>
      </div>

    </section><!-- END Section - Logos Regionais -->

    <!-- ======= START Section - Últimas Postagens ======= -->
    <section id="ultimas-postagens" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>nutricionistas em ação</h2>
          <p>Últimos trabalhos cadastrados</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog-1.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">19 de agosto</span>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
              <a href="#" class="readmore stretched-link mt-auto"><span>Leia mais</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog-2.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">21 de agosto</span>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <a href="#" class="readmore stretched-link mt-auto"><span>Leia mais</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog-3.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">25 de agosto</span>
              <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
              <a href="#" class="readmore stretched-link mt-auto"><span>Leia mais</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- END Section - Últimas Postagens -->

  </main><!-- END #main -->

  <?php

  include 'assets/inc/footer.php';

  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a><!-- Botão ir ao topo -->

  <!-- Vendor JS - Arquivos -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Javascript Main - Página Inicial -->
  <script src="assets/js/main.js"></script>

</body>

</html>
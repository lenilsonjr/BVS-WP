<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<!-- theme -->
<section class="theme">
  <div class="container">
    <div class="theme-title">
      <h2 class="line-bottom">Temas</h2>
    </div>
    <div class="owl-carousel owl-theme">
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Epidemiologia</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Avaliação Nutricional</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Medicina Tradicional</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Serviços de saúde do indígena</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Tuberculose</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Epidemiologia</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Avaliação Nutricional</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Medicina Tradicional</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Serviços de saúde do indígena</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Tuberculose</span>
        </a>
    </div>
    <button type="button" class="btn btn-warning mt-5 mb-3">Ver todos</button>
  </div>
</section>

<!-- Section Map -->
<section class="section-map">
  <h2 class="sm-title line-bottom">Localização Geográfico</h2>
  <div class="map-container">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.svg" class="svg">
    <div class="sm-info">
      <div id="sul" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Sul</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
      </div>
      <div id="sudeste" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Sudetes</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
      </div>
      <div id="centro-oeste" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Centro Oeste</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
      </div>
      <div id="nordeste" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Nordeste</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
      </div>
      <div id="norte" class="regiao active">
        <div class="pin"></div>
        <h3 class="info-title">Região Norte</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
        <ul class="info-list">
          <li>
            <a href="#">Amazonas
              <span>44 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Acre
              <span>44 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Rondônia
              <span>12 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Roraima
              <span>32 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Pará
              <span>11 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Amapá
              <span>23 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Tocantins
              <span>45 resultados</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- etnias -->
<section class="section-etnias">
  <div class="container">
    <h2 class="se-title line-bottom">Etnias</h2>
    <div class="owl-carousel owl-theme">
      <a href="#" class="item" style="background-color: #891812"><span class="owl-title">Xavante</span></a>
      <a href="#" class="item" style="background-color: #E59600"><span class="owl-title">Surui</span></a>
      <a href="#" class="item" style="background-color: #2D9FB4"><span class="owl-title">Guarani</span></a>
      <a href="#" class="item" style="background-color: #95B515"><span class="owl-title">Baniwa</span></a>
      <a href="#" class="item" style="background-color: #528912"><span class="owl-title">Kaingång</span></a>
      <a href="#" class="item" style="background-color: #891812"><span class="owl-title">Xavante</span></a>
      <a href="#" class="item" style="background-color: #E59600"><span class="owl-title">Surui</span></a>
      <a href="#" class="item" style="background-color: #2D9FB4"><span class="owl-title">Guarani</span></a>
      <a href="#" class="item" style="background-color: #95B515"><span class="owl-title">Baniwa</span></a>
      <a href="#" class="item" style="background-color: #528912"><span class="owl-title">Kaingång</span></a>
    </div>
    <button type="button" class="btn btn-warning m-5">Ver todos</button>
  </div>
</section>

<!-- Destaques -->
<section class="destaques">
  <div class="container">
    <div class="destaques-title">
      <h2 class="line-bottom">Destaques</h2>
    </div>
    <div class="destaques-content">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="featured">
            <div class="featured-content">
              <span class="marking" style="background-color: #71B42D"><a href="#">Grupo de pesquisa</a></span>
              <h6 class="fc-title">
                <a href="#">Título da notícia em destaque. O título pode ter até duas linhas e ser extenso.</a>
              </h6>
              <span class="published">Publicado em 28/02/2018</span>
              <p class="fc-text">Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra…
                <a href="#">Ler mais</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="destaque-post">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-6 col-xl-5">
                  <a href="#">
                    <img src="src/images/destaques2.png" class="">
                  </a>
                </div>
                <div class="col-12 col-md-8 col-lg-6 col-xl-7">
                <div class="post-item">
                  <span class="marking" style="background-color: #95B515"><a href="#">Eventos</a></span>
                  <h6 class="fc-title">
                    <a href="#">Título da notícia em destaque. O título pode</a>
                  </h6>
                  <span class="published">Publicado em 28/02/2018</span>
                  <p class="fc-text">Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra…
                    <a href="#">Ler mais</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="destaque-post">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-6 col-xl-5">
                  <a href="#">
                    <img src="src/images/destaques2.png" class="">
                  </a>
                </div>
                <div class="col-12 col-md-8 col-lg-6 col-xl-7">
                <div class="post-item">
                  <span class="marking" style="background-color: #891812"><a href="#">Notícias</a></span>
                  <h6 class="fc-title">
                    <a href="#">Título da notícia em destaque. O título pode</a>
                  </h6>
                  <span class="published">Publicado em 28/02/2018</span>
                  <p class="fc-text">Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra…
                    <a href="#">Ler mais</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="destaque-post border-none mb-0">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-6 col-xl-5">
                  <a href="#">
                    <img src="src/images/destaques2.png" class="">
                  </a>
                </div>
                <div class="col-12 col-md-8 col-lg-6 col-xl-7">
                <div class="post-item">
                  <span class="marking" style="background-color: #318107"><a href="#">Grupo de pesquisa</a></span>
                  <h6 class="fc-title">
                    <a href="#">Título da notícia em destaque. O título pode</a>
                  </h6>
                  <span class="published">Publicado em 28/02/2018</span>
                  <p class="fc-text">Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra…
                    <a href="#">Ler mais</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Partners -->
<section class="partners">
  <div class="container">
    <div class="partners-title">
      <h2>Parceiros</h2>
    </div>
    <div class="row">
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
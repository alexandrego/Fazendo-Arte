<div id="divSplashScreen">
  <div class="divHeader">
    <a href="#">
      <div class="divLogo">
        <img src="./wp-content/themes/makingart/assets/images/fazendo-arte.webp" title="Logo Fazendo Arte" alt="Logo Fazendo Arte" class="imgPrincipalLogo">
      </div>
    </a>

    <div class="divSearch">      
      <form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_home_url(); ?>">
        <div class="searchInputAndButton">
          <label class="screen-reader-text" for="s">Pesquisar por:</label>
          <input
            type="text"
            class="inputSearch"
            value=""
            title="Digite sua busca"
            placeholder="Digite sua busca"
            name="s"
            id="s"
          />
          <button type="submit" id="searchSubmitButton" class="searchSubmitButton" onclick="showShimmerEffect()">
            <span class="dashicons dashicons-search" title="Clique para buscar"></span>
          </button>
        </div>
      </form>                    
    </div>

    <div class="divAreaLogado">
      <div class="divIconeLogar">
        <a href="#">
          <span
            class="dashicons dashicons-admin-users"
            title="Clique para ir até a área de cliente"
          >
          </span>
        </a>
      </div>
      <p>Área do Cliente</p>
    </div>

    <div class="divCart">
      <div class="divIconeCart">
        <a href="#">
          <span
          class="dashicons dashicons-cart"
          >
          </span>
        </a>
      </div>
      <p>Carrinho</p>
    </div>
  </div>
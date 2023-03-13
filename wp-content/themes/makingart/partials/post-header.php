<div id="divSplashScreen">
  <div class="divHeader">
    <a href="<?php echo home_url('/'); ?>" onclick="goHomeEffect()">
      <div class="divLogo">
        <img src="./wp-content/themes/makingart/assets/images/fazendo-arte.webp" title="Logo Fazendo Arte" alt="Logo Fazendo Arte" class="imgPrincipalLogo">
        <div style="margin: 0 0 0 10px;display:flex;flex-direction:column;align-items:center;justify-content:center;">
          <div>
            Fazendo
          </div>
          <div>
            Arte
          </div>
        </div>
      </div>
    </a>

    <div class="divSearch">      
      <form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_home_url(); ?>" onsubmit="searchProduct()">
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
      <a href="#">
        <div class="divIconeLogar">
            <span class="dashicons dashicons-admin-users" title="Clique para ir até a área de cliente">
            </span>
        </div>
        <p>Área do Cliente</p>
      </a>
    </div>

    <div class="divCart">
      <a href="#">
        <div class="divIconeCart">
            <span class="dashicons dashicons-cart">
            </span>
        </div>
        <p>Carrinho</p>
      </a>
    </div>
  </div>

<div class="divSearchMobile">      
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
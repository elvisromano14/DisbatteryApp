<div class="header">
  <div class="header-left">
    <div class="menu-icon bi bi-list"></div>
    <div
      class="search-toggle-icon bi bi-search"
      data-toggle="header_search"
    ></div>

  </div>
  <div class="header-right">
    <div class="user-info-dropdown">
      <div class="dropdown">
        <a
          class="dropdown-toggle"
          href="#"
          role="button"
          data-toggle="dropdown"
        >
          <span class="user-icon">
            <img src="vistas/deskapp/vendors/images/banner-img.png" alt="" />
          </span>
          <span class="user-name"><?php echo $_SESSION["empleado"] ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
          <a class="dropdown-item" href="salir"><i class="dw dw-logout"></i> Salir</a>
        </div>
      </div>
    </div>
    <div class="github-link">
      <a href="https://github.com/dropways/deskapp" target="_blank"
        ><img src="vistas/deskapp/vendors/images/github.svg" alt=""
      /></a>
    </div>
  </div>
</div>

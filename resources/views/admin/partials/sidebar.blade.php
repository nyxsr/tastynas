<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        {{-- <span class="app-brand-logo demo"></span> --}}
        <span class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform: capitalize !important;">Tastynas</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item @if ($active == 'dashboard') active @endif">
        <a href="{{ url('/admin/dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>
      <li class="menu-item @if ($active == 'kelolaEvent') active @endif">
        <a href="{{ url('kelolaEvent') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-calendar-event"></i>
          <div data-i18n="Analytics">Event Popup</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Data</span>
      </li>
      <li class="menu-item @if ($active == 'kelolaProduk' || $active == 'kelolaKategori' || $active == 'kelolaBestSeller') open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-food-menu"></i>
          <div data-i18n="Account Settings">Produk</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if ($active == 'kelolaProduk') active @endif">
            <a href="{{ url('kelolaProduk') }}" class="menu-link">
              <div data-i18n="Account">Kelola Produk</div>
            </a>
          </li>
          <li class="menu-item @if ($active == 'kelolaKategori') active @endif">
            <a href="{{ url('kelolaKategori') }}" class="menu-link">
              <div data-i18n="Account">Kelola Kategori</div>
            </a>
          </li>
          <li class="menu-item @if ($active == 'kelolaBestSeller') active @endif">
            <a href="{{ url('kelolaBestSeller') }}" class="menu-link">
              <div data-i18n="Notifications">Edit Best Seller</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item @if ($active == 'kelolaBerita' || $active == 'kelolaSpotlight') open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-news"></i>
          <div data-i18n="Authentications">News</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if ($active == 'kelolaBerita') active @endif">
            <a href="{{ url('kelolaBerita') }}" class="menu-link">
              <div data-i18n="Basic">Kelola Berita</div>
            </a>
          </li>
          <li class="menu-item @if ($active == 'kelolaSpotlight') active @endif">
            <a href="{{ url('kelolaSpotlight') }}" class="menu-link">
              <div data-i18n="Basic">Edit Spotlight</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item @if ($active == 'kelolaTestimoni') open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-wink-smile"></i>
          <div data-i18n="Misc">Testimoni</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if ($active == 'kelolaTestimoni') active @endif">
            <a href="{{ url('kelolaTestimoni') }}" class="menu-link">
              <div data-i18n="Error">Kelola Testimoni</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Akun</span>
      </li>
      <li class="menu-item @if ($active == 'kelolaUsers') open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-user-account"></i>
          <div data-i18n="Account Settings">Users</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if ($active == 'kelolaUsers') active @endif">
            <a href="{{ url('kelolaUser') }}" class="menu-link">
              <div data-i18n="Account">Kelola Users</div>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>

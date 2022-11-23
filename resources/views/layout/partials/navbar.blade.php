@include('layout.partials.login')
@include('layout.partials.register')

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">

{{-- Navbar Brand --}}
      <a class="navbar-brand" href="/">
        <div class="brand-container">
            <img src="{{ url('assets/img/logo.png') }}" alt="" class="brand">
        </div>
        <div class="brand-caption">
            <p class="title">Pondok Pesantren Al-Ittihad</p>
            <p class="caption">Karangtengah Cianjur</p>
        </div>
      </a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse  navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Beranda") ? 'active fw-bold' : '' }}" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Lowongan") ? 'active fw-bold' : '' }}" href="/lowongan">Lowongan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "list") ? 'active fw-bold' : '' }}" href="/list">List Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Artikel") ? 'active fw-bold' : '' }}" href="/artikel">Artikel</a>
          </li>
            </ul>
          </li>
        </ul>
      </div>
      <button class="btn bg-primary text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-arrow-right-to-bracket"></i>
        Login
      </button>
      {{-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#vertically-centered">
        Vertically centered
      </button> --}}

   
    </div>

  </nav>
  <div class="w-100 bg-secondary py-2">
    <marquee behavior="" direction="">
      Welcome To Here
    </marquee>
  </div>
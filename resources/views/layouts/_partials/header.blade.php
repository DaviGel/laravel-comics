<header>
  <div class="top-header text-end">
      <div class="container text-uppercase py-1">
        <span class="fs-6 me-5">dc power&#8480; visa&#174;</span>
        <span class="fs-6">additional dc sites&#x25BC;</span>
    </div>
  </div>
  <div class="bottom-header py-3">
    <div class="container d-flex justify-content-between">
      <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
      <nav class="navbar navbar-expand-lg">
      <div class="container-fluid pe-0">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @foreach ($menu_db as $menu_item)
              <li class="nav-item text-uppercase p-1">
                <a class="nav-link active" aria-current="page" href="#">
                  {{ $menu_item }}
                </a>
              </li>
            @endforeach
            <input class="form-control shadow-none me-2 border-2 border-top-0 border-start-0 border-end-0 border-primary rounded-0" type="search" placeholder="Search" aria-label="Search">
          </ul>
        </div>
      </div>
    </nav>
    </div>
  </div>
</header>
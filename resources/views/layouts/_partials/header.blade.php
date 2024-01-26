<header>
  <div class="top-header text-end">
      <div class="container text-uppercase">
        <span>dc power&#8480; visa&#174;</span>
        <span>additional dc sites&#x25BC;</span>
    </div>
    </div>
    <div class="bottom-header py-3">
      <div class="container d-flex">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @foreach ($menu_db as $menu_item)
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">
                    {{ $menu_item }}
                  </a>
                </li>
              @endforeach
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      </div>
    </div>
</header>
<footer>
  <div class="top-footer">
    <div class="container flex-column py-0 gap-0">
      <div class="lists d-flex">
        <ul class="ps-0">
          <li class="t-upper"><h2>DC Comics</h2></li>
          @foreach ($footer_db['comics'] as $element)
            <li>
                <a href="#">{{ $element }}</a>
            </li>
          @endforeach
          <li class="t-upper"><h2>Shop</h2></li>
          @foreach ($footer_db['shop'] as $element)
            <li>
                <a href="#">{{ $element }}</a>
            </li>
          @endforeach
        </ul>
        <ul>
          <li class="t-upper"><h2>DC</h2></li>
          @foreach ($footer_db['dc'] as $element)
            <li>
                <a href="#">{{ $element }}</a>
            </li>
          @endforeach
        </ul>
        <ul>
          <li class="t-upper"><h2>Sites</h2></li>
          @foreach ($footer_db['sites'] as $element)
            <li>
                <a href="#">{{ $element }}</a>
            </li>
          @endforeach
        </ul>
      </div>
      <p class="text-white">All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.<br><a href="#">Cookies settings</a></p>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container px-0">
      <div class="left-content t-upper"><button>Sign-up now</button></div>
      <div class="right-content t-upper">
        <strong>Follow us</strong>
        <ul class="mb-0">
          @foreach ($icon_db as $icon)
            <li>
              <button><img src="{{ Vite::asset($icon) }}" alt="footer-icon-img"></button>
            </li>
          @endforeach
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
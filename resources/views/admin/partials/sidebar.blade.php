        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('admin.weather.*') ? 'active' : ''  }}" href="{{ route("admin.weather.index") }}">
                            <span data-feather="star"></span>
                            Dashboard
                        </a>
                        <a class="nav-link {{ Route::is('admin.order.*') ? 'active' : ''  }}" href="{{ route("admin.order.index") }}">
                            <span data-feather="shopping-cart"></span>
                            Заказы
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

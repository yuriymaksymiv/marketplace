<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
    <nav class="py-0 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">

            </ul>
            <ul class="nav">
                <li class="nav-item"><a href="/docs" class="nav-link px-2" target="_blank"><span class="small">Docs</span></a></li>
                <li class="nav-item nav-link"><span class="small">|</span></li>
                <li class="nav-item dropdown">
                        @if ( Config::get('app.locale') == 'en')
                            <a class="nav-link dropdown-toggle" href="{{ route('locale', ['locale' => 'en']) }}" id="language" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small><i class="fas fa-globe me-2"></i></small>
                                <span class="small">EN</span>
                            </a>
                        @elseif ( Config::get('app.locale') == 'uk' )
                            <a class="nav-link dropdown-toggle" href="{{ route('locale', ['locale' => 'uk']) }}" id="language" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small><i class="fas fa-globe me-2"></i></small>
                                <span class="small">UA</span>
                            </a>
                        @endif
                        <ul class="dropdown-menu dropdown-menu-end min-w-auto" aria-labelledby="language">
                            <li> <a class="dropdown-item" href="{{ route('locale', ['locale' => 'en']) }}"><img class="fa-fw me-2" src="/images/language/en.png" alt="">English</a></li>
                            <li> <a class="dropdown-item me-3" href="{{ route('locale', ['locale' => 'uk']) }}"><img class="fa-fw me-2" src="/images/language/ua.png" alt="">Українська</a></li>
                        </ul>

                </li>
                <li class="nav-item nav-link"><span class="small">|</span></li>
                @auth
                    <li class="nav-item"><a href="/account/item" class="nav-link  px-2"><span class="small">Account</span></a></li>
                @else
                    <li class="nav-item"><a href="/login" class="nav-link  px-2"><span class="small">Login</span></a></li>
                @endauth
            </ul>
        </div>
    </nav>
    <div class="container">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid">
            <!-- Logo START -->
            <a class="navbar-brand" href="/">
                <img class="light-mode-item" src="/images/misc/logo-dark.png" width="220px" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="/images/misc/logo-dark.png" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                <!-- Nav category menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-auto">
                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown dropdown-menu-shadow-stacked">
                        <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0" href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>{{ __('general.category')}}</span></a>
                        <ul class="dropdown-menu" aria-labelledby="categoryMenu">
                            <li> <a class="dropdown-item" href="/marketplace/category/crypto">{{ __('category.crypto')}}</a> </li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="/">{{ __('category.homeware')}}</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="/marketplace/category/furniture">{{ __('category.furniture')}}</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Nav category menu END -->

                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-0">
                    <!-- Nav item 1 Demos -->
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/">{{ __('general.home')}}</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/nft">NFT</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" target="_blank" href="/docs">{{ __('general.white_paper')}}</a>--}}
{{--                    </li>--}}






                </ul>
                <!-- Nav Main menu END -->

                <!-- Nav Search START -->
                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="position-relative" action="{{ route('search') }}" method="GET">
                            <input class="form-control pe-5 bg-transparent" type="search" name="search" placeholder="{{ __('general.search')}}" aria-label="Search">
                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>
                </div>
                <!-- Nav Search END -->
            </div>
            <!-- Main navbar END -->

            <div class="navbar-nav d-none d-lg-inline-block me-2">
                <a href="https://pos.inspiga.com" target="_blank" class="btn btn-danger-soft mb-0">CRM</a>
            </div>
            <div class="navbar-nav d-none d-lg-inline-block me-0">
                <a href="/marketplace" class="btn btn-warning mb-0">{{ __('general.marketplace')}}</a>
            </div>

            <!-- Profile START -->
            @auth
                <div class="dropdown ms-1 ms-lg-0 ps-3">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="{{ Auth::user()->image }}" alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow" src="{{ Auth::user()->image }}" alt="avatar">
                                </div>
                                <div>
                                    <a class="h6" href="#">{{ Auth::user()->name }}</a>
                                    <p class="small m-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <hr>
                        </li>
                        <!-- Links -->
                        <li><a class="dropdown-item" href="/account/settings"><i class="bi bi-person fa-fw me-2"></i>{{ __('general.my_profile')}}</a></li>
                        <li><a class="dropdown-item" href="/account/item"><i class="bi bi-gear fa-fw me-2"></i>{{ __('general.my_items')}}</a></li>
                        <li>
                            <a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-power fa-fw me-2"></i>{{ __('general.log_out')}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </div>
        @else
        @endauth
        <!-- Profile START -->
        </div>
    </nav>
    <!-- Logo Nav END -->
    </div>
</header>
<!-- Header END -->

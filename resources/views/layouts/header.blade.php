<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
    <div class="container">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid px-3 px-xl-5">
            <!-- Logo START -->
            <a class="navbar-brand" href="/">
                <img class="light-mode-item navbar-brand-item" src="/images/misc/logo-dark.png"  alt="logo">
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
                        <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0" href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>Category</span></a>
                        <ul class="dropdown-menu" aria-labelledby="categoryMenu">

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Development</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Web Development</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">CSS</a> </li>
                                            <li> <a class="dropdown-item" href="#">JavaScript</a> </li>
                                            <li> <a class="dropdown-item" href="#">Angular</a> </li>
                                            <li> <a class="dropdown-item" href="#">PHP</a> </li>
                                            <li> <a class="dropdown-item" href="#">HTML</a> </li>
                                            <li> <a class="dropdown-item" href="#">React</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Data Science</a> </li>
                                    <li> <a class="dropdown-item" href="#">Mobile Development</a> </li>
                                    <li> <a class="dropdown-item" href="#">Programing Language</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Testing</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Engineering</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Development Tools</a> </li>
                                </ul>
                            </li></ul>
                    </li>
                </ul>
                <!-- Nav category menu END -->

                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-auto">
                    <!-- Nav item 1 Demos -->
                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ __('general.home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">NFT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ __('general.white_paper')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ __('general.marketplace')}}</a>
                    </li>


                    <!-- Nav item 3 Account -->
                    <li class="nav-item dropdown">
                        @if ( Config::get('app.locale') == 'en')
                            <a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>
                        @elseif ( Config::get('app.locale') == 'ru' )
                            <a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>
                        @elseif ( Config::get('app.locale') == 'uk' )
                            <a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UA</a>
                        @endif
                        <ul class="dropdown-menu" aria-labelledby="accounntMenu">

                            <li> <a class="dropdown-item" href="{{ route('locale', ['locale' => 'en']) }}">EN</a> </li>
                            <li> <hr class="dropdown-divider"></li>
                            <li> <a class="dropdown-item" href="{{ route('locale', ['locale' => 'ru']) }}">RU</a> </li>
                            <li> <hr class="dropdown-divider"></li>
                            <li> <a class="dropdown-item" href="{{ route('locale', ['locale' => 'uk']) }}">UA</a> </li>
                        </ul>
                    </li>

                </ul>
                <!-- Nav Main menu END -->

                <!-- Nav Search START -->
                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>
                </div>
                <!-- Nav Search END -->
            </div>
            <!-- Main navbar END -->

            <!-- Profile START -->
            @auth
                <div class="dropdown ms-1 ms-lg-0">
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
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>{{ __('general.my_profile')}}</a></li>
                        <li><a class="dropdown-item" href="/account/item"><i class="bi bi-gear fa-fw me-2"></i>{{ __('general.my_items')}}</a></li>
                        <li>
                            <a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-power fa-fw me-2"></i>{{ __('general.log_out')}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        <li> <hr class="dropdown-divider"></li>
                        <!-- Dark mode switch START -->
                        <li>
                            <div class="modeswitch-wrap" id="darkModeSwitch">
                                <div class="modeswitch-item">
                                    <div class="modeswitch-icon"></div>
                                </div>
                                <span>Dark mode</span>
                            </div>
                        </li>
                        <!-- Dark mode switch END -->
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
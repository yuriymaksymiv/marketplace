<header class="header-light scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="/">
                                    <img alt="" src="/images/misc/logo-dark.png" width="150" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                            <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a href="/" class="text-dark">HOME<span></span></a></li>
                            <li><a href="#" class="text-dark">NFT<span></span></a></li>
                            <li><a href="#" class="text-dark">WHITEPAPER</a></li>
                            <li class="content-en">
                                @if ( Config::get('app.locale') == 'en')
                                <a>EN<span></span></a>
                                @elseif ( Config::get('app.locale') == 'ru' )
                                    <a>RU<span></span></a>
                                @elseif ( Config::get('app.locale') == 'uk' )
                                    <a>UA<span></span></a>
                                @endif
                                <ul>
                                    <li><a href="{{ route('locale', ['locale' => 'en']) }}">EN</a></li>
                                    <li><a href="{{ route('locale', ['locale' => 'ru']) }}">RU</a></li>
                                    <li><a href="{{ route('locale', ['locale' => 'uk']) }}">UA</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- mainmenu close -->
                        <div class="menu_side_area">
                            <a href="/marketplace" class="btn btn-warning"><span>Marketplace</span></a>
                            <span id="menu-btn"></span>
                        </div>
                        @auth
                        <div class="menu_side_area">
                            <div class="de-login-menu">

                                <span id="de-click-menu-profile" class="de-menu-profile">
                                                <img src="/images/misc/user.png" class="img-fluid" alt="">
                                            </span>

                                <div id="de-submenu-profile" class="de-submenu">
                                    <div class="d-name">
                                        <h4>{{ Auth::user()->name  }}</h4>
                                        <div class="spacer-10"></div>
                                        <a class="badge bg-success" href="/account/item/create">+ Додати оголошення</a>
                                    <div class="d-line"></div>
                                    <div class="d-balance">
                                        <h4>Доступно</h4>
                                        <span class="badge bg-primary">10 Оголошень</span>
                                    </div>

                                    <div class="d-line"></div>

                                    <ul class="de-submenu-profile">
                                        <li><a href="author.html"><i class="fa fa-user"></i> My profile</a>
                                        <li><a href="/account/item"><i class="fa fa-pencil"></i> Мої товари</a>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i> Log out
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                    </ul>
                                </div>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                        @else
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

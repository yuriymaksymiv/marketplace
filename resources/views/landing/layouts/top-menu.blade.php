<header class="transparent scroll-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="/">
                                    <img alt="" src="images/misc/logo-white.png" width="150" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a href="/" class="text-white">{{ __('general.home')}}<span></span></a></li>
                            <li><a href="/nft" class="text-white">NFT<span></span></a></li>
                            <li><a href="/docs" target="_blank" class="text-white">{{ __('general.white_paper')}}<span></span></a></li>
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
                            <a href="/marketplace" class="btn btn-warning"><span>{{ __('general.marketplace')}}</span></a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

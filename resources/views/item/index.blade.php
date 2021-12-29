@extends('layouts.app')
@section('content')
@include('layouts.top-menu-light')



<div class="no-bottom no-top" id="content">
    <div id="top"></div>


    <!-- section begin -->
    <section aria-label="section">
        <div class="container">
            <div class="row fadeIn">
                <div class="col-lg-12">

                    <div class="items_filter">
                        <form action="blank.php" class="row form-dark" id="form_quick_search" method="post" name="form_quick_search">
                            <div class="col text-center">
                                <input class="form-control" id="name_1" name="name_1" placeholder="search item here..." type="text" /> <a href="#" id="btn-submit"><i class="fa fa-search bg-color-secondary"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </form>

                        <div id="item_category" class="dropdown">
                            <a href="#" class="btn-selector">All categories</a>
                            <ul>
                                <li class="active"><span>All categories</span></li>
                                <li><span>Art</span></li>
                                <li><span>Music</span></li>
                                <li><span>Domain Names</span></li>
                                <li><span>Virtual World</span></li>
                                <li><span>Trading Cards</span></li>
                                <li><span>Collectibles</span></li>
                                <li><span>Sports</span></li>
                                <li><span>Utility</span></li>
                            </ul>
                        </div>

                        <div id="buy_category" class="dropdown">
                            <a href="#" class="btn-selector">Buy Now</a>
                            <ul>
                                <li class="active"><span>Buy Now</span></li>
                                <li><span>On Auction</span></li>
                                <li><span>Has Offers</span></li>
                            </ul>
                        </div>

                        <div id="items_type" class="dropdown">
                            <a href="#" class="btn-selector">All Items</a>
                            <ul>
                                <li class="active"><span>All Items</span></li>
                                <li><span>Single Items</span></li>
                                <li><span>Bundles</span></li>
                            </ul>
                        </div>

                    </div>
                </div>

                @include('item._item-sort')
            </div>
        </div>
    </section>

</div>
@endsection

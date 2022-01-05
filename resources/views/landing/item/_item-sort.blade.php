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
@forelse ($items as $item)

    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="nft__item style-2 shadow">
            <div class="author_list_pp">
                <a href="/item/store/{{ $item->user->slug }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Store: {{ $item->user->name }}">
                    <img class="lazy" src="{{ $item->user->image }}" alt="">
                    @if ($item->user->verified == 1)
                        <i class="fa fa-check bg-primary"></i>
                    @else

                    @endif
                </a>
            </div>
            <div class="nft__item_wrap">
                <div class="nft__item_extra">
                    <div class="nft__item_buttons">
                        <button disabled>{{ $item->user->phone }}</button>
                    </div>
                </div>
                <a href="/item/{{ $item->slug }}">
                    <img src="{{ $item->image }}" class="lazy nft__item_preview" alt="">
                </a>
            </div>
            <div class="nft__item_info">
                <a href="/item/{{ $item->slug }}">
                    <h4>{{ $item->title }}</h4>
                </a>
                <div class="nft__item_click">
                    <span></span>
                </div>
                <div class="nft__item_price">
                    <span class="ms-0 text-primary ">{{ $item->price + 0 }} {{ __('item.' . $item->currency )}}</span>
                </div>
                <div class="nft__item_action">
                    <p class="text-dark"><a href="/item/country/{{ $item->country->slug }}" class="text-dark">{{ __('country.' . $item->country->slug )}} </a><span class="ps-2 pt-5"><a href="/item/city/{{ $item->city->slug }}" class="text-secondary">{{ __('city.' . $item->city->slug )}}</a></span></p>
                </div>
                <div class="nft__item_like">
                    <i class="fa fa-eye"></i><span>{{ $item->views }}</span>
                </div>
            </div>
        </div>
    </div>
@empty
@endforelse


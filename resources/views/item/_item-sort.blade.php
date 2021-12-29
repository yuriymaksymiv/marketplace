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
                    <span class="ms-0 text-primary ">{{ $item->price + 0 }} {{ $item->currency }}</span>
                </div>
                <div class="nft__item_action">
                    <p class="text-dark"><a href="/item/country/{{ $item->country->slug }}" class="text-dark">{{ $item->country->slug }} </a><span class="ps-2 pt-5"><a href="/item/city/{{ $item->city->slug }}" class="text-secondary">{{ $item->city->slug }}</a></span></p>
                </div>
                <div class="nft__item_like">
                    <i class="fa fa-eye"></i><span>{{ $item->views }}</span>
                </div>
            </div>
        </div>
    </div>
@empty
@endforelse

<div class="col-md-12 text-center">
    <a href="#" id="loadmore" class="btn-main fadeInUp lead">Load more</a>
</div>

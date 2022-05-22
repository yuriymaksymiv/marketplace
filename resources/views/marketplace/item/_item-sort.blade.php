<!-- Item Grid START -->
<div class="row g-4">
@forelse ($items as $item)
    <!-- Card item START -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card shadow h-100">
                <!-- Image -->
                <a href="/marketplace/item/{{ $item->slug }}">
                    <img src="{{ $item->image }}" class="card-img-top" alt="course image">
                </a>
                <!-- Card body -->
                <div class="card-body pb-0">
                    <!-- Badge and favorite -->
                    <div class="d-flex justify-content-between mb-2">
                        @if($item->category_id > 0)<a href="/marketplace/category/{{ $item->category->slug }}" class="badge bg-success bg-opacity-10 text-success ml-0">{{ __('category.' . $item->category->slug )}}</a>@endif
                    </div>
                    <!-- Title -->
                    <h6 class="card-title"><a href="/marketplace/item/{{ $item->slug }}">{{ $item->title }}</a></h6>
                    <h6 class="card-title text-primary">{{ $item->crypto_price + 0 }} {{ __('item.' . $item->crypto_currency )}}
                        <img src="/images/misc/usdt.png" width="18" class="ms-2 pb-1"></h6>

                </div>
                <!-- Card footer -->
                <div class="card-footer pt-0 pb-3">
                    <hr class="mt-2 mb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            @if($item->country_id > 0)<a href="/marketplace/country/{{ $item->country->slug }}" class="text-dark h6 mb-0 me-3">{{ __('country.' . $item->country->slug )}}</a>@endif
                            @if($item->city_id > 0)<a href="/marketplace/city/{{ $item->city->slug }}" class="text-secondary h6 mb-0">{{ __('city.' . $item->city->slug )}}</a>@endif
                        </div>
                        <span class="h6 fw-light mb-0 text-muted"><i class="fas fa-eye text-muted me-2"></i>{{ $item->views }}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card item END -->
    @empty
    @endforelse
</div>
<!-- Item Grid END -->

<!-- Pagination START -->
<div class="col-12 mt-5 d-flex justify-content-center">
    {{  $items->appends(request()->input())->links('marketplace.item._paginationlinks') }}
</div>
<!-- Pagination END -->

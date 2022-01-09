<!-- Item Grid START -->
<div class="row g-4">
@forelse ($items as $item)
    <!-- Card item START -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card shadow h-100">
                <!-- Image -->
                <a href="/item/{{ $item->slug }}">
                    <img src="{{ $item->image }}" class="card-img-top" alt="course image">
                </a>
                <!-- Card body -->
                <div class="card-body pb-0">
                    <!-- Badge and favorite -->
                    <div class="d-flex justify-content-between mb-2">
                        <a href="/item/category/{{ $item->category->slug }}" class="badge bg-success bg-opacity-10 text-success ml-0">{{ __('category.' . $item->category->slug )}}</a>
                    </div>
                    <!-- Title -->
                    <h6 class="card-title"><a href="/item/{{ $item->slug }}">{{ $item->title }}</a></h6>
                    <h6 class="card-title text-primary">{{ $item->price + 0 }} {{ __('item.' . $item->currency )}}</h6>

                </div>
                <!-- Card footer -->
                <div class="card-footer pt-0 pb-3">
                    <hr class="mt-2 mb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="/item/country/{{ $item->country->slug }}" class="text-dark h6 mb-0">{{ __('country.' . $item->country->slug )}}</a>
                            <a href="/item/city/{{ $item->city->slug }}" class="text-secondary h6 mb-0 ms-3">{{ __('city.' . $item->city->slug )}}</a>
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
<div class="col-12">
    <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
        <ul class="pagination pagination-primary-soft rounded mb-0">
            <li class="page-item mb-0"><a class="page-link" href="{{ $items->previousPageUrl() }}" tabindex="-1"><i class="fas fa-angle-double-left"></i></a></li>
            @for ($i = 1; $i <= $items->lastPage(); $i++)
                <li class="page-item mb-0 @if ($i == $items->currentPage() ) active @endif"><a class="page-link" href="{{$items->url($i)}}">{{ $i }}</a></li>
            @endfor
            <li class="page-item mb-0"><a class="page-link" href="{{ $items->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a></li>
        </ul>
    </nav>
</div>
<!-- Pagination END -->

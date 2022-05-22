@extends('marketplace.layouts.account_app')
@section('content')
    <div class="col-xl-9">
        <!-- Card START -->
        <div class="card border bg-transparent rounded-3">
            <!-- Card header START -->
            <div class="card-header bg-transparent border-bottom">
                <h3 class="mb-0">{{ __('general.my_items')}}</h3>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">



                <!-- Course list table START -->
                <div class="table-responsive-lg border-0">
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                        <tr>
                            <th scope="col" class="border-0 rounded-start">{{ __('general.item')}}</th>
                            <th scope="col" class="border-0">{{ __('general.category')}}</th>
                            <th scope="col" class="border-0">{{ __('general.status')}}</th>
                            <th scope="col" class="border-0">Price</th>
                            <th scope="col" class="border-0 rounded-end">Action</th>
                        </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                        <!-- Table item -->
                        @forelse ($items as $item)
                        <tr>
                            <!-- Course item -->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!-- Image -->
                                    <div class="w-70px">
                                        <a href="/marketplace/item/{{ $item->slug }}"><img src="{{ $item->image }}" class="rounded" alt=""></a>
                                    </div>
                                    <div class="mb-0 ms-2">
                                        <!-- Title -->
                                        <h6><a href="/marketplace/item/{{ $item->slug }}">{{ $item->title }}</a></h6>
                                        <!-- Info -->
                                        <div class="d-sm-flex">
                                            <p class="h6 fw-light mb-0 small me-3"><i class="fas fa-eye text-secondary me-2"></i>{{ $item->views }}</p>
                                            <p class="h6 fw-light mb-0 small"><i class="fas fa-check-circle text-success me-2"></i>{{ $item->ends_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <!-- Enrolled item -->
                            <td class="text-center text-sm-start small">
                                @if($item->category_id > 0)
                                 {{ __('category.' . $item->category->slug) }}
                                @else
                                    <span class="text-muted">{{ __('category.no_category')}}</span>
                                @endif
                            </td>
                            <!-- Status item -->
                            <td>
                                @if ($item->status  == 'active')
                                    <div class="badge bg-success bg-opacity-10 text-success">{{ $item->status }}</div>
                                @elseif ( $item->status  == 'pending')
                                    <div class="badge bg-warning bg-opacity-10 text-warning">{{ $item->status }}</div>
                                @elseif ( $item->status  == 'disable')
                                    <div class="badge bg-secondary bg-opacity-10 text-secondary">{{ $item->status }}</div>
                                @endif
                            </td>
                            <!-- Price item -->
                            <td>{{ $item->crypto_price + 0 }} <span class="small"> {{ __('item.' . $item->crypto_currency) }}</span></td>
                            <!-- Action item -->
                            <td>
                                <div class="d-flex">
                                <a href="/account/item/{{ $item->id }}/edit" title="{{ __('general.edit')}}" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
                                <form action="{{route('item.destroy', $item)}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0" title="{{ __('general.delete')}}"><i class="fas fa-fw fa-times"></i></button>
                                </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        @endforelse


                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
                <!-- Course list table END -->

                <!-- Pagination START -->
                <div class="d-flex justify-content-end mt-4">
                    <!-- Content -->
                    {{  $items->appends(request()->input())->links('marketplace.item._paginationlinks') }}
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card body START -->
        </div>
        <!-- Card END -->
    </div>
@endsection

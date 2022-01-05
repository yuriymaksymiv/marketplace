@extends('landing.layouts.app')
@section('content')
    @include('landing.layouts.top-menu-light')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>


        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="items_filter text-center">
                            <div class="items_filter text-end">
                                <div>
                                    <span class="badge bg-light border shadow"><a class="text-dark" href="{{ route('item.sort', 'news') }}">{{ __('general.news_sort')}}</a></span>
                                    <span class="badge bg-light border shadow"><a class="text-dark" href="{{ route('item.sort', 'old') }}">{{ __('general.old_sort')}}</a></span>
                                    <span class="badge bg-success shadow"><a  href="{{ route('item.sort', 'active') }}">{{ __('general.active_sort')}}</a></span>
                                    <span class="badge bg-warning border shadow"><a href="{{ route('item.sort', 'pending') }}">{{ __('general.pending_sort')}}</a></span>
                                    <span class="badge bg-secondary shadow"><a  href="{{ route('item.sort', 'disable') }}">{{ __('general.disable_sort')}}</a></span>
                                </div>
                            </div>

                        </div>

                        <table class="table de-table table-rank">
                            <thead>
                            <tr>
                                <th scope="col">{{ __('general.items')}}</th>
                                <th scope="col">{{ __('general.status')}}</th>
                                <th scope="col">{{ __('general.category')}}</th>
                                <th scope="col" class="text-end">{{ __('general.price')}}</th>
                                <th scope="col" class="text-end">{{ __('general.views')}}</th>
                                <th scope="col" class="text-end">{{ __('general.ends_at')}}</th>
                                <th scope="col" class="text-end"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <th scope="row">
                                    <div class="coll_list_pp">
                                        <img class="rounded-circle lazy" src="{{ $item->image }}"  alt="">
                                    </div>
                                    {{ $item->title }}</th>
                                @if ($item->status  == 'active')
                                    <td><span class="badge bg-success">{{ __('general.active')}}</span></td>
                                @elseif ( $item->status  == 'pending')
                                    <td><span class="badge bg-warning">{{ __('general.pending_sort')}}</span></td>
                                @elseif ( $item->status  == 'disable')
                                    <td><span class="badge bg-light text-dark">{{ __('general.disable')}}</span></td>
                                @endif

                                <td><span class="badge bg-light text-dark">{{ __('category.' . $item->category->slug )}} </span></td>
                                <td class="text-end small">{{ $item->price + 0 }}</td>
                                <td class="text-end small">{{ $item->views }}</td>
                                <td class="text-end small">{{ $item->ends_at }}</td>
                                <td class="text-end d-flex justify-content-end">
                                    <a class="btn btn-sm btn-light border" href="/account/item/{{ $item->id }}/edit" title="{{ __('general.edit')}}"><i class="fa fa-edit"></i></a>
                                    <form action="{{route('item.destroy', $item)}}" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @csrf
                                        <button class="btn btn-sm btn-danger border ms-1" title="{{ __('general.delete')}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            @endforelse

                            </tbody>
                        </table>

                        <div class="spacer-double"></div>

                        <ul class="pagination justify-content-center">
                            <li class="active"><a href="#">1 - 20</a></li>
                            <li><a href="#">21 - 40</a></li>
                            <li><a href="#">41 - 60</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content close -->

@endsection

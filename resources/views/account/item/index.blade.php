@extends('layouts.app')
@section('content')
    @include('layouts.top-menu-light')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>


        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="items_filter text-center">

                            <div id="filter_by_duration" class="dropdown">
                                <a href="#" class="btn-selector">Last 7 days</a>
                                <ul>
                                    <li><span>Активні</span></li>
                                    <li class="active"><span>Last 7 days</span></li>
                                    <li><span>Last 30 days</span></li>
                                    <li><span>All time</span></li>
                                </ul>
                            </div>

                            <div id="filter_by_category" class="dropdown">
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
                        </div>

                        <table class="table de-table table-rank">
                            <thead>
                            <tr>
                                <th scope="col">Оголошення</th>
                                <th scope="col">Статус</th>
                                <th scope="col">Категорія</th>
                                <th scope="col" class="text-end">Ціна</th>
                                <th scope="col" class="text-end">Переглядів</th>
                                <th scope="col" class="text-end">Спливає</th>
                                <th scope="col" class="text-end">Ред.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <th scope="row">
                                    <div class="coll_list_pp">
                                        <img class="lazy" src="{{ $item->image }}" alt="">
                                    </div>
                                    {{ $item->title }}</th>
                                @if ($item->status  == 'active')
                                    <td><span class="badge bg-success">Active</span></td>
                                @elseif ( $item->status  == 'block')
                                    <td><span class="badge bg-light text-dark">Disable</span></td>
                                @endif

                                <td><span class="badge bg-light text-dark">{{ $item->category->slug }}</span></td>
                                <td class="text-end small">{{ $item->price + 0 }}</td>
                                <td class="text-end small">{{ $item->views }}</td>
                                <td class="text-end small">{{ $item->ends_at }}</td>
                                <td class="text-end d-flex justify-content-end">
                                    <a class="btn btn-sm btn-light border" href="/account/item/{{ $item->id }}/edit" title="Редагувати"><i class="fa fa-edit"></i></a>
                                    <form action="{{route('item.destroy', $item)}}" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @csrf
                                        <button class="btn btn-sm btn-danger border ms-1" title="Видалити">
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

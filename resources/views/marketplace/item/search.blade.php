@extends('marketplace.layouts.app')
@section('content')
    <main>
        <!-- **************** MAIN CONTENT START **************** -->
        <main>
            <!-- =======================
            Page Banner START -->
            <section class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bg-light p-4 text-center rounded-3">
                                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center container">
                                    <div class="nav-item w-100">
                                        <form class="position-relative" action="{{ route('search') }}" method="GET">
                                            <input class="form-control pe-5" type="search" name="search" placeholder="{{ __('general.search')}}" aria-label="Search">
                                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =======================
            Page Banner END -->

            <!-- =======================
            Page content START -->
            <section class="pt-0">
                <div class="container">


                    <div class="row mt-3">
                        <!-- Main content START -->
                        <div class="col-12">
                            @if (isset($items) && count($items) > 0)
                                @include('marketplace.item._item-sort')
                            @else
                                <div class="text-center pt-9">
                                    <h3>{{ __('general.no_result_found')}}</h3>
                                </div>

                            @endif
                        </div>
                        <!-- Main content END -->
                    </div><!-- Row END -->
                </div>
            </section>
            <!-- =======================
            Page content END -->
    </main>
@endsection

@extends('landing.layouts.app')
@section('content')
    @include('landing.layouts.top-menu-light')

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row fadeIn">
                    @include('landing.item._item-sort')
                </div>
            </div>
        </section>
    </div>
@endsection

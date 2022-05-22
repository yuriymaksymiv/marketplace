<!-- day 1 -->
@if ($y == null)
<div class="row g-4 mb-4">
    @error('g-recaptcha-response')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @enderror
    <!-- Box item -->
    <div class="col-sm-12 col-md-12  d-flex justify-content-center">
        @if (isset($t))
                <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
                        <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot1->day }}</h6>
                        <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
                        <h6 class="mt-0 text-center text-white">+{{ $slot1->token }}</h6>
                </div>
        @elseif (!isset($t))
            <a type="button" data-bs-toggle="modal" data-bs-target="#captcha">
                <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3 border border-green">
                    <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot1->day }}</h6>
                    <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-green" style="font-size: 20px"></i></h5>
                    <h6 class="mt-0 text-center">+{{ $slot1->token }}</h6>
                </div>
            </a>
        @endif

        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot2->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot2->token }}</h6>
        </div>


        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot3->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot3->token }}</h6>
        </div>

        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot4->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot4->token }}</h6>
        </div>

        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot5->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot5->token }}</h6>
        </div>

        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot6->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot6->token }}</h6>
        </div>
        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot7->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot7->token }}</h6>
        </div>
    </div>
</div>

<!-- day 2 -->
@elseif($y->day == 1)
<div class="row g-4 mb-4">
    @error('g-recaptcha-response')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @enderror
    <!-- Box item -->
    <div class="col-sm-12 col-md-12  d-flex justify-content-center">
        <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
            <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot1->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center text-white">+{{ $slot1->token }}</h6>
        </div>


        @if (isset($t))
            <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
                <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot2->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center text-white">+{{ $slot2->token }}</h6>
            </div>
        @elseif (!isset($t))
            <a type="button" data-bs-toggle="modal" data-bs-target="#captcha">
                <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3 border border-green">
                    <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot2->day }}</h6>
                    <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-green" style="font-size: 20px"></i></h5>
                    <h6 class="mt-0 text-center">+{{ $slot2->token }}</h6>
                </div>
            </a>
        @endif


        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot3->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot3->token }}</h6>
        </div>

        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot4->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot4->token }}</h6>
        </div>

        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot5->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot5->token }}</h6>
        </div>

        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot6->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot6->token }}</h6>
        </div>
        <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
            <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot7->day }}</h6>
            <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
            <h6 class="mt-0 text-center">+{{ $slot7->token }}</h6>
        </div>
    </div>
</div>

<!-- day 3 -->
@elseif($y->day == 2)
    <div class="row g-4 mb-4">
        @error('g-recaptcha-response')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        <!-- Box item -->
        <div class="col-sm-12 col-md-12  d-flex justify-content-center">
            <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
                <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot1->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center text-white">+{{ $slot1->token }}</h6>
            </div>

            <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
                <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot2->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center text-white">+{{ $slot2->token }}</h6>
            </div>


            @if (isset($t))
                <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
                    <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot3->day }}</h6>
                    <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
                    <h6 class="mt-0 text-center text-white">+{{ $slot3->token }}</h6>
                </div>
            @elseif (!isset($t))
                <a type="button" data-bs-toggle="modal" data-bs-target="#captcha">
                    <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3 border border-green">
                        <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot3->day }}</h6>
                        <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-green" style="font-size: 20px"></i></h5>
                        <h6 class="mt-0 text-center">+{{ $slot3->token }}</h6>
                    </div>
                </a>
            @endif


            <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
                <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot4->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center">+{{ $slot4->token }}</h6>
            </div>

            <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
                <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot5->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center">+{{ $slot5->token }}</h6>
            </div>

            <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
                <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot6->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center">+{{ $slot6->token }}</h6>
            </div>
            <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
                <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot7->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center">+{{ $slot7->token }}</h6>
            </div>
        </div>
    </div>

<!-- day 4 -->
@elseif($y->day >= 3)
    <div class="row g-4 mb-4">
        @error('g-recaptcha-response')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        <!-- Box item -->
        <div class="col-sm-12 col-md-12  d-flex justify-content-center">
            <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
                <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot1->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center text-white">+{{ $slot1->token }}</h6>
            </div>

            <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
                <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot2->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center text-white">+{{ $slot2->token }}</h6>
            </div>

            <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
                <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot3->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center text-white">+{{ $slot3->token }}</h6>
            </div>


            @if (isset($t))
                <div class="col-1 h-100px w-100px p-3 ms-1 me-1 rounded-3" style="background-color: #8DC252">
                    <h6 class="text-center text-white" style="font-size: 11px">Day {{ $slot4->day }}</h6>
                    <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-white" style="font-size: 20px"></i></h5>
                    <h6 class="mt-0 text-center text-white">+{{ $slot4->token }}</h6>
                </div>
            @elseif (!isset($t))
                <a type="button" data-bs-toggle="modal" data-bs-target="#captcha">
                    <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3 border border-green">
                        <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot4->day }}</h6>
                        <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-green" style="font-size: 20px"></i></h5>
                        <h6 class="mt-0 text-center">+{{ $slot4->token }}</h6>
                    </div>
                </a>
            @endif

            <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
                <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot5->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center">+{{ $slot5->token }}</h6>
            </div>

            <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
                <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot6->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center">+{{ $slot6->token }}</h6>
            </div>
            <div class="col-1 bg-secondary bg-opacity-10 h-100px w-100px p-3 ms-1 me-1 rounded-3">
                <h6 class="text-center text-secondary" style="font-size: 11px">Day {{ $slot7->day }}</h6>
                <h5 class="mt-1 mb-1 text-center"><i class="bi bi-coin text-primary" style="font-size: 20px"></i></h5>
                <h6 class="mt-0 text-center">+{{ $slot7->token }}</h6>
            </div>
        </div>
    </div>
@endif


<!-- Modal -->
<div class="modal fade" id="captcha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('airdrop.dailyReward') }}" method="post">
                @csrf
                @method('patch')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                        <div> {!! htmlFormSnippet() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block small text-danger">{{ $errors->first('g-recaptcha-response') }}
                                        </span>
                            @endif
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Отримати</button>
                </div>
            </form>
        </div>
    </div>
</div>

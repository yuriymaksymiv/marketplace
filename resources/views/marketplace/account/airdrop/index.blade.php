@extends('marketplace.layouts.account_app')
@section('content')
    <div class="col-xl-9">
        @include('marketplace.account.airdrop._daily_rewards')

        <div class="row g-4 mb-4">
            <!-- Box item -->
            <div class="col-sm-6 col-md-4">
                <div class="bg-primary bg-opacity-10 h-100 p-3 rounded-3">
                    <h6 class="mb-0">Token Sale (Balance)</h6>
                    <h2 class="mb-2 mt-2">0 <span class="h6">INS</span></h2>
                </div>
            </div>

            <!-- Box item -->
            <div class="col-sm-6 col-md-4">
                <div class="border p-3 rounded-3 h-100">
                    <div class="d-flex mb-1 justify-content-between align-items-center">
                        <h6 class="mb-0">Airdrop Balance</h6>
                        <span class="badge bg-success bg-opacity-100 ms-0 mb-0">Доступно {{$total_sum}} INS</span>
                    </div>
                    <h2 class="mb-2 mt-2">{{ $pending_sum }} <span class="h6">INS</span></h2>

                </div>
            </div>
            <!-- Box item -->
            <div class="col-sm-6 col-md-4">
                <div class="border p-3 rounded-3 h-100">
                    <div class="d-flex mb-1 justify-content-between align-items-center">
                        <h6 class="mb-0">Reffelar Code</h6>

                    </div>
                    <div class="d-flex">
                        <div class="col-6">
                            <h2 class="mb-2 mt-2">{{ $account->id }}</h2>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 small" style="font-size: 11px"><i class="bi bi-telegram text-secondary me-1"></i>{{ $airdrop_data->telegram }}</p>
                            <p class="mb-0 small" style="font-size: 11px"><i class="bi bi-twitter text-secondary me-1"></i>{{ $airdrop_data->twitter }}</p>
                            <a role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="mb-1 small text-truncate text-secondary" style="font-size: 11px">{{ $airdrop_data->bep_20 }}</p>
                            </a>
                            <ul class="dropdown-menu dropdown-w-sm  min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                <li>
                                    <p class="mb-1 small text-truncate" style="font-size: 11px">{{ $airdrop_data->bep_20 }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="card card-body bg-transparent border rounded-3 mt-3">

            <!-- Course list table START -->
            <div class="table-responsive-lg border-0">
                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                    <!-- Table head -->
                    <thead>
                    <tr>
                        <th scope="col" class="border-0 rounded-start ps-4">History</th>
                        <th scope="col" class="border-0">Date Payment</th>
                        <th scope="col" class="border-0 text-center">Status</th>
                        <th scope="col" class="border-0 text-end">Amount</th>
                        <th scope="col" class="border-0 rounded-end text-end pe-5">Action</th>
                    </tr>
                    </thead>

                    <!-- Table body START -->
                    <tbody>
                    @forelse ($tokens as $token)
                    <!-- Table item -->
                    <tr>
                        <!-- Course item -->
                        <td>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-70px text-center">
                                    @if ( $token->type == 'register')
                                        <i class="bi bi-coin text-primary me-2" style="font-size: 32px"></i>
                                    @elseif($token->type == 'invate')
                                        <i class="bi bi-person-plus text-primary me-2" style="font-size: 32px"></i>
                                    @elseif ( $token->type == 'other')
                                        <i class="bi bi-person-plus text-primary me-2" style="font-size: 32px"></i>
                                    @endif
                                </div>
                                <div class="mb-0 ms-2">
                                    <!-- Title -->
                                    <h6>{{ __('airdrop.'.$token->type) }}</h6>
                                    <!-- Info -->
                                    <div class="d-sm-flex">
                                        <p class="h6 fw-light mb-0 small me-3 text-secondary"><i class="bi bi-calendar2 text-secondary me-2"></i>{{ $token->order_date }}</p>
                                        @if ($token->type == 'register_ref')<p class="h6 fw-light mb-0 small me-3 text-secondary"><i class="bi bi-person-plus text-secondary me-1"></i> {{ $token->note }}</p>@endif
                                    </div>
                                </div>
                            </div>
                        </td>

                        @if ($token->payment_date >= $date_now)
                            <td><p class="h6 fw-light mb-0 small"><i class="bi bi-calendar2-check text-primary me-2"></i>{{ $token->payment_date }}</p></td>
                        @else
                            <td><p class="h6 fw-light mb-0 small"><i class="bi bi-calendar2-check text-primary me-2"></i>TGE</p></td>
                        @endif

                        <td class="text-center">
                            <div class="badge bg-warning bg-opacity-15 text-warning">{{ $token->status }}</div>
                        </td>
                        <!-- Price item -->
                        <td class="text-end">{{ $token->amount }}</td>
                        <!-- Action item -->
                        <td class="text-end">
                            <a href="" class="btn btn-sm btn-secondary-soft me-1 mb-0 disabled"><i class="bi bi-arrow-down-square me-2"></i>GET INS</a>
                        </td>
                    </tr>
                    @empty
                    @endforelse




                    </tbody>
                    <!-- Table body END -->
                </table>
            </div>
            <!-- Course list table END -->
        </div>
    </div>

@endsection

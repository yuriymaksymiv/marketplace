@extends('marketplace.layouts.account_app')
@section('content')
    <div class="col-xl-9">
      <div class="card card-body shadow">
          <form class="form-horizontal" action="{{route('airdrop.startUpdate')}}" method="post">
              @csrf
              @method('Patch')
                <!-- Alert -->
                <div class="alert alert-warning alert-dismissible d-flex justify-content-between align-items-center fade show py-3 pe-2" role="alert">
                    <div>
                        <span class="fs-5 me-1">🔥</span>
                        These courses are at a limited discount, please checkout within<strong class="text-danger ms-1">2 days and 18 hours</strong>
                    </div>
                    <button type="button" class="btn btn-link mb-0 text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg text-dark"></i></button>
                </div>



                <div class="table-responsive border-0 rounded-3">
                    <!-- Table START -->
                    <table class="table align-middle p-4 mb-0">
                        <!-- Table head -->
                        <!-- Table body START -->
                        <tbody class="border-top-0">

                        </tbody>
                    </table>
                </div>

                <!-- Coupon input and button -->
                <div class="row g-3 mt-2">
                    <div class="col-8 container">
                        <label class="form-label"><b>Metamask Address (BEP-20)</b><span class="text-danger"> *</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="bep_20" placeholder="BEP-20" required>
                        </div>
                        <div class="form-text">Зміна BEP-20 після реєстрації не неможлива!</div>
                    </div>
                </div>
                <!-- Coupon input and button -->
                <div class="row g-3 mt-2">
                    <div class="col-8 container">
                        <label class="form-label"><b>Підпішіться на Telegram канал и чат INSPIGA</b><span class="text-danger"> *</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="telegram" placeholder="Telegram" required>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-8 container pb-3">
                        <label class="form-label"><b>Підпішіться на Twitter INSPIGA</b><span class="text-danger"> *</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="twitter" placeholder="Twitter" required>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="d-grid d-flex justify-content-center">
                    <input class="btn btn-lg btn-primary"  type="submit" value="{{ __('Отримати 50 INS') }}"></input>
                </div>
          </form>
    </div>
    </div>
@endsection

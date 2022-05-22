@extends('doc.layouts.app')
@section('content')
    <!-- =======================
Popular course START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-0 mt-3">
                <div class="col-lg-12 mx-auto text-center">
                    <h2 class="fs-1">Token Sale</h2>
                    <h6 class="mt-4">Щоб купити INS Token на першій стадії продаж Privat Sale, звяжіться з нами одним зі способів:</h6>
                    <div class="d-flex justify-content-center mt-3 mb-5">
                            <h6 class="text-telegram">
                                <i class="bi bi-telegram"></i>
                                <a href="https://t.me/inspiga_support" target="_blank" rel="nofollow" class="text-telegram ms-1 me-5">Telegram (@inspiga_support)</a>
                            </h6>
                        <h6 class="text-twitter">
                            <i class="bi bi-twitter"></i>
                            <a href="https://twitter.com/inspiga_token" target="_blank" rel="nofollow" class="text-twitter ms-1 me-5">Twitter (@inspiga_token)</a>
                        </h6>
                    </div>

                    <p>Масимальна кількість токенів яку планується реалізовати на Privet Sale, еквівалентна сумі $200 000.</p>

                    <h6>Зібрана сума інвестицій буде розприділена:</h6>
                    <li>$50 000 – робота над проектом, впровадження новго функціналу</li>
                    <li>$150 000 – маркетинг з просування проекту та підготовка до Pre-IDO Sale</li>

                </div>
            </div>

        </div>
    </section>

    <section class="pt-2">
        <div class="container">
            <!-- Table START -->
            <div class="row mb-5">
                <div class="col-lg-12 mx-auto">
                    <!-- Title -->
                    <h4 class="text-center pb-4">Token Sale Details</h4>
                    <div class="bg-light p-3 rounded-3">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center text-md-start">
                                <h5 class="mb-2 mb-md-0"></h5>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-4 text-center ps-2">
                                        <h6 class="mb-0">Privat Sale</h6>
                                        <small><span class="badge bg-success bg-opacity-10 text-success">Active</span></small>
                                    </div>
                                    <div class="col-4 text-center py-2">
                                        <h6 class="mb-0 text-secondary">Pre-Sale</h6>
                                    </div>
                                    <div class="col-4 text-center py-2">
                                        <h6 class="mb-0 text-secondary">IDO</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table item -->
                    <div class="row align-items-center ps-3">
                        <div class="col-md-4 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Price</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-8 pt-3 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p class="text-dark">$0,05</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p>$0,10</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p><i class="fas fa-spinner"></i></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center ps-3">
                        <div class="col-md-4 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Max Sale</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-8 pt-3 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p class="text-dark">$200 000</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p>$500 000</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p>$2 000 000</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center ps-3">
                        <div class="col-md-4 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Lockup days</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-8 pt-3 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p class="text-dark">0</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p>Так</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p>Так</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center ps-3">
                        <div class="col-md-4 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Start Date</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-8 pt-3 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p class="text-dark">12.02.2022</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p><i class="fas fa-spinner"></i></p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p><i class="fas fa-spinner"></i></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->



                    <!-- Table item -->
                    <div class="row align-items-center ps-3">
                        <div class="col-md-4 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Minimum Contribution</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-8 pt-3 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p class="text-dark">$50</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p>$100</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p>$100</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center ps-3">
                        <div class="col-md-4 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Maximum Contribution</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-8 pt-3 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p class="text-dark">$5 000</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p>$5 000</p>
                                </div>
                                <!-- Check -->
                                <div class="col-4 pt-3 d-flex justify-content-center">
                                    <p>$500</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->
                </div>
            </div>
            <!-- Table END -->

        </div>
    </section>
@endsection

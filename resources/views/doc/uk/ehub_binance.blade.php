@extends('doc.layouts.app')
@section('content')
    <!-- =======================
Popular course START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-12 mx-auto text-center">
                    <h2 class="fs-1">Як зареєструватись на Binance</h2>
                    <p class="mb-0 mt-4">Біржа Binance являється сьогодні однією за найпапулярніших бірж у світі.</p>
                    <p class="mb-0">Розглянемо два способи реєстрації на біржі. Перший – через веб інтерфейс з допомогою браузера. Другий –
                    встановлення мобільного додатку на смартфон.</p>
                </div>
            </div>

            <!-- Tabs START -->
            <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3" id="course-pills-tab" role="tablist">
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5">
                    <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-1" type="button" role="tab" aria-controls="course-pills-tabs-1" aria-selected="false">Браузер</button>
                </li>
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5">
                    <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-2" type="button" role="tab" aria-controls="course-pills-tabs-2"	aria-selected="false">Мобільний додаток</button>
                </li>
            </ul>
            <!-- Tabs END -->

            <!-- Tabs content START -->
            <div class="tab-content mt-5" id="course-pills-tabContent">
                <!-- Content START -->
                <div class="tab-pane fade show active" id="course-pills-tabs-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                    <div class="row g-4">

                    <h3>Реєстрація на Binance за допомогою електронної пошти</h3>
                        <p>1. Перейдіть на <a href="https://accounts.binance.me/ru/register?ref=D4LZP2S0"><strong>Binance.com</strong></a> та натисніть <strong>"Реєстрація"</strong>.</p>
                        <div class="">
                            <img src="/images/misc/docs/binance-1.png" style="width: 800px" class="shadow">
                        </div>
                        <p>2. На сторінці реєстрації виберіть <strong>"Створити персональний акаунт"</strong>, у формі що появиться введіть свої дані, після чого нажміть кнопку <strong>"Далі"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-2ua.png" class="shadow">
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-3ua.png" class="shadow">
                            </div>
                        </div>
                        <p>3. Для підтвердження електронної пошти нажимаємо кнопку <strong>"Отримати код"</strong>. Надісланий на електронну пошту код вводимо в дане поле та нажимаємо кнопку <strong>"Підтвердити"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-4ua.png" class="shadow">
                            </div>
                        </div>
                        <p>4. Повторяємо це ж саме для номеру телефону. Вводимо номер телефону в форму. У наступному вікні нажимаємо кнопку <strong>"Отримати код"</strong> та вводимо отриманий код. Нажимаємо <strong>"Підтвердити"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-5ua.png" class="shadow">
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-6ua.png" class="shadow">
                            </div>
                        </div>

                        <p>5. <strong>Вітаємо! Ви успішно зареєструвались на Binance.</strong></p>

                    </div> <!-- Row END -->
                </div>
                <!-- Content END -->

                <!-- Content START -->
                <div class="tab-pane fade" id="course-pills-tabs-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                    <div class="row g-4">
                        <h3>Реєстрація на Binance за допомогою смартфону</h3>
                        <p>1. Завантажте та встановіть додаток Binance з App Store або Google Play</p>
                        <div class="d-flex mt-1">
                            <div>
                                <a href="https://apps.apple.com/hk/app/binance/id1436799971?l=en" rel="nofollow" target="_blank"><img src="/images/misc/app-store.jpg" width="120" class="pe-3"></a>
                            </div>
                            <div>
                                <a href="https://play.google.com/store/apps/details?id=com.binance.dev" rel="nofollow" target="_blank"><img src="/images/misc/google-play.jpg" width="120" class="pe-3"></a>
                            </div>
                        </div>
                        <p>2. Нажимаємо кнопку <strong>"Вхід / Реєстрація"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-1m-en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>3. У правому верхньому куті нажимаємо кнопку <strong>"Реєстрація"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-2m-en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>4. Вводимо свої дані, нажимаємо <strong>"->"</strong> і проходимо каптчу.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-3m-en.jpg" class="shadow">
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-4m-en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>5. Нажимаємо кнопку <strong>"Отримати код"</strong>. Надісланий на електронну пошту код вводимо в дане поле та нажимаємо кнопку <strong>"Підтвердити"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-5m-en.jpg" class="shadow">
                            </div>
                        </div>

                        <p>5. <strong>Вітаємо! Ви успішно зареєструвались на Binance.</strong></p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-6m-en.jpg" class="shadow">
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Content END -->

            </div>
            <!-- Tabs content END -->
        </div>
    </section>
    <!-- =======================
    Popular course END -->
@endsection

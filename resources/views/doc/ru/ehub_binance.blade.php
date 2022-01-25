@extends('doc.layouts.app')
@section('content')
    <!-- =======================
Popular course START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-12 mx-auto text-center">
                    <h2 class="fs-1">Как зарегистрироваться на Binance</h2>
                    <p class="mb-0 mt-4">Биржа Binance является сегодня одной из самых популярных бирж в мире.</p>
                    <p class="mb-0">Рассмотрим два метода регистрации на бирже. Первый – через веб-интерфейс с помощью браузера. Второй –
                        установка мобильного приложения на смартфон.</p>
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
                    <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-2" type="button" role="tab" aria-controls="course-pills-tabs-2"	aria-selected="false">Мобильное приложение</button>
                </li>
            </ul>
            <!-- Tabs END -->

            <!-- Tabs content START -->
            <div class="tab-content mt-5" id="course-pills-tabContent">
                <!-- Content START -->
                <div class="tab-pane fade show active" id="course-pills-tabs-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                    <div class="row g-4">

                    <h3>Регистрация на Binance с помощью электронной почты</h3>
                        <p>1. Перейдите на <a href="https://accounts.binance.me/ru/register?ref=D4LZP2S0"><strong>Binance.com</strong></a> и нажмите <strong>"Регистрация"</strong>.</p>
                        <div class="">
                            <img src="/images/misc/docs/binance-1ru.jpg" style="width: 800px" class="shadow">
                        </div>
                        <p>2. На странице регистрации выберите <strong>"Создать персональный аккаунт"</strong>, в появившейся форме введите свои данные, после чего нажмите кнопку <strong>"Далее"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-2ru.jpg" class="shadow">
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-3ru.jpg" class="shadow">
                            </div>
                        </div>
                        <p>3. Для подтверждения электронной почты нажимаем кнопку <strong>"Получить код"</strong>. Присланный на электронную почту код вводим в данное поле и нажимаем кнопку <strong>"Отправить"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-4ru.jpg" class="shadow">
                            </div>
                        </div>
                        <p>4. Повторяем для номера телефона. Вводим номер телефона в форму. В следующем окне нажимаем кнопку <strong>"Получить код"</strong> и вводим полученный код. Нажимаем <strong>"Подтвердить"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-5ru.jpg" class="shadow">
                            </div>
                        </div>

                        <p><strong>5. Поздравляем! Вы успешно зарегистрировались на Binance.</strong></p>

                    </div> <!-- Row END -->
                </div>
                <!-- Content END -->

                <!-- Content START -->
                <div class="tab-pane fade" id="course-pills-tabs-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                    <div class="row g-4">
                        <h3>Регистрация на Binance с помощью смартфона</h3>
                        <p>1. Загрузите и установите приложение Binance из App Store или Google Play</p>
                        <div class="d-flex mt-1">
                            <div>
                                <a href="https://apps.apple.com/hk/app/binance/id1436799971?l=en" rel="nofollow" target="_blank"><img src="/images/misc/app-store.jpg" width="120" class="pe-3"></a>
                            </div>
                            <div>
                                <a href="https://play.google.com/store/apps/details?id=com.binance.dev" rel="nofollow" target="_blank"><img src="/images/misc/google-play.jpg" width="120" class="pe-3"></a>
                            </div>
                        </div>
                        <p>2. Нажимаем кнопку <strong>"Вход / Регистрация"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-1m-en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>3. В правом верхнем углу нажимаем кнопку <strong>"Регистрация"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-2m-en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>4. Вводим свои данные, нажимаем <strong>"->"</strong> и проходим каптчу.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-3m-en.jpg" class="shadow">
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-4m-en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>5. Нажимаем кнопку "Получить код". Отправленный на электронную почту код вводим в данное поле и нажимаем кнопку "Подтвердить".</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-5m-en.jpg" class="shadow">
                            </div>
                        </div>

                        <p><strong>5. Поздравляем! Вы успешно зарегистрировались на Binance.</strong></p>
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

@extends('doc.layouts.app')
@section('content')
                <!-- Page title -->
                <div class="my-5">
                    <h1>Огляд проекту</h1>
                    <p class="mt-4">Inspiga Marketplace - це міжнародна крипто площатка для продажу товарів і послуг за криптовалюту, на якій кожен бажаючий зможе розмісти свої оголошення.</p>
                    <p class="">Завдяки Inspiga Marketplace тримачі криптовалюти швидко зможуть знайти товари і послуги які можуть купити за криптовалюту у своєму місті чи країні. А власники бізнесу відкриють для себе новий ринок та нових клієнтів.</p>

                    <ul class="mt-5 list-unstyled">
                        <li class="mb-4">
                            <h6>01. Хто може розміщати оголошення на Inspiga Marketplace?</h6>
                            <p>Публікувати оголошення на маркетплейсі зможе кожен, хто готовий продавати товари і послуги за криптовалюту.</p>

                            <div class="alert alert-warning" role="alert">
                                В момент на період тестування платформи, щоб знизити рівень шахрайства з сторони недобросовісних магазинів, тимчасово публікації дозволені лише перевіреним магазинам.
                            </div>
                        </li>
                        <li class="mb-4">
                            <h6>02. Яка вартість за розміщення оголошення?</h6>
                            <p>Публікація однієї позиції на маркетплейті коштуватиме <strong class="text-dark">1 INS </strong>  на місяць </p>
                        </li>


                    </ul>


                </div>
                @include('doc.layouts.social_media')
@endsection

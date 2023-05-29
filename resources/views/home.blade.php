@extends('layouts.app')

@section('content')
    <section class="text-center py-5 bg-dark">
        <h1 class="text-light">HOMEPAGE</h1>
    </section>
    <section class="banner text-uppercase">
        <div class="container">
            <ul class="d-flex justify-content-around py-4 px-0 m-0">
                <li class="d-flex">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <h3 class="ms-2 mb-0 align-self-center">digital comics</h3>
                </li>
                <li class="d-flex">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <h3 class="ms-2 mb-0 align-self-center">dc merchandise</h3>
                </li>
                <li class="d-flex">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <h3 class="ms-2 mb-0 align-self-center">subscription</h3>
                </li>
                <li class="d-flex">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <h3 class="ms-2 mb-0 align-self-center">comic shop location</h3>
                </li>
                <li class="d-flex">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <h3 class="ms-2 mb-0 align-self-center">dc power visa</h3>
                </li>
            </ul>
        </div>
    </section>
    <!-- /banner -->
    </main>
@endsection

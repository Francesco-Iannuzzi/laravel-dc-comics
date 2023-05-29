@extends('layouts.app')

@section('content')
    <section class="comics">
        <div class="container">
            <div class="badge_current_comics">
                <button class="btn text-uppercase rounded-0 border-0">current series</button>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row row-cols-md-3 row-cols-lg-6 row-cols-xl-6 py-5 text-center">
                @foreach ($comics as $comic)
                    <div class="col my-5">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            </div>
                            <!-- /card-img-top -->
                            <div class="card-body px-0">
                                <h4 class="card-text text-uppercase">
                                    {{ $comic->series }}
                                </h4>
                            </div>
                            <!-- /card-body -->
                        </div>
                        <!-- /card -->
                    </div>
                    <!-- /col -->
                @endforeach
            </div>
            <!-- /row cards -->
            <div class="badge_load_more d-flex justify-content-center pb-3">
                <button class="btn text-uppercase rounded-0 border-0">load more</button>
            </div>
            <!-- /badge_load_more -->
        </div>
    </section>
    <!-- /comics -->
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

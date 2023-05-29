@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-3">Admin Show Once</h1>

        <div class="d-flex flex-row">

            <div>
                <img src="{{ $comic->thumb }}" class="card-img-top" style="width: 18rem;" alt="{{ $comic->series }}">
            </div>

            <div class="d-flex flex-column gap-2 h-100 ms-4">
                <h5 class="card-title">{{ $comic->series }}</h5>
                <span><strong>Title: </strong><br>{{ $comic->title }}</span>
                <span><strong>Type: </strong><br>{{ $comic->type }}</span>
                <span><strong>Price: </strong><br>{{ $comic->price }}</span>
                <span><strong>Date: </strong><br>{{ $comic->sale_date }}</span>
                <p class="card-text"><strong>Description: </strong><br>{{ $comic->description }}</p>
            </div>

        </div>

    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-3">Admin Show Once</h1>


        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->series }}">
            <div class="card-body d-flex flex-column gap-4">
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

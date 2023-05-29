@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-3">Admin Create</h1>

        <form action="{{ route['comics.store'] }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Add Title Comic"
                    aria-describedby="helpId">
                <small id="helpTitle" class="text-muted">Type Comic's title Here</small>
            </div>
        </form>
    </div>
@endsection

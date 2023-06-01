@extends('layouts.app')

@section('content')
    <div class="container py-5">

        @include('partials.validation_error')

        <h1 class="mb-3">Admin Create</h1>

        <form action="{{ route('admin.comics.store') }}" method="post">
            @csrf

            <div class="mb-3">

                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Add Title Comic" aria-describedby="helpId" value="{{ old('title') }}">
                <small id="helpTitle" class="text-muted">Type Comic's title Here</small>

                @error('title')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong> {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series"
                    class="form-control @error('series')is-invalid @enderror" placeholder="Add Series Comic"
                    aria-describedby="helpId" value="{{ old('series') }}">
                <small id="helpSeries" class="text-muted">Type Comic's Series Here</small>

                @error('series')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong> {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                    placeholder="Add Type Comic" aria-describedby="helpId" value="{{ old('type') }}">
                <small id="helpType" class="text-muted">Type Comic's Type Here</small>

                @error('type')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong> {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="thumb" class="form-label">Cover</label>
                <input type="text" name="thumb" id="thumb"
                    class="form-control @error('thumb') is-invalid @enderror" placeholder="Add Cover Comic"
                    aria-describedby="helpId" value="{{ old('thumb') }}">
                <small id="helpThumb" class="text-muted">Type Comic's Cover Here</small>

                @error('thumb')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong> {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror" placeholder="Add Price Comic"
                    aria-describedby="helpId" value="{{ old('price') }}">
                <small id="helpPrice" class="text-muted">Type Comic's Price Here</small>

                @error('price')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong> {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="sale_date" class="form-label">Sales Date</label>
                <input type="date" name="sale_date" id="sale_date"
                    class="form-control  @error('sale_date') is-invalid @enderror" placeholder="Add Title Comic"
                    aria-describedby="helpId" value="{{ old('sale_date') }}">
                <small id="helpSaleDate" class="text-muted">Type Comic's Sales Date Here</small>

                @error('sale_date')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong> {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="6"> {{ old('description') }}</textarea>
                <small id="helpDescrition" class="text-muted">Type Comic's description Here</small>

                @error('description')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong> {{ $message }}
                    </div>
                @enderror

            </div>

            <button type="submit" class="btn btn-warning w-100 mt-4 py-2 px-4">Add</button>

        </form>
    </div>
@endsection

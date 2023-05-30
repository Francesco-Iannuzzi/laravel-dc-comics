@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-3">Admin Edit Comic</h1>

        <form action="{{ route('admin.comics.update', $comic->id) }}" method="post">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}"
                    aria-describedby="helpId" required>
                <small id="helpTitle" class="text-muted">Type Comic's title Here</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" value="{{ $comic->series }}"
                    aria-describedby="helpId" required>
                <small id="helpSeries" class="text-muted">Type Comic's Series Here</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ $comic->type }}"
                    aria-describedby="helpId" required>
                <small id="helpType" class="text-muted">Type Comic's Type Here</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Cover</label>
                <input type="text" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}"
                    aria-describedby="helpId" required>
                <small id="helpThumb" class="text-muted">Type Comic's Cover Here</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $comic->price }}"
                    aria-describedby="helpId" required>
                <small id="helpPrice" class="text-muted">Type Comic's Price Here</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sales Date</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control" value="{{ $comic->sale_date }}"
                    aria-describedby="helpId" required>
                <small id="helpSaleDate" class="text-muted">Type Comic's Sales Date Here</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6" required>{{ $comic->description }}</textarea>
                <small id="helpDescrition" class="text-muted">Type Comic's description Here</small>
            </div>

            <button type="submit" class="btn btn-warning py-2 px-4">EDIT</button>

        </form>
    </div>
@endsection

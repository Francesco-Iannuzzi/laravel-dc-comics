@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-3">Admin Create</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Add Title Comic"
                    aria-describedby="helpId" required>
                <small id="helpTitle" class="text-muted">Type Comic's title Here</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Add Series Comic"
                    aria-describedby="helpId" required>
                <small id="helpSeries" class="text-muted">Type Comic's Series Here</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Add Type Comic"
                    aria-describedby="helpId" required>
                <small id="helpType" class="text-muted">Type Comic's Type Here</small>
            </div>

            <div class="mb-3">
                <label for="cover" class="form-label">Cover</label>
                <input type="text" name="cover" id="cover" class="form-control" placeholder="Add Cover Comic"
                    aria-describedby="helpId" required>
                <small id="helpCover" class="text-muted">Type Comic's Cover Here</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Add Price Comic"
                    aria-describedby="helpId" required>
                <small id="helpPrice" class="text-muted">Type Comic's Price Here</small>
            </div>

            <div class="mb-3">
                <label for="sales_date" class="form-label">Sales Date</label>
                <input type="date" name="sales_date" id="sales_date" class="form-control" placeholder="Add Title Comic"
                    aria-describedby="helpId" required>
                <small id="helpSalesDate" class="text-muted">Type Comic's Sales Date Here</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6" required></textarea>
                <small id="helpDescrition" class="text-muted">Type Comic's description Here</small>
            </div>

            <button type="submit" class="btn btn-warning py-2 px-4">Add</button>

        </form>
    </div>
@endsection

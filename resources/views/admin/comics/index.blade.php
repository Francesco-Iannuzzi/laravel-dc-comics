@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between">
            <h1 class="mb-3">Admin Controller</h1>
            <a href="{{ route('admin.comics.create') }}" class="btn btn-dark align-self-center">
                <i class="fa-solid fa-plus px-3"> New Comic</i>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Series</th>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Date Sales</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td scope="row">
                                <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}" height="70">
                            </td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>
                                <a href="{{ route('admin.comics.show', $comic->id) }}"
                                    class="text-decoration-none text-dark">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="#" class="text-decoration-none text-dark">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="text-decoration-none text-dark">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

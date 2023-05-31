@extends('layouts.app')

@section('content')
    <div class="container py-5">
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

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
                    @forelse ($comics as $comic)
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
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.comics.show', $comic->id) }}" class="btn btn-warning">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.comics.edit', $comic->id) }}" class="btn btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal-{{ $comic->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitle-{{ $comic->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">Delete
                                                        Comic</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete
                                                    <strong>{{ $comic->title }}</strong>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <form action="{{ route('admin.comics.destroy', $comic->id) }}"
                                                        method="post">
                                                        @csrf

                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td scope="row">Not Comics yet</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection

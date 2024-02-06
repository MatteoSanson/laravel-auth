@extends('layouts.admin')

@section('content')
    <div class="my-3">
        <h1>Add a project</h1>
        <a href="{{ route('admin.projects.index') }}">Back to your projects list</a>
    </div>
    <div>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                {{-- <label class="form-label">Visibility</label>
                <input type="text" class="form-control" name="type"> --}}
                <select class="form-select" aria-label="Default select example">
                    {{-- <option selected>Open this select menu</option> --}}
                    <option value="1">Public</option>
                    <option value="2">Private</option>
                </select>
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    @if (session('message'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Notifica</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    @endif

    <div class="my-3">
        <h1>{{ $project->title }}</h1>
    </div>
    <div class="card">
        <div class="card-header">
            <p>{{ $project->visibility }} project</p>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $project->type }}</p>
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary btn-sm">Edit</a>
        </div>
    </div>
@endsection

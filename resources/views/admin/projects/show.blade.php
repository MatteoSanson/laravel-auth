@extends('layouts.admin')

@section('content')
    <div class="my-3">
        <h1>{{ $project->title }}</h1>
        <a href="{{ route('admin.projects.index') }}">Back to your projects</a>
    </div>
    <div class="card">
        <div class="card-header">
            <p>{{ $project->visibility }} project</p>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $project->type }}</p>
            <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
    </div>
@endsection

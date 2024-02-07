@extends('layouts.admin')

@section('content')
    {{-- <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul> --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Visibility</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->type }}</td>
                    <td>{{ $project->visibility }}</td>
                    <td><a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary btn-sm">details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

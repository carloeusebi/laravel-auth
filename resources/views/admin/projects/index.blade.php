@extends('layouts.app')

@section('content')
    <header>
        <h1>Projects Manager</h1>
        <hr>
    </header>

    <div class="d-flex justify-content-end ">
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary ">Create a new Project</a>
    </div>

    <section id="projects" class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->name }}</td>
                        <td>{{ substr($project->description, 0, 20) }}...</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->updated_at }}</td>
                        <td>todo</td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </section>
@endsection

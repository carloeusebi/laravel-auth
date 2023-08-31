@extends('layouts.app')

@section('content')
    <header>
        <h1>Projects Manager</h1>
        <hr>
    </header>

    <div class="d-flex justify-content-end ">
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary ">Create a new Project</a>
    </div>
@endsection

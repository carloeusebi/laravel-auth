@extends('layouts.app')

@section('content')
    <header class="d-flex justify-content-between align-items-center ">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Go Back</a>
        <h1>Create a new project</h1>
    </header>

    <hr class="my-3">

    <div>
        <x-admin.projects.form :project="$project" method="POST" action="admin.projects.store" />
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <x-admin.projects.header :title="$project->name" has-back-button />
@endsection

@extends('layouts.app')

@section('content')
<div class="w-full mx-auto">
    <h1 class="text-2xl mb-6 py-3 font-bold text-center text-default">Create a New Project</h1>
    <form method="POST" action="/projects" class="shadow-md rounded px-8 pt-6 pb-8 mb-4 mx-auto w-1/2 bg-card">
        @include('projects.form', [
            'project' => new App\Project,
            'buttonText' => 'Create Project'
        ])
    </form>
</div>
@endsection

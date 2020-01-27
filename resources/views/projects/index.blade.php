@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full items-end">
            <h2 class="text-default text-sm font-normal">My Projects</h2>

            <button class="button" @click="$modal.show('new-project')">New Project</button>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                @include('projects.card')
            </div>
        @empty
            <div>No projects yet</div>
        @endforelse
    </main>

    <new-project-modal></new-project-modal>
@endsection

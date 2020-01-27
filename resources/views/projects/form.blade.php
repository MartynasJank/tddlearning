@csrf
<div class="mb-4">
    <label class="block text-sm font-bold mb-2" for="title">Title</label>
    <input
        type="text"
        class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-black"
        name="title"
        placeholder="Title"
        required
        value="{{ $project->title }}">
</div>
<div class="mb-6">
    <label class="block text-sm font-bold mb-2" for="description">Description</label>
    <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline text-black"
        name="description"
        placeholder="Description"
        required
        style="min-height: 100px">{{ $project->description }}</textarea>
</div>
<div class="flex items-center justify-between">
    <button type="submit" class="button is-link">{{ $buttonText }}</button>
    <a href="{{ $project->path() }}">Cancel</a>
</div>

@if ($errors->all())
    <div class="field mt-6">
        @foreach($errors->all() as $error)
            <li class="text-sm text-red-500">{{ $error }}</li>
        @endforeach
    </div>
@endif

<div class="card flex flex-col mt-3">
    <h3 class="text-xl font-normal py-4 -ml-5 border-l-4 border-blue-300 pl-4 pl-4">
        Invite a User
    </h3>
    <form method="POST" action="{{ $project->path() . '/invitations' }}">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="border border-gay-500 rounded w-full py-2 px-3 text-black" placeholder="Email andress">
        </div>
        <button type="submit" class="button">Invite</button>
    </form>
    @include('errors', ['bag' => 'invitations'])
</div>

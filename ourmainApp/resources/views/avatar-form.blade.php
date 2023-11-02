<x-layout>
    <div class="container container--narrow py-md-5">
        <h2 class="text-center mb3">Upload a new Avatar</h2>
        <form action="/manage-avatar" method="POST">
            @csrf
            <div class="mb-3">
                <input type="file" name="avatar" required>
                @error('avatar')
                <p class="alert small alert-danger shadow-sm">{{$message}}</p>
            </div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</x-layout>

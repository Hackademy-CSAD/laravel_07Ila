<x-layout>
    @if (session('success'))
        {{ session('success') }}
    @endif




    <form method="POST" action="{{ route('animals.store') }}"">

        @csfr
        <div class="mb-">
            <label for="name" class="form-label">Name</label>
            <input type="email" class="form-control" id="name" name="age">
            @error('age')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="number" class="form-label">Age</label>
            <input type="file" class="form-control" id="number" name="img">
            @error('img')
                {{ $message }}
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>

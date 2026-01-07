@extends('layouts.main')

@section('content')
    <h1 class='text-3xl'>Create new artist</h1>
    <form action="{{ route('artists.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="border border-gray-900 rounded-xl p-2">
        </div>

        <div>
            <button type='submit' class='px-4 py-3 bg-sky-300 rounded-lg transition-all hover:scale-105 hover:cursor-pointer'>Add Artist!</button>
        </div>
    </form>

@endsection


@extends('layouts.main')

@section('content')
    <section class="container mx-auto w-[80%]">
        <h1 class='text-2xl my-4'>
            Artist List
        </h1>

        <form action="{{ route('artists.update'), ['artist' => $artist] }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="" value="{{old('name', $artist->name)}}">
            </div>
            <div>
                <button type='submit' class='px-4 py-3 bg-sky-300 rounded-lg transition-all hover:scale-105 hover:cursor-pointer'>Update Artist!</button>
            </div>
        </form>
    </section>

@endsection

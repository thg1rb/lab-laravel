@extends('layouts.main')

@section('content')
    <section class='flex flex-col gap-y-10 mx-auto w-[80%]'>
        <h1 class='mb-10 font-bold text-2xl text-center'>Artist Detail</h1>

        @can('update', $artist)
            <a href="{{ route('artists.edit', ['artist' => $artist]) }}">Edit Artist</a>
        @endcan

        @can('delete', $artist)
            <form onsubmit="return confirm('Are you sure?')" action="{{ route('artists.destroy', ['artist' => $artist]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Button</button>
            </form>
        @endcan

        <div class='flex flex-col justify-center items-center gap-y-2'>
            <img src="{{$artist->image_path}}" alt="artist_image">
            <p class='text-lg'><span class='font-bold'>Artist Name: </span>{{$artist->name}}</p>
        </div>
        <hr>
        <div class='flex flex-col justify-center items-center gap-y-5'>
            <h2 class='font-semibold text-xl text-center'>Songs</h2>
            <ul>
                @foreach ($artist->songs as $song)
                    <li class='text-md'><span class='font-semibold'>Song: </span>{{$song->title}} (<span<span class='font-semibold'>Duration: </span>{{$song->duration}} s.)</span></li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection

@extends('layouts.main')

@section('content')
    <section class="container mx-auto w-[80%]">
        <h1 class='text-2xl my-4'>
            Artist List
        </h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <th>{{$artist->image_path}}</th>
                        <th>
                            <a href="{{ route('artists.show', ['artist' => $artist] ) }}">{{$artist->name}}</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection

@extends('layouts.main')

@section('content')
    <div class="flex flex-col justify-center items-center gap-y-10">
        <h1 class="font-bold text-4xl text-center text-zinc-800">
            Professor List
        </h1>
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-5">
            @foreach ($professors as $professor)
                <a href="/professors/{{$professor['id']}}" class="bg-white hover:text-white hover:bg-red-600 border hover:border-0 p-4 rounded-lg transition-all hover:scale-105 shadow-md hover:shadow-lg cursor-pointer">
                    <h2 class="font-bold">ID: {{ $professor['id'] }}</h2>
                    <p>Name: {{ $professor['name'] }}</p>
                    <p>Department: {{ $professor['dept'] }}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection

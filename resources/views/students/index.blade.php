@extends('layouts.main')

@section('content')
    <div class="flex flex-col justify-center items-center gap-y-10">
        <h1 class="font-bold text-4xl text-center text-zinc-800">
            Student List
        </h1>
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-5">
            @foreach ($students as $student)
                <a href="/students/{{$student['id']}}" class="bg-white hover:text-white hover:bg-purple-600 border hover:border-0 p-4 rounded-lg transition-all hover:scale-105 shadow-md hover:shadow-lg cursor-pointer">
                    <h2 class="font-bold">ID: {{ $student['id'] }}</h2>
                    <p>Name: {{ $student['name'] }}</p>
                    <p>Department: {{ $student['dept'] }}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection

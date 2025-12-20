@extends('layouts.main')

@section('content')
    <div class="flex flex-col justify-center items-center gap-y-10">
        <h1 class="font-bold text-4xl text-center text-zinc-800">
            Professor Detail
        </h1>
        <div class="w-full flex flex-col gap-y-5">
            <a href="/students" class="inline-block mt-4 text-purple-600 hover:text-purple-800">
                ← Back to Student List
            </a>
            <div class="flex flex-col">
                <h2 class="font-bold text-2xl text-zinc-800">ID: <span class="text-blue-600">{{ $student['id'] }}</span></h2>
                <p class="font-bold text-lg text-zinc-800">Name: <span class="text-blue-600">{{ $student['name'] }}</span></p>
                <p class="font-bold text-lg text-zinc-800">Department: <span class="text-blue-600">{{ $student['dept'] }}</span></p>
            </div>
        </div>
    </div>
@endsection

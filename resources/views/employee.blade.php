@extends('master')
@section('content')
    <main class="container mx-auto">
        <p class="mt-5">Hello, my name is {{ $params['name'] }}</p>

        <h2 class="text-5xl font-bold mt-8">My history</h2>

        <p class="mt-5">Lorem, ipsum dolor sit amet consectetur !</p>
        <div class="flex items-center justify-start gap-2">
            <a href="{{ $params['github'] }}"
                class="border-black border-2 border-solid rounded mt-14 px-16 py-2 text-gray-500 font-bold">Github</a>
            <a href="{{ $params['linkedin'] }}"
                class="border-black border-2 border-solid rounded mt-14 px-16 py-2 text-gray-500 font-bold">Linkedin</a>
        </div>
    </main>
@endsection
